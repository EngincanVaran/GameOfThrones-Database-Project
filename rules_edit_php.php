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
	if ( empty($_POST['Kname']) || empty($_POST['Hname']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('rules_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
  		$Kname = $_POST['Kname'];
		$Hname = $_POST['Hname'];

		$sql = "INSERT INTO Rules (Kname,Hname) VALUES ('$Kname','$Hname') ";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Insertion Failed.');</script>";
			echo"<script>location.assign('rules_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Insertion Successful.');</script>";
			echo"<script>location.assign('rules_edit.php')</script>";
		}
	}
}

if (isset($_POST['del']) )
{
	if ( empty($_POST['Kname']) || empty($_POST['Hname']))
	{	
		echo "<script>alert('Kname or Hname cannot be empty.');</script>";
      	echo"<script>location.assign('rules_edit.php')</script>";  // go back to the login page
	}
	else
	{
		$Kname = $_POST['Kname'];
		$Hname = $_POST['Hname'];

		$sql_result = mysqli_query($link,"SELECT * FROM rules WHERE Hname = '$Hname' AND Kname = '$Kname' ");
		
		$row = mysqli_fetch_array($sql_result);
		$row_cnt = mysqli_num_rows($sql_result);

		if($row_cnt != 1)
		{
			echo "<script>alert('Deletion Failed, no such Kname or Hname.');</script>";
			echo"<script>location.assign('rules_edit.php')</script>";
		}
		else
		{
			$sql = "DELETE FROM rules WHERE Hname = '$Hname' AND Kname = '$Kname' ";

			if( $link->query($sql) === false)
			{
				echo "<script>alert('Deletion Failed.');</script>";
				echo"<script>location.assign('rules_edit.php')</script>";
			}
			else
			{
				echo "<script>alert('Deletion Successful.');</script>";
				echo"<script>location.assign('rules_edit.php')</script>";
			}
		}
	}
}

if (isset($_POST['upd']) )
{
	if (empty($_POST['Hname']) || empty($_POST['Kname']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('rules_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
  		$Kname = $_POST['Kname'];
		$Hname = $_POST['Hname'];

		$sql = "UPDATE rules SET Hname='$Hname' WHERE Kname='$Kname'";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Update Failed.');</script>";
			echo"<script>location.assign('rules_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Update Successful.');</script>";
			echo"<script>location.assign('rules_edit.php')</script>";
		}

  	}

}

?>