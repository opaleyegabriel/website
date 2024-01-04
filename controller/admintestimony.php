<?php

class Admintestimony extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('admintestimony/js/default.js');
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
        $this->view->render('admintestimony/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('admintestimony/index');
    }
    public function changetestimonyheadertext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['testimonyheadertext']=$_POST['testimonyheadertext'];
      $this->model->changetestimonyheadertext($data);

    }
    public function changetestimonysubtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['testimonysubtext']=$_POST['testimonysubtext'];
      $this->model->changetestimonysubtext($data);

    }
    public function savetestimony(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['clientname']=$_POST['clientname'];
      $data['clientoccupation']=$_POST['clientoccupation'];
      $data['testimony']=$_POST['testimony'];
      $data['path']="public/client/";
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

      // ----------------------------------------------------------
      //product picture 1

      $filename = stripslashes($_FILES['clientpicture']['name']);
      $extension = getMyExtension($filename);
      $extension = strtolower($extension);
      $string0="testimony".$data['clientname'];
      // .(addslashes($_FILES['passport']['name']));
      $data['clientpictureurl'] = str_replace(' ','',$string0).".".$extension;
      $data['clientpicture']=$data['path'].$data['clientpictureurl'];
      $product1=$data['clientpicture'];
      move_uploaded_file($_FILES ["clientpicture"]["tmp_name"], $product1);
      $data['status']="show";
      $this->model->savetestimony($data);

    }


}
