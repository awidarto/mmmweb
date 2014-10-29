<?php

class MediaController extends AdminController {

    public function __construct()
    {
        parent::__construct();

        $this->controller_name = str_replace('Controller', '', get_class());

        //$this->crumb = new Breadcrumb();
        //$this->crumb->append('Home','left',true);
        //$this->crumb->append(strtolower($this->controller_name));

        $this->title = $this->controller_name;

        $this->model = new Media();

    }

    public function getMymedia()
    {
        return View::make('media.mymedia');
    }

    public function getMystat()
    {
        return View::make('profile.statistic');
    }

    public function getIndex()
    {

        $this->heads = array(
            array('Media Title',array('search'=>true,'sort'=>true)),
            array('Artist',array('search'=>true,'sort'=>true)),
            array('Albums',array('search'=>true,'sort'=>true)),
            array('Genre',array('search'=>true,'sort'=>true)),
            array('Tags',array('search'=>true,'sort'=>true)),
            array('Owner',array('search'=>true,'sort'=>true)),
            array('Tags',array('search'=>true,'sort'=>true)),
            array('Last Update',array('search'=>true,'sort'=>true,'date'=>true)),
        );

        $this->place_action = 'first';

        $this->title = 'Submission';

        $this->can_add = true;

        //$this->additional_filter = View::make( strtolower($this->controller_name).'.addfilter')->render();

        //$this->js_additional_param = "aoData.push( { 'name':'agentFilter', 'value': $('#assigned-agent-filter').val() } );";


        return parent::getIndex();

    }

