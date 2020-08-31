<?php

error_reporting(E_ALL ^ E_DEPRECATED);

$link = mysqli_connect("localhost", "root", "", "GoT");


// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_POST['ins']) )
{
	if ( empty($_POST['Lname']) || empty($_POST['Kname']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('located_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
  		$Lname = $_POST['Lname'];
		$Kname = $_POST['Kname'];

		$sql = "INSERT INTO located (Lname,Kname) VALUES ('$Lname','$Kname')";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Insertion Failed.');</script>";
			echo"<script>location.assign('located_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Insertion Successful.');</script>";
			echo"<script>location.assign('located_edit.php')</script>";
		}
	}
}

if (isset($_POST['del']) )
{
	if (empty($_POST['Lname']) || empty($_POST['Kname']))
	{
		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('located_edit.php')</script>";  // go back to the login page
	}
	else
	{
		$Lname = $_POST['Lname'];
		$Kname = $_POST['Kname'];

		$sql_result = mysqli_query($link,"SELECT * FROM located WHERE Lname = '$Lname' and Kname = '$Kname' ");
		
		$row = mysqli_fetch_array($sql_result);
		$row_cnt = mysqli_num_rows($sql_result);

		if($row_cnt != 1)
		{
			echo "<script>alert('Deletion Failed, no such Lname and Kname.');</script>";
			echo"<script>location.assign('located_edit.php')</script>";
		}
		else
		{
			$sql = "DELETE FROM located WHERE Lname = '$Lname' and Kname = '$Kname'";

			if( $link->query($sql) === false)
			{
				echo "<script>alert('Deletion Failed.');</script>";
				echo"<script>location.assign('located_edit.php')</script>";
			}
			else
			{
				echo "<script>alert('Deletion Successful.');</script>";
				echo"<script>location.assign('located_edit.php')</script>";
			}
		}
	}
}

if (isset($_POST['upd']) )
{
	if (empty($_POST['Lname']) || empty($_POST['Kname']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('located_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
  		$Lname = $_POST['Lname'];
		$Kname = $_POST['Kname'];

		$sql = "UPDATE located SET Kname='$Kname' WHERE Lname='$Lname'";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Update Failed.');</script>";
			echo"<script>location.assign('located_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Update Successful.');</script>";
			echo"<script>location.assign('located_edit.php')</script>";
		}

  	}

}

?>