<?php
class Contact_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }

    public function contact($data){
      $sql=$this->db->prepare("INSERT INTO tbl_contact(name,email,phone,message) VALUES (:name,:email,:phone,:message)");
      $sql->execute(array(
        ':name'=>$data['name'],
        ':email'=>$data['email'],
        ':phone'=>$data['phone'],
        ':message'=>$data['message']
      ));
      echo '<script type="text/javascript">';
      echo 'alert("Message Sent");
      window.location.href = "'.URL.'contact";';
      echo "</script>";
    }
    // public function getslider2(){
    //   $sth=$this->db->prepare("SELECT * FROM tbl_backgrounds WHERE id=2");
    //   $sth->setFetchMode(PDO:: FETCH_ASSOC);
    //   $sth->execute(array(
    //   ));
    //   return $sth->fetchAll();
    // }
    // public function getaddress(){
    //   $sth=$this->db->prepare("SELECT * FROM tbl_address");
    //   $sth->setFetchMode(PDO:: FETCH_ASSOC);
    //   $sth->execute(array(
    //   ));
    //   return $sth->fetchAll();
    // }
    // public function getSliderText(){
    //   $sth=$this->db->prepare("SELECT * FROM tbl_text WHERE pageid=1");
    //   $sth->setFetchMode(PDO:: FETCH_ASSOC);
    //   $sth->execute(array(
    //   ));
    //   return $sth->fetchAll();
    // }
    // public function getProImage(){
    //   $sth=$this->db->prepare("SELECT * FROM tbl_proprietress");
    //   $sth->setFetchMode(PDO:: FETCH_ASSOC);
    //   $sth->execute(array(
    //   ));
    //   return $sth->fetchAll();
    // }
    // public function getspeech(){
    //   $sth=$this->db->prepare("SELECT * FROM tbl_speech");
    //   $sth->setFetchMode(PDO:: FETCH_ASSOC);
    //   $sth->execute(array(
    //   ));
    //   return $sth->fetchAll();
    // }
    //
    // public function getspeechheader(){
    //   $sth=$this->db->prepare("SELECT * FROM tbl_speechheader");
    //   $sth->setFetchMode(PDO:: FETCH_ASSOC);
    //   $sth->execute(array(
    //   ));
    //   return $sth->fetchAll();
    // }
}
