@extends('layouts')

@section('content')

<!-- Slider Area -->
<section class="hero-slider">
	<!-- Single Slider -->
	<div class="single-slider">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-9 offset-lg-3 col-12">
					<div class="text-inner">
						<div class="row">
							<div class="col-lg-7 col-12">
								<div class="hero-text">
									<h1><span>REDUCTION JUSQU'A 10% </span>sur les chémises Hommes</h1>
									<p>Passez vos commandes des chémises<br> à moindre cout durant cette période<br> et bénfinicez d'une réduction</p>
									<div class="button">
										<a href="{{url('shop')}}" class="btn">Commander Maintenant !</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
	<div class="container-fluid">
		<div class="row">
			<!-- Single Banner  -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="single-banner">
					<img src="{{asset('images/9.png')}}" alt="#">
					<div class="content">
						<p>Collectons Homme</p>
						<h3>Des Cagoules Mix <br>Nouveau modèle</h3>
						<a href="#" class="">Découvrer Maintenant</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-4 col-md-6 col-12">
				<div class="single-banner">
					<img src="{{asset('images/6.png')}}" alt="#">
					<div class="content">
						<p>Collections Chaussures</p>
						<h3>Chaussures de Lux<br> 2021</h3>
						<a href="#">Commander Maintenant</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-4 col-12">
				<div class="single-banner tab-height">
					<img src="{{asset('images/2.png')}}" alt="#">
					<div class="content">
						<p>Nouvel Arrivage</p>
						<h3>Chemise Homme <br> Réduction à <span>+5%</span> </h3>
						<a href="{{url('shop')}}">Discover Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
		</div>
	</div>
</section>
<!-- End Small Banner -->

<!-- Start Product Area -->
<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Produit en Vente</h2>
						<p>Voici donc une liste non exaustive des echantillons d'articles que nous exposons pour la vente</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Hommes</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Femmes</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Enfants</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#MixteAdulte" role="tab">Mixte Adulte</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#MixteEnfant" role="tab">Mixte Enfant</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
							</ul>
							<!--/ End Tab Nav -->
						</div>
						<div class="tab-content" id="myTabContent">
							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="man" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										@foreach($hommes as $homme)
											<div class="col-xl-4 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														{{$hommes}}
														<img class="hover-img" src="{{asset('storage/' . $hommes)}}" alt="#">
														<img class="hover-img" src="{{asset('images/1.png')}}" alt="#">
														<div class="button-head">
															<div class="product-action">
																<a title="Quick View" href="achat/{{$homme->id}}"><i class=" ti-eye"></i><span>Voir</span></a>																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Ajouter au panier</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Commander</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3> {{$homme->designation}}</a></h3>
														<div class="product-price">
															<span>${{$homme->prix_unitaire}}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="women" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										@foreach($femmes as $femme)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">	
															<img class="hover-img" src="{{asset('storage/' . $femme->image)}}" alt="#">
															<img class="default-img" src="{{asset('images/9.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a title="Quick View" href="achat/{{$femme->id}}"><i class=" ti-eye"></i><span>Voir</span></a>																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Ajouter au panier</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Commander</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3> {{$femme->designation}}</a></h3>
														<div class="product-price">
															<span>${{$femme->prix_unitaire}}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="kids" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										@foreach($enfants as $enfant)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
															<img class="hover-img" src="{{asset('storage/' . $enfant->image)}}" alt="#">													 
															<img class="hover-img" src="{{asset('images/1.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a title="Quick View" href="achat/{{$enfant->id}}"><i class=" ti-eye"></i><span>Voir</span></a>																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Ajouter au panier</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Commander</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3> {{$efant->designation}}</a></h3>
														<div class="product-price">
															<span>${{$efant->prix_unitaire}}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="MixteAdulte" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										@foreach($mixte_adultes as $mixte_adulte)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
															<img class="hover-img" src="{{asset('storage/' . $mixte_adulte->image)}}" alt="#">
															<img class="hover-img" src="{{asset('images/1.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a title="Quick View" href="achat/{{$mixte_adulte->id}}"><i class=" ti-eye"></i><span>Voir</span></a>																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Ajouter au panier</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Commander</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3> {{$mixte_adulte->designation}}</a></h3>
														<div class="product-price">
															<span>${{$mixte_adulte->prix_unitaire}}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="MixteEnfant" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										@foreach($mixte_enfants as $mixte_enfant)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
															<img class="hover-img" src="{{asset('storage/' . $mixte_enfant->image)}}" alt="#">
															<img class="hover-img" src="{{asset('images/1.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a title="Quick View" href="achat/{{$mixte_enfant->id}}"><i class=" ti-eye"></i><span>Voir</span></a>																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Ajouter au panier</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Commander</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3> {{$mixte_enfant->designation}}</a></h3>
														<div class="product-price">
															<span>${{$mixte_enfant->prix_unitaire}}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="accessories" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										@foreach($accessoires as $accessoire)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">													 
															<img class="hover-img" src="{{asset('images/9.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a title="Quick View" href="achat/{{$accessoire->id}}"><i class=" ti-eye"></i><span>Voir</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Ajouter au panier</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Commander</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3> {{$accessoire->designation}}</a></h3>
														<div class="product-price">
															<span>${{$accessoire->prix_unitaire}}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- End Product Area -->

