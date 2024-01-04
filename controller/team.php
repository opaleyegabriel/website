<?php

class team extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('team/index');
    }
    function user(){
        $this->view->render('team/index');
    }
    public function saveteam(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['staffname']=$_POST['staffname'];
      $data['staffposition']=$_POST['staffposition'];
      $data['path']="public/images/staffs/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['staffpicture']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->saveteam($data);

    }
}
