<?php

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "findroom";

$conn= mysqli_connect($servername,$db_username, $db_password, $dbname);
if(!$conn){
    die(mysqli_error($conn));
}

?>