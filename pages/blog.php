<?php

require("../config/commandes.php");

  $etablissements=afficher();

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog &mdash; EducMali.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="../css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
<?php require('../php/nav.php'); ?>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(../images/img_bg_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Nos ??tablissements</h1>
									
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-blog">
		<div class="container ">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Nos ??tablissements</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
<?php foreach($etablissements as $etablissement): ?> 
				<div class="col-lg-4 col-md-4 ">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(<?= $etablissement->image ?>);"></a>
						<div class="blog-text">
							<h3><a href="#"><?= $etablissement->nom ?></a></h3>
							<span class="posted_on"><?= $etablissement->niveau ?></span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
<?php endforeach; ?> 
				<!--<div class="col-lg-4 col-md-4 ">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/Ecole-Nationale-dIngenieurs-Abderhame-Baba-Toure.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">Abderhamane Baba Tour?? National School of Engineers</a></h3>
							<span class="posted_on">Universit??</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4  ">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/ecole\ normale.png);"></a>
						<div class="blog-text">
							<h3><a href="#">Normal School of Technical and Vocational Education</a></h3>
							<span class="posted_on">Universit??</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4  ">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/University_of_Bamako_Logo.png);"></a>
						<div class="blog-text">
							<h3><a href="#">University of Law and Political Science of Bamako</a></h3>
							<span class="posted_on">Universit??</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4 ">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/project-3.jpg);"></a>
						<div class="blog-text">
							<h4><a href="#">Rural Polytechnic Institute of Training and Applied Research of Katibougou</a></h4>
							<span class="posted_on">Universit??</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/project-3.jpg);"></a>
						<div class="blog-text">
							<h3><a href="#">University of Arts and Humanities of Bamako</a></h3>
							<span class="posted_on">Universit??</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://mamarys.github.io/projet_ecole/" class="blog-img-holder" style="background-image: url(../images/colmo.png);"></a>
						<div class="blog-text">
							<h4><a href="https://mamarys.github.io/projet_ecole/">Colmo college moderne</a></h4>
							<span class="posted_on">college</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/person1.jpg);"></a>
						<div class="blog-text">
							<h4><a href="#">Lyc??e Sacr??-Coeur Baco-Djicoroni</a></h4>
							<span class="posted_on">college</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://www.kodonso.net/" class="blog-img-holder" style="background-image: url(../images/LYCEE_KODONSO.png);"></a>
						<div class="blog-text">
							<h4><a href="https://www.kodonso.net/">Lyc??e KODONSO</a></h4>
							<span class="posted_on">Lyc??e</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://cswaka96.wixsite.com/cswaka96" class="blog-img-holder" style="background-image: url(../images/wa-kamissoko.jpg);"></a>
						<div class="blog-text">
							<h4><a href="https://cswaka96.wixsite.com/cswaka96">Complexe scolaire wa-kamissoko</a></h4>
							<span class="posted_on">Lyc??e</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://lyceelescastors.com/" class="blog-img-holder" style="background-image: url(../images/castors.jpg);"></a>
						<div class="blog-text">
							<h4><a href="https://lyceelescastors.com/">Lyc??e les Castors</a></h4>
							<span class="posted_on">Lyc??e</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/person1.jpg);"></a>
						<div class="blog-text">
							<h4><a href="#">Lyc??e El-Madani Drav?? Lafiabougou</a></h4>
							<span class="posted_on">Lyc??e</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="https://www.libertebko.org/" class="blog-img-holder" style="background-image: url(../images/liberte.jpg);"></a>
						<div class="blog-text">
							<h4><a href="https://www.libertebko.org/">??tablissement Libert?? Bamako MALI</a></h4>
							<span class="posted_on">Lyc??e</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/person1.jpg);"></a>
						<div class="blog-text">
							<h4><a href="#">Lyc??e Mamadou M'bodji De S??b??nikoro</a></h4>
							<span class="posted_on">Lyc??e</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(../images/person1.jpg);"></a>
						<div class="blog-text">
							<h4><a href="#">Lyc??e Oumar Ba</a></h4>
							<span class="posted_on">Lyc??e</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							
						</div> 
					</div>
				</div> -->


			</div>
		</div>
	</div>

	<div id="fh5co-register" style="background-image: url(../images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(../images/montagne.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>?? propos de l'??ducation</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Apprentissage</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Cours</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Rencontres</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Apprendre &amp; Grandir</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">T??moignages</a></li>
						<li><a href="#">Manuel</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engagez-nous</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Assistant visuel</a></li>
						<li><a href="#">L'analyse du syst??me</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>JURIDIQUE</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Trouver des cr??ateurs</a></li>
						<li><a href="#">Trouver des d??veloppeurs</a></li>
						<li><a href="#">??quipes</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2022 BENBAREK. Tous les droits sont r??serv??s.</small> 
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="../js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

