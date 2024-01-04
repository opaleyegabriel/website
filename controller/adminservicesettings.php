<?php

class Adminservicesettings extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('adminservicesettings/js/default.js');
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
        $this->view->render('adminservicesettings/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('adminservicesettings/index');
    }
    public function changeserviceheadertext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['serviceheadertext']=$_POST['serviceheadertext'];
      $this->model->changeserviceheadertext($data);

    }
    public function changeservicesubtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['servicesubtext']=$_POST['servicesubtext'];
      $this->model->changeservicesubtext($data);

    }
    public function changeservicetext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['servicetext']=$_POST['servicetext'];
      $data['servicedesc']=$_POST['servicedesc'];
      $this->model->changeservicetext($data);

    }


}
