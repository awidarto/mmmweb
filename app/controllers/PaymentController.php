<?php

class PaymentController extends AdminController {

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

    public function getIndex()
    {
        return View::make('payment.topup');
    }


    public function getPayment()
    {
        return View::make('payment.payment');
    }

    public function getConfirm()
    {
        return View::make('payment.confirm');
    }


    public function postIndex()
    {

        $this->fields = array(
            array('label',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('varname',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
            array('value',array('kind'=>'text','query'=>'like','pos'=>'both','show'=>true)),
        );

        $this->place_action = 'first';

        return parent::postIndex();
    }

    public function getAdd(){
        //Breadcrumb::addBreadcrumb('New Payable', 'add');
        //$this->crumb = Breadcrumb::generate();

        return parent::getAdd();
    }

}
