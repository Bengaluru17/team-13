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
$s_id = $_POST["sidText"];
$v_id = $_POST["vidText"];
$contact= $_POST["contactText"];
$education= $_POST["eduText"];
$v_training= $_POST["v_training"];
$background= $_POST["background"];
$duration= $_POST["duration"];
$cur_sal= $_POST["cur_sal"];
$cur_loc= $_POST["cur_loc"];
$future_plans= $_POST["future_plans"];
$remarks= $_POST["remarks"];
/*
$s_id = '156';
$v_id = '10';
$contact= '24433';
$education= 'jhdfdj';
$v_training= 'yes';
$background= 'jjsdsh';
$duration='1';
$cur_sal= '23';
$cur_loc= 'jjh';
$future_plans= 'jk';
$remarks= 'hgb';
$act='sds';*/
$sql = "INSERT INTO D_survivor('S_id', 'V_id', `contact`, `education`, `voc_training`, `background`, `duration`, `current_salary`, `cur_loc`, `future_plan`, `remarks`,'activity') values('$s_id','$v_id','$contact','$education','$v_training','$background','$duration','$cur_sal','$cur_loc','$future_plans','$remarks','$act') ";

if($con->query( $sql)===TRUE)
{
echo "success";
}
else
{
echo "failed";
}

?>