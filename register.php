<?php 
error_reporting(0);

$db_name = "id1033810_cfg";
$mysql_user = "id1033810_madhupriya";
$mysql_pass = "madhu2605";
$server_name = "localhost";

$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$con){
	echo '{"message":"Unable to connect to the database."}';
}
else
    echo "connection success";

$usr = $_POST["username"];
$pwd = $_POST["password"];
/*
$usr = "abjfh";
$pwd = "7r7fee";

*/

$sql = "INSERT INTO register('username', 'password') values('$usr','$pwd') ";

if($con->query( $sql)===TRUE)
{
echo "success";
}
else
{
echo "failed";
}

?>