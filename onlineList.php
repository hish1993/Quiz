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
$sql = "SELECT * FROM challenge";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){   

	if ($row['accepted'] == 0 && $row['target_user'] == $user && new DateTime($row['date_of_quiz']) > new DateTime("now")){
		echo "<p>".$row['target_user']."&emsp;<button id = 'acceptChallenge' onclick = 'acceptChallenge(&quot;".$row['request_id']."&quot;)'>Accept Challenge</button></p>";
	}
}
?>

<div id="feed">

</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script>

var upcomingMatches

function submitChallenge(user){
	var targetUser = $('#targetUser').val()
	$.get("submitChallenge.php",{origin_user: user, target_user: $('#targetUser').val(), date_of_quiz: $('#dateofquiz').val()}, function (output){
		$('#feed').append(output)
	})
}

function acceptChallenge(id){
	$.get("acceptChallenge.php", {request_id:id}, function(data){
		console.log(data)
	})
	window.location.href = "onlineList.php";
}

function loadUpcomingMatches(){

	function millisecondsToDaysHoursMinsSeconds(ms){
    days = Math.floor(ms / (24*60*60*1000));
    daysms=ms % (24*60*60*1000);
    hours = Math.floor((daysms)/(60*60*1000));
    hoursms=ms % (60*60*1000);
    minutes = Math.floor((hoursms)/(60*1000));
    minutesms=ms % (60*1000);
    sec = Math.floor((minutesms)/(1000));
    return days+" days "+hours+" hours "+minutes+" mins "+sec+" secs";
}

	for (var i = 0; i<upcomingMatches.length; i++){
		var now = new Date();
		var datetimeOfQuiz = new Date(upcomingMatches[i]["date_of_quiz"]);
		var difference = datetimeOfQuiz - now
		if (difference>0){
			$("#feed").append("<p>The match with "+upcomingMatches[i]["target_user"]+ " starts in "+ millisecondsToDaysHoursMinsSeconds(difference)+"</p>")
		}
	}
}

	$.ajax({
		type: "GET",
		url: "loadUpcomingMatches.php",
		success: function (data) {
			upcomingMatches = JSON.parse("["+data.substring(0,data.length-1)+"]")
			loadUpcomingMatches()		
		}
	})
</script>

<?php
}//for line 5 else statement
?>