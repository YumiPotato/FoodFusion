<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="RegisterStyle.css">
</head>

<body>

	<div class="container">
    	<!-- Title section -->
    	<div class="title">Registration Form</div>
    		<div class="content">

      			<form action="RegisterProcess.php" method="post">

        			<div class="user-details">

		          		<div class="input-box">
		            		<span class="details">First Name</span>
		            		<input type="text" name="fname" placeholder="Enter your first name" required>
		          		</div>
		 
		          		<div class="input-box">
		            		<span class="details">Last Name</span>
		            		<input type="text" name="lname" placeholder="Enter your last name" required>
		          		</div>

		          		<div class="input-box">
		            		<span class="details">Username</span>
		            		<input type="text" name="username" placeholder="Enter your username" required>
		          		</div>

		          		<div class="input-box">
		            		<span class="details">Email</span>
		            		<input type="text" name="email" placeholder="Enter your email" required>
		         		</div>

		          		<div class="input-box">
		            		<span class="details">Password</span>
		            		<input type="text" name="password" placeholder="Enter your password" required>
		          		</div>

		          		<div class="input-box">
		            		<span class="details">Confirm Password</span>
		            		<input type="text" name="confirmPassword" placeholder="Confirm your password" required>
		          		</div>

		        	</div>

		        	<div class="gender-details">

		          		<!-- Radio buttons for gender selection -->
		          		<input type="radio" name="gender" value="Male" id="dot-1">
		          		<input type="radio" name="gender" value="Female" id="dot-2">
		          		<input type="radio" name="gender" value="Perfer not to say" id="dot-3">
		          		<span class="gender-title">Gender</span>

		          		<div class="category">
		            		<label for="dot-1">
		              			<span class="dot one"></span>
		              			<span class="gender">Male</span>
		            		</label>

		            		<label for="dot-2">
		              			<span class="dot two"></span>
		              			<span class="gender">Female</span>
		            		</label>

		            		<label for="dot-3">
		              			<span class="dot three"></span>
		              			<span class="gender">Prefer not to say</span>
		            		</label>
		          		</div>

		        	</div>

		        	<div class="button-container">
			        	<div class="button">
			          		<input type="submit" name="register" value="Register">
			        	</div>
			        	<div class="button">
			        		<input type="reset" name="clear" value="Clear">
			        	</div>
			        </div>

			        <div class="login">
        				<span class="login">Already have an account?
         					<label for="check"> <a href="LoginPage.php">Login</a> </label>
        				</span>
      				</div>

		      	</form>
		    </div>
	</div>

</body>

</html>