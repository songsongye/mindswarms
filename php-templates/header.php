<!DOCTYPE html>
<html lang="en">
<head>

<!--
	AUTHOR: Corey Sizemore
	EMAIL: coreysizemore@gmail.com
-->

	<meta charset="utf-8" />
	<title>Mindswarms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="">
    <meta name="author" content="">
    
<!-- APPLE TOUCH ICON -->
	<!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png" /> -->

<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/2014-bootstrap.css" />
	<link rel="stylesheet" href="css/styles.css" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.js"></script>
      <script>
		document.createElement('video');
	  </script>
    <![endif]-->

</head>

<!-- DIFFERENT BODY CLASS FOR EACH PAGE -->

<body class="<?= $bodyclass ?>">

<?php
// show video background on home page
if(strtolower($bodyclass) == 'home') {
?>

<!-- VIDEO BACKGROUND -->
	<div class="container-fluid">
		<video autoplay loop poster="" id="video-background">
			<!-- <source src="video/webm.webm" type="video/webm"> -->
			<source src="video/mindswarms-consumer-mobile-video-surveys.mp4" type="video/mp4">
		</video>
		<section class="mobile-background">
		</section>
	</div>

<?php } ?>


<!-- TOP BAR HEADER NAVIGATION AND MOBILE DROPDOWN -->
<header>
	<div class="container" id="mobile-nav">
		<div class="row">
			<section class="col-xs-12">
				<nav class="mobile-nav">
					<ul>
						<li><a href="researchers.php">Researchers</a></li>
						<li><a href="consumers.php">Consumers</a></li>
						<li><a href="http://blog.mindswarms.com/">Blog</a></li>
						<li><a href="login.php">Sign Up / Login</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<section class="col-md-3 col-sm-3 col-xs-9">
				<a href="index.php" alt="home"><h1 class="main-logo">mindswarms</h1></a>
			</section>
			<section class="col-md-9 col-sm-9 col-xs-3">
				<span class="trigger-nav"><span class="icon icon-list"></span></span>
				<nav class="hor_nav">
					<ul>
					    <li class="blue"><a href="researchers.php">Researchers</a>
					    	<ul>
								<li><a href="researchers-howitworks.php">How it Works</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Our Database</a></li>
								<li><a href="#">Occasions</a></li>
								<li><a href="researchers-casestudies.php">Case Studies &amp; Reports</a></li>
								<li><a href="#">About</a></li>
								<li><a href="researchers-academy.php">Academy</a></li>
								<li><a href="#">Start Your Research</a></li>
					    	</ul>
					    </li>
					    <li class="green"><a href="consumers.php">Consumers</a>
					    	<ul>
					        	<li><a href="consumers-whysignup.php">Why Sign Up?</a></li>
								<li><a href="consumers-howitworks.php">How it Works</a></li>
								<li><a href="consumers-tips.php">Tips</a></li>
								<li><a href="consumers-faq.php">FAQ</a></li>
					    	</ul>
					    </li>
					    <li class="orange"><a href="http://blog.mindswarms.com/">Blog</a></li>
						<li class="signup"><a href="login.php">Sign Up / Login</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</div>
</header>