<!doctype html>

<html lang="en">
	<! HEAD >
	<head>
		<meta charset="utf-8">
		<title>Login Page</title>
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
	<body style="padding: 200px 10px">
		<div class="container">
			<div class="row">
				<div class="col">&nbsp;</div>
			</div>
			
			<div class="row justify-content-md-center">
			    <div class="col"></div>
			    <div class="col-md-auto">
			    	<h2>Login</h2>
			    </div>
			    <div class="col"></div>
			</div>
			    <div class="text-center">
					<img src="login_page.png" class="rounded" width="256">
				</div>
			</div>
			<div class="row">
				<div class="col">&nbsp;</div>
			</div>
			
			<div class="row justify-content-md-center">
				<div class="col-3"></div>
				<div class="col-6">
					<form action='got_login.php' method=POST>
						
						<div class="form-group row">
							<label for="form-group-text" class="col-sm-2 col-form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" name="Username" class="form-control" id="form-group-text" placeholder="Username">
					    	</div>
						</div>
						<div class="form-group row">
					    	<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" name="Password" class="form-control" id="inputPassword3" placeholder="Password">
					    	</div>
						</div>
						<input type="submit" onclick="location.href='got_login.php'"; value="Submit" / name="log" ; class="btn btn-primary btn-block btn-lg">
					</form>
					<br>
					<form action='got_register.php' method=POST>
						<input type="submit" onclick="location.href='got_register.php'"; value="Register" / name="reg" ; class="btn btn-primary btn-success btn-block btn-lg">
					</form>
				</div>
				<div class="col-3"></div>
			</div>
		</div>
	</body>
</html>