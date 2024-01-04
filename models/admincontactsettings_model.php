<?php
class Admincontactsettings_Model extends Model{

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
  public function changecontactheadertext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET contactheadertext=:contactheadertext WHERE id=1 ");
       $sql->execute(array(
         ':contactheadertext'=>$data["contactheadertext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (contactheadertext) VALUES (:contactheadertext)  ");
       $sql->execute(array(
         ':contactheadertext'=>$data["contactheadertext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Contact Header Text Changed");
   window.location.href = "'.URL .'admincontactsettings";';
   echo "</script>";
}
  public function changecontactsubtext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET contactsubtext=:contactsubtext WHERE id=1 ");
       $sql->execute(array(
         ':contactsubtext'=>$data["contactsubtext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (contactsubtext) VALUES (:contactsubtext)  ");
       $sql->execute(array(
         ':contactsubtext'=>$data["contactsubtext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Contact Sub Text Changed");
   window.location.href = "'.URL .'admincontactsettings";';
   echo "</script>";
}
  public function addphone($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_phone (phone) VALUES (:phone)  ");
       $sql->execute(array(
         ':phone'=>$data["phone"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Phone Added");
       window.location.href = "'.URL .'admincontactsettings";';
       echo "</script>";
     }
  public function addemail($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_email (email) VALUES (:email)  ");
       $sql->execute(array(
         ':email'=>$data["email"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Email Added");
       window.location.href = "'.URL .'admincontactsettings";';
       echo "</script>";
     }
  public function addaddress($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_address (address) VALUES (:address)  ");
       $sql->execute(array(
         ':address'=>$data["address"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Address Added");
       window.location.href = "'.URL .'admincontactsettings";';
       echo "</script>";
     }




}
