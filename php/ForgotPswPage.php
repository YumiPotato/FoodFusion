<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password Page</title>
	<link rel="stylesheet" type="text/css" href="../css/ForgotPswStyle.css">
</head>

<body>

	<div class="container">

    	<input type="checkbox" id="check">
    	<div class="forgot-psw-form">

      		<header>Change Your Password</header>
     		<form action="ForgotPswProcess.php" method="post">

        		<div class="input-box">
        			<input type="text" name="email" placeholder="Enter your email" required>
        			<input type="password" name="oldPassword" placeholder="Enter your old password" required>
        			<input type="password" name="newPassword" placeholder="Enter your new password" required>
        		</div>

        		<a href="LoginPage.php">Back to Login</a>

        		<div class="button-container">
        			<div class="button">
			          	<input type="submit" name="login" value="Login">
			        </div>
			        <div class="button">
			        	<input type="reset" name="clear" value="Clear">
			        </div>
        		</div>

      		</form>

    	</div>
    </div>

</body>

</html>