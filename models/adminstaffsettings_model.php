<?php
class Adminstaffsettings_Model extends Model{

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
  public function changestaffheadertext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET staffheadertext=:staffheadertext WHERE id=1 ");
       $sql->execute(array(
         ':staffheadertext'=>$data["staffheadertext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (staffheadertext) VALUES (:staffheadertext)  ");
       $sql->execute(array(
         ':staffheadertext'=>$data["staffheadertext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Staff Header Text Changed");
   window.location.href = "'.URL .'adminstaffsettings";';
   echo "</script>";
}
  public function changestaffsubtext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET staffsubtext=:staffsubtext WHERE id=1 ");
       $sql->execute(array(
         ':staffsubtext'=>$data["staffsubtext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (staffsubtext) VALUES (:staffsubtext)  ");
       $sql->execute(array(
         ':staffsubtext'=>$data["staffsubtext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Staff Sub Text Changed");
   window.location.href = "'.URL .'adminstaffsettings";';
   echo "</script>";
}
  public function savestaff($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_staff (branch, staffname, staffposition, staffpicture) VALUES (:branch, :staffname, :staffposition, :staffpicture)  ");
       $sql->execute(array(
         ':branch'=>$data["branch"],
         ':staffname'=>$data["staffname"],
         ':staffposition'=>$data["staffposition"],
         ':staffpicture'=>$data["staffpicture"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Staff Saved");
       window.location.href = "'.URL .'adminstaffsettings";';
       echo "</script>";
     }




}
