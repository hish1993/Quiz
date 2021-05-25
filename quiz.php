<?php
session_start();
include "connect.php";
$user = $_SESSION['user'];
$game_valid = FALSE;


	$sql = "SELECT * FROM challenge WHERE active = 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	echo "Game ID: #".$row['request_id'];

	$origin_user = $row['origin_user'];
	$target_user = $row['target_user'];

	if ($origin_user == $user || $target_user == $user){
		$game_valid = True;
	}


if ($_SESSION['user'] == NULL){
	header("Location: index.php");
}elseif($game_valid == FALSE){
	header("Location: onlineList.php");
}else{


?>


<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
<style>
	#OnlineList{
		float: right
	}
</style>

</head>
<body>

	<div id = "QuestionContainer">
		<h1 id = "score">Score = 0</h1>
		<p id = "QuestionText"></p>
		<input id = "input" autocomplete="off">
		<button id = "submit" onclick="checkAnswer()">Submit</button>
	</div>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script>

	inactivateMatch();

	var questionNumber = 1;
	var score = 0;
	var Data
	var Id;
	var User

	$.ajax({
		type: "GET",
		url: "loadQuestions.php",
		success: function (data) {
			Data = JSON.parse("["+data.substring(0,data.length-1)+"]")
			loadQuestion()
		}
	})


	function loadQuestion(){
		checkIfEndOfQuiz()
		Id = Math.floor(Math.random()*Data.length)
		$("#QuestionText").html(questionNumber+ ". " +(Data[Id]["question"]))
	}


	function checkAnswer(){
			questionNumber++;
		if ($("#input").val() == Data[Id]["answer"]){
			loadQuestion();
			$("#input").val("")
			score = score + 1;
			$("#score").text("Score = "+score)
		} else{
			loadQuestion();
			$("#input").val("")
			score = 0;
			$("#score").text("Score = "+score)
		}
	}

	function checkIfEndOfQuiz(){
		if (questionNumber >10){
			window.location.href = "onlineList.php"
		}
	}

	function inactivateMatch(){
		$.get("setActiveMatch.php", {request_id:<?php Print $row['request_id']; ?>, active_status:0}, function(data){
			console.log(data)
		})

	}	

	window.onbeforeunload = function() {
	  return "Game will be lost if you leave the page, are you sure?";
	};


</script>
</html>

<?php
}
?>