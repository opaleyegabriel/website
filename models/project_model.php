<?php
class Project_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }
    public function getproject(){
      $sth=$this->db->prepare("SELECT * FROM tbl_prices ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
      ));
      return $sth->fetchAll();
    }
    public function getprojectdetails($data){
      $sth=$this->db->prepare("SELECT * FROM tbl_prices WHERE id=:id ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
        ':id'=>$data["id"]
      ));
      return $sth->fetchAll();
    }


}
