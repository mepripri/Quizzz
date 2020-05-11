<?php
	session_start();
		$user=$_POST['user1'];
		$pass=$_POST['pass1'];
		$con=mysqli_connect('localhost','root','','signup') or die('Unable To connect');
		$sql=mysqli_query($con,"SELECT * FROM signtab WHERE username='$user' AND password='$pass';");
		$row=mysqli_num_rows($sql);
		if($user=="mepripri" && $pass=="pri")
		{
			while($rows=mysqli_fetch_array($sql)) 
			{
				$_SESSION['user']=$rows['username'];
				$_SESSION['pass']=$rows['pass'];	
			}
			header("Location:index1.php");
		} 
		else
		{
			header("Location:login.html");
		}	
?>