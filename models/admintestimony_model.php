<?php
class Admintestimony_Model extends Model{

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
  public function changetestimonyheadertext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET testimonyheadertext=:testimonyheadertext WHERE id=1 ");
       $sql->execute(array(
         ':testimonyheadertext'=>$data["testimonyheadertext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (testimonyheadertext) VALUES (:testimonyheadertext)  ");
       $sql->execute(array(
         ':testimonyheadertext'=>$data["testimonyheadertext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Testimony Header Text Changed");
   window.location.href = "'.URL .'admintestimony";';
   echo "</script>";
}
  public function changetestimonysubtext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET testimonysubtext=:testimonysubtext WHERE id=1 ");
       $sql->execute(array(
         ':testimonysubtext'=>$data["testimonysubtext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (testimonysubtext) VALUES (:testimonysubtext)  ");
       $sql->execute(array(
         ':testimonysubtext'=>$data["testimonysubtext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Testimony Sub Text Changed");
   window.location.href = "'.URL .'admintestimony";';
   echo "</script>";
}

  public function savetestimony($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_testimony (clientname, clientoccupation, testimony, clientpicture, status) VALUES (:clientname, :clientoccupation, :testimony, :clientpicture, :status)  ");
       $sql->execute(array(
         ':clientname'=>$data["clientname"],
         ':clientoccupation'=>$data["clientoccupation"],
         ':testimony'=>$data["testimony"],
         ':clientpicture'=>$data["clientpicture"],
         ':status'=>$data["status"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Project Settings");
       window.location.href = "'.URL .'admintestimony";';
       echo "</script>";
     }




}
