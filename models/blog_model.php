<?php
class Blog_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }
    public function getpost(){
      if (isset($_GET["pageno"])) {
        $pageno=$_GET["pageno"];
        $sql=$this->db->prepare( "SELECT * FROM tbl_post");
        $sql->execute(array(
        ));
        $result=$sql->fetch();
        $rows=$sql->rowCount();
      }
      else {
        $pageno=1;
        $sql=$this->db->prepare( "SELECT * FROM tbl_post");
        $sql->execute(array(
        ));
        $result=$sql->fetch();
        $rows=$sql->rowCount();
      }
      $no_of_records_per_page=2;
      $get_total_no_of_pages=$rows/$no_of_records_per_page;
      $tnopages=ceil($get_total_no_of_pages);
      $GLOBALS['blogtnopages']=$tnopages;
      $GLOBALS['blogpageno']=$pageno;
      //echo "<script>";
      //echo "alert($pageno)";
      //echo "</script>";
      $offset=($pageno-1) * $no_of_records_per_page;
      $pagelink="";
        $sth=$this->db->prepare("SELECT * FROM tbl_post LIMIT $offset,$no_of_records_per_page ");
        $sth->setFetchMode(PDO:: FETCH_ASSOC);
        $sth->execute(array(
        ));
      return $sth->fetchAll();
    }
    public function getposttitle($data){
      $sth=$this->db->prepare("SELECT  * FROM tbl_post WHERE NOT id=:id LIMIT 8 ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
        ':id'=>$data['id']
      ));
      return $sth->fetchAll();
    }
    public function getfullpost($data){
      $sth=$this->db->prepare("SELECT * FROM tbl_post WHERE id=:id");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
        ':id'=>$data['id']
      ));
      return $sth->fetchAll();
    }
    public function getcomment($data){
      $sth=$this->db->prepare("SELECT * FROM tbl_comment  WHERE postid=:id ORDER BY id DESC ");
      $sth->setFetchMode(PDO:: FETCH_ASSOC);
      $sth->execute(array(
        ':id'=>$data['id']
      ));
      return $sth->fetchAll();
    }
    public function save($data){
      $sql=$this->db->prepare("INSERT INTO tbl_comment(postid, name, email, phone, comment) VALUES (:postid,:name,:email, :phone, :comment )");
      $sql->execute(array(
        ':postid'=>$data['postid'],
        ':name'=>$data['name'],
        ':email'=>$data['email'],
        ':phone'=>$data['phone'],
        ':comment'=>$data['comment']
      ));
      if ($sql) {
        // code...
        $res = [
          'status' => 200,
          'message' => 'Comment Submitted successfully '
        ];
        echo json_encode($res);
        return false;
      }else {
        // code...
        $res = [
          'status' => 500,
          'message' => 'Comment Not Submitted '
        ];
        echo json_encode($res);
        return false;
      }
    }

}
