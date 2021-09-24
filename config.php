<?php

$server ="localhost";
$user = "root";
$password = "";
$db = "reg_form";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error)
{
	echo $conn->mysql_error;
	exit();
}

?>