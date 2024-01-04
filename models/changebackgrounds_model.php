<?php
class Changebackgrounds_Model extends Model{

    function __construct()
    {
        parent::__construct();
        Session::init();
    }

    public function updatefirstpagesliderimage1($data){
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
        $image = $_FILES["slider1"]["name"];
        $uploadedfile = $_FILES['slider1']['tmp_name'];
        if ($image) {
          $filename = stripslashes($_FILES['slider1']['name']);
          $extension = getExtension($filename);
          $extension = strtolower($extension);
          if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
            $change = '<div class="msgdiv">Unknown Image extension </div> ';
            $errors = 1;
          }
          else {
            $size = filesize($_FILES['slider1']['tmp_name']);
            if ($size > MAX_SIZE * 1024) {
              $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
              $errors = 1;
            }
            if ($extension == "jpg" || $extension == "jpeg") {
              $uploadedfile = $_FILES['slider1']['tmp_name'];
              $src = imagecreatefromjpeg($uploadedfile);
            }
            else if ($extension == "png") {
              $uploadedfile = $_FILES['slider1']['tmp_name'];
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
             $filename = "public/images/indexslider/" . $data['rand'] . str_replace(' ', '', $_FILES['slider1']['name']);
             //$filename="public/images".$data['paymentimage'];
             imagejpeg($tmp, $filename, 70);
             //  imagejpeg($tmp1,$filename1,100);
             imagedestroy($src);
             imagedestroy($tmp);
             //imagedestroy($tmp1);
           }
         }
       }
       $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:slider1 WHERE id=1 ");
       $sql->execute(array(
         ':slider1'=>$data["urlid"],
       ));
       echo '<script type="text/javascript">';
       echo 'alert("Fitst page Slider 1 Uploaded Succesfully");
       window.location.href = "'.URL .'changebackgrounds";';
       echo "</script>";
     }
     public function updatefirstpagesliderimage2($data){
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
         $image = $_FILES["slider2"]["name"];
         $uploadedfile = $_FILES['slider2']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['slider2']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['slider2']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['slider2']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['slider2']['tmp_name'];
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
              $filename = "public/images/indexslider/" . $data['rand'] . str_replace(' ', '', $_FILES['slider2']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:slider2 WHERE id=2 ");
        $sql->execute(array(
          ':slider2'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("Fitst page Slider 2 Uploaded Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updatefirstpagesliderimage3($data){
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
         $image = $_FILES["slider3"]["name"];
         $uploadedfile = $_FILES['slider3']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['slider3']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['slider3']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['slider3']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['slider3']['tmp_name'];
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
              $filename = "public/images/indexslider/" . $data['rand'] . str_replace(' ', '', $_FILES['slider3']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:slider3 WHERE id=3 ");
        $sql->execute(array(
          ':slider3'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("Fitst page Slider 3 Uploaded Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updatefirstpagesliderimage4($data){
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
         $image = $_FILES["slider4"]["name"];
         $uploadedfile = $_FILES['slider4']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['slider4']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['slider4']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['slider4']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['slider4']['tmp_name'];
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
              $filename = "public/images/indexslider/" . $data['rand'] . str_replace(' ', '', $_FILES['slider4']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:slider4 WHERE id=4 ");
        $sql->execute(array(
          ':slider4'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("Fitst page Slider 4 Uploaded Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updateourservicesimage($data){
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
         $image = $_FILES["services"]["name"];
         $uploadedfile = $_FILES['services']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['services']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['services']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['services']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['services']['tmp_name'];
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
              $filename = "public/images/services/" . $data['rand'] . str_replace(' ', '', $_FILES['services']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:services WHERE id=5 ");
        $sql->execute(array(
          ':services'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("First page Our Services background changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updateourservicesrealimage($data){
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
         $image = $_FILES["servicesimg"]["name"];
         $uploadedfile = $_FILES['servicesimg']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['servicesimg']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['servicesimg']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['servicesimg']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['servicesimg']['tmp_name'];
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
              $filename = "public/images/services/servicesimg/" . $data['rand'] . str_replace(' ', '', $_FILES['servicesimg']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:servicesimg WHERE id=6 ");
        $sql->execute(array(
          ':servicesimg'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("First page Our Services Image changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updatecustomerstestbg($data){
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
         $image = $_FILES["testimony"]["name"];
         $uploadedfile = $_FILES['testimony']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['testimony']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['testimony']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['testimony']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['testimony']['tmp_name'];
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
              $filename = "public/images/testimony/" . $data['rand'] . str_replace(' ', '', $_FILES['testimony']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:testimony WHERE id=7 ");
        $sql->execute(array(
          ':testimony'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("First page Testimony Image changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updatebestteambg($data){
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
         $image = $_FILES["team"]["name"];
         $uploadedfile = $_FILES['team']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['team']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['team']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['team']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['team']['tmp_name'];
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
              $filename = "public/images/team/" . $data['rand'] . str_replace(' ', '', $_FILES['team']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:team WHERE id=8 ");
        $sql->execute(array(
          ':team'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("First page Team Background changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updatepricebg($data){
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
         $image = $_FILES["price"]["name"];
         $uploadedfile = $_FILES['price']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['price']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['price']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['price']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['price']['tmp_name'];
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
              $filename = "public/images/price/" . $data['rand'] . str_replace(' ', '', $_FILES['price']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:price WHERE id=9 ");
        $sql->execute(array(
          ':price'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("First page Price Background changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updateskillsbg($data){
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
         $image = $_FILES["skills"]["name"];
         $uploadedfile = $_FILES['skills']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['skills']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['skills']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['skills']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['skills']['tmp_name'];
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
              $filename = "public/images/skills/" . $data['rand'] . str_replace(' ', '', $_FILES['skills']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:skills WHERE id=10 ");
        $sql->execute(array(
          ':skills'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("First page Skills Background changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updatecontactbg($data){
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
         $image = $_FILES["contact"]["name"];
         $uploadedfile = $_FILES['contact']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['contact']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['contact']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['contact']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['contact']['tmp_name'];
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
              $filename = "public/images/contact/" . $data['rand'] . str_replace(' ', '', $_FILES['contact']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:contact WHERE id=11 ");
        $sql->execute(array(
          ':contact'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("First page Contact Background changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
     public function updatewebsitebg($data){
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
         $image = $_FILES["website"]["name"];
         $uploadedfile = $_FILES['website']['tmp_name'];
         if ($image) {
           $filename = stripslashes($_FILES['website']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['website']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['website']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['website']['tmp_name'];
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
              $filename = "public/images/website/" . $data['rand'] . str_replace(' ', '', $_FILES['website']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }
        $sql=$this->db->prepare("UPDATE tbl_backgrounds SET background=:website WHERE id=12 ");
        $sql->execute(array(
          ':website'=>$data["urlid"],
        ));
        echo '<script type="text/javascript">';
        echo 'alert("Website Background changed Succesfully Succesfully");
        window.location.href = "'.URL .'changebackgrounds";';
        echo "</script>";
      }
    }
