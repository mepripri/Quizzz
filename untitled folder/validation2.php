<?php 
$value = $_GET['query'];
$formfield = $_GET['field'];
if ($formfield == "fname") 
{
		if(strlen($value)<3) 
		{
			echo "Enter First Name";
		}
		else 
		{
			echo "Valid";
		}
}
if ($formfield == "lname") 
{
		if(strlen($value)<3) 
		{
			echo "Enter Last Name";
		}
		else 
		{
			echo "Valid";
		}
}
if ($formfield == "user") 
{
		$con=mysqli_connect("localhost","root","","signup");
		$sql="SELECT * from signtab WHERE username='$value'";
		$re=mysqli_query($con,$sql);
		$rowcount = mysqli_num_rows($re);
		if ($rowcount > 0) 
		{
			echo"Username is already registred";
		}
		else if(strlen($value)<3) 
		{
			echo "Enter username";
		}
		else 
		{
			echo "Valid";
		}
}
if ($formfield == "pass2")
{
		if (strlen($value)<6) 
		{
			echo "Password too short";
		} 
		else 
		{
			echo "Valid";
		}
}
?>