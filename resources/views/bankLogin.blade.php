<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
			<div class="container1">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Bank Login</h2>
					
						<form method="POST" action="/bankLogin" class="register-form" id="register-form">
							@csrf
							<div class="form-group">
								<label for="name"><i
									class="zmdi zmdi-account material-icons-name"></i></label> <input
									type="text" name="email" id="email" placeholder="User Id/Email"  required/>
							</div>
							<div class="form-group">
								<label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="password" id="password"
									 placeholder="Enter Password"  required/>
							</div>
							<a href="/forgot">Forgot Password?</a>
							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup"
									class="form-submit" value="Login" />
							</div>
						</form>
					</div>
					
				</div>
			</div>
		


	</div>
</body>
</html>