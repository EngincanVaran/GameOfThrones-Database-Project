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
	if ( empty($_POST['LName']) || empty($_POST['Continent']) || empty($_POST['Resources']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('lands_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
  		$Lname = $_POST['LName'];
		$Continent = $_POST['Continent'];
		$Resources = $_POST['Resources'];

		$sql = "INSERT INTO Lands (Lname,Continent,Resources) VALUES ('$Lname','$Continent','$Resources')";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Insertion Failed.');</script>";
			echo"<script>location.assign('lands_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Insertion Successful.');</script>";
			echo"<script>location.assign('lands_edit.php')</script>";
		}
	}
}

if (isset($_POST['del']) )
{
	if (empty($_POST['LName']))
	{
		echo "<script>alert('LName cannot be empty.');</script>";
      	echo"<script>location.assign('lands_edit.php')</script>";  // go back to the login page
	}
	else
	{
		$landName = $_POST['LName'];

		$sql_result = mysqli_query($link,"SELECT Lname FROM Lands WHERE Lname = '$landName'");
		
		$row = mysqli_fetch_array($sql_result);
		$row_cnt = mysqli_num_rows($sql_result);

		if($row_cnt != 1)
		{
			echo "<script>alert('Deletion Failed, no such Lname.');</script>";
			echo"<script>location.assign('lands_edit.php')</script>";
		}
		else
		{
			$sql = "DELETE FROM Lands WHERE Lname = '$landName'";

			if( $link->query($sql) === false)
			{
				echo "<script>alert('Deletion Failed.');</script>";
				echo"<script>location.assign('lands_edit.php')</script>";
			}
			else
			{
				echo "<script>alert('Deletion Successful.');</script>";
				echo"<script>location.assign('lands_edit.php')</script>";
			}
		}
	}
}

if (isset($_POST['upd']) )
{
	if ( empty($_POST['LName']) || empty($_POST['Continent']) || empty($_POST['Resources']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('lands_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
  		$Lname = $_POST['LName'];
		$Continent = $_POST['Continent'];
		$Resources = $_POST['Resources'];

		$sql = "UPDATE Lands SET Continent='$Continent', Resources='$Resources' WHERE Lname='$Lname'";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Update Failed.');</script>";
			echo"<script>location.assign('lands_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Update Successful.');</script>";
			echo"<script>location.assign('lands_edit.php')</script>";
		}

  	}

}

?>