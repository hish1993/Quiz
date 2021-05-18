<?php
session_start();
if ($_SESSION['user'] == NULL){
	header("Location: index.php");
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

	<div id = "OnlineList">
		<h3>Users Online</h3>

	</div>

	<div id = "QuestionContainer">
		<h1 id = "score">Score = 0</h1>
		<p id = "QuestionText"></p>
		<input id = "input" autocomplete="off">
		<button id = "submit" onclick="checkAnswer()">Submit</button>
	</div>


</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script>
	var score = 0;
	var Data
	var OnlineList
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

	$.ajax({
		type: "GET",
		url: "getOnlineList.php",
		success: function (data) {
			OnlineList = JSON.parse("["+data.substring(0,data.length-1)+"]")
			loadOnlineList()
		}
	})

	function loadQuestion(){
		Id = Math.floor(Math.random()*Data.length)
		$("#QuestionText").html((Data[Id]["question"]))
	}

	function loadOnlineList(){
		for (var i = 0; i<OnlineList.length; i++){
			if (OnlineList[i]["online"] == 1 && OnlineList[i]["username"] != "<?php Print($_SESSION['user']); ?>"){
				$("#OnlineList").append("<li><p>"+OnlineList[i]["username"]+"</p></li>")
			}
		}
	}

	function checkAnswer(){
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


</script>
</html>

<?php
}
?>