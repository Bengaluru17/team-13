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
$skil=$_POST["skill"];
$sql="SELECT S.Name,S.S_id from S_survivor S, skillset K where S.S_id=K.s_id AND K.skill=$skil";
$res=$con->query( $sql);
if(mysql_num_rows($res)!=0) {
    while($rowData = mysql_fetch_array($res)) {
        var_dump($rowData);
    }
}
else
{
echo "failed";
}

?>