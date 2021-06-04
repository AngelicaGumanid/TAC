<!DOCTYPE html>
<html lang="en">
	<head>
	<title>TAC SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="css/logsign.css">
	</head>
<body style="background-image: url('images/carousel/bg5.png')">

			<form action="register_query.php" method="POST">	
			<h2>SIGN UP</h2>
			
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" />
			
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" />

					<label>Username</label>
					<input type="text" class="form-control" name="username" />

					<label>Password</label>
					<input type="password" class="form-control" name="password" />
	
					<button class="btn btn-primary form-control" name="register">Register</button>
				</div>
				<a href="login.php" class="ca">Already have an account?</a><br>
				<a href="home.php" class="ca"> Go back to Homepage</a>
			</form>
		</div>
	</div>
</body>
</html>