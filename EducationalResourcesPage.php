<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Educational Resources Page</title>
	<link rel="stylesheet" type="text/css" href="EducationalResourcesStyle.css">
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
        <h1>Educational Resources</h1>
        <p>Access free downloadable materials, visual infographics, and informative videos to learn more about renewable energy and sustainability.</p>

        <h2>Downloadable Resources</h2>
		<div class="resource-grid">
		    <div class="resource-card">
		        <div style="font-size: 60px;">📄</div> <!-- PDF icon as a visual -->
		        <h3>Renewable Energy Basics</h3>
		        <a href="FileDownloadEduPDF1.php" class="download-btn" download>Download PDF</a>
		    </div>
		
		    <div class="resource-card">
		        <div style="font-size: 60px;">📄</div> <!-- PDF icon as a visual -->
		        <h3>Hydro Electric Power Guide</h3>
		        <a href="FileDownloadEduPDF2.php" class="download-btn" download>Download PDF</a>
		    </div>
		</div>

        <h2>Infographics</h2>
        <div class="resource-grid">

        	<div class="resource-card">
                <img src="downloadImages/renewableEnergy.jpg" alt="Renewable Energy">
                <h3>Renewable Energy</h3>
                <a href="FileDownloadEdu1.php" class="download-btn" download>Download Image</a>
            </div>

        	<div class="resource-card">
                <img src="downloadImages/windPowerProsNCons.jpg" alt="Wind Power">
                <h3>Pros and Cons about Wind Power</h3>
                <a href="FileDownloadEdu2.php" class="download-btn" download>Download Image</a>
            </div>

            <div class="resource-card">
                <img src="downloadImages/solarEnergy.jpg" alt="Solar Energy">
                <h3>Facts about Solar Energy</h3>
                <a href="FileDownloadEdu3.php" class="download-btn" download>Download Image</a>
            </div>
        </div>

        <!-- Videos Section -->
        <h2>Videos</h2>
        <div class="video-cards">
            <div class="video-card">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/VfowJHJz6-s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>What is Renewable Energy?</h3>
                <p>This video explores the renewable energy transition on the road to net zero, and answers fundamental questions relating to renewables, such as where it comes from and how it is harnessed.</p>
                <a href="https://en1.savefrom.net/1-youtube-video-downloader-8jH/?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DVfowJHJz6-s&utm_source=youtube.com&utm_medium=short_domains&utm_campaign=ssyoutube.com&a_ts=1745137498.006" class="download-btn" download>Download Video</a>
            </div>

            <div class="video-card">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/xKxrkht7CpY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>How do Solar Panels work?</h3>
                <p>Is it possible that one day the world could be completely reliant on solar energy? Richard Komp examines how solar panels convert solar energy to electrical energy.</p>
                <a href="https://en1.savefrom.net/1-youtube-video-downloader-8jH/?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DxKxrkht7CpY&utm_source=youtube.com&utm_medium=short_domains&utm_campaign=ssyoutube.com&a_ts=1745137575.303" class="download-btn" download>Download Video</a>
            </div>

            <div class="video-card">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/xy9nj94xvKA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>How do Wind Turbines work?</h3>
                <p>Explore how wind turbines convert wind into electricity, and the challenges of powering the world entirely with wind energy.</p>
                <a href="https://en1.savefrom.net/1-youtube-video-downloader-8jH/?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dxy9nj94xvKA&utm_source=youtube.com&utm_medium=short_domains&utm_campaign=ssyoutube.com&a_ts=1745137565.635" class="download-btn" download>Download Video</a>
            </div>

            <div class="video-card">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/j7q653ffQO4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3>How does Geothermal Energy work?</h3>
                <p>From electricity generated through geothermal power plants to district energy systems that heat and cool buildings using an underground network of pipes, this alternative energy source has big potential.</p>
                <a href="https://en1.savefrom.net/1-youtube-video-downloader-8jH/?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dj7q653ffQO4&utm_source=youtube.com&utm_medium=short_domains&utm_campaign=ssyoutube.com&a_ts=1745137566.68" class="download-btn" download>Download Video</a>
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