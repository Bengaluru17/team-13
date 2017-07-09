<?php 
error_reporting(0);

$db_name = "id1033810_cfg";
$mysql_user = "id1033810_madhupriya";
$mysql_pass = "madhu2605";
$server_name = "localhost";

$con =new mysqli($server_name, $mysql_user, $mysql_pass, $db_name);
if(!$con){
	echo '{"message":"Unable to connect to the database."}';
}
else
    echo "connection success";



if($con->query("UPDATE D_survivor SET  contact=$, education=$, voc_training=$, background=$, duration=$, current_salary=$, cur_loc=$,future_plan=$, remarks=$, ts=$, I_L=$, act=$, next_visit=$ where S_id=$id"))
{
   echo "sid";
} else {
    echo "Error: " . $sqll . "<br>" . mysqli_error($con);
}

$con->close();

?>