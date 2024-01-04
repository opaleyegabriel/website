<?php
class About_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }
    public function getwebsitebg(){
      $sth=$this->db->prepare("SELECT * FROM tbl_backgrounds WHERE backgroundcategory='All' AND id=12 ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
      ));
      return $sth->fetchAll();
    }
    public function getabtpicture(){
      $sth=$this->db->prepare("SELECT * FROM tbl_aboutpicture ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
      ));
      return $sth->fetchAll();
    }
    public function getabtcontent(){
      $sth=$this->db->prepare("SELECT * FROM tbl_aboutcontent ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
      ));
      return $sth->fetchAll();
    }
    public function getabtheader(){
      $sth=$this->db->prepare("SELECT * FROM tbl_aboutheader ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
      ));
      return $sth->fetchAll();
    }
    public function getcustomers(){
      $sth=$this->db->prepare("SELECT * FROM tbl_testimony ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
      ));
      return $sth->fetchAll();
    }
}
