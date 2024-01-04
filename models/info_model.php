<?php
class Info_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }
    public function updateaddress1($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_address SET address=:address WHERE id=1");
       $sql->execute(array(
         ':address'=>$data['address']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Address 1 Updated Succesfully");
       window.location.href = "'.URL .'info";';
       echo "</script>";
     }
    public function updateaddress2($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_address SET address=:address  WHERE id=2");
       $sql->execute(array(
         ':address'=>$data['address']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Address 2 Updated Succesfully");
       window.location.href = "'.URL .'info";';
       echo "</script>";
     }
    public function updatephone1($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_phone SET phone=:phone WHERE id=1");
       $sql->execute(array(
         ':phone'=>$data['phone']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Phone Number 1 Updated Succesfully");
       window.location.href = "'.URL .'info";';
       echo "</script>";
     }
    public function updatephone2($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_phone SET phone=:phone  WHERE id=2");
       $sql->execute(array(
         ':phone'=>$data['phone']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Phone Number 2 Updated Succesfully");
       window.location.href = "'.URL .'info";';
       echo "</script>";
     }
    public function updateemail($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_email SET email=:email  WHERE id=1");
       $sql->execute(array(
         ':email'=>$data['email']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Email Address Updated Succesfully");
       window.location.href = "'.URL .'info";';
       echo "</script>";
     }

}
