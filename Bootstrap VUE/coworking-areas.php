
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Euro bussines</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Corpo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
   <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<script type="text/javascript" src="menu/js/iscroll.js"></script>
	<script type="text/javascript" src="menu/js/gx.sidemenu.js"></script>

	<!-- ---- CODE HIGHLIGHTER ---- -->
	<link rel="stylesheet" type="text/css" href="menu/assets/jquery.snippet.css" />
	<script type="text/javascript" src="menu/assets/jquery.snippet.js"></script>

	<!-- ---- CODE HIGHLIGHTER ---- -->
	<script type="text/javascript">
		$(function() {
			$('#gx-sidemenu').gxSideMenu({
				mode: isMobile.any() ? 'tiny' : 'normal', // normal | tiny
				interval: 300, // animations' interval
				direction: 'left', // left | right
				openOnHover: true, // true | false
				clickTrigger: true, // true | false
				followURLs: true, // true | false
				trigger: ".gx-menu-open.list", // class or id of trigger element
				startFrom: 60, // start pixel from corner on hover trigger
				startClosed: true, // menu opens on document load
				scrolling: true, // menu scrollable (iScroll plugin needed!)
				urlBase: '/sidemenu/', // document base URL
				backText: 'Prev | Volver', // Back button text
				onOpen: function() { }, // Open callback
				onClose: function() { } // Close callback
			});
			$('#gx-sidemenu-right').gxSideMenu({
				mode: 'tiny', // normal | tiny
				interval: 300,
				direction: 'right', // left | right
				openOnHover: true, // true | false
				followURLs: true, // true | false
				clickTrigger: false,
				trigger: ".gx-menu-open.share" // class or id of trigger element
			});
			
			$('pre.snippet').snippet("javascript", { style: 'ide-kdev' });
			$('pre.snippet-html').snippet("html", { style: 'ide-kdev' });

		});
	</script>
	
	<link rel="stylesheet" type="text/css" href="menu/css/entypo.css" />
	
	<!--link rel="stylesheet" type="text/css" href="css/gx-sidemenu-blue.css"-->
	<!--link rel="stylesheet" type="text/css" href="css/gx-sidemenu-light.css"-->
	<link rel="stylesheet" type="text/css" href="menu/css/gx-sidemenu-blue.css" />
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Sarabun:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;subset=latin-ext,thai,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Courgette&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
	<style type="text/css">
		
	</style>
</head>

