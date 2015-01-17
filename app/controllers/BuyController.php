<?php

class BuyController extends AdminController {

    public function __construct()
    {
        parent::__construct();

        $this->controller_name = str_replace('Controller', '', get_class());

        //$this->crumb = new Breadcrumb();
        //$this->crumb->append('Home','left',true);
        //$this->crumb->append(strtolower($this->controller_name));

        $this->model = new Buyer();
        //$this->model = DB::collection('documents');

        $this->title = 'Buy';


    }

    public function getPlaylist($id){

        Breadcrumbs::addCrumb('Buy Playlist & Album',URL::to('settings'));

        return View::make('buy.playlist');
    }

    public function getMedia($id){

        Breadcrumbs::addCrumb('Buy Music & Movie',URL::to('settings'));

        $media = Media::find($id);

        return View::make('buy.media')->with('m', $media);
    }

    public function postMedia(){
        $mediaId = Input::get('mediaId');

        $media = Media::find($mediaId);



        Breadcrumbs::addCrumb('Buy Music & Movie',URL::to('buy/point'));

        $ownership = Ownership::where('userId', Auth::user()->_id)->where('mediaId',$mediaId)->first();

        if($ownership){
            return View::make('buy.result')
                ->with('resulthead','Item already bought')
                ->with('resultbody','you have already bought and own this item, enjoy.');
        }else{
            $item = array(
                    'userId'=>Auth::user()->_id,
                    'mediaId'=>$mediaId,
                    'media'=>$media->toArray(),
                    'createdDate'=>new MongoDate()
                );

            $iid = Ownership::insertGetId($item);

            Ks::spendCredit($media->price, $mediaId);

            return View::make('buy.result')
                ->with('resulthead','Transaction Success')
                ->with('resultbody','This item successfully saved in your library');
        }

    }


    public function getPoint(){
        Breadcrumbs::addCrumb('Top Up Credit Point',URL::to('settings'));

        return View::make('buy.point');
    }

    public function postPoint(){
        $vcode = Input::get('vcode');
        $vcode = strtolower($vcode);
        $voucher = Voucher::where('code',$vcode)->where('status','available')->first();

        Breadcrumbs::addCrumb('Top Up Credit Point',URL::to('buy/point'));

        if($voucher){
            $voucher->status = 'sold';
            $voucher->buyerId = Auth::user()->_id;
            $voucher->buyerName = Auth::user()->fullname;
            $voucher->save();

            $topup = array(
                'userId'=>Auth::user()->_id,
                'userName'=>Auth::user()->fullname,
                'amount'=> new MongoInt32($voucher->value),
                'createdDate'=>new MongoDate(),
                'payment'=>'voucher',
                'status'=>'paid',
                'noteId'=>$voucher->_id
            );

            Topup::insert($topup);

            Ks::addCredit($voucher->value);

            return View::make('buy.result')
                ->with('resulthead','Transaction Success')
                ->with('resultbody','Your credit point has been topped up, thank you.');
        }else{
            return View::make('buy.result')
                ->with('resulthead','Transaction Fail')
                ->with('resultbody','Your voucher code is incorrect or already used.');
        }

    }

}