<?php
class Prices_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }
    public function saveprice($data){
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
         $image1 = $_FILES["picture1"]["name"];
         $uploadedfile = $_FILES['picture1']['tmp_name'];
         if ($image1) {
           $filename = stripslashes($_FILES['picture1']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['picture1']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['picture1']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['picture1']['tmp_name'];
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
              $filename = "public/images/projects/" . $data['rand'] . str_replace(' ', '', $_FILES['picture1']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
         //image2
         $image2 = $_FILES["picture2"]["name"];
         $uploadedfile = $_FILES['picture2']['tmp_name'];
         if ($image2) {
           $filename = stripslashes($_FILES['picture2']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['picture2']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['picture2']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['picture2']['tmp_name'];
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
              $filename = "public/images/projects/" . $data['rand'] . str_replace(' ', '', $_FILES['picture2']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
         //image3
         $image3 = $_FILES["picture3"]["name"];
         $uploadedfile = $_FILES['picture3']['tmp_name'];
         if ($image3) {
           $filename = stripslashes($_FILES['picture3']['name']);
           $extension = getExtension($filename);
           $extension = strtolower($extension);
           if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
             $change = '<div class="msgdiv">Unknown Image extension </div> ';
             $errors = 1;
           }
           else {
             $size = filesize($_FILES['picture3']['tmp_name']);
             if ($size > MAX_SIZE * 1024) {
               $change = '<div class="msgdiv">You have exceeded the size limit!</div> ';
               $errors = 1;
             }
             if ($extension == "jpg" || $extension == "jpeg") {
               $uploadedfile = $_FILES['picture3']['tmp_name'];
               $src = imagecreatefromjpeg($uploadedfile);
             }
             else if ($extension == "png") {
               $uploadedfile = $_FILES['picture3']['tmp_name'];
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
              $filename = "public/images/projects/" . $data['rand'] . str_replace(' ', '', $_FILES['picture3']['name']);
              //$filename="public/images".$data['paymentimage'];
              imagejpeg($tmp, $filename, 70);
              //  imagejpeg($tmp1,$filename1,100);
              imagedestroy($src);
              imagedestroy($tmp);
              //imagedestroy($tmp1);
            }
          }
        }

       $sql=$this->db->prepare("INSERT INTO tbl_prices (name, price, address, description1, description2, description3, description4, description5, description6, picture1, picture2, picture3)
      VALUES (:name, :price, :address, :description1, :description2, :description3, :description4, :description5, :description6, :picture1, :picture2, :picture3)");
       $sql->execute(array(
         ':name'=>$data['name'],
         ':price'=>$data['price'],
         ':address'=>$data['address'],
         ':description1'=>$data['description1'],
         ':description2'=>$data['description2'],
         ':description3'=>$data['description3'],
         ':description4'=>$data['description4'],
         ':description5'=>$data['description5'],
         ':description6'=>$data['description6'],
         ':picture1'=>$data['urlid1'],
         ':picture2'=>$data['urlid2'],
         ':picture3'=>$data['urlid3']

       ));
       echo '<script type="text/javascript">';
       echo 'alert("Price Uploaded Succesfully");
       window.location.href = "'.URL .'prices";';
       echo "</script>";
     }


}
