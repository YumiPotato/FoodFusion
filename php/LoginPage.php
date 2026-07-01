<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../css/LoginStyle.css">
</head>

<body>

	<div class="container">

    	<input type="checkbox" id="check">
    	<div class="login form">

      		<header>Login</header>
     		<form action="LoginProcess.php" method="post">

        		<div class="input-box">
        			<input type="text" name="email" placeholder="Enter your email" required>
        			<input type="password" name="password" placeholder="Enter your password" required>
        		</div>

        		<a href="ForgotPswPage.php">Forgot password?</a>

        		<div class="button-container">
        			<div class="button">
			          	<input type="submit" name="login" value="Login">
			        </div>
			        <div class="button">
			        	<input type="reset" name="clear" value="Clear">
			        </div>
        		</div>

      		</form>

      		<div class="signup">
        		<span class="signup">Don't have an account?
         			<label for="check"> <a href="RegisterPage.php">Signup</a> </label>
        		</span>
      		</div>

    	</div>
    </div>

</body>

</html>