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
	if ( empty($_POST['Pid']) || empty($_POST['Hname']) || empty($_POST['Title']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('belongs_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
  		$Pid = $_POST['Pid'];
		$Hname = $_POST['Hname'];
		$Title = $_POST['Title'];

		$sql = "INSERT INTO Belongs (Pid,Hname,Title) VALUES ('$Pid','$Hname','$Title')";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Insertion Failed.');</script>";
			echo"<script>location.assign('belongs_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Insertion Successful.');</script>";
			echo"<script>location.assign('belongs_edit.php')</script>";
		}
	}
}

if (isset($_POST['del']) )
{
	if (empty($_POST['Pid']))
	{	
		echo "<script>alert('Pid cannot be empty.');</script>";
      	echo"<script>location.assign('belongs_edit.php')</script>";  // go back to the login page
	}
	else
	{
		$Pid = $_POST['Pid'];

		$sql_result = mysqli_query($link,"SELECT pid FROM people WHERE pid = $Pid ");
		
		$row = mysqli_fetch_array($sql_result);
		$row_cnt = mysqli_num_rows($sql_result);

		if($row_cnt != 1)
		{
			echo "<script>alert('Deletion Failed, no such Pid.');</script>";
			echo"<script>location.assign('belongs_edit.php')</script>";
		}
		else
		{
			$sql = "DELETE FROM People WHERE pid = '$Pid'";

			if( $link->query($sql) === false)
			{
				echo "<script>alert('Deletion Failed.');</script>";
				echo"<script>location.assign('belongs_edit.php')</script>";
			}
			else
			{
				echo "<script>alert('Deletion Successful.');</script>";
				echo"<script>location.assign('belongs_edit.php')</script>";
			}
		}
	}
}

if (isset($_POST['upd']) )
{
	if ( empty($_POST['Pid']) || empty($_POST['Hname']) || empty($_POST['Title']))
  	{
  		echo "<script>alert('You have an empty field.');</script>";
      	echo"<script>location.assign('people_edit.php')</script>";  // go back to the login page
  	}
  	else
  	{
		$Pid = $_POST['Pid'];
		$Hname = $_POST['Hname'];
		$Title = $_POST['Title'];

		$sql = "UPDATE Belongs SET Hname='$Hname', Title='$Title' WHERE Pid='$Pid'";

		if( $link->query($sql) === false)
		{
			echo "<script>alert('Update Failed.');</script>";
			echo"<script>location.assign('belongs_edit.php')</script>";
		}
		else
		{
			echo "<script>alert('Update Successful.');</script>";
			echo"<script>location.assign('belongs_edit.php')</script>";
		}

  	}

}

?>