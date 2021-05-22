<?php

	include "connect.php";
	session_start();
	$origin_user = $_GET['origin_user'];
	$target_user = $_GET['target_user'];
	$date_of_quiz = $_GET['date_of_quiz'];

	$sql = "INSERT INTO challenge (origin_user, target_user, date_of_quiz, accepted) VALUES ('$origin_user', '$target_user', '$date_of_quiz', 0)";
	if (mysqli_query($conn, $sql)){
		echo "You have challenged ".$target_user.". Awaiting response...";
	}else{
		echo mysqli_error($conn);
	}

?>