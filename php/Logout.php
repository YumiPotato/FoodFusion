<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout</title>
</head>

<body>

	<?php

		session_start();

		session_unset();

		session_destroy();

		echo "<script>window.alert('You have been logged out!')</script>";
		echo "<script>window.location.href='HomePage.php'</script>";

		exit();

	?>

</body>

</html>