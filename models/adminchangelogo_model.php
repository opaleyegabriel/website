<?php
class Adminchangelogo_Model extends Model{

  function __construct()
  {
    parent::__construct();
    Session::init();
  }

  public function changelogo($data){
    /*echo "i'm a model, see your records below";
    echo "<pre>";
    print_r($data);}*/
    $change = "";
    $abc = "";
    define("MAX_SIZE", "6000");
    function getExtension($str){
      $i = strrpos($str, ".");
      if (!$i) {
        return "";
      }
      $l = strlen($str) - $i;
      $ext = substr($str, $i + 1, $l);
      return $ext;
    }
    $errors = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //image1
      $image = $_FILES["logo"]["name"];
      $uploadedfile = $_FILES['logo']['tmp_name'];
      if ($image) {
        $filename = stripslashes($_FILES['logo']['name']);
        $extension = getExtension($filename);
        $extension = strtolower($extension);
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
          $change = '<div class="msgdiv">Unknown Image extension </div> ';
          $errors = 1;
        }
        else {
          $size = filesize($_FILES['logo']['tmp_name']);
          if ($size > MAX_SIZE * 1024) {
            $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
            $errors = 1;
          }
          if ($extension == "jpg" || $extension == "jpeg") {
            $uploadedfile = $_FILES['logo']['tmp_name'];
            $src = imagecreatefromjpeg($uploadedfile);
          }
          else if ($extension == "png") {
            $uploadedfile = $_FILES['logo']['tmp_name'];
            $src = imagecreatefrompng($uploadedfile);
          }
          else {
            $src = imagecreatefromgif($uploadedfile);
          }
          // echo $scr;
          list($width, $height) = getimagesize($uploadedfile);
          $newwidth = 500;
          $newheight = ($height / $width) * $newwidth;
          $tmp = imagecreatetruecolor($newwidth, $newheight);
          $newwidth1 = 80;
          $newheight1 = ($height / $width) * $newwidth1;
          $tmp1 = imagecreatetruecolor($newwidth1, $newheight1);
          imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
          imagecopyresampled($tmp1, $src, 0, 0, 0, 0, $newwidth1, $newheight1, $width, $height);
          $filename = "public/images/" . $data['rand'] . str_replace(' ', '', $_FILES['logo']['name']);
          //$filename="public/images".$data['paymentimage'];
          imagejpeg($tmp, $filename, 70);
          //  imagejpeg($tmp1,$filename1,100);
          imagedestroy($src);
          imagedestroy($tmp);
          //imagedestroy($tmp1);
        }
      }
    }

    $query=$this->db->prepare("SELECT * FROM tbl_settings");
    $query->execute(array(
    ));
    $result=$query->fetch();
    $rows=$query->rowCount();
    if($rows > 0){
      $sql=$this->db->prepare("UPDATE tbl_settings SET logo=:logo WHERE id=1 ");
      $sql->execute(array(
        ':logo'=>$data["urlid"],
      ));
    }
    else{
      $sql=$this->db->prepare("INSERT INTO tbl_settings (logo) VALUES (:logo)  ");
      $sql->execute(array(
        ':logo'=>$data["urlid"],
      ));
    }
    echo '<script type="text/javascript">';
    echo 'alert("Logo changed successfully");
    window.location.href = "'.URL .'adminchangelogo";';
    echo "</script>";
  }


  public function viewlogo(){
    $sql=$this->db->prepare("SELECT logo FROM tbl_settings");
    $sql->execute(array(
    ));
    return $sql->fetchAll();

  }



}
