<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "prabha_db";
$db_conn = "";

$db_conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if($db_conn){
    echo "Congratulation !!!, You are Connected with mysql Database !<br>";
}else{
    echo "Sorry !!!, We could not connect with database !<br>";
}
?>