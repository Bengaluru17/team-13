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
$s_id = $_POST["sid"];
$location = $_POST["vid"];
$s_i= $_POST["contact"];
$expenses= $_POST["education"];
$savings= $_POST["v_training"];
$rel_house= $_POST["background"];
$rel_neigh= $_POST["duration"];
$Photos_i= $_POST["cur_sal"];
$Photos_o= $_POST["cur_loc"];
/*
$s_id = $_POST["sid"];
$location = $_POST["vid"];
$s_i= $_POST["contact"];
$expenses= $_POST["education"];
$savings= $_POST["v_training"];
$rel_house= $_POST["background"];
$rel_neigh= $_POST["duration"];
$Photos_i= $_POST["cur_sal"];
$Photos_o= $_POST["cur_loc"];
*/
$sql = "INSERT INTO Ind_living(`s_id`, `location`, `s_i`, `expenses`, `savings`, `rel_house`, `rel_neigh`, `Photos_i`, `Photos_o`) values('$s_id','$location','$s_i','$expenses','$savings','$rel_house','$rel_neigh','$Photos_i','$Photos_o')";

if($con->query( $sql)===TRUE)
{
echo "success";
}
else
{
echo "failed";
}

?>