<?php 
session_start();
$value = $_GET['query'];
$formfield = $_GET['field'];
if ($formfield == "user") 
{
		$con=mysqli_connect("localhost","root","","signup");
		$sql="SELECT * from signtab WHERE username='$value'";
		$re=mysqli_query($con,$sql);
		$rowcount = mysqli_num_rows($re);
		if ($rowcount == 0) 
		{
			echo"Invalid Username";
		}
		else 
		{
			$_SESSION['user']=$value;
			echo "Valid";
		}
}
if ($formfield == "pass2")
{
	$u=$_SESSION['user'];
		$con=mysqli_connect("localhost","root","","signup");
		$sql="SELECT * from signtab WHERE username='$u' AND password='$value'";
		$re=mysqli_query($con,$sql);
		$rowcount = mysqli_num_rows($re);
		if ($rowcount == 0)  
		{
			echo "Invalid Password";
		} 
		else 
		{
			echo "Valid";
		}
}
?>