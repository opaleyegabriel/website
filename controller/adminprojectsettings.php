<?php

class Adminprojectsettings extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('adminprojectsettings/js/default.js');
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
        $this->view->render('adminprojectsettings/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('adminprojectsettings/index');
    }
    public function changeprojectheadertext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['projectheadertext']=$_POST['projectheadertext'];
      $this->model->changeprojectheadertext($data);

    }
    public function changeprojectsubtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['projectsubtext']=$_POST['projectsubtext'];
      $this->model->changeprojectsubtext($data);

    }
    public function changepricingheadertext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['pricingheadertext']=$_POST['pricingheadertext'];
      $this->model->changepricingheadertext($data);

    }
    public function changepricingsubtext(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['pricingsubtext']=$_POST['pricingsubtext'];
      $this->model->changepricingsubtext($data);

    }
    public function saveproject(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['name']=$_POST['name'];
      $data['description']=$_POST['description'];
      $data['price']=$_POST['price'];
      $data['features1']=$_POST['features1'];
      $data['features2']=$_POST['features2'];
      $data['features3']=$_POST['features3'];
      $data['features4']=$_POST['features4'];
      $data['features5']=$_POST['features5'];
      $data['features6']=$_POST['features6'];
      $data['path']="public/projects/";
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

      $filename = stripslashes($_FILES['image']['name']);
      $extension = getMyExtension($filename);
      $extension = strtolower($extension);
      $string0="project".$data['name'];
      // .(addslashes($_FILES['passport']['name']));
      $data['imageurl'] = str_replace(' ','',$string0).".".$extension;
      $data['image']=$data['path'].$data['imageurl'];
      $product1=$data['image'];
      move_uploaded_file($_FILES ["image"]["tmp_name"], $product1);
      $data['status']=$_POST['status'];
      $this->model->saveproject($data);

    }


}
