<?php
// connect to database
$con = mysqli_connect("localhost","root","","practice");

//test connection
if(mysqli_connect_errno()){
  echo 'failed to coonect: '.mysqli_connect_errno();
}



?>
