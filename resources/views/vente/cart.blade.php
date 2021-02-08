@extends('layout')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="bread-inner">
				<ul class="bread-list">
					<li><a href="{{url('/')}}">Accueil<i class="ti-arrow-right"></i></a></li>
					<li class="active"><a href="{{url('cart')}}">Pannier</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<!-- End Breadcrumbs -->
	
<!-- Shopping Cart -->
<div class="shopping-cart section">
<div class="container">
	<div class="row">
		<div class="col-12">
			<!-- Shopping Summery -->
			<table class="table shopping-summery">
				<thead>
					<tr class="main-hading">
						<th>PRODUIT</th>
						<th>NOM</th>
						<th class="text-center">PRIX UNITAIRE</th>
						<th class="text-center">QUANTITE</th>
						<th class="text-center">TOTAL</th> 
						<th class="text-center"><i class="ti-trash remove-icon"></i></th>
					</tr>
				</thead>
				<tbody>
					@foreach($paniers as $panier)
						<tr>
							<td class="image" data-title="No"><img src="{{asset('images/bbn.jpg')}}" alt="#"></td>
							<td class="product-des" data-title="Description">
								<p class="product-name"><a href="#">{{$panier->designation}}</a></p>
								<p class="product-des">{{$panier->description_article}}</p>
							</td>
							<td class="price" data-title="Price"><span>${{$panier->prix_unitaire}} </span></td>
							<td class="qty" data-title="Quantite"><span>{{$panier->quantite}}</span></td>
							<td class="total-amount" data-title="Total"><span>${{$panier->prix_unitaire * $panier->quantite}}</span></td>
							<td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<!--/ End Shopping Summery -->
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<!-- Total Amount -->
			<div class="total-amount">
				<div class="row">
					<div class="col-lg-12 col-md-7 col-12">
						<div class="right">
							<ul>
								<?php $total = 0?>
								@foreach($paniers as $panier)
									<li>{{$panier->designation}}<span>${{$panier->prix_unitaire * $panier->quantite}}</span></li>
									<?php
										$total = $total + ($panier->prix_unitaire * $panier->quantite);
									?>
								@endforeach
								<br>
								<li class="last">MONTANT A PAYER<span>${{$total}}</span></li>
							</ul>
							<div class="button5">
								<a href="{{url('caisse')}}" class="btn">COMMANDER</a>
								<a href="{{url('shop')}}" class="btn">CONTINUER LES ACHATS</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Total Amount -->
		</div>
	</div>
</div>
</div>
<!--/ End Shopping Cart -->
	
<!-- Start Shop Services Area  -->
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
<!-- End Shop Newsletter -->

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
										<img src="images/modal1.jpg" alt="#">
									</div>
									<div class="single-slider">
										<img src="images/modal2.jpg" alt="#">
									</div>
									<div class="single-slider">
										<img src="images/modal3.jpg" alt="#">
									</div>
									<div class="single-slider">
										<img src="images/modal4.jpg" alt="#">
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