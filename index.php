
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		<input  type = "text" required name = "username">
		<input type = "password" required name = "password">
		<button type = "SUBMIT" name="login">Submit</button>
	</form>
</body>
</html>

<?php
//isset is checking whether submit is clicked or not
if (isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];


$conn = mysqli_connect("localhost", "root", "", "quiz");

$sql = "SELECT * FROM users WHERE username = '$username' ";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$password_db = $row["password"];

if ($password_db == $password){
	session_start();
	$_SESSION['user'] = $username;
	$sql = "UPDATE users SET online = 1 WHERE username = '$username'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	header("LOCATION: quiz.php");
}

}

?>