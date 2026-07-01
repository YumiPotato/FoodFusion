<?php
	session_start();

	if (isset($_COOKIE['loginCooldown'])) {
	    header("Location: LoginTimer.php");
	    exit();
	}

	if (!isset($_SESSION['loginCounter'])) {
    	$_SESSION['loginCounter'] = 0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

	include ("DatabaseConnection.php");

	if (isset($_POST['login'])) {
		$email = mysqli_real_escape_string($dbConnect, $_POST['email']);
		$password = mysqli_real_escape_string($dbConnect, $_POST['password']);


		$findEmail = "select * from member where email = '$email'";
		$runFindEmail = mysqli_query($dbConnect, $findEmail);
		$numRows = mysqli_num_rows($runFindEmail);   

		if ($numRows == 1) {
			$record = mysqli_fetch_assoc($runFindEmail);
			$hashedPasswordDB = $record['Password'];
			$_SESSION['MemberID'] = $record['MemberID'];

			if (password_verify($password, $hashedPasswordDB)) {
				$_SESSION['loginCounter'] = 0;
				echo "<script>window.alert('login Successful!')</script>";
				echo "<script>window.location.href='HomePage.php'</script>";
			}
			else {
				$_SESSION['loginCounter'] += 1;

				if ($_SESSION['loginCounter'] >= 3) {
					echo "<script>window.location.href='LoginTimer.php'</script>";
					// setcookie("loginCounter", "c", time()+1*600); //1 mintues
					setcookie("loginCooldown", "blocked", time() + 60, "/");
				}
				else {
					echo "<script>window.alert('Invalid Pasword! Please try again!')</script>";
					echo "<script>window.location.href='LoginPage.php'</script>";
				}
			}
		}
		else {
			echo "This email doesn't exist!";
			echo '<a href="LoginPage.php">Go back</a>.';
		}
	}
	else {
		echo "<script>window.location.href='LoginPage.php'</script>";
	}

	?>

</body>
</html>