<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "GoT");


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if (isset($_POST['log']))
{

  if(empty($_POST['Username']) || empty($_POST['Password'])   )
  {
  	echo "<script>alert('You have an empty field.');</script>";

      	echo"<script>location.assign('got_login_page.php')</script>";  // go back to the login page
  }


		$username = mysql_real_escape_string($_POST['Username']);     // to get rid of the tricky characters which can destroy the database.
		$password = mysql_real_escape_string($_POST['Password']);
	  
	  //adminle

	  $mysql_result= mysqli_query($link,"SELECT * from users WHERE Username LIKE '$username' AND Password LIKE '$password' LIMIT 1 ");

	  $row = mysqli_fetch_array($mysql_result);
	  $type = $row['Type'];
    
    $row_cnt = mysqli_num_rows($mysql_result);

	if($row_cnt!=1)   // if there is no such user like that.
		{
			echo "<script>alert('The username or the password does not exist in the database');</script>";

				echo"<script>location.assign('got_login_page.php')</script>";  // go back to the login page
		}

	else if( $type == "Admin" )
	 {
	 	//session_start(); // remember the variables that are used. Use this in another page if you want to remember the variables that you get here.
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

      	echo"<script>location.assign('homepage_admin.html')</script>";  // go to the new page
	 }

  else {

			//session_start(); // remember the variables that are used. Use this in another page if you want to remember the variables that you get here.
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

      	echo"<script>location.assign('homepage.html')</script>";  // go to the new page
		}

}