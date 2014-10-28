<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::controller('inventory', 'InventoryController');
Route::controller('pos', 'PosController');
Route::controller('document', 'DocumentController');
Route::controller('invoices', 'InvoicesController');
Route::controller('billings', 'BillingsController');
Route::controller('expenses', 'ExpensesController');
Route::controller('property', 'PropertyController');
Route::controller('products', 'ProductsController');
Route::controller('productcategory', 'ProductcategoryController');
Route::controller('transaction', 'TransactionController');
Route::controller('outlet', 'OutletController');
Route::controller('user', 'UserController');
Route::controller('agent', 'AgentController');
Route::controller('buyer', 'BuyerController');
Route::controller('report', 'ReportController');
Route::controller('showcase', 'ShowcaseController');
Route::controller('pages', 'PagesController');
Route::controller('posts', 'PostsController');
Route::controller('category', 'CategoryController');
Route::controller('section', 'SectionController');
Route::controller('menu', 'MenuController');

Route::controller('event', 'EventController');
Route::controller('calendar', 'CalendarController');

Route::controller('faq', 'FaqController');
Route::controller('faqcat', 'FaqcatController');

Route::controller('picture','PictureController');

Route::controller('enquiry', 'EnquiryController');

Route::controller('order', 'OrderController');

Route::controller('newsletter', 'NewsletterController');
Route::controller('campaign', 'CampaignController');
Route::controller('contactgroup', 'ContactgroupController');

Route::controller('tenant', 'TenantController');
Route::controller('unit', 'UnitController');
Route::controller('unitcategory', 'UnitcategoryController');

Route::controller('complaint', 'ComplaintController');

Route::controller('hr', 'HrController');
Route::controller('outsource', 'OutsourceController');

Route::controller('brochure', 'BrochureController');
Route::controller('option', 'OptionController');

Route::controller('glossary', 'GlossaryController');

Route::controller('activity', 'ActivityController');

Route::controller('inprop', 'InpropController');

Route::controller('templates', 'TemplatesController');

Route::controller('uploads', 'UploadsController');
Route::controller('media', 'MediaController');
Route::controller('music', 'MusicController');
Route::controller('video', 'VideoController');
Route::controller('event', 'EventController');

Route::controller('scanner', 'ScannerController');

Route::controller('stockcheck', 'StockcheckController');
Route::controller('stockchecklist', 'StockchecklistController');
Route::controller('dashboard', 'DashboardController');

Route::controller('upload', 'UploadController');
Route::controller('ajax', 'AjaxController');

Route::controller('home', 'HomeController');
Route::controller('homeslide', 'HomeslideController');

Route::controller('feed','FeedController');

//Route::get('/', 'ProductsController@getIndex');
Route::get('/', 'FeedController@getIndex');


Route::get('content/pages', 'PagesController@getIndex');
Route::get('content/posts', 'PostsController@getIndex');
Route::get('content/category', 'CategoryController@getIndex');
Route::get('content/section', 'SectionController@getIndex');
Route::get('content/menu', 'MenuController@getIndex');



Route::get('regenerate',function(){
    $property = new Property();

    $props = $property->get()->toArray();

    $seq = new Sequence();

    foreach($props as $p){

        $_id = new MongoId($p['_id']);

        $nseq = $seq->getNewId('property');

        $sdata = array(
            'sequence'=>$nseq,
            'propertyId' => Config::get('ia.property_id_prefix').$nseq
            );

        if( $property->where('_id','=', $_id )->update( $sdata ) ){
            print $p['_id'].'->'.$sdata['propertyId'].'<br />';
        }

    }

});

Route::get('tonumber',function(){
    $property = new Property();

    $props = $property->get()->toArray();

    $seq = new Sequence();

    foreach($props as $p){

        $_id = new MongoId($p['_id']);

        $price = new MongoInt32( $p['listingPrice'] );
        $fmv = new MongoInt32( $p['FMV'] );

        $sdata = array(
            'listingPrice'=>$price,
            'FMV'=>$fmv
            );

        if( $property->where('_id','=', $_id )->update( $sdata ) ){
            print $p['_id'].'->'.$sdata['listingPrice'].'<br />';
        }

    }

});

