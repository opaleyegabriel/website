<?php
class Changetext_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }
    public function updateservicessubtxt($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_text SET txt=:txt WHERE id=1 ");
       $sql->execute(array(
         ':txt'=>$data['servicessubtxt']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Index Page Our Services Subtext Changed Succesfully");
       window.location.href = "'.URL .'changetext";';
       echo "</script>";
     }
    public function updatecustomerssubtxt($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_text SET txt=:txt WHERE id=2 ");
       $sql->execute(array(
         ':txt'=>$data['customerssubtxt']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Index Page Our Customers Subtext Changed Succesfully");
       window.location.href = "'.URL .'changetext";';
       echo "</script>";
     }
    public function updateteamsubtxt($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_text SET txt=:txt WHERE id=3 ");
       $sql->execute(array(
         ':txt'=>$data['teamsubtxt']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Index Page Our Team Subtext Changed Succesfully");
       window.location.href = "'.URL .'changetext";';
       echo "</script>";
     }
    public function updatepricessubtxt($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_text SET txt=:txt WHERE id=4 ");
       $sql->execute(array(
         ':txt'=>$data['pricessubtxt']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Index Page Our Price Subtext Changed Succesfully");
       window.location.href = "'.URL .'changetext";';
       echo "</script>";
     }
    public function updateskillssubtxt($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_text SET txt=:txt WHERE id=5 ");
       $sql->execute(array(
         ':txt'=>$data['skillssubtxt']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Index Page Skills Subtext Changed Succesfully");
       window.location.href = "'.URL .'changetext";';
       echo "</script>";
     }
    public function updatecontactsubtxt($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("UPDATE tbl_text SET txt=:txt WHERE id=6 ");
       $sql->execute(array(
         ':txt'=>$data['contactsubtxt']
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Index Page Contact Subtext Changed Succesfully");
       window.location.href = "'.URL .'changetext";';
       echo "</script>";
     }

}
