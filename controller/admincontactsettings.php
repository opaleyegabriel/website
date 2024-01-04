<?php

class Admincontactsettings extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('admincontactsettings/js/default.js');
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
        // $this->view->viewbannerpics=$this->model->viewbannerpics();
        $this->view->viewtext=$this->model->viewtext();
        $this->view->render('admincontactsettings/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('admincontactsettings/index');
    }
    public function changecontactheadertext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['contactheadertext']=$_POST['contactheadertext'];
      $this->model->changecontactheadertext($data);

    }
    public function changecontactsubtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['contactsubtext']=$_POST['contactsubtext'];
      $this->model->changecontactsubtext($data);

    }
    public function addphone(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['phone']=$_POST['phone'];
      $this->model->addphone($data);

    }
    public function addemail(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['email']=$_POST['email'];
      $this->model->addemail($data);

    }
    public function addaddress(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['address']=$_POST['address'];
      $this->model->addaddress($data);

    }


}
