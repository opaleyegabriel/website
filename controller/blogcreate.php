<?php

class Blogcreate extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
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
        $this->view->render('blogcreate/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('blogcreate/index');
    }
    public function createblog(){
      $data=array();
      $data['path']="public/images/blog/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['imgurl']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid']=$data['path'].$data['image1'];

      $data['title']=$_POST['title'];
      $data['post']=$_POST['post'];
      $this->model->createblog($data);

    }
}
