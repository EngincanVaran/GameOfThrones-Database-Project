<?php
	$link = mysqli_connect("localhost", "root", "", "GoT");
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$check = mysqli_query($link,"SELECT * FROM Located ");

	if (!$check) { // add this check.
    	die('Invalid query: ' . mysql_error());
	}

	$myarr=array();

	while($row = mysqli_fetch_array($check))
	{
		array_push($myarr, $row);
	}
?>


<!doctype html>

<html lang="en">
	<! HEAD >
	<head>
		<meta charset="utf-8">
		<title>Located Table</title>
		<meta name="description" content="Bootstrap Recitation">
		<meta name="author" content="CS306-201802">
		
		<!--
			Bootstrap files
		-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</head>

	<! BODY>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
			    	<img src="img/image.png" width="30" height="30" class="d-inline-block align-top" alt="">
					GoT
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav mr-auto">
				      	<li class="nav-item">
				        	<a class="nav-link" href="homepage.html">Homepage</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="people.php">People</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="belongs.php">Belongs</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="houses.php">Houses</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="rules.php">Rules <span class="sr-only">(current)</span> </a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="kingdoms.php">Kingdoms</a>
						</li>
						<li class="nav-item active">
				        	<a class="nav-link" href="located.php">Located</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="lands.php">Lands</a>
						</li>
				    </ul>
				    <span class="navbar-text">
						<a class="nav-link" href="got_login_page.php">Logout</a>
					</span>
			  </div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col">&nbsp;</div>
			</div>
			
			<div class="col-lg-12">
				<p class="lead">Located Table</p>
				<table class="table table-striped table-hover">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Lname</th>
				      <th scope="col">Kname</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php
						$row_number=count($myarr);

						for($i=0;$i<$row_number;$i++)
						{
							$Lname=$myarr[$i]['Lname'];
							$Kname=$myarr[$i]['Kname'];
							
          					echo "<tr>";
          					echo "<td>" .$Lname.  "</td>";
          					echo "<td>".$Kname.  "</td>";
          					echo "</tr>";
						}
					?>

				  </tbody>
				</table>
			</div>
			</div>
		</div>
	</body>
</html>