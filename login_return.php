<?php
$db_name = "id1033810_cfg";
$mysql_user = "id1033810_madhupriya";
$mysql_pass = "madhu2605";
$server_name = "localhost";
$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$con){
	echo '{"message":"Unable to connect to the database."}';
}
else
{
$sql=" SELECT * from login where Name like 'larika' and Passcode like 'larika';";
$res=$con->query( $sql);
if(mysqli_num_rows($res)>0)
echo "success";
echo "test";
}

?>