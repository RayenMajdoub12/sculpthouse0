<?php require 'User/function.php';?>

<?php 
if(session_status()==PHP_SESSION_NONE ){
	session_start();
	}
	?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ONLINE GYM" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: 25529400/92582051</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <div class="top-menu">
			<div class="container">
				<div class="row">
					<img src="images/logo.png" id="main-logo" class="navbar-brand" style="max-width: 15%;height: auto;" alt="logo">
					<div class="col-xs-10 text-right menu-1" style="padding-top: 28px;">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="coaching.php">Trainer</a></li>
							<li><a href="shop.php">Shop</a></li>	
							<li><a href="AfficherEvent.php">Events</a></li>	
							<?php if((isset($_SESSION['auth']))&&($_SESSION['auth']->type=='user')):?>
							    <li><a href="profile.php">My profile</a></li>
							        <li><a href="AfficherForms.php">Pubs</a></li>
							         <li><a href="AffichermesForms.php">mes Pubs</a></li>
							            <li><a href="profile.php">My profile</a></li>
								<li><a href="logout.php">Logout</a></li>
								<li><a href="mescommandes.php">Shoping Cart</a></li>
								<?php elseif((isset($_SESSION['auth']))&& ($_SESSION['auth']->type=='employee')):?>
									<li><a href="profile.php">My profile</a></li>
									      <li><a href="AfficherForms.php">Pubs</a></li>
							         <li><a href="AffichermesForms.php">mes Pubs</a></li>
								<li><a href="logout.php">Logout</a></li>
								<li class="has-dropdown">
								<a href="#">Workspace</a>
								<ul class="dropdown">
							<li><a href="seance.php">Online Session</a></li>
							<!----ajouter des autre page ici (edoa)--->
							<li><a href="Calendrier/CalendrierCoach/index.php">My calendar</a></li>
							</ul>
							</li>
							<?php else :?>
							<li><a href="login.php">login</a></li>
							<li class="has-dropdown">
							<a href="signup.php">sign up</a>
							<ul class="dropdown">
							<li><a href="signup.php">Sign up</a></li>
							<li><a href="signup_coach.php">Job Application</a></li>
							</ul>
							</li>
							<?php endif;?>

						</ul>
					</div>
				</div>
				
			</div>
		</div>
		
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/unnamed.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Sculpt House</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php if(isset($_SESSION['flash'])):?>
	<?php foreach($_SESSION['flash'] as $type =>$message):?>
	<div class="alert alert-<?= $type;?>">
	<?= $message;?>
	</div>
	<?php endforeach;?>
	<?php unset($_SESSION['flash']);?>
	<?php endif;?>