Route::get('regeneratepic/{obj?}',function($obj = null){

    set_time_limit(0);

    if(is_null($obj)){
        $product = new Product();
    }else{
        switch($obj){
            case 'product' :
                        $product = new Product();
                        break;
            case 'page' :
                        $product = new Page();
                        break;
            case 'post' :
                        $product = new Posts();
                        break;
            default :
                        $product = new Product();
                        break;
        }
    }

    $props = $product->get();

    //$seq = new Sequence();

    $sizes = Config::get('picture.sizes');

    foreach($props as $p){

        if(isset($p->files)){
            $files = $p->files;

            foreach($files as $folder=>$files){

                $dir = public_path().'/storage/media/'.$folder;

                if (is_dir($dir) && file_exists($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            if($file != '.' && $file != '..'){
                                if(!preg_match('/^lrg_|med_|th_|full_/', $file)){
                                    echo $dir.'/'.$file."\n";

                                    $destinationPath = $dir;
                                    $filename = $file;

                                    $urls = array();

                                    foreach($sizes as $k=>$v){
                                        $thumbnail = Image::make($destinationPath.'/'.$filename)
                                            ->fit($v['width'],$v['height'])
                                            //->insert($sm_wm,0,0, 'bottom-right')
                                            ->save($destinationPath.'/'.$v['prefix'].$filename);
                                    }
                                    /*
                                    $thumbnail = Image::make($destinationPath.'/'.$filename)
                                        ->fit( $sizes['thumbnail']['width'] ,$sizes['thumbnail']['height'])
                                        ->save($destinationPath.'/th_'.$filename);

                                    $medium = Image::make($destinationPath.'/'.$filename)
                                        ->fit( $sizes['medium']['width'] ,$sizes['medium']['height'])
                                        ->save($destinationPath.'/med_'.$filename);

                                    $large = Image::make($destinationPath.'/'.$filename)
                                        ->fit( $sizes['large']['width'] ,$sizes['large']['height'])
                                        ->save($destinationPath.'/lrg_'.$filename);

                                    $full = Image::make($destinationPath.'/'.$filename)
                                        ->fit( $sizes['full']['width'] ,$sizes['full']['height'])
                                        ->save($destinationPath.'/full_'.$filename);
                                    */
                                }
                            }
                        }
                        closedir($dh);
                    }
                }
            }

        }



    }

});

Route::get('pdf',function(){
    $content = "
    <page>
        <h1>Exemple d'utilisation</h1>
        <br>
        Ceci est un <b>exemple d'utilisation</b>
        de <a href='http://html2pdf.fr/'>HTML2PDF</a>.<br>
    </page>";

    $html2pdf = new HTML2PDF();
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf','D');
});

/*
Route::get('brochure/dl/{id}',function($id){

    $prop = Property::find($id)->toArray();

    //return View::make('print.brochure')->with('prop',$prop)->render();

    $content = View::make('print.brochure')->with('prop',$prop)->render();

    //return $content;

    return PDF::loadView('print.brochure',array('prop'=>$prop))
        ->stream('download.pdf');
});

Route::get('brochure',function(){
    View::make('print.brochure');
});
*/

Route::get('inc/{entity}',function($entity){

    $seq = new Sequence();
    print_r($seq->getNewId($entity));

});

Route::get('last/{entity}',function($entity){

    $seq = new Sequence();
    print( $seq->getLastId($entity) );

});

Route::get('init/{entity}/{initial}',function($entity,$initial){

    $seq = new Sequence();
    print_r( $seq->setInitialValue($entity,$initial));

});

Route::get('hashme/{mypass}',function($mypass){

    print Hash::make($mypass);
});

Route::get('xtest',function(){
    Excel::load('WEBSITE_INVESTORS_ALLIANCE.xlsx')->calculate()->dump();
});

Route::get('xcat',function(){
    print_r(Prefs::getCategory());
});

Route::get('barcode/dl/{txt}',function($txt){
    $barcode = new Barcode();
    $barcode->make($txt,'code128',60, 'horizontal' ,true);
    return $barcode->render('jpg',$txt,true);
});

Route::get('barcode/{txt}',function($txt){
    $barcode = new Barcode();
    $barcode->make($txt,'code128',60, 'horizontal' ,true);
    return $barcode->render('jpg',$txt);
});

Route::get('media',function(){
    $media = Product::all();

    print $media->toJson();

});

Route::get('forgot',function(){
    return View::make('forgot')->with('title','Reset Password');
});

Route::post('forgot',function(){

    $rules = array(
        'email'    => 'required|email',
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

        Event::fire('log.a',array('reset password','resetpass',Input::get('email'),'validation fail'));

        Session::flash('signupError', $validator->messages() );
        return Redirect::to('forgot');
    } else {

    }

});

Route::get('resetpass/{key}',function($key){
    return View::make('reset')->with('title','Reset Password')->with('key',$key);
});

Route::post('resetpass/{key}',function($key){

});


Route::get('login',function(){
    return View::make('login')->with('title','Sign In');
});


Route::post('login',function(){

    // validate the info, create rules for the inputs
    $rules = array(
        'email'    => 'required|email',
        'password' => 'required|alphaNum|min:3'
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
        return Redirect::to('login')->withErrors($validator);
    } else {

        $userfield = Config::get('kickstart.user_field');
        $passwordfield = Config::get('kickstart.password_field');

        // find the user
        $user = User::where($userfield, '=', Input::get('email'))->first();


        // check if user exists
        if ($user) {
            // check if password is correct
            if (Hash::check(Input::get('password'), $user->{$passwordfield} )) {

                Auth::login($user);

                return Redirect::to('/');

            } else {
                // validation not successful
                // send back to form with errors
                // send back to form with old input, but not the password
                return Redirect::to('login')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            }

        } else {
            // user does not exist in database
            // return them to login with message
            Session::flash('loginError', 'This user does not exist.');
            return Redirect::to('login');
        }

    }

});


