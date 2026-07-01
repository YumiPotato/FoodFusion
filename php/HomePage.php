<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="../css/HomeStyle.css">
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

  	<!-- Introduction -->
  	<section class="intro">
    	<div class="intro-container">
      		<div class="intro-text fade-in-left">
        		<h1>Welcome to FoodFusion</h1>
        		<p>Bringing culinary artists together to share recipes, learn new skills, and celebrate food from around the world.</p>
        		<button class="btn btn-primary" onclick="openJoinUsForm()">Join Us</button>
      		</div>
      		<div class="intro-image fade-in-right">
        		<img src="../images/introImage.jpg" alt="Delicious food" />
      		</div>
    	</div>
  	</section>

  	<!-- Join Us Form Pop-up -->
	<div id="joinUsForm" class="join-popup">
		  <div class="join-form-content">
			    <span class="close-btn" onclick="closeJoinUsForm()">&times;</span>
			    <h2>Join FoodFusion</h2>
			    <form action="LoginProcess.php" method="post">
					    <input type="email" name="email" placeholder="Email Address" required>
					    <input type="password" name="password" placeholder="Password" required>

						<div class="no-account">
	    					<span>Doesn't have an account? </span>
						    <a href="RegisterPage.php">Sign Up</a>
						</div>

					    <button type="submit" name="login" class="submit-btn">Sign In</button>
					    <button type="reset" name="clear" class="submit-btn">Clear</button>
			    </form>
		  </div>
	</div>

  	<!-- News Feed -->
  	<section class="news-feed">

    	<h2>Featured Recipes & Culinary Trends</h2>
    	<div class="card-list">

	        <a href="RecipePage.php" class="card-item">
	            <img src="../images/quinoaSalad.jpg" alt="Quinoa Salad">
	            <h5 class="card-title">Mediterranean Quinoa Salad</h5>
    			<p class="card-text">Healthy, vibrant, and perfect for spring.</p>
	            <button class="read-more-btn">Read More</button>
	        </a>

	        <a href="RecipePage.php" class="card-item">
	            <img src="../images/kimchi.jpg" alt="Kimchi">
	            <h5 class="card-title">Fermentation Craze</h5>
    			<p class="card-text">Why fermented foods are taking over our kitchens.</p>
	            <button class="read-more-btn">Read More</button>
	        </a>

	        <a href="RecipePage.php" class="card-item">
	            <img src="../images/mochi.jpg" alt="Mochi">
	            <h5 class="card-title">5-Minute Desserts</h5>
    			<p class="card-text">Quick and delightful treats for every sweet tooth.</p>
	            <button class="read-more-btn">Read More</button>
	        </a>

    	</div>
  	</section>

  	<!-- Event Carousel with Countdown -->
  	<section class="carousel">

    	<h2>Upcoming Cooking Events</h2>
    	<div class="carousel-container">
      		<div class="event-card">

	        	<img src="../images/veganEvent.jpg" alt="Vegan Fiesta">
	        	<h3>Vegan Fiesta</h3>
	        	<p>Celebrate plant-based dishes with live demos & tastings.</p>
        		<div class="countdown" data-date="2025-05-01T18:00:00"></div>
      		</div>

	      	<div class="event-card">
		        <img src="../images/bbqEvent.jpg" alt="BBQ Masterclass">
		        <h3>BBQ Masterclass</h3>
		        <p>Learn the secrets to juicy BBQ with expert chefs.</p>
		        <div class="countdown" data-date="2025-06-01T18:00:00"></div>
	      	</div>

	      	<div class="event-card">
		        <img src="../images/pastaEvent.jpg" alt="Pasta Perfection">
		        <h3>Pasta Perfection</h3>
		        <p>Handcraft pasta with traditional Italian techniques.</p>
		        <div class="countdown" data-date="2025-07-01T18:00:00"></div>
	      	</div>

    	</div>
  	</section>

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

  	<div id="cookie-popup" style="display: none; position: fixed; bottom: 0; width: 100%; background: #6d3200; color: white; padding: 30px; text-align: center;">

	    <p>This website uses cookies to enhance your experience. <a href="CookiePolicyPage.php" style="color: #eec07b;">Learn more</a>.</p>

	   	<button class="cookie-btn accept" onclick="acceptCookies()">I Accept</button>
    	<button class="cookie-btn manage" onclick="declineCookies()">Manage Preferences</button>

	</div>

  	<!-- JS Scripts -->
  	<script>
	    function openJoinUsForm() {
	    	document.getElementById("joinUsForm").style.display = "flex";
	  	}

	  	function closeJoinUsForm() {
	    	document.getElementById("joinUsForm").style.display = "none";
	  	}

	  	// Optional: Close form if clicked outside content
	  	window.onclick = function(event) {
	    	const popup = document.getElementById("joinUsForm");
	    	if (event.target === popup) {
	     	 	popup.style.display = "none";
	    	}
	  	}

	    function updateCountdowns() {
	      	const countdowns = document.querySelectorAll('.countdown');
		     countdowns.forEach(cd =>
		    {
		        const targetDate = new Date(cd.dataset.date);
		        const now = new Date();
		        const diff = targetDate - now;

		        if (diff <= 0) {
		          cd.innerText = "Event Started!";
		          return;
		        }

		        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
		        const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
		        const minutes = Math.floor((diff / (1000 * 60)) % 60);
		        const seconds = Math.floor((diff / 1000) % 60);

		        cd.innerText = `Starts in ${days}d ${hours}h ${minutes}m ${seconds}s`;
		    }
		    );
	    }

	    setInterval(updateCountdowns, 1000);
	    updateCountdowns();

	    function showCookiePopup() {
        	document.getElementById('cookie-popup').style.display = 'block';
    	}


    	function acceptCookies() {
    	// Logic to accept cookies
			document.getElementById('cookie-popup').style.display = 'none';
		}


    	function declineCookies() {
		// Logic to manage preferences
			document.getElementById('cookie-popup').style.display = 'none';
		}

    	window.onload = function() {
			showCookiePopup();
		};

  	</script>

</body>

</html>