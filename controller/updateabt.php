<?php

class Updateabt extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('updateabt/index');
    }
    function user(){
        $this->view->render('updateabt/index');
    }
    function updateabtpicture(){
      $data=array();
      $data['path']="public/images/about/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['abtpicture']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];
      $this->model->updateabtpicture($data);
    }
    public function updateabtheader(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['abtheader']=$_POST['abtheader'];
      $this->model->updateabtheader($data);

    }
    public function updateabtcontent(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['abtcontent']=$_POST['abtcontent'];
      $this->model->updateabtcontent($data);

    }
}
