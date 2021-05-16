<?php

$conn = mysqli_connect("localhost", "root", "", "quiz");

$sql = 'SELECT * FROM `users`';
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	echo json_encode($row).",";
};


?>