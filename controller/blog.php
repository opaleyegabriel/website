<?php

class Blog extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->getpost=$this->model->getpost();
        $this->view->render('blog/index');
    }
    function user(){
        $this->view->render('blog/index');
    }
    public function getfullpost($id){
      $data=array();
      $data["id"]=$id;
      $this->view->getfullpost=$this->model->getfullpost($data);
      $this->view->getposttitle=$this->model->getposttitle($data);
      $this->view->getcomment=$this->model->getcomment($data);
      $this->view->render('blog/blogpost');
    }
    public function save(){
      $data=array();
      $data['postid']=$_POST['postid'];
      $data['name']=$_POST['name'];
      $data['email']=$_POST['email'];
      $data['phone']=$_POST['phone'];
      $data['comment']=$_POST['comment'];

    $this->model->save($data);
  }
}
