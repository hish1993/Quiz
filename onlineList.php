<?php
session_start();
if ($_SESSION['user'] == NULL){
	header("Location: index.php");
}else{

include "connect.php";

$user = $_SESSION['user'];

$sql = "SELECT * FROM users WHERE username != '$user'";
$result = mysqli_query($conn, $sql);
?>

<form method = "POST">

<select name = "targetUser" required>
<?php
while ($row = mysqli_fetch_array($result)) {
?>
<option value = "<?php Print $row['username'];?>"><?php Print $row['username'];?></option>
<?php
};
?>
</select>

<input type = "datetime-local" name = "dateofquiz" required>
<button type = "submit" name = "submit">Submit</button>

</form>


<div id = "challengeRequests">
<?php
$sql = "SELECT * FROM challenge WHERE active = 1 AND target_user = '$user'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){
	echo "<p>".$row['target_user']."&emsp;<button id = 'acceptChallenge' onclick = 'acceptChallenge(".$row['request_id'].")'>Accept Challenge</button></p>";
}
?>
</div>

<?php
if (isset ($_POST['submit'])){
	$targetUser = $_POST['targetUser'];
	$dateofquiz = $_POST['dateofquiz'];

	$sql = "INSERT INTO challenge (origin_user, target_user, date_of_quiz, active) VALUES ('$user', '$targetUser', '$dateofquiz', 1)";
	if (mysqli_query($conn, $sql)){
		echo "Challenge Submitted.";
	}else{
		echo mysqli_error($conn);
	}
}
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script>

function acceptChallenge(id){
	$.get("sendChallenge.php", {request_id:id}, function(data){
		console.log(data)
	})
	window.location.href = "onlineList.php";
}
</script>

<?php
}//for line 5 else statement
?>