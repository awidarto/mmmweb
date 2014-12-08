<?php

class SettingsController extends AdminController {

    public function __construct()
    {
        parent::__construct();

        $this->controller_name = str_replace('Controller', '', get_class());

        //$this->crumb = new Breadcrumb();
        //Breadcrumb::addBreadcrumb('Home',URL::to('/'));
        //Breadcrumb::addBreadcrumb('Option', URL::to('option'));
        //Breadcrumb::setSeperator('');

        $this->model = new Option();
        //$this->model = DB::collection('documents');

    }

    public function getTest()
    {
        $raw = $this->model->where('docFormat','like','picture')->get();

        print $raw->toJSON();
    }


    public function getIndex()
    {
        Options::refresh();

        Breadcrumbs::addCrumb('Settings',URL::to('settings'));
        Breadcrumbs::addCrumb('Change Profile',URL::to('settings'));

        $user = Member::find(Auth::user()->_id);

        $active = (is_null(Input::get('tab')))?'profile':Input::get('tab');

        return View::make('settings.index')->with('user',$user)->with('active',$active);
    }

    public function postIndex()
    {
        $datain = Input::get();

        $validator = array(
            'firstname'    => 'required',
            'lastname'    => 'required',
            'email'    => 'required|email',
        );


        $validation = Validator::make($input = $datain, $validator);

        if($validation->fails()){

            return Redirect::to('settings')->withErrors($validation)->withInput(Input::all());

        }else{

            $user = Member::find(Auth::user()->_id);

                foreach($datain as $key=>$val){
                    $user->{$key} = $val;
                }

                $user->fullname = $user->firstname.' '.$user->lastname;
                $user->lastUpdate = new MongoDate();


            $user->save();



            /*
            $ev = Media::insertGetId($data);
            Feedpost::add('upload', $ev, array(
                'mediaTitle'=>$data['title'],
                'mediaType'=>$data['mediatype'],
                'mediaUrl'=>$data['defaultmedia']['fileurl'],
                'coverUrl'=>$data['defaultpic']['medium_url'],
                'originatorName'=>Auth::user()->fullname,
                'comments'=>array() ));
            */
            return Redirect::to('/');

        }


    }

    public function getPass()
    {

        Breadcrumbs::addCrumb('Settings',URL::to('settings'));
        Breadcrumbs::addCrumb('Change Password',URL::to('settings/pass'));

        $user = Member::find(Auth::user()->_id);

        $active = 'pass';

        return View::make('settings.index')->with('user',$user)->with('active',$active);
    }

    public function postPass()
    {
        $datain = Input::get();

        $validator = array(
            'password' => 'required|alphaNum|min:3|same:repass'
        );

        $validation = Validator::make($input = $datain, $validator);

        if($validation->fails()){

            return Redirect::to('settings/pass')->withErrors($validation)->withInput(Input::all());

        }else{

            unset($datain['repass']);
            $password = Hash::make($datain['password']);

            $user = Member::find(Auth::user()->_id);

            $user->password = $password;

            $user->save();

            /*
            $ev = Media::insertGetId($data);
            Feedpost::add('upload', $ev, array(
                'mediaTitle'=>$data['title'],
                'mediaType'=>$data['mediatype'],
                'mediaUrl'=>$data['defaultmedia']['fileurl'],
                'coverUrl'=>$data['defaultpic']['medium_url'],
                'originatorName'=>Auth::user()->fullname,
                'comments'=>array() ));
            */
            return Redirect::to('/');



        }


        //return Response::json($data);

    }


    public function getPhoto()
    {

        Breadcrumbs::addCrumb('Settings',URL::to('settings'));
        Breadcrumbs::addCrumb('Photo',URL::to('settings/photo'));

        $user = Member::find(Auth::user()->_id);

        $active = 'photo';

        return View::make('settings.index')->with('user',$user)->with('active',$active);
    }

