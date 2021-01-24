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
															<img class="hover-img" src="{{asset('images/1.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Voir</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
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
															<img class="default-img" src="{{asset('images/9.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Voir</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
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
															<img class="hover-img" src="{{asset('images/1.png')}}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Voir</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Ajouter aux Favoris</span></a>
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
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Voir</span></a>
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
										<a title="Add to cart" href="#">Add to cart</a>
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
							<p class="text">Des polos de la marque Merveilleux propre à la  </p>
							<h1 class="price">$1200 <s>$1890</s></h1>
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
					<h2>From Our Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<!-- Start Single Blog  -->
				<div class="shop-single-blog">
					<img src="{{asset('images/6.png')}}" alt="#">
					<div class="content">
						<p class="date">22 July , 2020. Monday</p>
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
						<p class="date">22 July, 2020. Monday</p>
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
						<p class="date">22 July, 2020. Monday</p>
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
<section class="shop-services section home">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p>Orders over $100</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p>Within 30 days returns</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p>100% secure payment</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p>Guaranteed price</p>
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
						<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
						<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
							<input name="EMAIL" placeholder="Your email address" required="" type="email">
							<button class="btn">Subscribe</button>
						</form>
					</div>
					<!-- End Newsletter Inner -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Shop Newsletter -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">
					<div class="row no-gutters">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<!-- Product Slider -->
								<div class="product-gallery">
									<div class="quickview-slider-active">
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
										<div class="single-slider">
											<img src="https://via.placeholder.com/569x528" alt="#">
										</div>
									</div>
								</div>
							<!-- End Product slider -->
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<div class="quickview-content">
								<h2>Flared Shift Dress</h2>
								<div class="quickview-ratting-review">
									<div class="quickview-ratting-wrap">
										<div class="quickview-ratting">
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="yellow fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="#"> (1 customer review)</a>
									</div>
									<div class="quickview-stock">
										<span><i class="fa fa-check-circle-o"></i> in stock</span>
									</div>
								</div>
								<h3>$29.00</h3>
								<div class="quickview-peragraph">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
								</div>
								<div class="size">
									<div class="row">
										<div class="col-lg-6 col-12">
											<h5 class="title">Size</h5>
											<select>
												<option selected="selected">s</option>
												<option>m</option>
												<option>l</option>
												<option>xl</option>
											</select>
										</div>
										<div class="col-lg-6 col-12">
											<h5 class="title">Color</h5>
											<select>
												<option selected="selected">orange</option>
												<option>purple</option>
												<option>black</option>
												<option>pink</option>
											</select>
										</div>
									</div>
								</div>
								<div class="quantity">
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>
								<div class="add-to-cart">
									<a href="#" class="btn">Add to cart</a>
									<a href="#" class="btn min"><i class="ti-heart"></i></a>
									<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
								</div>
								<div class="default-social">
									<h4 class="share-now">Share:</h4>
									<ul>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- Modal end -->

@endsection