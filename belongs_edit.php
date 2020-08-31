<!doctype html>

<html lang="en">
	<! HEAD >
	<head>
		<meta charset="utf-8">
		<title>Belongs Table Edit</title>
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
				        	<a class="nav-link" href="homepage_admin.html">Homepage</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="people_admin.php">People </a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="belongs_admin.php">Belongs</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="houses_admin.php">Houses</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="rules_admin.php">Rules</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="kingdoms_admin.php">Kingdoms</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="located_admin.php">Located</a>
						</li>
						<li class="nav-item">
				        	<a class="nav-link" href="lands_admin.php">Lands</a>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Action
        					<span class="sr-only">(current)</span></a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="people_edit.php"> People</a>
								<a class="dropdown-item" href="belongs_edit.php"> Belongs</a>
								<a class="dropdown-item" href="houses_edit.php"> Houses</a>
								<a class="dropdown-item" href="rules_edit.php"> Rules</a>
								<a class="dropdown-item" href="kingdoms_edit.php"> Kingdoms</a>
								<a class="dropdown-item" href="located_edit.php"> Located</a>
								<a class="dropdown-item" href="lands_edit.php"> Lands</a>
							</div>
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

			<div class="row justify-content-md-center">
				<div class="col-3"></div>
				<div class="col-6">
					<form action='belongs_edit_php.php' method=POST>
						<div class="form-group row">
							<label for="form-group-text" class="col-sm-2 col-form-label">Pid</label>
							<div class="col-sm-10">
								<input type="text" name="Pid" class="form-control" id="form-group-text" placeholder="Pid">
					    	</div>
						</div>
						<div class="form-group row">
					    	<label for="inputPassword3" class="col-sm-2 col-form-label">Hname</label>
							<div class="col-sm-10">
								<input type="text" name="Hname" class="form-control" id="form-group-text" placeholder="Hname">
					    	</div>
						</div>
						<div class="form-group row">
					    	<label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
							<div class="col-sm-10">
								<input type="text" name="Title" class="form-control" id="form-group-text" placeholder="Title">
					    	</div>
						</div>
						
						<input type="submit" onclick="location.href='belongs_edit_php.php'"; value="Insert" / name="ins" ; class="btn btn-success btn-primary btn-block btn-lg">
						<input type="submit" onclick="location.href='belongs_edit_php.php'"; value="Delete" / name="del" ; class="btn btn-danger btn-primary btn-block btn-lg">
						<input type="submit" onclick="location.href='belongs_edit_php.php'"; value="Update" / name="upd" ; class="btn btn-primary btn-block btn-lg">

					</form>
				</div>
				<div class="col-3"></div>
			</div>


		</div>
	</body>
</html>