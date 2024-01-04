<?php

class Adminstaffsettings extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('adminstaffsettings/js/default.js');
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
        $this->view->render('adminstaffsettings/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('adminstaffsettings/index');
    }
    public function changestaffheadertext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['staffheadertext']=$_POST['staffheadertext'];
      $this->model->changestaffheadertext($data);

    }
    public function changestaffsubtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['staffsubtext']=$_POST['staffsubtext'];
      $this->model->changestaffsubtext($data);

    }
    public function savestaff(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['branch']=$_POST['branch'];
      $data['staffname']=$_POST['staffname'];
      $data['staffposition']=$_POST['staffposition'];
      $data['path']="public/staffs/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      // for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
      //     $randomNumber .= mt_rand(0, 10);
      // }
      // $data['rand']=$randomNumber;
      function getMyExtension($str)
      {
        $i = strrpos($str, ".");
        if (!$i) {
          return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
      }
      $filename = stripslashes($_FILES['staffpicture']['name']);
      $extension = getMyExtension($filename);
      $extension = strtolower($extension);
      $string0=$data['staffname'];
      // .(addslashes($_FILES['staffpicture']['name']));
      $data['staffpictureurl'] = str_replace(' ','',$string0).".".$extension;
      $data['staffpicture']=$data['path'].$data['staffpictureurl'];
      $userstaffpicture=$data['staffpicture'];
      move_uploaded_file($_FILES ["staffpicture"]["tmp_name"], $userstaffpicture);
      $this->model->savestaff($data);

    }
}
