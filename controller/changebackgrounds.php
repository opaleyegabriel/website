<?php

class Changebackgrounds extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('changebackgrounds/js/default.js');
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
        $this->view->render('changebackgrounds/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('changebackgrounds/index');
    }
    function updatefirstpagesliderimage1(){
      $data=array();
      $data['path']="public/images/indexslider/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['slider1']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatefirstpagesliderimage1($data);
    }
    function updatefirstpagesliderimage2(){
      $data=array();
      $data['path']="public/images/indexslider/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['slider2']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatefirstpagesliderimage2($data);
    }
    function updatefirstpagesliderimage3(){
      $data=array();
      $data['path']="public/images/indexslider/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['slider3']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatefirstpagesliderimage3($data);
    }
    function updatefirstpagesliderimage4(){
      $data=array();
      $data['path']="public/images/indexslider/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['slider4']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatefirstpagesliderimage4($data);
    }
    function updateourservicesimage(){
      $data=array();
      $data['path']="public/images/services/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['services']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updateourservicesimage($data);
    }
    function updateourservicesrealimage(){
      $data=array();
      $data['path']="public/images/services/servicesimg/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['servicesimg']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updateourservicesrealimage($data);
    }
    function updatecustomerstestbg(){
      $data=array();
      $data['path']="public/images/testimony/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['testimony']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatecustomerstestbg($data);
    }
    function updatebestteambg(){
      $data=array();
      $data['path']="public/images/team/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['team']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatebestteambg($data);
    }
    function updatepricebg(){
      $data=array();
      $data['path']="public/images/price/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['price']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatepricebg($data);
    }
    function updateskillsbg(){
      $data=array();
      $data['path']="public/images/skills/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['skills']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updateskillsbg($data);
    }
    function updatecontactbg(){
      $data=array();
      $data['path']="public/images/contact/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['contact']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatecontactbg($data);
    }
    function updatewebsitebg(){
      $data=array();
      $data['path']="public/images/website/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['website']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updatewebsitebg($data);
    }

}
