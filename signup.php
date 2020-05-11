<?php
	if (isset($_POST['submit'])) 
	{
		$fname=$_POST['fname1'];
		$em=$_POST['em1'];
		$user=$_POST['user1'];
		$pass=$_POST['pass1'];
		$con=mysqli_connect('localhost','root','','Quiz') or die('Unable To connect');
		if(mysqli_query($con,"INSERT INTO signtab(name,email,username,password,score) VALUES('$fname','$em','$user','$pass',0);")) 
		{
			sleep(3);
			header("Location:login.html");
		} 
		else
		{
			header("Location:signup.html");
		}
	}
	else if(isset($_POST['login']))
	{
		header("Location:login.html");
	}	
?>	