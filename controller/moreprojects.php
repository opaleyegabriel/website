<?php

class Moreprojects extends Controller{
    function __construct()
    {
       parent::__construct();
       

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        // $this->view->viewbannerpics=$this->model->viewbannerpics();
        // $this->view->viewtext=$this->model->viewtext();
        $this->view->render('moreprojects/index');
        $msg='I want this display as a test to the app';
    }
    function details(){
        $this->view->render('moreprojects/index');
    }
    public function getfullproject($id){
      $data=array();
      $data["id"]=$id;
      $this->view->viewtext=$this->model->viewtext();
      $this->view->settings=$this->model->settings();
      $this->view->projects=$this->model->projects();
      $this->view->getproject=$this->model->getproject($data);
      $this->view->render('moreprojects/projectdetails');
    }



}
