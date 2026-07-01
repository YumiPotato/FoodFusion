<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us Process</title>
</head>

<body>

	<?php

		include ('DatabaseConnection.php');

		if (isset($_POST['submit'])) {
			$username = mysqli_real_escape_string($dbConnect, $_POST['username']);
			$email = mysqli_real_escape_string($dbConnect, $_POST['email']);
			$subject = mysqli_real_escape_string($dbConnect, $_POST['subject']);
			$message = mysqli_real_escape_string($dbConnect, $_POST['message']);

			// Insert into table
			$insertContactData = "insert into contactMsg (Username, Email, Subject, Message)
	        values ('$username', '$email', '$subject', '$message')";
	        $runInsertData = mysqli_query($dbConnect, $insertContactData);

	        if (isset($runInsertData)) {
	        	echo "<script>window.alert('Your review is submitted! Thank You!')</script>";
				echo "<script>window.location.href='ContactUsPage.php'</script>";
	        }
	        else {
	        	echo "<script>window.alert('Your review is rejected! Please try again!')</script>";
				echo "<script>window.location.href='ContactUsPage.php'</script>";
	        }
		}
		else {
			echo "<script>window.location.href='ContactUsPage.php'</script>";
		}

	?>

</body>

</html>