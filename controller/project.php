<?php

class Project extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->getproject=$this->model->getproject();
        $this->view->render('project/index');
    }
    function user(){
        $this->view->render('project/index');
    }
    public function getprojectdetails($id){
      $data=array();
      $data["id"]=$id;
      $this->view->getproject=$this->model->getproject();
      $this->view->displayproject=$this->model->getprojectdetails($data);
      $this->view->render('project/displayproject');
    }
}
