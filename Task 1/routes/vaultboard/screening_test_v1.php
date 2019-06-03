<!DOCTYPE html>
<html>
<head>
<title>VB</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<script "text/javascript">
	function setQuestion(x){
		console.log (x.value);
		if(x.value == "Audio"){
			document.getElementById("video").style.display = "none";
			document.getElementById("audio").style.display = "block";
			document.getElementById("text").style.display = "none";
		}else if(x.value == "Video"){
			document.getElementById("video").style.display = "block";
			document.getElementById("audio").style.display = "none";
			document.getElementById("text").style.display = "none";
		}else{
			document.getElementById("video").style.display = "none";
			document.getElementById("audio").style.display = "none";
			document.getElementById("text").style.display = "block";
		}
	}
</script>
</head>
<body>
<?php
include 'connect.php';
session_start();
	$jobid = $_SESSION["job_id"];
		echo $jobid;
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		echo "<script>console.log( 'inside post');</script>";
		
		$questiontype = $_POST["qType"];
		if($questiontype == "Text"){
		$question=$_POST["questionT"];
		$timeduration = 0;
			}
		if($questiontype == "Audio"){
		$question=$_POST["questionA"];
		$timeduration = $_POST["timedurationA"];
			}
		if($questiontype == "Video"){
		$question=$_POST["questionV"];
		$timeduration = $_POST["timedurationV"];
			}	
	
	$query="insert into screeningquestion(Jobid,question_type,question,timeduration) values('$jobid','$questiontype','$question','$timeduration')";


	echo '<script>console.log( "query: ' . $query . '" );</script>';

	$result=$conn->query($query);
	if($result){
		echo "<div class='alert alert-success'>Question add successfully, to add more question click 'ADD' button
		</div>";
	}}
?>
<div class="container">
				<div class="card">
				<h2 class = "text-center card-header">Add Question</h2>
			<form method = "post">
			<div class="form-group">
                              <label class = "text-center card-header">Question Type</label>
                              <select type="text" name="qType" ID="qType" onChange="setQuestion(this)" class="form-control">
                                  <option value="Audio">Audio</option>
                                  <option value="Video">Video</option>
								  <option value="Text">Text</option>
                              </select>
            </div>
			<div id="text" style="display:none;">
			<div class = "form-group">
				<label>Question</label>
				<input type = "text" name = "questionT" class = "form-control">
			</div>
			</div>
			<div id="video" style="display:none;">
			<div class = "form-group">
				<label>Video question</label>
				<input type = "text" name = "questionV" class = "form-control">
			</div>
			<div class = "form-group">
				<label>Time Duration to Answer the question:</label>
				<input type = "text" name = "timedurationV" class = "form-control">
			</div>
			</div>
			<div id="audio">
			<div class = "form-group">
				<label>Audio question</label>
				<input type = "text" name = "questionA" class = "form-control">
			</div>
			<div class = "form-group">
				<label>Time Duration to Answer the question:</label>
				<input type = "text" name = "timedurationA" class = "form-control">
			</div>
			</div>
			<button type = "submit" class = "btn btn-primary">Add</button>
			</form>
			<br>
			<a href='destroy.php'><button class = "btn btn-primary">Submit</button></a>
			</div>
			</div>
</body>
</html>