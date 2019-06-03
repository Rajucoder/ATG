<?php
	include 'connect.php';
	$id=$_GET['id'];
	header('location:jobsearch.php');
	$sql = "DELETE FROM post WHERE job_id='$id'";
	$result1  = $conn->query($sql);
?>