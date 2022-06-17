<?php
 include_once "../config/db.php";
 include_once "script.php";

//instantiate database object
$database = new Database();
$db = $database->connect();

//instantiate user object
$user = new User($db);

if(isset($_POST['trackFrom'])){
    $post = filter_var_array($_POST,FILTER_SANITIZE_STRING);
    $track =     $post['tracking_no'];

   if($track){
       if($user->singleClientTrack('tracking',$track) == 'not found'){
          header("location:../../my-account/application/index.php?error");
       }elseif($user->singleClientTrack('tracking',$track)){
            header("location:../../my-account/application/success.php?data=$track");
       }
   }
    
}

?>