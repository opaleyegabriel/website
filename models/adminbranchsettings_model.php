<?php
class Adminbranchsettings_Model extends Model{

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
  public function changebranchheadertext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET branchheadertext=:branchheadertext WHERE id=1 ");
       $sql->execute(array(
         ':branchheadertext'=>$data["branchheadertext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (branchheadertext) VALUES (:branchheadertext)  ");
       $sql->execute(array(
         ':branchheadertext'=>$data["branchheadertext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Branch Header Text Changed");
   window.location.href = "'.URL .'adminbranchsettings";';
   echo "</script>";
}
  public function changebranchsubtext($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
     $query=$this->db->prepare("SELECT * FROM tbl_text");
     $query->execute(array(
     ));
     $result=$query->fetch();
     $rows=$query->rowCount();
     if($rows > 0){
       $sql=$this->db->prepare("UPDATE tbl_text SET branchsubtext=:branchsubtext WHERE id=1 ");
       $sql->execute(array(
         ':branchsubtext'=>$data["branchsubtext"],
       ));
     }
     else{
       $sql=$this->db->prepare("INSERT INTO tbl_text (branchsubtext) VALUES (:branchsubtext)  ");
       $sql->execute(array(
         ':branchsubtext'=>$data["branchsubtext"],
       ));
     }
   echo '<script type="text/javascript">';
   echo 'alert("Branch Sub Text Changed");
   window.location.href = "'.URL .'adminbranchsettings";';
   echo "</script>";
}
  public function savebranch($data){
    /*echo "i'm a model, see your records below";
     echo "<pre>";
     print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_branch (branch, branchaddress) VALUES (:branch, :branchaddress)  ");
       $sql->execute(array(
         ':branch'=>$data["branch"],
         ':branchaddress'=>$data["branchaddress"]
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Branch Saved");
       window.location.href = "'.URL .'adminbranchsettings";';
       echo "</script>";
     }




}
