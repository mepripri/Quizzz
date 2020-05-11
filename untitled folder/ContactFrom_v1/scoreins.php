<?php
	session_start();
	$score=$_GET['score'];
	$user=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","signup") or die('Unable To connect');
	mysqli_query($con,"UPDATE signtab SET score='$score' WHERE username='$user'");
	header("Location:http://localhost/ProjectPHPPri/ContactFrom_v1/score.php");
?>