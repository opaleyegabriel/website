<?php

class Adminchangebanner extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('adminchangebanner/js/default.js');
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
        $this->view->viewbannerpics=$this->model->viewbannerpics();
        $this->view->viewbannertext=$this->model->viewbannertext();
        $this->view->render('adminchangebanner/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('adminchangebanner/index');
    }
    function changebannerpics(){
      $data=array();
      $data['path']="public/images/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['bannerpics']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->changebannerpics($data);
    }
    public function changebannertoptext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['bannertoptext']=$_POST['bannertoptext'];
      $this->model->changebannertoptext($data);

    }
    public function changebannermidtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['bannermidtext']=$_POST['bannermidtext'];
      $this->model->changebannermidtext($data);

    }
    public function changebannerendtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['bannerendtext']=$_POST['bannerendtext'];
      $this->model->changebannerendtext($data);

    }
}
