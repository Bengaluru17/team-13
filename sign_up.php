<?php
require "myfirstfile.php";
$name=$_POST["user_name"];
$psswd=$_POST["password"];
$mob=$_POST["mobile"];
$qry="insert into login(username,password,mob) values('$name','$psswd','$mob');";
if($conn->query($qry)===TRUE)
	echo "WElcome";
else
	echo "error. $qry <br> $conn->error";
	
  
?> 