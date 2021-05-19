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

<?php
echo "<select id = 'targetUser'>";
while ($row = mysqli_fetch_array($result)) {

	echo "<option value = ".$row['username'].">".$row['username']."</option>";

}

echo "</select>";
echo "<input type = 'datetime-local' id = 'dateofquiz'>";
echo "<button type = 'submit' onclick = 'submitChallenge(&quot;".$user."&quot;)'>Submit</button>";
?>


<div id = "challengeRequests">
<?php
$sql = "SELECT * FROM challenge WHERE active = 1 AND target_user = '$user'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){
	echo "<p>".$row['target_user']."&emsp;<button id = 'acceptChallenge' onclick = 'acceptChallenge(&quot;".$row['request_id']."&quot;)'>Accept Challenge</button></p>";
}
?>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script>

function submitChallenge(user){
	var targetUser = $('#targetUser').val()
	$.get("submitChallenge.php",{origin_user: user, target_user: $('#targetUser').val(), date_of_quiz: $('#dateofquiz').val()}, function (output){
		$('#challengeRequests').append(output)
	})
}

function acceptChallenge(id){
	$.get("acceptChallenge.php", {request_id:id}, function(data){
		console.log(data)
	})
	window.location.href = "onlineList.php";
}
</script>

<?php
}//for line 5 else statement
?>