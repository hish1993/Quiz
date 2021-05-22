<?php
date_default_timezone_set('Europe/London');
include "connect.php";
session_start();
$user = $_SESSION['user'];
$now = date('Y-M-D H:I:s');
$sql = "SELECT * FROM challenge WHERE accepted = 1 && (origin_user='$user' || target_user='$user') ORDER BY date_of_quiz ASC";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	if (new DateTime($row['date_of_quiz']) > new DateTime("now")){
			echo json_encode($row).",";
	}

};


?>