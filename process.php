<?php
include 'database.php' ;
//check it from submitted
if(isset($_POST['submit'])){
  $user = mysqli_real_escape_string($con, $_POST['user']);
  $message = mysqli_real_escape_string($con, $_POST['message']);

 //set timezone
 date_default_timezone_set('Asia/Calcutta');
 $time = date('h:i:s a', time());

 //validate input
 if(!isset($user) || $user == "" || !isset($message) || $message == ""){
    $error = "please fill in the name and message";
    header("location: practice.php?error=".urlencode($error));
    exit();
}else{
  $query= "INSERT INTO practices (user, message, time)
              VALUES ('$user','$message','$time')";

      if(!mysqli_query($con, $query)){
        die('Error:'.mysqli_error($con));
      }else{
        header("location: practice.php");
        exit();
      }
}
}



?>
