<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="AboutUsStyle.css">
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

	<div class="about-container">
		<h2>About Us</h2>
		<br>
		<div class="philosophy">
		    <h3>Our Culinary Philosophy</h3>
		    <p>
		        At FoodFusion, we believe that food is more than just nourishment. It’s a celebration of culture, creativity, and connection.
		        Our philosophy is rooted in blending traditional culinary techniques with modern innovation, crafting dishes that honor heritage while embracing bold, new flavors.
		        We see every recipe as a story, told through the harmony of spices, textures, and presentation. Whether it's a comforting classic or a daring fusion creation, our goal is to bring joy to every bite and inspire a love for cooking in every home.
		    </p>
		</div>

		<div class="values">
		    <h3>What Makes FoodFusion Unique</h3>
		    <p>
		        What sets FoodFusion apart is our passion for originality and attention to detail. Our team thrives on experimenting with ingredients, reimagining recipes, and pushing the boundaries of what's possible in the kitchen.
		        We don't just follow trends. We set them, combining inspiration from around the world with our own creative twist.
		        From vibrant visuals to step-by-step simplicity, everything we create is designed to be accessible, exciting, and unforgettable. With FoodFusion, you're not just cooking. You’re creating an experience.
		    </p>
		</div>
	</div>

	<h2 class="team-header">Meet the Team</h2>
    <div class="team">

    	<!-- PHP will output member cards here -->
        <?php

        include ('DatabaseConnection.php');

        $teamSelect = "select * from TeamMember";
        $teamResult = mysqli_query($dbConnect, $teamSelect);
        $numRowsResult = mysqli_num_rows($teamResult);

        for ($i=0; $i < $numRowsResult; $i++) {
        	$result = mysqli_fetch_assoc($teamResult);

        	echo '<div class="member-card">';
	        echo '<img src="' . $result['Image'] . '" alt="' . htmlspecialchars($result['Name']) . '">';
	        echo '<h3>' . htmlspecialchars($result['Name']) . '</h3>';
	        echo '<p class="role">' . htmlspecialchars($result['Role']) . '</p>';
	        echo '<p class="description">' . htmlspecialchars($result['Description']) . '</p>';
	        echo '<a href="#" class="read-more">Read More</a>';
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