<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Culinary Resources Page</title>
	<link rel="stylesheet" type="text/css" href="CulinaryResourcesStyle.css">
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

	<div class="container">
        <h1>Culinary Resources</h1>
        <p class="subtitle">Explore our downloadable recipe cards and cooking tutorials to enhance your kitchen skills!</p>

        <h2>Recipe Cards</h2> <br>
        <div class="resource-grid">

            <div class="resource-card">
                <img src="downloadImages/chickenKatsu.jpg" alt="Chicken Katsu">
                <h3>Chicken Katsu Recipe</h3>
                <p>Learn how to make Chicken Katsu by frying Breaded Chicken</p>
                <a href="FileDownload1.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/chickenJoy.jpg" alt="Chicken">
                <h3>Chicken Joy Recipe</h3>
                <p>Learn how to make Crispy Deep Fried Chicken</p>
                <a href="FileDownload2.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/chickenKaraage.jpg" alt="Chicken Karaage">
                <h3>Chicken Karaage Recipe</h3>
                <p>Learn how to make a Japanese-style Fried Chicken</p>
                <a href="FileDownload3.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/honeyGarlicChicken.jpg" alt="Honey Garlic Chicken">
                <h3>Honey Garlic Chicken Recipe</h3>
                <p>Learn to make Honey Garlic Chicken with a sweet and savory glaze</p>
                <a href="FileDownload4.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/korokke.jpg" alt="Korokke">
                <h3>Korokke Recipe</h3>
                <p>Learn to make Korokke by breading and frying mashed potato</p>
                <a href="FileDownload5.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/spam-don.jpg" alt="Spam Don">
                <h3>Spam Don Recipe</h3>
                <p>Learn to make Spam Don by serving fried Spam over rice</p>
                <a href="FileDownload6.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/spamMusubi.jpg" alt="Spam Musubi">
                <h3>Spam Musubi Recipe</h3>
                <p>Learn to make Spam Musubi by layering fried Spam on rice, wrapped in seaweed</p>
                <a href="FileDownload7.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/soufflePancake.jpg" alt="Souffle Pancake">
                <h3>Souffle Pancake Recipe</h3>
                <p>Learn to make Soufflé Pancakes by whipping egg whites for a fluffy, airy texture</p>
                <a href="FileDownload8.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/brownie.jpg" alt="Chocolate Brownie">
                <h3>Chocolate Brownie Recipe</h3>
                <p>Learn how to make Rich and Fudgy Brownie with Deep Chocolate Flavor</p>
                <a href="FileDownload9.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/chocolateChipCookie.jpg" alt="Chocolate Chip Cookie">
                <h3>Chocolate Chip Cookie Recipe</h3>
                <p>Learn to make Chocolate Chip Cookies by mixing dough with chocolate chips</p>
                <a href="FileDownload10.php" class="download-btn" download>Download Recipe</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/Hwachae.jpg" alt="Hwachae">
                <h3>Hwachae Recipe</h3>
                <p>Learn to make Hwachae by mixing fruit, honey, and water for a refreshing Korean punch</p>
                <a href="FileDownload11.php" class="download-btn" download>Download Recipe</a>
            </div>

        </div>

        <br>
        <h2>Cooking Tutorials</h2>
        <br>

        <div class="resource-grid">

	        <div class="resource-card">
	        	<video width="300"     height="550"    controls>
	            	<source src="downloadVideos/miffy_mochi_cheese_bread.mp4"   type="video/mp4">
	          	</video>
	            <h3>Miffy Mochi Cheese Bread Recipe Tutorial</h3>
	            <a href="VideoDownload1.php" class="download-btn" download>Download Video</a>
	        </div>

	        <div class="resource-card">
	        	<video width="300"     height="550"    controls>
	            	<source src="downloadVideos/mini_crispy_burger.mp4"   type="video/mp4">
	          	</video>
	            <h3>Mini Crispy Chicken Burger Recipe Tutorial</h3>
	            <a href="VideoDownload2.php" class="download-btn" download>Download Video</a>
	        </div>

	        <div class="resource-card">
	            <video width="300"     height="550"    controls>
	            	<source src="downloadVideos/miso_black_cod.mp4"   type="video/mp4">
	          	</video>
	            <h3>Miso Black Cod Recipe Tutorial</h3>
	            <a href="VideoDownload3.php" class="download-btn" download>Download Video</a>
	        </div>

	        <div class="resource-card">
	            <video width="300"     height="550"    controls>
	            	<source src="downloadVideos/totoro_tiramisu_cup.mp4"   type="video/mp4">
	          	</video>
	            <h3>Totoro Tiramisu Cup Recipe Tutorial</h3>
	            <a href="VideoDownload4.php" class="download-btn" download>Download Video</a>
	        </div>
	    </div>
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