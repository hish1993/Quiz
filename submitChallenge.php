<?php

	include "connect.php";

	$origin_user = $_GET['origin_user'];
	$target_user = $_GET['target_user'];
	$date_of_quiz = $_GET['date_of_quiz'];

	$sql = "INSERT INTO challenge (origin_user, target_user, date_of_quiz, active) VALUES ('$origin_user', '$target_user', '$date_of_quiz', 1)";
	if (mysqli_query($conn, $sql)){
		echo "You have challenged ".$target_user;
	}else{
		echo mysqli_error($conn);
	}

?>