<?php

class Contact extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('contact/index');
    }
    function user(){
        $this->view->render('contact/index');
    }
    public function contactus(){
      $data=array();
      $data['name']=$_POST['name'];
      $data['email']=$_POST['email'];
      $data['message']=$_POST['message'];
       //echo "<pre>";
       //print_r($data);
       $this->model->contactus($data);
     }
     public function contact(){
       $data=array();
       $data['name']=$_POST['name'];
       $data['email']=$_POST['email'];
       $data['phone']=$_POST['phone'];
       $data['message']=$_POST['message'];
       // echo "<pre>";
       // print_r($data);
       $this->model->contact($data);
       }
}
