<?php

class Prices extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('prices/index');
    }
    function user(){
        $this->view->render('prices/index');
    }
    public function saveprice(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['name']=$_POST['name'];
      $data['price']=$_POST['price'];
      $data['address']=$_POST['address'];
      $data['description1']=$_POST['description1'];
      $data['description2']=$_POST['description2'];
      $data['description3']=$_POST['description3'];
      $data['description4']=$_POST['description4'];
      $data['description5']=$_POST['description5'];
      $data['description6']=$_POST['description6'];
      $data['path']="public/images/projects/";
      $data['tdate']=date('d-m-Y H:i:s');
      //image 1
      for ($randomNumber = mt_rand(1, 10), $i = 1; $i < 10; $i++) {
        $randomNumber .= mt_rand(0, 10);
      }
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['picture1']['name']));
      $data['image1'] = str_replace(' ','',$string0);
      $data['urlid1']=$data['path'].$data['image1'];
      //image 2
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['picture2']['name']));
      $data['image2'] = str_replace(' ','',$string0);
      $data['urlid2']=$data['path'].$data['image2'];
      //image 3
      $data['rand']=$randomNumber;
      $string0=$data['rand'].(addslashes($_FILES['picture3']['name']));
      $data['image3'] = str_replace(' ','',$string0);
      $data['urlid3']=$data['path'].$data['image3'];
      // echo "<pre>";
      // print_r($data);
      $this->model->saveprice($data);

    }

}
