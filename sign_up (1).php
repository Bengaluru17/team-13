<?php
$db_name = "id1033810_cfg";
$mysql_user = "id1033810_madhupriya";
$mysql_pass = "madhu2605";
$server_name = "localhost";

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$con){
	echo '{"message":"Unable to connect to the database."}';
}
else{
    echo "connection success";

$name="hhhh";
$psswd="larika";

$qry="insert into register(username,password) values('$name','$psswd');";
if($conn->query($qry)===TRUE)
	echo "WElcome";
else
	echo "error. $qry <br> $conn->error";
	
  }
?>