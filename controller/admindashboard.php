<?php

class Admindashboard extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->js=array('admindashboard/js/default.js');
       Session::init();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('admindashboard/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('admindashboard/index');
    }
    // public function username(){
    //   $data=array();
    //   $data['username']=$_POST['username'];
    //   //echo "<pre>";
    //   //print_r($data);
    //   $this->model->username($data);
    // }
    // public function login(){
    //   $data=array();
    //   $data['username']=$_POST['username'];
    //   $data['password']=$_POST['password'];
    //   //echo "<pre>";
    //   //print_r($data);
    //   $this->model->login($data);
    // }
}
