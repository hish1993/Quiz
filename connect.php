<?php

$conn = mysqli_connect("localhost", "root", "", "quiz");

if (!$conn){
	echo "Not connected to database!";
}

?>