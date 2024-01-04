<?php

class Adminviewquestions extends Controller{
    function __construct()
    {
       parent::__construct();
       Session::init();
       $this->view->js=array('adminviewquestions/js/default.js');
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
        // $this->view->viewtext=$this->model->viewtext();
        $this->view->render('adminviewquestions/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('adminviewquestions/index');
    }


}
