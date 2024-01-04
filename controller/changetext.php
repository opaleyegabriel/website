<?php

class Changetext extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $logged=Session::get('loggedIn');
       if($logged==false)
       {
        Session::destroy();
        header('location: '. URL .'adminlogin');
        exit;
       }

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('changetext/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('changetext/index');
    }
    public function updateservicessubtxt(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['servicessubtxt']=$_POST['servicessubtxt'];
      $this->model->updateservicessubtxt($data);

    }
    public function updatecustomerssubtxt(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['customerssubtxt']=$_POST['customerssubtxt'];
      $this->model->updatecustomerssubtxt($data);

    }
    public function updateteamsubtxt(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['teamsubtxt']=$_POST['teamsubtxt'];
      $this->model->updateteamsubtxt($data);

    }
    public function updatepricessubtxt(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['pricessubtxt']=$_POST['pricessubtxt'];
      $this->model->updatepricessubtxt($data);

    }
    public function updateskillssubtxt(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['skillssubtxt']=$_POST['skillssubtxt'];
      $this->model->updateskillssubtxt($data);

    }
    public function updatecontactsubtxt(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['contactsubtxt']=$_POST['contactsubtxt'];
      $this->model->updatecontactsubtxt($data);

    }
}
