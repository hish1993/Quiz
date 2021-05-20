<?php

include "connect.php";

$sql = "SELECT * FROM challenge WHERE accepted = 1";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	echo json_encode($row).",";
};


?>