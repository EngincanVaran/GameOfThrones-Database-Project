<?php
	//Your PHP control cases go here
?>


<!doctype html>

<html lang="en">
	<! HEAD >
	<head>
		<meta charset="utf-8">
		<title>HomePage</title>
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
				      	<li class="nav-item active">
				        	<a class="nav-link" href="got_login_page.php">Login Page <span class="sr-only">(current)</span></a>
						</li>
				    </ul>
			  </div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col">&nbsp;</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-3"></div>
				<div class="col-6">
					<form action='got_register_php.php' method=POST>
						<div class="form-group row">
							<label for="form-group-text" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" name="Username" class="form-control" id="form-group-text" placeholder="Username">
					    	</div>
						</div>
						<div class="form-group row">
					    	<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="Password" name="Password" id="inputPassword3" class="form-control" placeholder="Password">
					    	</div>
						</div>
						<div class="form-group row">
							<label for="form-group-text" class="col-sm-2 col-form-label">Type</label>
							<div class="col-sm-10">
								<input type="text" name="Type" class="form-control" id="form-group-text" placeholder="Admin or User">
					    	</div>
						</div>						
						<input type="submit" onclick="location.href='got_register_php.php'"; value="Register Now!" / name="reg" ; class="btn btn-danger btn-primary btn-block btn-lg">
					</form>
				</div>
				<div class="col-3"></div>
			</div>
		</div>
	</body>
</html>