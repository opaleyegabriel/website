<?php

class Adminbranchsettings extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('adminbranchsettings/js/default.js');
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
        $this->view->render('adminbranchsettings/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('adminbranchsettings/index');
    }
    public function changebranchheadertext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['branchheadertext']=$_POST['branchheadertext'];
      $this->model->changebranchheadertext($data);

    }
    public function changebranchsubtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['branchsubtext']=$_POST['branchsubtext'];
      $this->model->changebranchsubtext($data);

    }
    public function savebranch(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['branch']=$_POST['branch'];
      $data['branchaddress']=$_POST['branchaddress'];
      $this->model->savebranch($data);

    }
}
