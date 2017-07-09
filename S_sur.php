<?php 
error_reporting(0);
require "init.php";
$s_id = $_POST["sid"];
$name= $_POST["nameText"];
$dob= $_POST["dobText"];
$photo= $_POST["photo"];
$sql = "INSERT INTO S_survivor values('$s_id','$name','$dob','$photo') ";
mysqli_query($con, $sql);
?>