<?php

class AjaxController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | The Default Controller
    |--------------------------------------------------------------------------
    |
    | Instead of using RESTful routes and anonymous functions, you might wish
    | to use controllers to organize your application API. You'll love them.
    |
    | This controller responds to URIs beginning with "home", and it also
    | serves as the default controller for the application, meaning it
    | handles requests to the root of the application.
    |
    | You can respond to GET requests to "/home/profile" like so:
    |
    |       public function action_profile()
    |       {
    |           return "This is your profile!";
    |       }
    |
    | Any extra segments are passed to the method as parameters:
    |
    |       public function action_profile($id)
    |       {
    |           return "This is the profile for user {$id}.";
    |       }
    |
    */

    public function __construct(){

    }

    public function getIndex()
    {
    }

    public function postIndex()
    {

    }

    public function postFeed()
    {

        $media = Media::orderBy('createdDate','desc')->take(10)->skip($page * 10)->get()->toArray();

        $stream = '';
        foreach($media as $m){
            $stream .= View::make('mediaview.'.$m['mediatype'])->with($m)->render();
        }

        return Response::make($stream);
    }

    public function postListen()
    {
        $type = Input::get('mediatype');
        $title = Input::get('mediatitle');
        $id = Input::get('mediaid');
        $msg = Input::get('message');
        if($id == ''){
            $data['title'] = $title;
            $data['defaultmedia']['fileurl'] = '';
            $data['defaultpic']['medium_url'] = '';
            $data['mediatype'] = 'music';
        }else{
            $data = Media::find($id);
        }

        Feedpost::add('listen', $id, array(
            'message'=>($msg != '')?$msg:'',
            'mediaTitle'=>$data['title'],
            'mediaType'=>$data['mediatype'],
            'mediaUrl'=>$data['defaultmedia']['fileurl'],
            'coverUrl'=>$data['defaultpic']['medium_url'],
            'originatorName'=>Auth::user()->fullname,
            'comments'=>array() ));
        return Response::json(array('result'=>'OK'));
    }

    public function postShareplaylist()
    {
        $title = Input::get('playlisttitle');
        $msg = Input::get('message');
        $medialist = Input::get('medialist');
        $id = Input::get('playlistid');


        if($id == ''){
            $playlist = array(
                    'title'=>$title,
                    'message'=>$msg,
                    'ownerId'=>Auth::user()->_id,
                    'ownerName'=>Auth::user()->fullname,
                    'media'=>$medialist
                );

            $pid = Playlist::insertGetId($playlist);

        }else{
            $pid = $id;
        }

        if(count($medialist) > 0){
            $first = Media::find($medialist[0]);
            $coverUrl = $first['defaultpic']['medium_url'];
        }else{
            $coverUrl = '';
        }

        Feedpost::add('playlist', $id, array(
            'message'=>($msg != '')?$msg:'',
            'mediaTitle'=>$title,
            'mediaType'=>'playlist',
            'mediaUrl'=>$pid,
            'coverUrl'=>$coverUrl,
            'media'=>$medialist,
            'originatorName'=>Auth::user()->fullname,
            'comments'=>array() ));
        return Response::json(array('result'=>'OK'));
    }

    public function postSaveplaylist()
    {
        $title = Input::get('playlisttitle');
        $msg = Input::get('message');
        $medialist = Input::get('medialist');

        $playlist = array(
                'title'=>$title,
                'message'=>$msg,
                'ownerId'=>Auth::user()->_id,
                'ownerName'=>Auth::user()->fullname,
                'media'=>$medialist
            );

        $pid = Playlist::insertGetId($playlist);

        return Response::json(array('result'=>'OK', 'id'=>$pid));
    }


    public function postNewsfeed()
    {

        $lastrefresh = Input::get('lastrefresh');

        $l = Carbon::createFromTimeStamp($lastrefresh, 'Asia/Jakarta')->toDateTimeString();

        $mlast = new MongoDate(strtotime($l));

        $media = Feed::where( 'timestamp', '>', $mlast )
            ->orderBy('timestamp','desc')
            ->get();

        $stream = '';

        foreach($media as $m){
            $stream .= View::make('feeddisplay.'.$m['type'])->with('f',$m)->render();
        }

        print $stream;
    }

    public function postMyfeed()
    {
        $lastrefresh = Input::get('lastrefresh');

        $l = Carbon::createFromTimeStamp($lastrefresh, 'Asia/Jakarta')->toDateTimeString();

        $mlast = new MongoDate(strtotime($l));

        $media = Feed::where( 'timestamp', '>', $mlast )
            ->where('originatorId',Auth::user()->_id)
            ->orderBy('timestamp','desc')
            ->get();

        $stream = '';

        foreach($media as $m){
            $stream .= View::make('feeddisplay.'.$m['type'])->with('f',$m)->render();
        }

        print $stream;
    }

    public function postLike()
    {
        $in = Input::get();

        $itemid = $in['itemid'];

        $mode = $in['mode'];

        if(isset(Auth::user()->_id)){

            $uid = Auth::user()->_id;

            Feedpost::like($mode, $uid, $itemid);

            $count = Feedpost::getLikeCount($itemid);

            return Response::json(array('result'=>'OK', 'count'=>$count));

        }else{

            return Response::json(array(
                    'result'=>'ERR::NOAUTH'
                ));

        }


    }

    public function postComment()
    {
        $in = Input::get();

        $itemid = $in['itemid'];

        $comment = $in['comment'];

        if(isset(Auth::user()->_id)){

            $uid = Auth::user()->_id;

            $comment = Feedpost::putComment($uid, $itemid, $comment);
            $comment['avatar'] = Feedpost::getAvatar($uid);
            $comment['commenter'] = Feedpost::getUserName($uid);
            return Response::json(array(
                    'result'=>'OK',
                    'comment'=>$comment
                ));
        }else{
            return Response::json(array(
                    'result'=>'ERR::NOAUTH'
                ));
        }
    }

    public function postShare()
    {
        $data = Input::get();

        $defaults = array();

        $files = array();

        if( isset($data['file_id']) && count($data['file_id'])){

            $data['defaultpic'] = (isset($data['defaultpic']))?$data['defaultpic']:$data['file_id'][0];
            $data['brchead'] = (isset($data['brchead']))?$data['brchead']:$data['file_id'][0];
            $data['brc1'] = (isset($data['brc1']))?$data['brc1']:$data['file_id'][0];
            $data['brc2'] = (isset($data['brc2']))?$data['brc2']:$data['file_id'][0];
            $data['brc3'] = (isset($data['brc3']))?$data['brc3']:$data['file_id'][0];

            for($i = 0 ; $i < count($data['thumbnail_url']);$i++ ){

                if($data['defaultpic'] == $data['file_id'][$i]){
                    $defaults['thumbnail_url'] = $data['thumbnail_url'][$i];
                    $defaults['large_url'] = $data['large_url'][$i];
                    $defaults['medium_url'] = $data['medium_url'][$i];
                    $defaults['full_url'] = $data['full_url'][$i];
                }

                $files[$data['file_id'][$i]]['thumbnail_url'] = $data['thumbnail_url'][$i];
                $files[$data['file_id'][$i]]['large_url'] = $data['large_url'][$i];
                $files[$data['file_id'][$i]]['medium_url'] = $data['medium_url'][$i];
                $files[$data['file_id'][$i]]['full_url'] = $data['full_url'][$i];

                $files[$data['file_id'][$i]]['delete_type'] = $data['delete_type'][$i];
                $files[$data['file_id'][$i]]['delete_url'] = $data['delete_url'][$i];
                $files[$data['file_id'][$i]]['filename'] = $data['filename'][$i];
                $files[$data['file_id'][$i]]['filesize'] = $data['filesize'][$i];
                $files[$data['file_id'][$i]]['temp_dir'] = $data['temp_dir'][$i];
                $files[$data['file_id'][$i]]['filetype'] = $data['filetype'][$i];
                $files[$data['file_id'][$i]]['fileurl'] = $data['fileurl'][$i];
                $files[$data['file_id'][$i]]['file_id'] = $data['file_id'][$i];
                $files[$data['file_id'][$i]]['caption'] = $data['caption'][$i];
            }
        }else{
            $data['thumbnail_url'] = array();
            $data['large_url'] = array();
            $data['medium_url'] = array();
            $data['full_url'] = array();
            $data['delete_type'] = array();
            $data['delete_url'] = array();
            $data['filename'] = array();
            $data['filesize'] = array();
            $data['temp_dir'] = array();
            $data['filetype'] = array();
            $data['fileurl'] = array();
            $data['file_id'] = array();
            $data['caption'] = array();

            $data['defaultpic'] = '';
        }

        $data['defaultpictures'] = $defaults;
        $data['files'] = $files;


        $data['ownerId'] = Auth::user()->_id;
        $data['ownerName'] = Auth::user()->fullname;
        $data['ownerEmail'] = Auth::user()->_id;

        $data['createdDate'] = new MongoDate();
        $data['lastUpdate'] = new MongoDate();

        if( Media::insert($data) ){
            return Response::json(array('result'=>'OK'));
        }else{
            return Response::json(array('result'=>'NOK'));
        }
    }

    public function postScan()
    {
        $in = Input::get();

        $code = $in['txtin'];
        $outlet_id = $in['outlet_id'];
        $use_outlet = $in['search_outlet'];
        $action = strtolower( $in['action'] );

        $outlets = Prefs::getOutlet()->OutletToSelection('_id', 'name', false);

        $outlet_name = $outlets[$outlet_id];

        $res = 'OK';
        $msg = '';

        if(strripos($code, '|')){
            $code = explode('|', $code);
            $SKU = $code[0];
            $unit_id = $code[1];
        }else{
            $SKU = trim($code);
            $unit_id = null;
        }

        switch($action){
            case 'sell':
                if(is_null($unit_id)){
                    $res = 'NOK';
                    $msg = 'SKU: '.$SKU.' <br />Unit ID: NOT FOUND';
                    break;
                }
                $u = Stockunit::where('SKU','=', $SKU)
                    ->where('_id', 'like', '%'.$unit_id )
                    ->first();

                if($u){

                    $ul = $u->toArray();

                    $ul['scancheckDate'] = new MongoDate();
                    $ul['createdDate'] = new MongoDate();
                    $ul['lastUpdate'] = new MongoDate();
                    $ul['action'] = $action;
                    $ul['status'] = 'sold';
                    $ul['deliverTo'] = $outlet_name;
                    $ul['deliverToId'] = $outlet_id;
                    $ul['returnTo'] = $outlet_name;
                    $ul['returnToId'] = $outlet_id;

                    $unit_id = $ul['_id'];

                    unset($ul['_id']);

                    $ul['unitId'] = $unit_id;

                    Stockunitlog::insert($ul);

                    $history = array(
                        'datetime'=>new MongoDate(),
                        'action'=>$action,
                        'price'=>$ul['productDetail']['priceRegular'],
                        'status'=>$ul['status'],
                        'outletName'=>$ul['outletName']
                    );

                    //change status to sold
                    $u->status = 'sold';
                    $u->push('history', $history);

                    $u->save();

                    $res = 'OK';
                    $msg = 'SKU: '.$ul['SKU'].' <br />Unit ID: '.$unit_id.' <br />Outlet: '.$ul['outletName'];

                }else{
                    $res = 'NOK';
                    $msg = 'SKU: '.$SKU.' <br />Unit ID: '.$unit_id.' <br />NOT FOUND in this outlet';
                }

                break;
            case 'check':
                    if(is_null($unit_id)){
                        $res = 'NOK';
                        $msg = 'SKU: '.$SKU.' <br />Unit ID: NOT FOUND';
                        break;
                    }

                    $u = Stockunit::where('SKU','=', $SKU)
                        ->where('_id', 'like', '%'.$unit_id )
                        ->first();

                    if($u){

                        $ul = $u->toArray();

                        $ul['scancheckDate'] = new MongoDate();
                        $ul['createdDate'] = new MongoDate();
                        $ul['lastUpdate'] = new MongoDate();
                        $ul['action'] = $action;
                        $ul['deliverTo'] = $outlet_name;
                        $ul['deliverToId'] = $outlet_id;
                        $ul['returnTo'] = $outlet_name;
                        $ul['returnToId'] = $outlet_id;

                        $unit_id = $ul['_id'];

                        unset($ul['_id']);

                        $ul['unitId'] = $unit_id;

                        Stockunitlog::insert($ul);

                        $history = array(
                            'datetime'=>new MongoDate(),
                            'action'=>$action,
                            'price'=>$ul['productDetail']['priceRegular'],
                            'status'=>$ul['status'],
                            'outletName'=>$ul['outletName']
                        );

                        $u->push('history', $history);

                        $u->save();

                        $res = 'OK';
                        $msg = 'SKU: '.$ul['SKU'].' <br />Unit ID: '.$unit_id.' <br />Outlet: '.$ul['outletName'];

                    }else{
                        $res = 'NOK';
                        $msg = 'SKU: '.$SKU.' <br />Unit ID: '.$unit_id.' <br />NOT FOUND in this outlet';
                    }

                break;
            case 'deliver':
                    if(is_null($unit_id)){
                        $res = 'NOK';
                        $msg = 'SKU: '.$SKU.' <br />Unit ID: NOT FOUND';
                        break;
                    }

                    $u = Stockunit::where('SKU','=', $SKU)
                        ->where('_id', 'like', '%'.$unit_id )
                        ->first();

                    if($u){

                        $ul = $u->toArray();

                        $ul['scancheckDate'] = new MongoDate();
                        $ul['createdDate'] = new MongoDate();
                        $ul['lastUpdate'] = new MongoDate();
                        $ul['action'] = $action;
                        $ul['deliverTo'] = $outlet_name;
                        $ul['deliverToId'] = $outlet_id;
                        $ul['returnTo'] = $outlet_name;
                        $ul['returnToId'] = $outlet_id;

                        $unit_id = $ul['_id'];

                        unset($ul['_id']);

                        $ul['unitId'] = $unit_id;

                        Stockunitlog::insert($ul);

                        $history = array(
                            'datetime'=>new MongoDate(),
                            'action'=>$action,
                            'price'=>$ul['productDetail']['priceRegular'],
                            'status'=>$ul['status'],
                            'outletName'=>$ul['outletName'],
                            'deliverTo'=>$outlet_name,
                            'deliverToId'=>$outlet_id
                        );

                        $u->push('history', $history);

                        $u->outletId = $outlet_id;
                        $u->outletName = $outlet_name;

                        $u->save();

                        $res = 'OK';
                        $msg = 'SKU: '.$ul['SKU'].' <br />Unit ID: '.$unit_id.' <br />Outlet: '.$ul['outletName'];

                    }else{
                        $res = 'NOK';
                        $msg = 'SKU: '.$SKU.' <br />Unit ID: '.$unit_id.' <br />NOT FOUND in this outlet';
                    }

                break;
            case 'return':
                    if(is_null($unit_id)){
                        $res = 'NOK';
                        $msg = 'SKU: '.$SKU.' <br />Unit ID: NOT FOUND';
                        break;
                    }

                    $u = Stockunit::where('SKU','=', $SKU)
                        ->where('_id', 'like', '%'.$unit_id )
                        ->first();

                    if($u){

                        $ul = $u->toArray();

                        $ul['scancheckDate'] = new MongoDate();
                        $ul['createdDate'] = new MongoDate();
                        $ul['lastUpdate'] = new MongoDate();
                        $ul['action'] = $action;
                        $ul['deliverTo'] = $outlet_name;
                        $ul['deliverToId'] = $outlet_id;
                        $ul['returnTo'] = $outlet_name;
                        $ul['returnToId'] = $outlet_id;

                        $unit_id = $ul['_id'];

                        unset($ul['_id']);

                        $ul['unitId'] = $unit_id;

                        Stockunitlog::insert($ul);

                        $history = array(
                            'datetime'=>new MongoDate(),
                            'action'=>$action,
                            'price'=>$ul['productDetail']['priceRegular'],
                            'status'=>$ul['status'],
                            'outletName'=>$ul['outletName'],
                            'returnTo'=>$outlet_name,
                            'returnToId'=>$outlet_id
                        );

                        $u->push('history', $history);

                        $u->outletId = $outlet_id;
                        $u->outletName = $outlet_name;

                        $u->save();

                        $res = 'OK';
                        $msg = 'SKU: '.$ul['SKU'].' <br />Unit ID: '.$unit_id.' <br />Outlet: '.$ul['outletName'];

                    }else{
                        $res = 'NOK';
                        $msg = 'SKU: '.$SKU.' <br />Unit ID: '.$unit_id.' <br />NOT FOUND in this outlet';
                    }

                break;
            default:
                break;
        }

        $result = array(
            'result'=>$res,
            'msg'=>$msg
        );

        return Response::json($result);
    }


    public function postScancheck()
    {
        $in = Input::get();

        $code = $in['txtin'];
        $outlet_id = $in['outlet_id'];
        $use_outlet = $in['search_outlet'];

        $res = 'OK';


        if(strripos($code, '|')){
            $code = explode('|', $code);
            $SKU = $code[0];
            $unit_id = $code[1];

                if($use_outlet == 1){
                    $u = Stockunit::where('outletId','=', $outlet_id)
                        ->where('SKU','=', $SKU)
                        ->where('_id', 'like', '%'.$unit_id )
                        ->first();
                }else{
                    $u = Stockunit::where('SKU','=', $SKU)
                        ->where('_id', 'like', '%'.$unit_id )
                        ->first();
                }

            if($u){

                $ul = $u->toArray();

                $ul['scancheckDate'] = new MongoDate();
                $ul['createdDate'] = new MongoDate();
                $ul['lastUpdate'] = new MongoDate();

                $unit_id = $ul['_id'];

                unset($ul['_id']);

                $ul['unitId'] = $unit_id;

                Stockunitlog::insert($ul);

                $history = array(
                    'datetime'=>new MongoDate(),
                    'action'=>'scan',
                    'price'=>$ul['productDetail']['priceRegular'],
                    'status'=>$ul['status'],
                    'outletName'=>$ul['outletName']
                );

                $u->push('history', $history);

                $res = 'OK';
                $msg = 'SKU: '.$ul['SKU'].' <br />Unit ID: '.$unit_id.' <br />Outlet: '.$ul['outletName'];

            }else{
                $res = 'NOK';
                $msg = 'SKU: '.$SKU.' <br />Unit ID: '.$unit_id.' <br />NOT FOUND in this outlet';
            }

        }else{
            $SKU = trim($code);

            if($use_outlet){
                $u = Stockunit::where('outletId','=',$outlet_id)
                    ->where('SKU','=',$SKU)
                    ->first();
            }else{
                $u = Stockunit::where('SKU','=',$SKU)
                    ->first();
            }


            if($u){


                $ul = $u->toArray();

                $ul['scancheckDate'] = new MongoDate();
                $ul['createdDate'] = new MongoDate();
                $ul['lastUpdate'] = new MongoDate();

                $unit_id = $ul['_id'];

                unset($ul['_id']);

                $ul['unitId'] = $unit_id;

                Stockunitlog::insert($ul);

                $history = array(
                    'datetime'=>new MongoDate(),
                    'action'=>'scan',
                    'price'=>$ul['productDetail']['priceRegular'],
                    'status'=>$ul['status'],
                    'outletName'=>$ul['outletName']
                    );

                $u->push('history', $history);

                $res = 'OK';
                $msg = 'SKU: '.$ul['SKU'].' <br />Unit ID: '.$unit_id.' <br />Outlet: '.$ul['outletName'];

            }else{
                $res = 'NOK';
                $msg = 'SKU: '.$SKU.' <br />Unit ID: '.$unit_id.' <br />NOT FOUND in this outlet';
            }

        }


        $result = array(
            'result'=>$res,
            'msg'=>$msg
        );

        return Response::json($result);
    }

    public function postUpdateinventory(){
        $in = Input::get();

        //$id = $in['upinv_id'];

        //$unitdata = array_merge(array('id'=>$id),$in);

        //$this->updateStock($unitdata);
        $in['id'] = new MongoId($in['id']);

        Commerce::updateStock($in);

        return Response::json(array('result'=>'OK:UPDATED' ));
    }

    public function postInventoryinfo(){
        $pid = Input::get('product_id');

        $p = Product::find($pid);

        foreach( Prefs::getOutlet()->OutletToArray() as $o){

            $av = Stockunit::where('outletId', $o->_id )
                    ->where('productId', new MongoId($pid) )
                    ->where('status','available')
                    ->count();

            $hd = Stockunit::where('outletId', $o->_id)
                    ->where('productId',new MongoId($pid))
                    ->where('status','hold')
                    ->count();

            $rsv = Stockunit::where('outletId', $o->_id)
                    ->where('productId',new MongoId($pid))
                    ->where('status','reserved')
                    ->count();

            $sld = Stockunit::where('outletId', $o->_id)
                    ->where('productId',new MongoId($pid))
                    ->where('status','sold')
                    ->count();

            $avail['stocks'][$o->_id]['available'] = $av;
            $avail['stocks'][$o->_id]['hold'] = $hd;
            $avail['stocks'][$o->_id]['reserved'] = $rsv;
            $avail['stocks'][$o->_id]['sold'] = $sld;
        }

        $html = View::make('partials.stockform')->with('formdata', $avail)->render();

        if($p){
            return Response::json(array('result'=>'OK:FOUND', 'html'=>$html ));
        }else{
            return Response::json(array('result'=>'ERR:NOTFOUND'));
        }


    }


    public function postProductinfo(){
        $pid = Input::get('product_id');

        $p = Product::find($pid);

        if($p){
            return Response::json(array('result'=>'OK:FOUND', 'data'=>$p->toArray() ));
        }else{
            return Response::json(array('result'=>'ERR:NOTFOUND'));
        }
    }

    public function postPrintdefault()
    {
        $in = Input::get();

        $_id = Auth::user()->id;

        $def = Printdefault::where('ownerId',$_id)->first();

        if($def){

        }else{
            $def = new Printdefault();
            $def['ownerId'] = Auth::user()->id;
        }

        foreach($in as $k=>$v){
            $def[$k] = $v;
        }

        $def->save();

        return Response::json(array('result'=>'OK'));

    }

    public function postSessionsave($sessionname = null)
    {
        if(is_null($sessionname)){
            $sessionname = 'pr_'.time();
        }
        $in = Input::get('data_array');

        $in['_id'] = $sessionname;

        Printsession::insert($in);
        return Response::json(array('result'=>'OK', 'sessionname'=>$sessionname));
    }


    public function postProductpicture(){
        $data = Input::get();


        $defaults = array();

        $files = array();

        if( isset($data['file_id']) && count($data['file_id'])){

            $data['defaultpic'] = (isset($data['defaultpic']))?$data['defaultpic']:$data['file_id'][0];
            $data['brchead'] = (isset($data['brchead']))?$data['brchead']:$data['file_id'][0];
            $data['brc1'] = (isset($data['brc1']))?$data['brc1']:$data['file_id'][0];
            $data['brc2'] = (isset($data['brc2']))?$data['brc2']:$data['file_id'][0];
            $data['brc3'] = (isset($data['brc3']))?$data['brc3']:$data['file_id'][0];


            for($i = 0 ; $i < count($data['file_id']); $i++ ){


                $files[$data['file_id'][$i]]['thumbnail_url'] = $data['thumbnail_url'][$i];
                $files[$data['file_id'][$i]]['large_url'] = $data['large_url'][$i];
                $files[$data['file_id'][$i]]['medium_url'] = $data['medium_url'][$i];
                $files[$data['file_id'][$i]]['full_url'] = $data['full_url'][$i];

                $files[$data['file_id'][$i]]['delete_type'] = $data['delete_type'][$i];
                $files[$data['file_id'][$i]]['delete_url'] = $data['delete_url'][$i];
                $files[$data['file_id'][$i]]['filename'] = $data['filename'][$i];
                $files[$data['file_id'][$i]]['filesize'] = $data['filesize'][$i];
                $files[$data['file_id'][$i]]['temp_dir'] = $data['temp_dir'][$i];
                $files[$data['file_id'][$i]]['filetype'] = $data['filetype'][$i];
                $files[$data['file_id'][$i]]['fileurl'] = $data['fileurl'][$i];
                $files[$data['file_id'][$i]]['file_id'] = $data['file_id'][$i];
                $files[$data['file_id'][$i]]['caption'] = $data['caption'][$i];

                if($data['defaultpic'] == $data['file_id'][$i]){
                    $defaults['thumbnail_url'] = $data['thumbnail_url'][$i];
                    $defaults['large_url'] = $data['large_url'][$i];
                    $defaults['medium_url'] = $data['medium_url'][$i];
                    $defaults['full_url'] = $data['full_url'][$i];
                }

                if($data['brchead'] == $data['file_id'][$i]){
                    $defaults['brchead'] = $data['large_url'][$i];
                }

                if($data['brc1'] == $data['file_id'][$i]){
                    $defaults['brc1'] = $data['large_url'][$i];
                }

                if($data['brc2'] == $data['file_id'][$i]){
                    $defaults['brc2'] = $data['large_url'][$i];
                }

                if($data['brc3'] == $data['file_id'][$i]){
                    $defaults['brc3'] = $data['large_url'][$i];
                }


            }

        }else{

            $data['thumbnail_url'] = array();
            $data['large_url'] = array();
            $data['medium_url'] = array();
            $data['full_url'] = array();
            $data['delete_type'] = array();
            $data['delete_url'] = array();
            $data['filename'] = array();
            $data['filesize'] = array();
            $data['temp_dir'] = array();
            $data['filetype'] = array();
            $data['fileurl'] = array();
            $data['file_id'] = array();
            $data['caption'] = array();

            $data['defaultpic'] = '';
            $data['brchead'] = '';
            $data['brc1'] = '';
            $data['brc2'] = '';
            $data['brc3'] = '';
        }


        $data['defaultpictures'] = $defaults;
        $data['files'] = $files;

        $p = Product::find($data['upload_id']);

        $p->thumbnail_url =  $data['thumbnail_url'];
        $p->large_url =  $data['large_url'];
        $p->medium_url =  $data['medium_url'];
        $p->full_url =  $data['full_url'];
        $p->delete_type =  $data['delete_type'];
        $p->delete_url =  $data['delete_url'];
        $p->filename =  $data['filename'];
        $p->filesize =  $data['filesize'];
        $p->temp_dir =  $data['temp_dir'];
        $p->filetype =  $data['filetype'];
        $p->fileurl =  $data['fileurl'];
        $p->file_id =  $data['file_id'];
        $p->caption =  $data['caption'];
        $p->defaultpic =  $data['defaultpic'];
        $p->brchead =  $data['brchead'];
        $p->brc1 =  $data['brc1'];
        $p->brc2 =  $data['brc2'];
        $p->brc3 =  $data['brc3'];
        $p->defaultpictures =  $data['defaultpictures'];
        $p->files =  $data['files'];

        if($p->save()){
            return Response::json(array('result'=>'OK:UPLOADED' ));
        }else{
            return Response::json(array('result'=>'ERR:UPDATEFAILED' ));
        }

    }

    public function postAssignstatus(){
        $in = Input::get();

        $status = $in['status'];

        $product_ids = $in['product_ids'];

        foreach($product_ids as $p){
            $prop = Product::find($p);
            $prop->status = $status;
            $prop->save();
        }

        return Response::json(array('result'=>'OK'));

    }

    public function postAssigncat(){
        $in = Input::get();

        $category = $in['category'];

        $cats = Prefs::getProductCategory()->ProductCatToSelection('slug', 'title', false);

        $product_ids = $in['product_ids'];

        foreach($product_ids as $p){
            $prop = Product::find($p);
            $prop->category = $cats[$category];
            $prop->categoryLink = $category;
            $prop->save();
        }

        return Response::json(array('result'=>'OK'));

    }

    public function postAssignoutlet(){
        $in = Input::get();

        $category = $in['outlet'];

        $cats = Prefs::getOutlet()->OutletToSelection('name','_id',false);

        //print_r($cats);

        $product_ids = $in['product_ids'];

        foreach($product_ids as $p){
            $prop = Stockunit::find($p);
            $prop->outletId = $cats[$category];
            $prop->outletName = $category;
            $prop->save();
        }

        return Response::json(array('result'=>'OK'));

    }

    public function postUnassign(){
        $in = Input::get();

        $user_id = $in['user_id'];

        $prop_ids = $in['prop_ids'];

        foreach($prop_ids as $p){
            $prop = Property::find($p);

            if($prop){
                $prop->pull('assigned_user',$user_id);
                $prop->save();
            }

        }

        return Response::json(array('result'=>'OK'));

    }


    public function getPlaylist(){
        $mc = LMongo::collection('playlist');

        $video = $mc
            ->orderBy('sequence', 'asc')
            ->get();

        $playlist = array();

        foreach($video as $v){
            $playlist[] = array('file'=>$v['url']);
        }

        return Response::json($playlist);
    }

    public function getPush(){
        $lockfile = realpath('storage/lock').'/push';
        file_put_contents($lockfile, '1');
        return Response::json(array('push'=>1));
    }

    public function getChange(){
        $lockfile = realpath('storage/lock').'/push';

        $change = file_get_contents($lockfile);

        if($change == 1){
            file_put_contents($lockfile, '2');
            return Response::json(array('push'=>1));
        }else{
            return Response::json(array('push'=>0));
        }
    }

    public function getGenre()
    {
        $q = Input::get('term');

        $qtag = new MongoRegex('/'.$q.'/i');

        $res = Genre::where('title',$qtag)->distinct('title')->get();

        //print_r($res->toArray());

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r[0],'label'=>$r[0],'value'=>$r[0]);
        }

        return Response::json($result);
    }


    public function getTag()
    {
        $q = Input::get('term');

        $qtag = new MongoRegex('/'.$q.'/i');

        $res = Tag::where('tag',$qtag)->distinct('tag')->get();

        //print_r($res->toArray());

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r[0],'label'=>$r[0],'value'=>$r[0]);
        }

        return Response::json($result);
    }


    public function getProduct()
    {
        $q = Input::get('term');

        $mreg = new MongoRegex('/'.$q.'/i');

        $res = Product::where('SKU', 'regex', $mreg)
                    ->orWhere('itemDescription', 'regex', $mreg)
                    ->orWhere('series', 'regex', $mreg)
                    ->get()->toArray();

                    //print_r($res);

        $result = array();

        foreach($res as $r){
            //print_r($r);

            if(isset($r['defaultpictures']['thumbnail_url'])){
                $display = HTML::image( $r['defaultpictures']['thumbnail_url'].'?'.time(),'thumb', array('id' => $r['_id']));
            }else{
                $display = HTML::image( URL::to('images/no-thumb.jpg').'?'.time(),'thumb', array('id' => $r['_id']));
            }

            $label = $display.' '.$r['SKU'].'-'.$r['itemDescription'];
            $result[] = array('id'=>$r['_id'],'value'=>$r['SKU'],'link'=>$r['SKU'],'pic'=>$display,'description'=>$r['itemDescription'],'label'=>$label);
        }

        return Response::json($result);
    }

    public function getProductplain()
    {
        $q = Input::get('term');

        $user = new Product();
        $qemail = new MongoRegex('/'.$q.'/i');

        $res = $user->find(array('$or'=>array(array('name'=>$qemail),array('description'=>$qemail)) ));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['permalink'],'description'=>$r['description'],'label'=>$r['name']);
        }

        return Response::json($result);
    }

    public function getEmail()
    {
        $q = Input::get('term');

        $user = new User();
        $qemail = new MongoRegex('/'.$q.'/i');

        $res = $user->find(array('$or'=>array(array('email'=>$qemail),array('fullname'=>$qemail)) ),array('email','fullname'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['email'],'name'=>$r['fullname'],'label'=>$r['fullname'].' ( '.$r['email'].' )');
        }

        return Response::json($result);
    }

    public function getUser()
    {
        $q = Input::get('term');

        $user = new User();
        $qemail = new MongoRegex('/'.$q.'/i');

        $res = $user->find(array('$or'=>array(array('email'=>$qemail),array('fullname'=>$qemail)) ),array('email','fullname'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['fullname'],'email'=>$r['email'],'label'=>$r['fullname'].' ( '.$r['email'].' )');
        }

        return Response::json($result);
    }

    public function getMedia()
    {
        $q = Input::get('term');

        $user = new Media();
        $query = new MongoRegex('/'.$q.'/i');

        $res = Media::where('title', 'regex', $query)
                ->orWhere('artist', 'regex', $query)->get();

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id'],'value'=>$r['title'].' ( '.$r['artist'].' )','mediatype'=>$r['mediatype'],'pic'=>$r['defaultpic.thumbnail_url'],'label'=>$r['title'].' ( '.$r['artist'].' )');
        }

        return Response::json($result);
    }

    public function getGroup()
    {
        $q = Input::get('term');

        $user = new Group();
        $qemail = new MongoRegex('/'.$q.'/i');

        $res = $user->find(array('$or'=>array(array('email'=>$qemail),array('firstname'=>$qemail),array('lastname'=>$qemail)) ));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['groupname'],'email'=>$r['email'],'label'=>$r['groupname'].'<br />'.$r['firstname'].''.$r['lastname'].' ( '.$r['email'].' )<br />'.$r['company']);
        }

        return Response::json($result);
    }

    public function getUserdata()
    {
        $q = Input::get('term');

        $user = new User();
        $qemail = new MongoRegex('/'.$q.'/i');

        $res = $user->find(array('$or'=>array(array('email'=>$qemail),array('fullname'=>$qemail)) ));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['fullname'],'email'=>$r['email'],'label'=>$r['fullname'].' ( '.$r['email'].' )','userdata'=>$r);
        }

        return Response::json($result);
    }

    public function getUserdatabyemail()
    {
        $q = Input::get('term');

        $user = LMongo::collection('users');

        $qemail = new MongoRegex('/'.$q.'/i');



        $res = $user->whereRegex('username',$qemail)->orWhereRegex('fullname',$qemail)->get();

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['username'],'email'=>$r['username'],'label'=>$r['fullname'].' ( '.$r['username'].' )','userdata'=>$r);
        }

        return Response::json($result);
    }

    public function getUserdatabyname()
    {
        $q = Input::get('term');

        $user = LMongo::collection('users');

        $qemail = new MongoRegex('/'.$q.'/i');



        $res = $user->whereRegex('username',$qemail)->orWhereRegex('fullname',$qemail)->get();

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['fullname'],'email'=>$r['username'],'label'=>$r['fullname'].' ( '.$r['username'].' )','userdata'=>$r);
        }

        return Response::json($result);
    }

    public function getUseridbyemail()
    {
        $q = Input::get('term');

        $user = new User();
        $qemail = new MongoRegex('/'.$q.'/i');

        $res = $user->find(array('$or'=>array(array('email'=>$qemail),array('fullname'=>$qemail)) ));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'value'=>$r['_id']->__toString(),'email'=>$r['email'],'label'=>$r['fullname'].' ( '.$r['email'].' )');
        }

        return Response::json($result);
    }

    public function getRev()
    {
        $q = Input::get('term');

        $doc = new Document();
        $qdoc = new MongoRegex('/'.$q.'/i');

        $res = $doc->find(array('title'=>$qdoc),array('title'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'label'=>$r['title'],'value'=>$r['_id']->__toString());
        }

        return Response::json($result);
    }

    public function getProject()
    {
        $q = Input::get('term');

        $proj = new Project();
        $qproj = new MongoRegex('/'.$q.'/i');

        $res = $proj->find(array('$or'=>array(array('title'=>$qproj),array('projectNumber'=>$qproj)) ),array('title','projectNumber'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'label'=>$r['projectNumber'].' - '.$r['title'],'title'=>$r['title'],'value'=>$r['projectNumber']);
        }

        return Response::json($result);
    }

    public function getProjectname()
    {
        $q = Input::get('term');

        $proj = new Project();
        $qproj = new MongoRegex('/'.$q.'/i');

        $res = $proj->find(array('$or'=>array(array('title'=>$qproj),array('projectNumber'=>$qproj)) ),array('title','projectNumber'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'label'=>$r['projectNumber'].' - '.$r['title'],'number'=>$r['projectNumber'],'value'=>$r['title']);
        }

        return Response::json($result);
    }


    public function getTender()
    {
        $q = Input::get('term');

        $proj = new Tender();
        $qproj = new MongoRegex('/'.$q.'/i');

        $res = $proj->find(array('$or'=>array(array('title'=>$qproj),array('tenderNumber'=>$qproj)) ),array('title','tenderNumber'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'label'=>$r['tenderNumber'].' - '.$r['title'],'title'=>$r['title'],'value'=>$r['tenderNumber']);
        }

        return Response::json($result);
    }

    public function getTendername()
    {
        $q = Input::get('term');

        $proj = new Tender();
        $qproj = new MongoRegex('/'.$q.'/i');

        $res = $proj->find(array('$or'=>array(array('title'=>$qproj),array('tenderNumber'=>$qproj)) ),array('title','tenderNumber'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'label'=>$r['tenderNumber'].' - '.$r['title'],'number'=>$r['tenderNumber'],'value'=>$r['title']);
        }

        return Response::json($result);
    }

    public function getOpportunity()
    {
        $q = Input::get('term');

        $proj = new Opportunity();
        $qproj = new MongoRegex('/'.$q.'/i');

        $res = $proj->find(array('$or'=>array(array('title'=>$qproj),array('opportunityNumber'=>$qproj)) ),array('title','opportunityNumber'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'label'=>$r['opportunityNumber'].' - '.$r['title'],'title'=>$r['title'],'value'=>$r['opportunityNumber']);
        }

        return Response::json($result);
    }

    public function getOpportunityname()
    {
        $q = Input::get('term');

        $proj = new Opportunity();
        $qproj = new MongoRegex('/'.$q.'/i');

        $res = $proj->find(array('$or'=>array(array('title'=>$qproj),array('opportunityNumber'=>$qproj)) ),array('title','opportunityNumber'));

        $result = array();

        foreach($res as $r){
            $result[] = array('id'=>$r['_id']->__toString(),'label'=>$r['opportunityNumber'].' - '.$r['title'],'number'=>$r['opportunityNumber'],'value'=>$r['title']);
        }

        return Response::json($result);
    }

    public function getMeta()
    {
        $q = Input::get('term');

        $doc = new Document();
        $id = new MongoId($q);

        $res = $doc->get(array('_id'=>$id));

        return Response::json($result);
    }

    public function postParam()
    {
        $in = Input::get();

        $key = $in['key'];
        $value = $in['value'];

        if(setparam($key,$value)){
            return Response::json(array('result'=>'OK'));
        }else{
            return Response::json(array('result'=>'ERR'));
        }

    }

    public function fromCamelCase($camelCaseString) {
            $re = '/(?<=[a-z])(?=[A-Z])/x';
            $a = preg_split($re, $camelCaseString);
            return join($a, " " );
    }

}

