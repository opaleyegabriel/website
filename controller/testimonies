<?php

class testimonies extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('testimonies/index');
    }
    function user(){
        $this->view->render('testimonies/index');
    }
    public function savetestimonies(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['clientname']=$_POST['clientname'];
      $data['designation']=$_POST['designation'];
      $data['testimony']=$_POST['testimony'];
      $data['path']="public/images/testimonies/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['clientpicture']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->savetestimonies($data);

    }
}
