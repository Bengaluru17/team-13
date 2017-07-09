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



$sqll =  INSERT INTO `D_survivor` (`S_id`, `V_id`, `contact`, `education`, `voc_training`, `background`, `duration`, `current_salary`, `cur_loc`, `future_plan`, `remarks`, `I_L`, `act`, `next_visit`) VALUES ('24', '20', '00013', 'dsdfds', 'dfsd', 'ewdsd', '23', '23213', 'fdsdf', 'dffdf', 'fdfdf', '18', 'sds', '1216-12-12');

if ($con->query( $sqll) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqll . "<br>" . mysqli_error($con);
}

$con->close();

?>