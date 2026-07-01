<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Submit Recipe Process</title>
</head>

<body>
	
	<?php
		include("DatabaseConnection.php");

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

		    $name = mysqli_real_escape_string($dbConnect, $_POST['name']);
		    $cuisine = mysqli_real_escape_string($dbConnect, $_POST['cuisine']);
		    $difficulty = mysqli_real_escape_string($dbConnect, $_POST['difficulty']);
		    $dietary = mysqli_real_escape_string($dbConnect, $_POST['dietary_preference']);
		    $description = mysqli_real_escape_string($dbConnect, $_POST['description']);
		    $fileToUpload = $_POST['fileToUpload'];

		    $insertRecipe = "insert into recipe (Name, Cuisine, Difficulty, DietaryPreference, Description, RecipeImage)
		              VALUES ('$name', '$cuisine', '$difficulty', '$dietary', '$description', '$fileToUpload')";

		    if (mysqli_query($dbConnect, $insertRecipe)) {
		        echo "<script>
		            alert('Recipe submitted successfully!');
		            window.location.href = 'RecipePage.php';
		        </script>";
		    }
		    else {
		        echo "<script>
		            alert('Failed to submit recipe. Try again.');
		            window.location.href = 'SubmitRecipeForm.php';
		        </script>";
		    }

		}
	?>

</body>

</html>