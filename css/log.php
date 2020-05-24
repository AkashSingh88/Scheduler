<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<div class="container">
		
		<div class="row">
			<div class="col-lg-6">
				<h2>Login Form</h2>
				<form action="validation.php" method="post">
					
					
					<div class="form-group">
						<label>username</label>
						<input type="text" class="form-control" name="username">
					</div>

					<div class="form-group">
						<label>password</label>
						<input type="password" class="form-control" name="password">
					</div>

					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>

			<div class="col-lg-6">
				<h2>Signin Form</h2>
				<form action="reg.php" method="post">
					
					
					<div class="form-group">
						<label>username</label>
						<input type="text" class="form-control" name="username">
					</div>

					<div class="form-group">
						<label>password</label>
						<input type="password" class="form-control" name="password">
					</div>

					<button type = "submit" class="btn btn-primary">Signin</button>
				</form>
			</div>

		</div>
	</div>

</body>
</html>