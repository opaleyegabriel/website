<?php

class Index_Model extends Model{



  function __construct()

  {

    parent::__construct();

    Session::init();

  }





  public function viewtext(){

    $sql=$this->db->prepare("SELECT * FROM tbl_text");

    $sql->execute(array(

    ));

    return $sql->fetchAll();

  }

  public function totalsales(){

    $sql=$this->db->prepare("SELECT COUNT(*) Numsales FROM tbl_allocations");

    $sql->execute(array(

    ));

    return $sql->fetchAll();

  }

  public function clients(){

    $sql=$this->db->prepare("SELECT COUNT(*) Numclient FROM tbl_profile");

    $sql->execute(array(

    ));

    return $sql->fetchAll();

  }

  public function settings(){

    $sql=$this->db->prepare("SELECT * FROM tbl_settings");

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function projects(){

    $sql=$this->db->prepare("SELECT * FROM tbl_projects ORDER BY rand() LIMIT 1" );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function oneproject(){

    $sql=$this->db->prepare("SELECT * FROM tbl_projects " );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function branch(){

    $sql=$this->db->prepare("SELECT * FROM tbl_branch" );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function services(){

    $sql=$this->db->prepare("SELECT * FROM tbl_services" );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function address(){

    $sql=$this->db->prepare("SELECT * FROM tbl_address" );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function email(){

    $sql=$this->db->prepare("SELECT * FROM tbl_email" );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function phone(){

    $sql=$this->db->prepare("SELECT * FROM tbl_phone" );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }

  public function testimony(){

    $sql=$this->db->prepare("SELECT * FROM tbl_testimony WHERE status='show' " );

    $sql->execute(array(

    ));

    return $sql->fetchAll();



  }
    public function staffdata(){
    $sql=$this->db->prepare("SELECT * FROM tbl_staff  " );
    $sql->execute(array(
    ));
    return $sql->fetchAll();

  }

  public function savecomment($data){

    /*echo "i'm a model, see your records below";

     echo "<pre>";

     print_r($data);}*/

       $sql=$this->db->prepare("INSERT INTO tbl_comments (name, email, subject, comment) VALUES (:name, :email, :subject, :comment)  ");

       $sql->execute(array(

         ':name'=>$data["name"],

         ':email'=>$data["email"],

         ':subject'=>$data["subject"],

         ':comment'=>$data["comment"]

       ));

       echo '<script type="text/javascript">';

       echo 'alert("Comment Submitted We will get back to you soon");

       window.location.href = "'.URL .'index";';

       echo "</script>";

     }

     public function savetestimony($data){
       /*echo "i'm a model, see your records below";
        echo "<pre>";
        print_r($data);}*/
          $sql=$this->db->prepare("INSERT INTO tbl_testimony (clientname, clientoccupation, sitepurchased, testimony, clientpicture, status) VALUES (:clientname, :clientoccupation, :sitepurchased, :testimony, :clientpicture, :status)  ");
          $sql->execute(array(
            ':clientname'=>$data["clientname"],
            ':clientoccupation'=>$data["clientoccupation"],
            ':sitepurchased'=>$data["sitepurchased"],
            ':testimony'=>$data["testimony"],
            ':clientpicture'=>$data["clientpicture"],
            ':status'=>$data["status"]
          ));
          echo '<script type="text/javascript">';
          echo 'alert("Your Review Has Been Recieved.");
          window.location.href = "'.URL .'index";';
          echo "</script>";
        }









}

