<?php

class Info extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       // $this->view->js=array('info/js/default.js');
       $logged=Session::get('loggedIn');
       if($logged==false)
       {
        Session::destroy();
        header('location: '. URL .'myadminlogin');
        exit;
       }

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('info/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('info/index');
    }
    public function updateaddress1(){
      $data=array();
      $data['address']=$_POST['address1'];
      $this->model->updateaddress1($data);

    }
    public function updateaddress2(){
      $data=array();
      $data['address']=$_POST['address2'];
      $this->model->updateaddress2($data);

    }
    public function updatephone1(){
      $data=array();
      $data['phone']=$_POST['phone1'];
      $this->model->updatephone1($data);

    }
    public function updatephone2(){
      $data=array();
      $data['phone']=$_POST['phone2'];
      $this->model->updatephone2($data);

    }
    public function updateemail(){
      $data=array();
      $data['email']=$_POST['email'];
      $this->model->updateemail($data);

    }
}
