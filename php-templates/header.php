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
	<link rel="stylesheet" href="css/bootstrap.css" />
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

<!-- TOP BAR HEADER NAVIGATION AND MOBILE DROPDOWN -->
<header>
	<div class="container" id="mobile-nav">
		<div class="row">
			<section class="col-xs-12">
				<nav class="mobile-nav">
					<ul>
						<li><a href="researchers.html">Researchers</a></li>
						<li><a href="consumers.html">Consumers</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#">Sign Up / Login</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<section class="col-md-3 col-sm-3 col-xs-9">
				<a href="index.html" alt="home"><h1 class="main-logo">mindswarms</h1></a>
			</section>
			<section class="col-md-9 col-sm-9 col-xs-3">
				<span class="trigger-nav"><span class="icon icon-list"></span></span>
				<nav class="hor_nav">
					<ul>
					    <li class="blue"><a href="researchers.html">Researchers</a>
					    	<ul>
					        	<li><a href="">Benefits</a></li>
					        	<li><a href="">How it Works</a></li>
					        	<li><a href="">Methodologies</a></li>
					        	<li><a href="">Case Studies</a></li>
					        	<li><a href="">Our Story</a></li>
					    	</ul>
					    </li>
					    <li class="green"><a href="consumers.html">Consumers</a>
					    	<ul>
					        	<li><a href="">Home</a></li>
					        	<li><a href="">Why?</a></li>
					        	<li><a href="">How it Works</a></li>
					        	<li><a href="">Tips</a></li>
					        	<li><a href="">FAQ</a></li>
					    	</ul>
					    </li>
					    <li class="orange"><a href="blog.html">Blog</a></li>
						<li class="signup"><a href="">Sign Up / Login</a></li>
					</ul>
				</nav>
			</section>
		</div>
	</div>
</header>