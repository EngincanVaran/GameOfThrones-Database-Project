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
	if ( empty($_POST['HName']) || empty($_POST['Motto']) || empty($_POST['Sigil']) )
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo "<script>location.assign('houses_edit.php')</script>";
  	}
  	else
  	{
  		$Hname = $_POST['HName'];
		$Motto = $_POST['Motto'];
		$Sigil = $_POST['Sigil'];

		$sql = "INSERT INTO Houses (Hname,Motto,Sigil) VALUES ('$Hname','$Motto','$Sigil')";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Insertion Failed.');</script>";
			echo"<script>location.assign('houses_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Insertion Successful.');</script>";
			echo"<script>location.assign('houses_edit.php')</script>";
		}
	}
}

if (isset($_POST['del']) )
{
	if (empty($_POST['HName']))
	{
		echo "<script>alert('House Name cannot be empty.');</script>";
      	echo"<script>location.assign('houses_edit.php')</script>";  // go back to the login page
	}
	else
	{
		$Hname = $_POST['HName'];

		$sql_result = mysqli_query($link,"SELECT Hname FROM Houses WHERE Hname = '$Hname' ");
		
		$row = mysqli_fetch_array($sql_result);
		$row_cnt = mysqli_num_rows($sql_result);

		if($row_cnt != 1)
		{
			echo "<script>alert('Deletion Failed, no such House Name.');</script>";
			echo"<script>location.assign('houses_edit.php')</script>";
		}
		else
		{
			$sql = "DELETE FROM Houses WHERE Hname = '$Hname'";

			if( $link->query($sql) === false)
			{
				echo "<script>alert('Deletion Failed.');</script>";
				echo"<script>location.assign('houses_edit.php')</script>";
			}
			else
			{
				echo "<script>alert('Deletion Successful.');</script>";
				echo"<script>location.assign('houses_edit.php')</script>";
			}
		}
	}
}

if (isset($_POST['upd']) )
{
	if (empty($_POST['HName']) || empty($_POST['Motto']) || empty($_POST['Sigil']) )
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('houses_edit.php')</script>";
  	}
  	else
  	{
  		$Hname = $_POST['HName'];
		$Motto = $_POST['Motto'];
		$Sigil = $_POST['Sigil'];

		$sql = "UPDATE Houses SET Motto='$Motto', Sigil='$Sigil' WHERE Hname = '$Hname'";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Update Failed.');</script>";
			echo"<script>location.assign('houses_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Update Successful.');</script>";
			echo"<script>location.assign('houses_edit.php')</script>";
		}
  	}
}

?>