    public function postPhoto()
    {
        $datain = Input::get();

        $validator = array(

        );


        $validation = Validator::make($input = $datain, $validator);

        if($validation->fails()){

            return Redirect::to('settings/photo')->withErrors($validation)->withInput(Input::all());

        }else{

            $photo = array();
            $avatar = '';

            if( isset($datain['file_id']) && count($datain['file_id'])){

                for($i = 0 ; $i < count($datain['thumbnail_url']);$i++ ){

                    $photo['role'] = $datain['role'][$i];
                    $photo['thumbnail_url'] = $datain['thumbnail_url'][$i];
                    $photo['large_url'] = $datain['large_url'][$i];
                    $photo['medium_url'] = $datain['medium_url'][$i];
                    $photo['full_url'] = $datain['full_url'][$i];
                    $photo['delete_type'] = $datain['delete_type'][$i];
                    $photo['delete_url'] = $datain['delete_url'][$i];
                    $photo['filename'] = $datain['filename'][$i];
                    $photo['filesize'] = $datain['filesize'][$i];
                    $photo['temp_dir'] = $datain['temp_dir'][$i];
                    $photo['filetype'] = $datain['filetype'][$i];
                    $photo['is_image'] = $datain['is_image'][$i];
                    $photo['is_audio'] = $datain['is_audio'][$i];
                    $photo['is_video'] = $datain['is_video'][$i];
                    $photo['fileurl'] = $datain['fileurl'][$i];
                    $photo['file_id'] = $datain['file_id'][$i];

                    $avatar = $photo['full_url'];

                }
            }

            $user = Member::find(Auth::user()->_id);

            $user->photo = $photo;
            $user->avatar = $avatar;

            $user->save();



            /*
            $ev = Media::insertGetId($data);
            Feedpost::add('upload', $ev, array(
                'mediaTitle'=>$data['title'],
                'mediaType'=>$data['mediatype'],
                'mediaUrl'=>$data['defaultmedia']['fileurl'],
                'coverUrl'=>$data['defaultpic']['medium_url'],
                'originatorName'=>Auth::user()->fullname,
                'comments'=>array() ));
            */
            return Redirect::to('/');



        }


        //return Response::json($data);

    }



    public function getAdd(){
        //Breadcrumb::addBreadcrumb('New Payable', 'add');
        //$this->crumb = Breadcrumb::generate();

        return parent::getAdd();
    }

    public function getEdit($id){
        //Breadcrumb::addBreadcrumb('Update Document', 'edit');
        //$this->crumb = Breadcrumb::generate();

        return parent::getEdit($id);
    }

    public function beforeUpdateForm($population)
    {
        return $population;
    }


