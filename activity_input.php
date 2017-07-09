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
$act = $_POST["activityText"];
$str_date = $_POST["startDateText"];
$end_date= $_POST["endDateText"];
$loc= $_POST["locationText"];
$pur= $_POST["purposeText"];
$target= $_POST["targetText"];
$no_en= $_POST["numberEngagedText"];
$res_s= $_POST["responseShelterText"];
$res_w= $_POST["responseWomenText"];
$photos= $_POST["future_plans"];
$amt= $_POST["amountSpentText"];


$sql = "INSERT INTO Activity(`activity`, `Start_date`, `end_date`, `location`, `purpose`, `target`, `number_engaged`, `response_s`, `response_w`, `photo`, `amt_spent`) values('$act','$str_date','$end_date','$loc','$pur','$target','$no_en','$res_s','$res_w','$photos','$amt') ";

if($con->query( $sql)===TRUE)
{
echo "success";
}
else
{
echo "failed";
}

?>