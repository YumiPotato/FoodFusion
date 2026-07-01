<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Process</title>
</head>

<body>

	<?php

		include ("DatabaseConnection.php");

		if (isset($_POST['register'])) {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$username = mysqli_real_escape_string($dbConnect, $_POST['username']);
			$email = mysqli_real_escape_string($dbConnect, $_POST['email']);
			$password = mysqli_real_escape_string($dbConnect, $_POST['password']);
			$confirmPassword = mysqli_real_escape_string($dbConnect, $_POST['confirmPassword']);
			$gender = $_POST['gender'];

			if ($password == $confirmPassword) {
				$findEmail = "select * from member where email = '$email'";
				$runFindEmail = mysqli_query($dbConnect, $findEmail);
				$numRows = mysqli_num_rows($runFindEmail);

				if ($numRows < 1) {
					$hashPassword = password_hash($password, PASSWORD_DEFAULT);
					$insertMemberData = "insert into Member (FName, LName, Username, Email, Password, Gender) values ('$fname', '$lname', '$username', '$email', '$hashPassword', '$gender')";
					$runInsertMemberData = mysqli_query($dbConnect, $insertMemberData);

					echo "<script>window.alert('Account Creation Success!')</script>";
					echo "<script>window.location.href='loginPage.php'</script>";
				}
				else {
					echo "<script>window.alert('This email is already existed!')</script>";
					echo "<script>window.location.href='RegisterPage.php'</script>";
				}

			}
			else {
				echo "Your password doesn't match with your confirm password!";
				
	?>

	<br>
	<a href="RegisterPage.php">Go back</a>.

	<?php
	
			}
		}
		else {
			echo "<script>window.location.href='RegisterPage.php'</script>";
		}

	?>


</body>

</html>