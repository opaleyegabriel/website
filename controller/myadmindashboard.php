<?php

class Myadmindashboard extends Controller{
    function __construct()
    {
       parent::__construct();
       $this->view->js=array('myadmindashboard/js/default.js');

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('myadmindashboard/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('myadmindashboard/index');
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
