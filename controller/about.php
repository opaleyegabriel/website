<?php

class About extends Controller{
    function __construct()
    {
       parent::__construct();

    }
    function index(){
        //echo 'INSIDE INDEX INDEX';
        $this->view->getcustomers=$this->model->getcustomers();
        $this->view->getabtpicture=$this->model->getabtpicture();
        $this->view->getabtheader=$this->model->getabtheader();
        $this->view->getabtcontent=$this->model->getabtcontent();
        $this->view->render('about/index');
    }
    function user(){
        $this->view->render('about/index');
    }
}
