<?php
class Myadminlogin_Model extends Model{

    function __construct()
    {
        parent::__construct();
        Session::init();
    }
    public function username($data){
      $sql=$this->db->prepare("SELECT username FROM tbl_webadmin WHERE username=:username");
      $sql->execute(array(
        ':username'=>$data['username'],
        ));
        $result=$sql->fetch();
        $rows=$sql->rowCount();
        if($rows > 0){
        //  Session::set('cooperative',$_POST['cooperative']);
          $message="User successfully found";
          $found_status="Yes";
          $dat=array('message'=>$message,'found_status'=>$found_status);
          echo json_encode($dat);
        }
        else{
          $message="User not found";
          $found_status="No";
          $dat=array('message'=>$message,'found_status'=>$found_status);
          echo json_encode($dat);
        }
      }
      public function login($data){
     $sql=$this->db->prepare("SELECT * FROM tbl_webadmin WHERE  username=:user AND password=:pwd ");
     $sql->execute(array(
       ':user'=>$data['username'],
       ':pwd'=>$data['password']
       ));
       $result=$sql->fetch();
       $rows=$sql->rowCount();
       if($rows > 0){
         Session::set('loggedIn',true);
         Session::set('currentadmin',$data['username']);
         $message="User successfully found";
         $found_status="Yes";
         $dat=array('message'=>$message,'found_status'=>$found_status);
         echo json_encode($dat);
       }
       else{
         $message="User not found";
         $found_status="No";
         $dat=array('message'=>$message,'found_status'=>$found_status);
         echo json_encode($dat);
       }
     }
}