    public function postDlxl()
    {

        $this->heads = null;

        $this->fields = array(
                array('SKU',array('kind'=>'text','query'=>'like','pos'=>'both','attr'=>array('class'=>'expander'),'show'=>true)),
                array('itemDescription',array('kind'=>'text','query'=>'like','pos'=>'both','attr'=>array('class'=>'expander'),'show'=>true)),
                array('series',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('itemGroup',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('category',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('L',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('W',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('H',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('D',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('colour',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('material',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('tags',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
                array('createdDate',array('kind'=>'datetime','query'=>'like','pos'=>'both','show'=>true)),
                array('lastUpdate',array('kind'=>'datetime','query'=>'like','pos'=>'both','show'=>true))
        );

        return parent::postDlxl();
    }

    public function getImport(){

        $this->importkey = 'SKU';

        return parent::getImport();
    }

    public function postUploadimport()
    {
        $this->importkey = 'SKU';

        return parent::postUploadimport();
    }

    public function beforeImportCommit($data)
    {
        $defaults = array();

        $files = array();

        // set new sequential ID


        $data['priceRegular'] = new MongoInt32($data['priceRegular']);

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


        $data['defaultpictures'] = array();
        $data['files'] = array();

        return $data;
    }


    public function makeActions($data)
    {
        $delete = '<span class="del" id="'.$data['_id'].'" ><i class="fa fa-trash"></i> Delete</span>';
        $edit = '<a href="'.URL::to('option/edit/'.$data['_id']).'"><i class="fa fa-edit"></i> Update</a>';
        $dl = '<a href="'.URL::to('brochure/dl/'.$data['_id']).'" target="new"><i class="fa fa-download"></i> Download</a>';
        $print = '<a href="'.URL::to('brochure/print/'.$data['_id']).'" target="new"><i class="fa fa-print"></i> Print</a>';
        $upload = '<span class="upload" id="'.$data['_id'].'" rel="'.$data['SKU'].'" ><i class="fa fa-upload"></i> Upload File</span>';

        $actions = $edit;
        return $actions;
    }

    public function extractCategory()
    {
        $category = Product::distinct('category')->get()->toArray();
        $cats = array(''=>'All');

        //print_r($category);
        foreach($category as $cat){
            $cats[$cat[0]] = $cat[0];
        }

        return $cats;
    }

    public function splitTag($data){
        $tags = explode(',',$data['docTag']);
        if(is_array($tags) && count($tags) > 0 && $data['docTag'] != ''){
            $ts = array();
            foreach($tags as $t){
                $ts[] = '<span class="tag">'.$t.'</span>';
            }

            return implode('', $ts);
        }else{
            return $data['docTag'];
        }
    }

    public function splitShare($data){
        $tags = explode(',',$data['docShare']);
        if(is_array($tags) && count($tags) > 0 && $data['docShare'] != ''){
            $ts = array();
            foreach($tags as $t){
                $ts[] = '<span class="tag">'.$t.'</span>';
            }

            return implode('', $ts);
        }else{
            return $data['docShare'];
        }
    }

    public function namePic($data)
    {
        $name = HTML::link('property/view/'.$data['_id'],$data['address']);

        $thumbnail_url = '';

        if(isset($data['files']) && count($data['files'])){
            $glinks = '';

            $gdata = $data['files'][$data['defaultpic']];

            $thumbnail_url = false;

            if(preg_match('/image/', $gdata['filetype'])){
                $thumbnail_url = $gdata['thumbnail_url'];
            }else{
                $thumbnail_url = URL::to('images/no-pic.jpg');
            }

            foreach($data['files'] as $g){
                if(preg_match('/image/', $g['filetype'])){
                    $g['caption'] = ($g['caption'] == '')?'':$g['caption'];
                    $g['full_url'] = isset($g['full_url'])?$g['full_url']:$g['fileurl'];
                    $glinks .= '<input type="hidden" class="g_'.$data['_id'].'" data-caption="'.$g['caption'].'" value="'.$g['full_url'].'" >';
                }
            }

            $display = HTML::image($thumbnail_url.'?'.time(), $thumbnail_url, array('class'=>'thumbnail img-polaroid','style'=>'cursor:pointer;','id' => $data['_id'])).$glinks;

            return $display;
        }else{
            return $data['SKU'];
        }
    }

    public function dispBar($data)

    {
        $display = HTML::image(URL::to('barcode/'.$data['SKU']), $data['SKU'], array('id' => $data['_id'], 'style'=>'width:100px;height:auto;' ));
        $display = '<a href="'.URL::to('barcode/dl/'.$data['SKU']).'">'.$display.'</a>';
        return $display.'<br />'.$data['SKU'];
    }


    public function pics($data)
    {
        $name = HTML::link('products/view/'.$data['_id'],$data['productName']);
        if(isset($data['thumbnail_url']) && count($data['thumbnail_url'])){
            $display = HTML::image($data['thumbnail_url'][0].'?'.time(), $data['filename'][0], array('style'=>'min-width:100px;','id' => $data['_id']));
            return $display.'<br /><span class="img-more" id="'.$data['_id'].'">more images</span>';
        }else{
            return $name;
        }
    }

    public function getViewpics($id)
    {

    }


}
