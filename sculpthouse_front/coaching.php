<?php require 'header.php';?>
<?php if((isset($_SESSION['auth']))&&($_SESSION['auth']->type=='user')):?>
	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<a href="Calendrier/CalendrierUser/index.php"><h2>Your week schedule</h2></a>
				</div>
			</div>
		</div>
	</div>>
	
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div>
				
				</div>
			
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Exercices à la maison</h2>
					<p>Vos coachs ont mis a votre dispositons des exercices que vous pouvez faire seul chez et sans equipements afin de toujours garder le rythme</p>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/suqats-1024x768.jpeg); ">
							<a href="les_exercices.php?exercice=1">
								<div class="case-studies-summary">
									<span>Niveau: Débutant</span>
									<h2>Bas du corps</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/images.jfif); ">
							<a href="les_exercices.php?exercice=2">
								<div class="case-studies-summary">
									<span>Niveau: Débutant</span>
									<h2>Abdoninaux</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Poitrine.jpeg); ">
							<a href="les_exercices.php?exercice=3">
								<div class="case-studies-summary">
									<span>Niveaux: Débutant</span>
									<h2>Poitrine</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Bras.jfif); "> 
							<a href="les_exercices.php?exercice=4">
								<div class="case-studies-summary">
									<span>Niveau: Débutant</span>
									<h2>Bras</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bas2.jpg); ">
							<a href="les_exercices.php?exercice=5">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Bas du Corps</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/abdo2.jpg); ">
							<a href="les_exercices.php?exercice=6">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Abdominaux</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/poitrine.jpg); ">
							<a href="les_exercices.php?exercice=7">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Poitrine</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bras2.jpg); ">
							<a href="les_exercices.php?exercice=8">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Bras</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bas3.jpg); ">
							<a href="les_exercices.php?exercice=9">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Bas du Corps</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/abdo3.jfif); ">
							<a href="les_exercices.php?exercice=10">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Abdominaux</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/poitrine3.jpg); ">
							<a href="les_exercices.php?exercice=11">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Poitrine</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bras3.jpg); ">
							<a href="les_exercices.php?exercice=12">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Bras</h2>
								</div>
							</a>
						</li>
					</ul>		
				</div>
			</div>
		</div>
	</div>



	<?php require 'footer.php';?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/fullcalendar/fullcalendar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/calendar-conf-events.js"></script>
	

	</body>
</html>
							    
<?php elseif((isset($_SESSION['auth']))&& ($_SESSION['auth']->type=='employee')):?>
	<div id="fh5co-schedule" class="fh5co-bg" style="background-image: url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<a href="Calendrier/CalendrierCoach/index.php"><h2>Your week schedule</h2></a>
				</div>
			</div>
		</div>
	</div>>
	
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div>
				
				</div>
			
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Exercices à la maison</h2>
					<p>Vos coachs ont mis a votre dispositons des exercices que vous pouvez faire seul chez et sans equipements afin de toujours garder le rythme</p>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/suqats-1024x768.jpeg); ">
							<a href="les_exercices.php?exercice=1">
								<div class="case-studies-summary">
									<span>Niveau: Débutant</span>
									<h2>Bas du corps</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/images.jfif); ">
							<a href="les_exercices.php?exercice=2">
								<div class="case-studies-summary">
									<span>Niveau: Débutant</span>
									<h2>Abdoninaux</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Poitrine.jpeg); ">
							<a href="les_exercices.php?exercice=3">
								<div class="case-studies-summary">
									<span>Niveaux: Débutant</span>
									<h2>Poitrine</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/Bras.jfif); "> 
							<a href="les_exercices.php?exercice=4">
								<div class="case-studies-summary">
									<span>Niveau: Débutant</span>
									<h2>Bras</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bas2.jpg); ">
							<a href="les_exercices.php?exercice=5">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Bas du Corps</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/abdo2.jpg); ">
							<a href="les_exercices.php?exercice=6">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Abdominaux</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/poitrine.jpg); ">
							<a href="les_exercices.php?exercice=7">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Poitrine</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bras2.jpg); ">
							<a href="les_exercices.php?exercice=8">
								<div class="case-studies-summary">
									<span>Niveau: Intermediaire</span>
									<h2>Bras</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bas3.jpg); ">
							<a href="les_exercices.php?exercice=9">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Bas du Corps</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/abdo3.jfif); ">
							<a href="les_exercices.php?exercice=10">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Abdominaux</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/poitrine3.jpg); ">
							<a href="les_exercices.php?exercice=11">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Poitrine</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/bras3.jpg); ">
							<a href="les_exercices.php?exercice=12">
								<div class="case-studies-summary">
									<span>Niveau: Elevé</span>
									<h2>Bras</h2>
								</div>
							</a>
						</li>
					</ul>		
				</div>
			</div>
		</div>
	</div>



	<?php require 'footer.php';?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="lib/fullcalendar/fullcalendar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/calendar-conf-events.js"></script>
	

	</body>
</html>		
<?php endif;?>
