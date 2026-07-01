<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recipe Collections Page</title>
	<link rel="stylesheet" type="text/css" href="../css/RecipeStyle.css">
</head>

<body>

	<!-- Navigation -->
  	<header>
    	<nav class="navbar">
      		<div class="logo">FoodFusion</div>
      		<ul class="nav-links">
        		<li><a href="HomePage.php">Home</a></li>
        		<li><a href="AboutUsPage.php">About Us</a></li>
        		<li><a href="RecipePage.php">Recipe Collection</a></li>
        		<li><a href="CookbookPage.php">Community Cookbook</a></li>
        		<li><a href="ContactUsPage.php">Contact Us</a></li>

        		<!-- Dropdown -->
        		<li class="dropdown">
          			<a href="#">Resources ▾</a>
          			<ul class="dropdown-menu">
			            <li><a href="CulinaryResourcesPage.php">Culinary Resources</a></li>
			            <li><a href="EducationalResourcesPage.php">Educational Resources</a></li>
          			</ul>
        		</li>

        		<?php if (isset($_SESSION['MemberID'])): ?>
		            <li><a href="ForgotPswPage.php"><i class='bx bx-edit'></i> Change Password</a></li>
		            <li><a href="Logout.php"><i class='bx bx-log-out'></i> Sign Out</a></li>
		        <?php else: ?>
		            <li><a href="LoginPage.php" onclick="openForm()">Join Us</a></li>
		        <?php endif; ?>

      		</ul>

    	</nav>
  	</header>

  	<h1 class="recipe">Explore Our Recipes</h1>
	<div class="recipe-cards">

	    <?php
		    include('DatabaseConnection.php');

		    $selectRecipe = "select * from recipe";
		    $runSelectRecipe = mysqli_query($dbConnect, $selectRecipe);

		    while ($numRowRecipe = mysqli_fetch_assoc($runSelectRecipe)) {
		        echo '<div class="recipe-card">';
		        echo '<img src="../images/' . $numRowRecipe['RecipeImage'] . '" alt="' . htmlspecialchars($numRowRecipe['Name']) . '">';
		        echo '<h3>' . htmlspecialchars($numRowRecipe['Name']) . '</h3>';
		        echo '<p class="cuisine"><strong>Cuisine:</strong> ' . htmlspecialchars($numRowRecipe['Cuisine']) . '</p>';
		        echo '<p class="difficulty"><strong>Difficulty:</strong> ' . htmlspecialchars($numRowRecipe['Difficulty']) . '</p>';
		        echo '<p class="dietary"><strong>Dietary:</strong> ' . htmlspecialchars($numRowRecipe['DietaryPreference']) . '</p>';
		        echo '<p class="description">' . htmlspecialchars($numRowRecipe['Description']) . '</p>';
		        echo '</div>';
		    }
	    ?>

	</div>

	<!-- Footer -->
  	<footer>

    	<div class="footer-content">
      		<div class="socials">
		        <a href="https://www.instagram.com/">Instagram</a> |
		        <a href="https://www.facebook.com/">Facebook</a> |
		        <a href="https://www.youtube.com/">YouTube</a>
      		</div>

	      	<div class="policies">
		        <a href="PrivacyPolicyPage.php">Privacy Policy</a> |
		        <a href="CookiePolicyPage.php">Cookie Policy</a>
	      	</div>
    	</div>

  	</footer>

</body>

</html>