Route::get('logout',function(){
    Auth::logout();
    return Redirect::to('/');
});

Route::get('signup',function(){
    return View::make('register')->with('title','Sign Up');
});

Route::post('signup',function(){
    // validate the info, create rules for the inputs
    $rules = array(
        'firstname'    => 'required',
        'lastname'    => 'required',
        'email'    => 'required|email|unique:members',
        'password' => 'required|alphaNum|min:3|same:repass'
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

        Event::fire('log.a',array('create account','createaccount',Input::get('email'),'validation fail'));

        Session::flash('signupError', $validator->messages() );
        return Redirect::to('signup');
    } else {

        $data = Input::get();

        unset($data['csrf_token']);

        $model = new Member();

        $activation = str_random(15);

        $data['activation'] = $activation;

        $data['createdDate'] = new MongoDate();
        $data['lastUpdate'] = new MongoDate();

        unset($data['repass']);
        $data['password'] = Hash::make($data['password']);

        $data['fullname'] = $data['firstname'].' '.$data['lastname'];


        if($obj = $model->insert($data)){
            Event::fire('log.a',array('create account','createaccount',Input::get('email'),'account created'));
            //Event::fire('product.createformadmin',array($obj['_id'],$passwordRandom,$obj['conventionPaymentStatus']));
            //return Redirect::to('account/success');

            $newuser = Member::where('activation', $activation)->first()->toArray();

            Session::flash('signupSuccess', 'Thank you and welcome to '.Config::get('site.name').' !');
            //return Redirect::to('organization/'.$newuser['_id']);
            return Redirect::to('/');

        }else{

            Event::fire('log.a',array('create account','createaccount',Input::get('email'),'fail to create account'));

            //return Redirect::to($this->backlink)->with('notify_success',ucfirst(Str::singular($controller_name)).' saving failed');
            Session::flash('signupError', 'Failed to create member');
            return Redirect::to('signup');
        }

    }


    return View::make('pages.createaccount');
});

Route::get('profile',function(){
    return View::make('profile');
});


Route::get('organization/{userid}',function($userid){
    return View::make('organization')->with('newuser',$userid)->with('title','Organization');
});

Route::post('dcheck',function(){
    $subdomain = Input::get('subdomain');

    $check = Organization::where('subdomain',$subdomain)->first();

    if($check){
        return Response::json(array('result'=>'NOK'));
    }else{
        return Response::json(array('result'=>'OK'));
    }

});

Route::post('organization',function(){
    // validate the info, create rules for the inputs
    $rules = array(
        'name' => 'required',
        'subdomain'  => 'required|unique:organizations',
        'apptype'=>'required',
        'employeenumber'=>'required',
        'country'=>'required'
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {

        Event::fire('log.a',array('create organization','createorganization',Input::get('email'),'validation fail'));

        Session::flash('signupError', $validator->messages());
        return Redirect::to('organization/'.Input::get('user_id'))->withInput( Input::all() );
    } else {

        $data = Input::get();

        unset($data['csrf_token']);


        $model = new Organization();

        $data['createdDate'] = new MongoDate();
        $data['lastUpdate'] = new MongoDate();

        if($obj = $model->insert($data)){

            $member = Member::find($data['user_id']);

            unset($data['user_id']);

            $member->organization = $data;

            $member->save();

            $domain = new Domain();
            foreach($data as $k=>$v){
                $domain->$k = $v;
            }
            $domain->save();

            Event::fire('log.a',array('create organization','createorganization',Input::get('name'),'organization created'));
            Session::flash('signupSuccess', 'Thank you and welcome to '.Config::get('site.name').' ! Go ahead, sign in and start exploring!');
            return Redirect::to('/');

        }else{

            Event::fire('log.a',array('create account','createaccount',Input::get('email'),'fail to create organization'));

            //return Redirect::to($this->backlink)->with('notify_success',ucfirst(Str::singular($controller_name)).' saving failed');
            Session::flash('signupError', 'Failed to create organization');
            return Redirect::to('/');
        }

    }


    return View::make('pages.createaccount');
});

/* Filters */

Route::filter('auth', function()
{

    if (Auth::guest()){
        Session::put('redirect',URL::full());
        return Redirect::to('login');
    }

    if($redirect = Session::get('redirect')){
        Session::forget('redirect');
        return Redirect::to($redirect);
    }

    //if (Auth::guest()) return Redirect::to('login');
});

/* Helper function */

function sa($item){
    if(URL::to($item) == URL::full() ){
        return  'active';
    }else{
        return '';
    }
}