    public function postIndex()
    {

        $this->fields = array(
            array('title',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('artist',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('album',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true,'attr'=>array('class'=>'expander'))),
            array('genre',array('kind'=>'text','query'=>'like','callback'=>'splitGenre','pos'=>'both','show'=>true)),
            array('tags',array('kind'=>'text','query'=>'like','callback'=>'splitTag','pos'=>'both','show'=>true)),
            array('ownerName',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('tags',array('kind'=>'text','query'=>'like','pos'=>'both','callback'=>'splitTag','show'=>true)),
            array('lastUpdate',array('kind'=>'date','query'=>'like','pos'=>'both','show'=>true)),
        );

        $this->additional_query = array('status'=>'pending');

        return parent::postIndex();
    }

    public function postAdd($data = null)
    {

        $this->validator = array(
            'title' => 'required'
        );

        return parent::postAdd($data);
    }

    public function postEdit($id,$data = null)
    {
        $this->validator = array(
            'title' => 'required'
        );

        return parent::postEdit($id,$data);
    }

    public function postPost()
    {
        $datain = Input::get();

        $data['ownerId'] = Auth::user()->_id;
        $data['ownerName'] = Auth::user()->fullname;
        $data['status'] = 'pending';
        $data['title'] = $datain['title'];
        $data['artist'] = $datain['artist'];
        $data['mediatype'] = $datain['type'];
        $data['createdDate'] = new MongoDate();
        $data['lastUpdate'] = new MongoDate();
        $data['album'] = $datain['album'];
        $data['genre'] = $datain['genre'];
        $data['tags'] = $datain['tags'];
        $data['price'] = $datain['price'];


        $files = array();

        if( isset($datain['file_id']) && count($datain['file_id'])){

            for($i = 0 ; $i < count($datain['thumbnail_url']);$i++ ){



                if('cover' == $datain['role'][$i]){
                    $index = 'defaultpic';
                }else{
                    $index = 'defaultmedia';
                }

                $data[$index]['role'] = $datain['role'][$i];
                $data[$index]['thumbnail_url'] = $datain['thumbnail_url'][$i];
                $data[$index]['large_url'] = $datain['large_url'][$i];
                $data[$index]['medium_url'] = $datain['medium_url'][$i];
                $data[$index]['full_url'] = $datain['full_url'][$i];
                $data[$index]['delete_type'] = $datain['delete_type'][$i];
                $data[$index]['delete_url'] = $datain['delete_url'][$i];
                $data[$index]['filename'] = $datain['filename'][$i];
                $data[$index]['filesize'] = $datain['filesize'][$i];
                $data[$index]['temp_dir'] = $datain['temp_dir'][$i];
                $data[$index]['filetype'] = $datain['filetype'][$i];
                $data[$index]['is_image'] = $datain['is_image'][$i];
                $data[$index]['is_audio'] = $datain['is_audio'][$i];
                $data[$index]['is_video'] = $datain['is_video'][$i];
                $data[$index]['fileurl'] = $datain['fileurl'][$i];
                $data[$index]['file_id'] = $datain['file_id'][$i];

            }
        }else{

            $data['defaultpic'] = '';
            $data['defaultmedia'] = '';
        }

        Media::insert($data);

        return Response::json($data);

    }


    public function beforeSave($data)
    {

        $data['ownerId'] = Auth::user()->_id;
        $data['ownerName'] = Auth::user()->fullname;
        $data['status'] = 'pending';

        $defaults = array();
        $defaultmedias = array();

        $files = array();

        if( isset($data['file_id']) && count($data['file_id'])){

            if(!isset($data['defaultpic'])){
                $picexist = false;
                for($i = 0 ; $i < count($data['thumbnail_url']);$i++ ){
                    if($data['is_image'][$i] == 1 ){
                        $data['defaultpic'] = $data['file_id'][$i];
                        $picexist = true;
                    }
                }

                if(!$picexist){
                    $data['defaultpic'] = '';
                }
            }

            if(!isset($data['defaultmedia'])){
                $mediaexist = false;
                for($i = 0 ; $i < count($data['thumbnail_url']);$i++ ){
                    if($data['is_image'][$i] == 0 ){
                        $data['defaultmedia'] = $data['file_id'][$i];
                        $mediaexist = true;
                    }
                }

                if(!$mediaexist){
                    $data['defaultmedia'] = '';
                }
            }

            for($i = 0 ; $i < count($data['thumbnail_url']);$i++ ){

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
                $files[$data['file_id'][$i]]['is_image'] = $data['is_image'][$i];
                $files[$data['file_id'][$i]]['is_audio'] = $data['is_audio'][$i];
                $files[$data['file_id'][$i]]['is_video'] = $data['is_video'][$i];

                $files[$data['file_id'][$i]]['fileurl'] = $data['fileurl'][$i];
                $files[$data['file_id'][$i]]['file_id'] = $data['file_id'][$i];
                $files[$data['file_id'][$i]]['caption'] = $data['caption'][$i];

                if($data['defaultpic'] == $data['file_id'][$i]){
                    $defaults = $files[$data['file_id'][$i]];
                }

                if($data['defaultmedia'] == $data['file_id'][$i]){
                    $defaultmedias = $files[$data['file_id'][$i]];
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
            $data['defaultmedia'] = '';
        }

        $data['defaultpictures'] = $defaults;
        $data['defaultmedias'] = $defaultmedias;
        $data['files'] = $files;

        return $data;
    }

    public function beforeUpdate($id,$data)
    {

        $data['ownerId'] = Auth::user()->_id;
        $data['ownerName'] = Auth::user()->fullname;

        $defaults = array();
        $defaultmedias = array();

        $files = array();


        if( isset($data['file_id']) && count($data['file_id'])){

            if(!isset($data['defaultpic'])){
                $picexist = false;
                for($i = 0 ; $i < count($data['thumbnail_url']);$i++ ){
                    if($data['is_image'][$i] == 1 ){
                        $data['defaultpic'] = $data['file_id'][$i];
                        $picexist = true;
                    }
                }

                if(!$picexist){
                    $data['defaultpic'] = '';
                }
            }

            if(!isset($data['defaultmedia'])){
                $mediaexist = false;
                for($i = 0 ; $i < count($data['thumbnail_url']);$i++ ){
                    if($data['is_image'][$i] == 0 ){
                        $data['defaultmedia'] = $data['file_id'][$i];
                        $mediaexist = true;
                    }
                }

                if(!$mediaexist){
                    $data['defaultmedia'] = '';
                }
            }

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

                $files[$data['file_id'][$i]]['is_image'] = $data['is_image'][$i];
                $files[$data['file_id'][$i]]['is_audio'] = $data['is_audio'][$i];
                $files[$data['file_id'][$i]]['is_video'] = $data['is_video'][$i];

                $files[$data['file_id'][$i]]['fileurl'] = $data['fileurl'][$i];
                $files[$data['file_id'][$i]]['file_id'] = $data['file_id'][$i];
                $files[$data['file_id'][$i]]['caption'] = $data['caption'][$i];

                if($data['defaultpic'] == $data['file_id'][$i]){
                    $defaults = $files[$data['file_id'][$i]];
                }

                if($data['defaultmedia'] == $data['file_id'][$i]){
                    $defaultmedias = $files[$data['file_id'][$i]];
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
            $data['defaultmedia'] = '';
        }

        $data['defaultpictures'] = $defaults;
        $data['defaultmedias'] = $defaultmedias;
        $data['files'] = $files;

        return $data;
    }


    public function makeActions($data)
    {
        $change = '<span class="propchg act" data-status="'.$data['status'].'" rel="'.$data['_id'].'" id="'.$data['_id'].'" ><i class="icon-edit"></i> Change Status</span>';
        $delete = '<span class="del" id="'.$data['_id'].'" ><i class="icon-trash"></i>Delete</span>';
        $edit = '<a href="'.URL::to('submission/edit/'.$data['_id']).'"><i class="icon-edit"></i>Update</a>';

        $actions = $edit.'</br />'.$change.'<br />'.$delete;
        return $actions;
    }

    public function namePic($data)
    {
        $name = HTML::link('products/view/'.$data['_id'],$data['productName']);
        if(isset($data['thumbnail_url']) && count($data['thumbnail_url'])){
            $display = HTML::image($data['thumbnail_url'][0].'?'.time(), $data['filename'][0], array('id' => $data['_id']));
            return $display.'<br />'.$name;
        }else{
            return $name;
        }
    }

    public function pics($data)
    {
        $name = HTML::link('products/view/'.$data['_id'],$data['productName']);
        if(isset($data['thumbnail_url']) && count($data['thumbnail_url'])){
            $display = HTML::image($data['thumbnail_url'][0].'?'.time(), $data['filename'][0], array('style'=>'min-width:100px;','id' => $data['_id']));
            return $data['songTitle'].'<br />'.$display;
        }else{
            return $name;
        }
    }

    public function splitTag($data){
        $tags = explode(',',$data['tags']);
        if(is_array($tags) && count($tags) > 0 && $data['tags'] != ''){
            $ts = array();
            foreach($tags as $t){
                $ts[] = '<span class="tagitem">'.$t.'</span>';
            }

            return implode('', $ts);
        }else{
            return $data['tags'];
        }
    }

    public function splitGenre($data){
        $tags = explode(',',$data['genre']);
        if(is_array($tags) && count($tags) > 0 && $data['genre'] != ''){
            $ts = array();
            foreach($tags as $t){
                $ts[] = '<span class="tagitem">'.$t.'</span>';
            }

            return implode('', $ts);
        }else{
            return $data['genre'];
        }
    }

    public function getViewpics($id)
    {

    }


}
