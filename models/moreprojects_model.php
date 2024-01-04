<?php
class Moreprojects_Model extends Model{

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
  public function settings(){
    $sql=$this->db->prepare("SELECT * FROM tbl_settings");
    $sql->execute(array(
    ));
    return $sql->fetchAll();

  }
  public function projects(){
    $sql=$this->db->prepare("SELECT * FROM tbl_projects");
    $sql->execute(array(
    ));
    return $sql->fetchAll();

  }
  public function getproject($data){
    $sql=$this->db->prepare("SELECT * FROM tbl_projects WHERE id=:id");
    $sql->execute(array(
      ':id'=>$data['id']
    ));
    return $sql->fetchAll();

  }





}
