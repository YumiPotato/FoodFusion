<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password Process</title>
</head>

<body>

	<?php

    include ('DatabaseConnection.php');

    if (isset($_POST['login'])) {
    	$email = mysqli_real_escape_string($dbConnect, $_POST['email']);
	    $oldPassword = mysqli_real_escape_string($dbConnect, $_POST['oldPassword']);
	    $newPassword = mysqli_real_escape_string($dbConnect, $_POST['newPassword']);

	    $selectPassword = "select password from member where Email = '$email'";
	    $runSelectPassword = mysqli_query($dbConnect, $selectPassword);

	    if (mysqli_num_rows($runSelectPassword) == 1) {
	    	$numRowResult = mysqli_fetch_assoc($runSelectPassword);

	        if (password_verify($oldPassword, $numRowResult['password'])) {
	            $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
	            $updatePassword = "update member set password = '$hashedNewPassword' where Email = '$email'";

	            if (mysqli_query($dbConnect, $updatePassword)) {
	                echo "<script>
	                    window.alert('Your password have changed successfully!');
	                    window.location.href='HomePage.php';
	                  </script>";
	            }
	            else {
	                echo "<script>
	                    window.alert('Something went wrong! Please try again!');
	                    window.location.href='ForgotPswPage.php';
	                  </script>";
	            }
	        }
	        else {
	            echo "<script>
	                window.alert('Your old password is inccorect!');
	                window.location.href='ForgotPswPage.php';
	              </script>";
	        }
	    }
	    else {
	        echo "<script>
	            window.alert('This email doesn't exist!'');
	            window.location.href='ForgotPswPage.php';
	          </script>";
	    }
    }

    else {
    	echo "<script>window.location.href='ForgotPswPage.php';</script>";
    }
?>

</body>

</html>