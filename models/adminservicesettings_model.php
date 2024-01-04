<?php
class Adminservicesettings_Model extends Model{

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
  public function changeserviceheadertext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET serviceheadertext=:serviceheadertext WHERE id=1 ");
       $sql->execute(array(
         ':serviceheadertext'=>$data["serviceheadertext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (serviceheadertext) VALUES (:serviceheadertext)  ");
       $sql->execute(array(
         ':serviceheadertext'=>$data["serviceheadertext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Service Header Text Changed");
   window.location.href = "'.URL .'adminservicesettings";';
   echo "</script>";
}
  public function changeservicesubtext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET servicesubtext=:servicesubtext WHERE id=1 ");
       $sql->execute(array(
         ':servicesubtext'=>$data["servicesubtext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (servicesubtext) VALUES (:servicesubtext)  ");
       $sql->execute(array(
         ':servicesubtext'=>$data["servicesubtext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Service Sub Text Changed");
   window.location.href = "'.URL .'adminservicesettings";';
   echo "</script>";
}
  public function changeservicetext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_services (servicetext, servicedesc) VALUES (:servicetext, :servicedesc)  ");
       $sql->execute(array(
         ':servicetext'=>$data["servicetext"],
         ':servicedesc'=>$data["servicedesc"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Service Text & Description Changed");
       window.location.href = "'.URL .'adminservicesettings";';
       echo "</script>";
     }




}