<!-- Start Midium Banner  -->
<section class="midium-banner">
	<div class="container">
		<div class="row">
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="{{asset('images/4.png')}}" alt="#">
					<div class="content">
						<p>Collectons Homme</p>
						<h3>Article Homme <br>Juqu'à<span> 10%</span></h3>
						<a href="#">COMMANDER</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="{{asset('images/10.png')}}" alt="#">
					<div class="content">
						<p>Cagoules Mixte</p>
						<h3>Pour Homme et Femme <br> Juqu'à <span>5%</span></h3>
						<a href="#" class="btn">Commander</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
		</div>
	</div>
</section>
<!-- End Midium Banner -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Article récent</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel popular-slider">
					@foreach($recents as $recent)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								
									<img class="default-img" src="{{asset('images/1.png')}}" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Ajouter au Panier</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3> {{$recent->designation}} </a></h3>
								<div class="product-price">
									<span class="old">${{$recent->prix_unitaire - $recent->reduction}}</span>
									<span>${{$recent->prix_unitaire}}</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Most Popular Area -->


<!-- Start Cowndown Area -->
<section class="cown-down">
	<div class="section-inner ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-12 padding-right">
					<div class="image">
						<img src="{{asset('images/bbn.jpg')}}" alt="#">
					</div>	
				</div>	
				<div class="col-lg-6 col-12 padding-left">
					<div class="content">
						<div class="heading-block">
							<p class="small-title">Marque Merveilleux</p>
							<h3 class="title">Des très joli polo pour Mixte pour Adulte</h3>
							<p class="text">Des polos de la marque Merveilleux propre à la maison d'habillement qui sont mixtes aux hommes et aux femmes adultes. </p>
							<h1 class="price">$12 <s>$15</s></h1>
							<div class="comg-time">
								<div class="clearfix" data-countdown="2021/04/02"></div>
							</div>
						</div>
					</div>	
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- /End Cowndown Area -->

<!-- Start Shop Blog  -->
<section class="shop-blog section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Pour le Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Blog  -->
				<div class="shop-single-blog">
					<img src="{{asset('images/6.png')}}" alt="#">
					<div class="content">
						<p class="date">22 Janvier , 2021. Monday</p>
						<a href="#" class="title">Sed adipiscing ornare.</a>
						<a href="#" class="more-btn">Continue Reading</a>
					</div>
				</div>
				<!-- End Single Blog  -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Blog  -->
				<div class="shop-single-blog">
					<img src="{{asset('images/1.png')}}" alt="#">
					<div class="content">
						<p class="date">22 Janvier, 2021. Monday</p>
						<a href="#" class="title">Man’s Fashion Winter Sale</a>
						<a href="#" class="more-btn">Continue Reading</a>
					</div>
				</div>
				<!-- End Single Blog  -->
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Blog  -->
				<div class="shop-single-blog">
					<img src="{{asset('images/2.png')}}" alt="#">
					<div class="content">
						<p class="date">22 Janvier, 2021. Monday</p>
						<a href="#" class="title">Women Fashion Festive</a>
						<a href="#" class="more-btn">Continue Reading</a>
					</div>
				</div>
				<!-- End Single Blog  -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section">
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-6 col-12">
			<!-- Start Single Service -->
			<div class="single-service">
				<i class="ti-rocket"></i>
				<h4>Achat Libre</h4>
				<p>Acceccible de partout</p>
			</div>
			<!-- End Single Service -->
		</div>
		<div class="col-lg-3 col-md-6 col-12">
			<!-- Start Single Service -->
			<div class="single-service">
				<i class="ti-reload"></i>
				<h4>Retour des articles</h4>
				<p>7 jours après la commande</p>
			</div>
			<!-- End Single Service -->
		</div>
		<div class="col-lg-3 col-md-6 col-12">
			<!-- Start Single Service -->
			<div class="single-service">
				<i class="ti-lock"></i>
				<h4>Paiment sécurisé</h4>
				<p>100% sécurisé</p>
			</div>
			<!-- End Single Service -->
		</div>
		<div class="col-lg-3 col-md-6 col-12">
			<!-- Start Single Service -->
			<div class="single-service">
				<i class="ti-tag"></i>
				<h4>Meilleur Prix</h4>
				<p>Le Prix est garenti</p>
			</div>
			<!-- End Single Service -->
		</div>
	</div>
</div>
</section>
<!-- End Shop Services Area -->

<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
	<div class="container">
		<div class="inner-top">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<!-- Start Newsletter Inner -->
					<div class="inner">
						<h4>Newsletter</h4>
						<p> Abonnez-vous à notre Newsletter et gagnez <span>10%</span> de réduction su tout commande</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Votre adresse Email" required="" type="email">
							<button class="btn">Abonner</button>
						</form>
					</div>
					<!-- End Newsletter Inner -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->

@endsection