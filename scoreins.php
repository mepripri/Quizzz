<?php
	session_start();
	$score=$_GET['score'];
	$sc=$_SESSION['score'];
	$user=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","Quiz") or die('Unable To connect');
	mysqli_query($con,"UPDATE signtab SET score='$score' WHERE username='$user'");
	header("Location:score.php");
?>