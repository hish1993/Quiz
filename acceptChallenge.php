<?php

include "connect.php";

$request_id = $_GET["request_id"];

$sql = "UPDATE challenge SET accepted = 1 WHERE request_id = '$request_id'";
if (mysqli_query($conn, $sql)){
		echo "Challenge Accepted.";
	}else{
		echo mysqli_error($conn);
	}

?>