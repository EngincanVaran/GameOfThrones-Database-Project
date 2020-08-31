<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "GoT");


// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['reg']) )
{
	if ( empty($_POST['Username']) || empty($_POST['Password']) || empty($_POST['Type']) )
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo "<script>location.assign('got_register.php')</script>";
  	}
  	else
  	{
  		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Type = $_POST['Type'];

		$sql = "INSERT INTO Users (Username,Password,Type) VALUES ('$Username','$Password','$Type')";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Registration Failed.');</script>";
			echo"<script>location.assign('got_register.php')</script>";
		}
		else
		{
			echo "<script>alert('Registration Successful.');</script>";
			echo"<script>location.assign('got_login_page.php')</script>";
		}
	}
}
?>