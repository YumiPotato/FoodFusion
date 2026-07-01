<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="ContactUsStyle.css">
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

  	<div class="content">
	    <div class="contact-section">

	        <h2>Contact Us</h2>
	        <p>We’d love to hear from you! Whether you have a recipe request, a question, or just want to share your feedback, drop us a message below.</p>

	        <form action="ContactUsProcess.php" method="post" class="contact-form">

	            <div class="form-group">
	                <label for="name">Your Username *</label>
	                <input type="text" id="name" name="username" required />
	            </div>

	            <div class="form-group">
	                <label for="email">Your Email *</label>
	                <input type="email" id="email" name="email" required />
	            </div>

	            <div class="form-group">
	                <label for="subject">Subject *</label>
	                <select id="subject" name="subject" required>
	                    <option value="">-- Select an option --</option>
	                    <option value="enquiry">General Enquiry</option>
	                    <option value="recipe-request">Recipe Request</option>
	                    <option value="feedback">Feedback</option>
	                </select>
	            </div>

	            <div class="form-group">
	                <label for="message">Message *</label>
	                <textarea id="message" name="message" rows="6" required></textarea>
	            </div>

	            <button type="submit" name="submit" class="submit-btn">Send Message</button>

	        </form>

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