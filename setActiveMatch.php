<?php

include "connect.php";
session_start();
$request_id = $_GET["request_id"];
$active_status = $_GET["active_status"];

$sql = "UPDATE challenge SET active = '$active_status' WHERE request_id = '$request_id'";
if (mysqli_query($conn, $sql)){
		echo "Match is active!";
	}else{
		echo mysqli_error($conn);
	}

?>