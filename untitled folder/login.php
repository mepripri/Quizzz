<?php
	session_start();
		$user=$_POST['user1'];
		$pass=$_POST['pass1'];
		$con=mysqli_connect('127.0.0.1','root','','signup') or die('Unable To connect');
		$sql=mysqli_query($con,"SELECT * FROM signtab WHERE username='$user1' AND pass='$pass';");
		$row=mysqli_num_rows($sql);
		if($row==1)
		{
			while($rows=mysqli_fetch_array($sql)) 
			{
				$_SESSION['user']=$rows['username'];
				$_SESSION['pass']=$rows['pass'];	
			}
			header("Location:http://127.0.0.1/phpproj/index1.php");
		} 
		else
		{
			header("Location:http://127.0.0.1/phpproj/login.html");
		}
	}	
?>