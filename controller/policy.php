<?php

class Policy extends Controller{
    function __construct()
    {
        parent::__construct();
        Session::init();

    }
    function index(){

        $this->view->render('policy/index');
    }

}
