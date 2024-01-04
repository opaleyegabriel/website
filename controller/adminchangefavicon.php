<?php

class Adminchangefavicon extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('adminchangefavicon/js/default.js');
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
        $this->view->viewfavicon=$this->model->viewfavicon();
        $this->view->render('adminchangefavicon/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('adminchangefavicon/index');
    }
    function changefavicon(){
      $data=array();
      $data['path']="public/images/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['favicon']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->changefavicon($data);
    }

}