<body>
	<!-- main -->
	<div class="d-flex">
		<!-- header -->
		<div id="gx-sidemenu" style="z-index: 9998">
		<div class="gx-sidemenu-inner" id="gx-sidemenu-inner-1">
			<div class="scroll">
				<ul class="gx-menu">
					<li class="home">
						<a href="?home">
							<span class="icon entypo home"></span>
							<span class="text">Inicio</span>
						</a>
					</li>
					<li class="news">
						<a href="#news">
							<span class="icon entypo newspaper"></span>
							<span class="text">Noticias / Eventos</span>
						</a>
						<ul>
							<li>
								<a href="javascript:">
									<span class="icon entypo pencil"></span>
									<span class="text">New Article</span>
								</a>
								<ul>
									<li>
										<a href="?article=false">
											<span class="icon entypo list"></span>
											<span class="text">Next level...</span>
										</a>
									</li>
									<li>
										<a href="?article=true">
											<span class="icon entypo video"></span>
											<span class="text">Another sub element...</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="gallery">
						<a href="?action=galleries">
							<span class="icon entypo picture"></span>
							<span class="text">Areas Coworking</span>
						</a>
					</li>
					<li class="category">
						<a href="javascript:">
							<span class="icon entypo folder"></span>
							<span class="text">Servicios</span>
						</a>
						<ul>
							<li>
								<a href="javascript:">
									<span class="icon entypo pencil"></span>
									<span class="text">New Article</span>
								</a>
								<ul>
									<li>
										<a href="?article=false">
											<span class="icon entypo list"></span>
											<span class="text">Next level...</span>
										</a>
									</li>
									<li>
										<a href="?article=true">
											<span class="icon entypo video"></span>
											<span class="text">Another sub element...</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="users">
						<a href="javascript:">
							<span class="icon entypo users"></span>
							<span class="text">Usuarios</span>
						</a>
						<ul>
							<li>
								<a href="?login=true" target="_blank">
									<span class="icon entypo user"></span>
									<span class="text">Acceso</span>
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>

		<div id="gx-sidemenu-login">
			<div class="divider"></div>
			<h2>
				<span class="icon entypo user"></span>
				<span class="text">Welcome, {{UserName}}!</span>
			</h2>
			<div class="divider"></div>
			<a href="?edit=profile" class="login-btn">Edit profile</a>
			<div class="divider"></div>
			<a href="?logout" class="login-btn">Log out...</a>
			<div class="divider"></div>
		</div>
	</div>
		<!-- //header -->

		<!-- left content -->
		<div id="main-content">
			<!-- home -->
			<div id="home">
				<!-- banner -->
				<div class="banner_w3lspvt">
					<div class="banner-top1">
						<div class="container">
							<div class="banner-text text-center">
								<h4>c</h4>
								<h3 class="my-md-4 my-3">Area de coworking</h3>
								<p class="movetxt text-bl">We Provide Best Services</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //banner -->
			</div>
			<!-- //home -->

			<!-- about -->
			<div class="welcome py-5" id="about">
				<div class="container py-xl-5 py-lg-3">
					<div class="row py-xl-4">
						<div class="col-lg-6 welcome-left pr-lg-5">
							<h2>Estas son las áreas disponibles</h2>
							<h4 class="mt-2 mb-3">Welcome to our company</h4>
							<h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
								aperiam, eaque ipsa quae ab illo inventore</h6>
							<p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porta erat sit amet eros
								sagittis, quis
								hendrerit
								libero aliquam. Fusce semper augue ac dolor efficitur, a pretium metus pellentesque.</p>
						</div>
						<div class="col-lg-6 welcome-right text-center mt-lg-0 mt-5">
							<div class="row">
								<div class="col-sm-6">
									<div class="about-sty ml-sm-3">
										<span class="fa fa-bar-chart text-wh"></span>
										<p class="text-li mt-2">Business Strategy</p>
									</div>
								</div>
								<div class="col-sm-6 mt-sm-0 mt-4">
									<div class="about-sty-2 px-4 py-5">
										<span class="fa fa-line-chart text-wh"></span>
										<p class="text-li mt-2">Business Growth</p>
									</div>
									<div class="about-sty-2 px-4 py-5 mt-4">
										<span class="fa fa-usd text-wh"></span>
										<p class="text-li mt-2">Financial Planning</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //about -->

			<!-- services -->
			<div class="serives-w3pvt-web py-5" id="services">
				<div class="container py-xl-5 py-lg-3">
					<div class="row support-bottom text-center">
						<div class="col-md-4 services-w3ls-grid">
							<div class="serv-icon mx-auto">
								<span class="fa fa-pie-chart"></span>
							</div>
							<h4 class="text-wh mt-md-4 mt-3 mb-3">Service 1</h4>
							<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
						</div>
						<div class="col-md-4 services-w3ls-grid my-md-0 my-4">
							<div class="serv-icon clr-2 mx-auto">
								<span class="fa fa-opencart"></span>
							</div>
							<h4 class="text-wh mt-md-4 mt-3 mb-3">Service 2</h4>
							<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
						</div>
						<div class="col-md-4 services-w3ls-grid">
							<div class="serv-icon clr-3 mx-auto">
								<span class="fa fa-ravelry"></span>
							</div>
							<h4 class="text-wh mt-md-4 mt-3 mb-3">Service 3</h4>
							<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //services -->

			<!-- middle -->
			<div class="w3pvt-web-wthree-works py-5">
				<div class="container py-xl-4 py-lg-3">
					<div class="row">
						<div class="col-lg-7 img-left-posi text-lg-left text-center">
							<img src="images/middle.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-lg-5 grids-w3ls-right-2 mt-xl-5 mt-4">
							<h3 class="title text-bl text-uppercase mb-lg-4 mb-3">Your Title Here</h3>
							<ul class="list-unstyled">
								<li>
									<span class="fa fa-check-square-o"></span>
									Masagni dolores eoquie
								</li>
								<li class="my-2">
									<span class="fa fa-check-square-o"></span>
									Ipsumquia dolor eiuse
								</li>
								<li>
									<span class="fa fa-check-square-o"></span>
									Ut laboreas dolore
								</li>
							</ul>
							<h4 class="title text-bl mt-5 mb-sm-4 mb-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
								fugit.</h4>
							<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad reprehenderit qui
								inea voluptate velit esse. </p>
						</div>
					</div>
				</div>
			</div>
			<!-- //middle -->

			<!-- blog -->
			<section class="blog_w3ls pt-3 pb-5" id="blog">
				<div class="container pb-xl-5 pb-lg-3">
					<h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">Latest Blog</h3>
					<div class="row">
						<!-- blog grid -->
						<div class="col-lg-4 col-md-6">
							<div class="card border-0 med-blog">
								<div class="card-header p-0">
									<a href="#">
										<img class="card-img-bottom" src="images/blog1.jpg" alt="image">
									</a>
								</div>
								<div class="card-body border border-top-0">
									<div class="mb-3">
										<h5 class="blog-title card-title font-weight-bold m-0">
											<a href="#">Dictum porta auris</a>
										</h5>
										<div class="blog_w3icon">
											<span>
												Jan 12, 2019 - loremipsum</span>
										</div>
									</div>
									<p>Cras ultricies ligula sed magna dictum porta auris blandita. Nulla viverra pharetra se.</p>
								</div>
							</div>
						</div>
						<!-- //blog grid -->
						<!-- blog grid -->
						<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
							<div class="card border-0 med-blog">
								<div class="card-header p-0">
									<a href="#">
										<img class="card-img-bottom" src="images/blog2.jpg" alt="image">
									</a>
								</div>
								<div class="card-body border">
									<div class="mb-3">
										<h5 class="blog-title card-title font-weight-bold m-0">
											<a href="#">Sed do eiusmod</a>
										</h5>
										<div class="blog_w3icon">
											<span>
												Jan 14, 2019 - loremipsum</span>
										</div>
									</div>
									<p>Cras ultricies ligula sed magna dictum porta auris blandita. Nulla viverra pharetra se.</p>
								</div>
							</div>
						</div>
						<!-- //blog grid -->
						<!-- blog grid -->
						<div class="col-lg-4 col-md-6 mx-lg-0 mx-md-auto mt-lg-0 mt-5">
							<div class="card border-0 med-blog">
								<div class="card-header p-0">
									<a href="#">
										<img class="card-img-bottom" src="images/blog3.jpg" alt="image">
									</a>
								</div>
								<div class="card-body border border-top-0">
									<div class="mb-3">
										<h5 class="blog-title card-title font-weight-bold m-0">
											<a href="#">Tempor inci didunt</a>
										</h5>
										<div class="blog_w3icon">
											<span>
												Jan 16, 2019 - loremipsum</span>
										</div>
									</div>
									<p>Cras ultricies ligula sed magna dictum porta auris blandita. Nulla viverra pharetra se.</p>
								</div>
							</div>
						</div>
						<!-- //blog grid -->
					</div>
				</div>
			</section>
			<!-- //blog -->

			<!-- stats section -->
			<div class="stats py-5" id="stats">
				<div class="container py-xl-5 py-lg-3">
					<div class="row text-center py-sm-3">
						<div class="col-md-3 col-sm-6 cowork_stats_left">
							<p class="counter">600</p>
							<p class="para-text-w3ls text-li">Projects Complete</p>
						</div>
						<div class="col-md-3 col-sm-6 cowork_stats_left mt-sm-0 mt-4">
							<p class="counter">800</p>
							<p class="para-text-w3ls text-li">Awards</p>
						</div>
						<div class="col-md-3 col-sm-6 cowork_stats_left mt-md-0 mt-4">
							<p class="counter">1200</p>
							<p class="para-text-w3ls text-li">Happy Clients</p>
						</div>
						<div class="col-md-3 col-sm-6 cowork_stats_left mt-md-0 mt-4">
							<p class="counter">500</p>
							<p class="para-text-w3ls text-li">Mail Conversation</p>
						</div>
					</div>
				</div>
			</div>
			<!-- //stats section -->

			<!-- team -->
			<section class="team py-5" id="team">
				<div class="container py-xl-5 py-lg-3">
					<h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">Our Team</h3>
					<div class="row inner-sec-cowork-w3pvt-lauinfo">
						<div class="col-md-4 team-grids text-center">
							<img src="images/team1.jpg" class="img-fluid" alt="">
							<div class="team-info">
								<div class="caption mb-3">
									<h4>John Doe</h4>
								</div>
								<div class="social-icons-section">
									<a class="fac" href="#">
										<span class="fa fa-facebook"></span>
									</a>
									<a class="twitter mx-2" href="#">
										<span class="fa fa-twitter"></span>
									</a>
									<a class="google" href="#">
										<span class="fa fa-google-plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 team-grids my-md-0 my-4 text-center">
							<img src="images/team2.jpg" class="img-fluid" alt="">
							<div class="team-info">
								<div class="caption mb-3">
									<h4>Adam Ster</h4>
								</div>
								<div class="social-icons-section">
									<a class="fac" href="#">
										<span class="fa fa-facebook"></span>
									</a>
									<a class="twitter mx-2" href="#">
										<span class="fa fa-twitter"></span>
									</a>
									<a class="google" href="#">
										<span class="fa fa-google-plus"></span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 team-grids text-center">
							<img src="images/team3.jpg" class="img-fluid" alt="">
							<div class="team-info">
								<div class="caption mb-3">
									<h4>Chris Tina</h4>
								</div>
								<div class="social-icons-section">
									<a class="fac" href="#">
										<span class="fa fa-facebook"></span>
									</a>
									<a class="twitter mx-2" href="#">
										<span class="fa fa-twitter"></span>
									</a>
									<a class="google" href="#">
										<span class="fa fa-google-plus"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- team -->

			<!-- testimonials -->
			<section class="testi text-center py-5" id="testi">
				<div class="container pb-xl-5 pb-lg-3">
					<div class="title-section mb-sm-5 mb-4 pb-xl-4 text-center">
						<h4 class="text-bl mb-2">We have</h4>
						<h3 class="w3ls-title text-bl text-uppercase let font-weight-bold">7630 happy users</h3>
					</div>
					<div class="row pb-4">
						<div class="col-lg-6">
							<div class="testi-cgrid">
								<div class="testi-icon">
									<span class="fa fa-user text-wh" aria-hidden="true"></span>
								</div>
								<h6 class="b-w3ltxt mt-4">Steve Joe</h6>
								<p class="mx-auto">Onec consequat sapien ut leo cursus
									rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
							</div>
						</div>
						<div class="col-lg-6 mt-lg-0 mt-sm-5 mt-4">
							<div class="testi-cgrid">
								<div class="testi-icon">
									<span class="fa fa-user text-wh" aria-hidden="true"></span>
								</div>
								<h6 class="b-w3ltxt mt-4">Petey Sty</h6>
								<p class="mx-auto">Onec consequat sapien ut leo cursus
									rhoncus. Nullam dui mi, vulputate ac metus semper.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- testimonials -->

			<!-- middle section -->
			<section class="w3ls-bnrbtm py-5 text-center">
				<div class="container py-xl-5 my-lg-5">
					<div class="cont-w3pvt py-sm-5 py-4">
						<span class="w3-line text-uppercase">Corpo</span>
						<h3 class="w3pvt-web-title mt-2 mb-3">Our Mission is simple, deliver very honest financial products to every
							customer.</h3>
						<p class="text-botm">Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at</p>
						<a href="#about" class="btn button-style mt-sm-5 mt-4">Read More</a>
					</div>
				</div>
			</section>
			<!-- //middle section -->

			<!-- contact -->
			<section class="contact py-5" id="contact">
				<div class="container py-xl-5 py-lg-3">
					<h3 class="title text-uppercase text-center text-bl mb-5 pb-xl-3">Contacto</h3>
					<div class="row mail-w3l-w3pvt-web pt-xl-4">
						<div class="col-md-5 contact-left-w3ls">
							<h3>Información de Contacto</h3>
							<div class="row visit">
								<div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
									<span class="fa fa-home" aria-hidden="true"></span>
								</div>
								<div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
									<h4>Visítanos</h4>
									<p>Simó Ballester 9 Bj, 07008 Palma de Mallorca </p>
									<p>Islas Baleares</p>
								</div>
							</div>
							<div class="row mail-w3 my-4">
								<div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
									<span class="fa fa-envelope-o" aria-hidden="true"></span>
								</div>
								<div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
									<h4>Mail us</h4>
									<p><a href="mailto:info@example.com">info@coworking.com</a></p>
								</div>
							</div>
							<div class="row call">
								<div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
									<span class="fa fa-phone" aria-hidden="true"></span>
								</div>
								<div class="col-md-10 col-sm-10 col-10 contact-text-w3pvt-webinf0">
									<h4>Llámanos</h4>
									<p>+0034 871 964 890 </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 w3pvt-webinfo_mail_grid_right mt-md-0 mt-5">
							<form action="#" method="post">
								<div class="form-group">
									<input type="text" name="Name" class="form-control" placeholder="Nombre" required="">
								</div>
								<div class="form-group">
									<input type="email" name="Email" class="form-control" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<textarea name="Message" placeholder="Mensaje......." required=""></textarea>
								</div>
								<button type="submit" class="btn">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- //contact -->
			<!-- map -->
			<div class="map p-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3075.3344415114543!2d2.6400441156564534!3d39.57461231434521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297925c3c887c0d%3A0xe3778944f65d8bb8!2sCalle+de+Sim%C3%B3n+Ballester%2C+9%2C+07011+Palma%2C+Islas+Baleares!5e0!3m2!1ses-419!2ses!4v1553468896223" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- //map -->

			<!-- partners -->
			<section class="partners text-center py-5">
				<div class="container py-xl-5 py-lg-3">
					<h4 class="text-bl font-weight-bold mb-sm-5 mb-4">Trusted by the world's best companies</h4>
					<ul class="list-unstyled partners-icon pt-md-5 pt-4">
						<li>
							<span class="fa fa-ravelry clr1"></span>
						</li>
						<li>
							<span class="fa fa-meetup clr2"></span>
						</li>
						<li>
							<span class="fa fa-eercast clr3"></span>
						</li>
						<li>
							<span class="fa fa-pied-piper clr4"></span>
						</li>
						<li>
							<span class="fa fa-yoast clr5"></span>
						</li>
						<li>
							<span class="fa fa-superpowers clr6"></span>
						</li>
					</ul>
				</div>
			</section>
			<!-- //partners -->

			<!-- footer -->
			<footer class="py-5">
				<div class="container py-xl-4">
					<div class="row footer-top">
						<div class="col-md-5 footer-grid_section_1its">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-6">
									<div class="row">
										<div class="col-2 foot-icon-w3">
											<span class="fa fa-user" aria-hidden="true"></span>
										</div>
										<div class="col-10">
											<h2 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">About Us</h2>
											<p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-6 mt-lg-0 mt-md-4 mt-sm-0 mt-4">
									<div class="row">
										<div class="col-2 foot-icon-w3">
											<span class="fa fa-hand-o-right" aria-hidden="true"></span>
										</div>
										<div class="col-10">
											<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Who We Are</h3>
											<p>Error sit antium dolorts remq hymue laud.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-lg-6 col-md-12 col-sm-6">
									<div class="row">
										<div class="col-2 foot-icon-w3">
											<span class="fa fa-ticket" aria-hidden="true"></span>
										</div>
										<div class="col-10">
											<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">We Offer</h3>
											<p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-6 mt-lg-0 mt-md-4 mt-sm-0 mt-4">
									<div class="row">
										<div class="col-2 foot-icon-w3">
											<span class="fa fa-bullhorn" aria-hidden="true"></span>
										</div>
										<div class="col-10">
											<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Popular In</h3>
											<p>Error sit antium dolorts remq hymue laud.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 footer-grid_section_1its my-md-0 my-5">
							<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-md-3 mb-4">Contact Us</h3>
							<div class="contact-info">
								<div class="footer-style-w3ls">
									<h4 class="text-li mb-2">Phone</h4>
									<p>+121 098 8907 9987</p>
								</div>
								<div class="footer-style-w3ls my-4">
									<h4 class="text-li mb-2">Email </h4>
									<p><a href="mailto:info@example.com">info@example.com</a></p>
								</div>
								<div class="footer-style-w3ls">
									<h4 class="text-li mb-2">Location</h4>
									<p>Honey Avenue, New York City</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 footer-grid_section_1its">
							<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Newsletter</h3>
							<p>Be the first to get latest news and offers!<br>Sed ut perspiciatis unde omnis.</p>
							<form action="#" method="post" class="subscribe_form mt-4">
								<input class="form-control" type="email" name="email" placeholder="Enter your email..." required="">
								<button type="submit" class="btn">Submit</button>
							</form>
							<!-- social icons -->
							<div class="w3pvt-webinfo_social_icons mt-4 pt-md-0 pt-3">
								<h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3">Connect With Social</h3>
								<ul class="w3pvt-webits_social_list list-unstyled">
									<li class="w3_w3pvt-web_facebook">
										<a href="#">
											<span class="fa fa-facebook-f"></span>
										</a>
									</li>
									<li class="mx-2 w3pvt-web_twitter">
										<a href="#">
											<span class="fa fa-twitter"></span>
										</a>
									</li>
									<li class="w3_w3pvt-web_dribble">
										<a href="#">
											<span class="fa fa-dribbble"></span>
										</a>
									</li>
									<li class="ml-2 w3_w3pvt-web_google">
										<a href="#">
											<span class="fa fa-google-plus"></span>
										</a>
									</li>
								</ul>
							</div>
							<!-- social icons -->
						</div>
					</div>
				</div>
			</footer>
			<!-- //footer -->
			<!-- copyright -->
			<div class="cpy-right text-center py-3">
				<p>© 2019 Corpo. All rights reserved | Design by
					<a href="#".</a>
				</p>
			</div>
			<!-- //copyright -->
			<!-- move top icon -->
			<a href="#home" class="move-top text-center"></a>
			<!-- //move top icon -->
		</div>
		<!-- //left content -->
	</div>
	<!-- //main -->
	<!---->
	<script src="js/bootstrap.min.js"></script>

	<script>
	   $(document).ready(function () {
	      $('.d-flex i.fa-bars').click(function () {
	         if ($('header').css('display') == 'none') {
	            $('header').css('display', 'block');
	            $('.d-flex i.fa-bars').css('display', 'none');
	         }
	      });
	      $('.close-menu').click(function () {
	        $('header').css('display', 'none');
	        $('.d-flex i.fa-bars').css('display', 'block'); 
	      });
	   });
	</script>

</body>
</html>