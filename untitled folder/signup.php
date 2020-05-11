<?php
		$fname=$_POST['fname1'];
		$lname=$_POST['lname1'];
		$user=$_POST['user1'];
		$pass=$_POST['pass1'];
		$con=mysqli_connect('127.0.0.1','root','','signup') or die('Unable To connect');
		if(mysqli_query($con,"INSERT INTO signtab(firstname,lastname,username,pass) VALUES('$fname','$lname','$user','$pass');")) 
		{
			sleep(3);
			header("Location:login.html");
		} 
		else
		{
			header("Location:signupF.php");
		}
?>