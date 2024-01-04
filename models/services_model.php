<?php
class Services_Model extends Model{

    function __construct()
    {
        parent::__construct();
        // Session::init();
    }
    public function saveservice($data){
      /*echo "i'm a model, see your records below";
       echo "<pre>";
       print_r($data);}*/
       $sql=$this->db->prepare("INSERT INTO tbl_services (serviceheader, service)
      VALUES (:serviceheader, :service)");
       $sql->execute(array(
         ':serviceheader'=>$data['serviceheader'],
         ':service'=>$data['service']

       ));
       echo '<script type="text/javascript">';
       echo 'alert("Services Uploaded Succesfully");
       window.location.href = "'.URL .'services";';
       echo "</script>";
     }


}
