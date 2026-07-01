<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie Policy Page</title>
	<link rel="stylesheet" type="text/css" href="../css/CookiePolicyStyle.css">
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

  	<!-- Main Content -->
  <main class="container">
    <h1>Cookie Policy</h1>
    <p>Last updated: April 12, 2025</p>

    <p>At FoodFusion, we use cookies to enhance your experience, provide personalized content, and analyze our traffic. This Cookie Policy explains what cookies are, how we use them, and your choices regarding cookies.</p>

    <h2>What Are Cookies?</h2>
    <p>Cookies are small data files that are placed on your device when you visit a website. They help the site remember your actions and preferences over time.</p>

    <h2>Types of Cookies We Use</h2>
    <ul>
      <li><strong>Essential Cookies:</strong> Necessary for the website to function properly (e.g., login, navigation).</li>
      <li><strong>Performance Cookies:</strong> Help us understand how visitors interact with the site.</li>
      <li><strong>Functional Cookies:</strong> Remember your preferences and enhance your user experience.</li>
      <li><strong>Marketing Cookies:</strong> Used to deliver personalized advertisements and track effectiveness.</li>
    </ul>

    <h2>How We Use Cookies</h2>
    <p>We use cookies to:</p>
    <ul>
      <li>Keep you signed in</li>
      <li>Remember your preferences (like favorite recipes)</li>
      <li>Analyze site usage and improve performance</li>
      <li>Deliver content and ads relevant to your interests</li>
    </ul>

    <h2>Your Choices</h2>
    <p>You can choose to accept or reject cookies through your browser settings. Most browsers allow you to:</p>
    <ul>
      <li>View cookies stored on your device</li>
      <li>Delete all cookies</li>
      <li>Block third-party cookies</li>
      <li>Set preferences for certain websites</li>
    </ul>
    <p>Note that disabling cookies may affect the functionality of certain features on our site.</p>

    <h2>Third-Party Cookies</h2>
    <p>We may also allow third-party services (like Google Analytics or social media widgets) to set cookies on your device to help us analyze and improve our service.</p>

    <h2>Changes to This Policy</h2>
    <p>We may update this Cookie Policy from time to time. We encourage you to review this page regularly for any changes.</p>

    <h2>Contact Us</h2>
    <p>If you have any questions about this Cookie Policy, feel free to <a href="ContactUsPage.php">contact us</a>.</p>
  </main>

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