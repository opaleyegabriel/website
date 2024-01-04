<?php

class Services extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->render('services/index');
    }
    function user(){
        $this->view->render('services/index');
    }
    public function saveservice(){
      $data=array();
      // $data['schoolType']=$_POST['schoolType'];
      $data['serviceheader']=$_POST['serviceheader'];
      $data['service']=$_POST['service'];
      $this->model->saveservice($data);

    }
}
