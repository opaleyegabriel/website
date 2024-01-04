<?php

class Index extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('index/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('index/index');
    }
    public function savecomment(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['name']=$_POST['name'];
      $data['email']=$_POST['email'];
      $data['subject']=$_POST['subject'];
      $data['comment']=$_POST['comment'];
      $this->model->savecomment($data);

    }
        public function savetestimony(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['clientname']=$_POST['clientname'];
      $data['clientoccupation']=$_POST['clientoccupation'];
      $data['sitepurchased']=$_POST['sitepurchased'];
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
      $data['status']="hide";
      // echo "<pre>";
      // print_r($data);
      $this->model->savetestimony($data);

    }
}
