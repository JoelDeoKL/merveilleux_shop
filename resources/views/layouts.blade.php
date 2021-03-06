<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Merveilleux-SHOP</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{asset('images/logoM.png')}}">
	<!-- Web Font -->
	<link href="{{url('https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap')}}" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +243 970 915 187</li>
								<li><i class="ti-email"></i> merveilleux.shop@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i>Localisation</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Délai de Livraison</a></li>
								<li><i class="ti-user"></i> <a href="#">Mon compte</a></li>
								<li><i class="ti-power-off"></i><a href="login.html#">Se connecter</a></li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="{{url('/')}}"><img src="{{asset('images/logoM.png')}}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Rechercher ici..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">Catégories</option>
									<option>Homme</option>
									<option>Femme</option>
									<option>Enfant</option>
									<option>Mixte Adulte</option>
									<option>Mixte Enfant</option>
								</select>
								<form>
									<input name="search" placeholder="Rechercher vos produits ici....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Commandes</span>
										<a href="#">Voir</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="{{asset('images/bbn.jpg')}}" alt="#"></a>
											<h4><a href="#">Chemise Homme</a></h4>
											<p class="quantity">1x -> <span class="amount">$19.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="{{asset('images/bbn.jpg')}}" alt="#"></a>
											<h4><a href="#">Blouse Femme</a></h4>
											<p class="quantity">3x -> <span class="amount">$5.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="{{url('caisse')}}" class="btn animate">Payer</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<li><a href="#">Nouvel arrivage <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($arrivages as $arrivage);
												<li>
													<a href="#">{{$arrivage->designation}} : dans la categorie {{$arrivage->categories->nom_categorie}}</a>
												</li>
											@endforeach
										</ul>
									</li>
									<li class="main-mega"><a href="#">Commande recente <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
													<p>Commande</p>
											</li>
										</ul>
									</li>
									<li><a href="#">Homme <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($hommes as $homme);
												<li><a href="#">{{$homme->designation}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="#">Femme <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($femmes as $femme);
												<li><a href="#">{{$femme->designation}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="#">Enfant <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($enfants as $enfant);
												<li><a href="#">{{$enfant->designation}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="#">Mixte Adulte <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($mixte_adultes as $mixte_adulte);
												<li><a href="#">{{$mixte_adulte->designation}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="#">Mixte Enfant <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($mixte_enfants as $mixte_enfant);
												<li><a href="#">{{$mixte_enfant->designation}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="#">Accessoires <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											@foreach($accessoires as $accessoire);
												<li><a href="#">{{$accessoire->designation}}</a></li>
											@endforeach
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="{{url('/')}}">Accueil</a></li>
													<li><a href="{{url('produit')}}">Produit</a></li>												
													<li><a href="{{url('service')}}">Service</a></li>
													<li><a href="#">Commande<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="{{url('shop')}}">Grille de Commande</a></li>
															<li><a href="{{url('panier')}}">Panier</a></li>
															<li><a href="{{url('caisse')}}">Paiement</a></li>
														</ul>
													</li>
													<li><a href="{{url('blog')}}">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="{{url('blog')}}">Blog</a></li>
														</ul>
													</li>
													<li><a href="{{asset('contact')}}">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->

    @yield('content')

    <!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="{{url('/')}}"><img src="images/logoM.png" alt="#"></a>
							</div>
							<p class="text">Merveilleux-SHOP est une boutique de vente des habits et divers en ligne. Les produits sont variés selon les catégories de personnes (Hommes, Femmes, Enfants)</p>
							<p class="call">Pour toute question contacter 24/27 et 7J/7 à ce numéro<span><a href="tel:+243970915187">+243 970 915 187</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Informations</h4>
							<ul>
								<li><a href="{{url('apropos')}}">Apropos</a></li>
								<li><a href="merveilleux.shop@gmail.com">Email</a></li>
								<li><a href="{{url('condition')}}">Condition d'utilisation</a></li>
								<li><a href="{{url('contact')}}">Contact</a></li>
								<li><a href="{{url('help')}}">Aide</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Service Client</h4>
							<ul>
								<li><a href="{{url('paiement')}}">Paiement</a></li>
								<li><a href="{{url('commande')}}">Commande</a></li>
								<li><a href="#">Confidentialite</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Contact</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>04, Av. Mr Nsolotshi Q/4 C/RUASHI</li>
									<li> LUBUMBASHI-RDC</li>
									<li>merveilleux.shop@gmail.com</li>
									<li>+243 970 915 187</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{asset('images/payments.png')}}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('js/active.js')}}"></script>
	</html>
</body>