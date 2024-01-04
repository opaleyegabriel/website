<?php
class Adminprojectsettings_Model extends Model{

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
  public function changeprojectheadertext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET projectheadertext=:projectheadertext WHERE id=1 ");
       $sql->execute(array(
         ':projectheadertext'=>$data["projectheadertext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (projectheadertext) VALUES (:projectheadertext)  ");
       $sql->execute(array(
         ':projectheadertext'=>$data["projectheadertext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Project Header Text Changed");
   window.location.href = "'.URL .'adminprojectsettings";';
   echo "</script>";
}
  public function changeprojectsubtext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET projectsubtext=:projectsubtext WHERE id=1 ");
       $sql->execute(array(
         ':projectsubtext'=>$data["projectsubtext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (projectsubtext) VALUES (:projectsubtext)  ");
       $sql->execute(array(
         ':projectsubtext'=>$data["projectsubtext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Project Sub Text Changed");
   window.location.href = "'.URL .'adminprojectsettings";';
   echo "</script>";
}
  public function changepricingheadertext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET pricingheadertext=:pricingheadertext WHERE id=1 ");
       $sql->execute(array(
         ':pricingheadertext'=>$data["pricingheadertext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (pricingheadertext) VALUES (:pricingheadertext)  ");
       $sql->execute(array(
         ':pricingheadertext'=>$data["pricingheadertext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Pricing Header Text Changed");
   window.location.href = "'.URL .'adminprojectsettings";';
   echo "</script>";
}
  public function changepricingsubtext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET pricingsubtext=:pricingsubtext WHERE id=1 ");
       $sql->execute(array(
         ':pricingsubtext'=>$data["pricingsubtext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (pricingsubtext) VALUES (:pricingsubtext)  ");
       $sql->execute(array(
         ':pricingsubtext'=>$data["pricingsubtext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Pricing Sub Text Changed");
   window.location.href = "'.URL .'adminprojectsettings";';
   echo "</script>";
}
  public function saveproject($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_projects (name, description, price, features1, features2, features3, features4, features5, features6, image, status) VALUES (:name, :description, :price, :features1, :features2, :features3, :features4, :features5, :features6, :image, :status)  ");
       $sql->execute(array(
         ':name'=>$data["name"],
         ':description'=>$data["description"],
         ':price'=>$data["price"],
         ':features1'=>$data["features1"],
         ':features2'=>$data["features2"],
         ':features3'=>$data["features3"],
         ':features4'=>$data["features4"],
         ':features5'=>$data["features5"],
         ':features6'=>$data["features6"],
         ':image'=>$data["image"],
         ':status'=>$data["status"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Project Settings");
       window.location.href = "'.URL .'adminprojectsettings";';
       echo "</script>";
     }




}
