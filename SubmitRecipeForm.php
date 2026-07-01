<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Submit Your Recipe</title>
	<link rel="stylesheet" type="text/css" href="SubmitRecipeStyle.css">
</head>

<body>

	<div class="container">
		
		<h1>Submit Your Recipe</h1>
		<form action="SubmitRecipeProcess.php" method="POST">

			<input type="text" name="name" placeholder="Recipe Name" required>
			<input type="text" name="cuisine" placeholder="Cuisine Type" required>
			<input type="text" name="difficulty" placeholder="Difficulty (e.g. Easy, Medium, Hard)" required>
			<input type="text" name="dietary_preference" placeholder="Dietary Preference (e.g. Vegan, Gluten-Free)" required>
			<textarea name="description" placeholder="Recipe Description" rows="6" required></textarea>

			<label>Recipe Picture: </label>
			<input type="file" name=fileToUpload required>

			<input type="submit" value="Submit Recipe">

		</form>
	</div>

</body>

</html>