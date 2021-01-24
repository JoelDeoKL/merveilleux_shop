@extends('layoutx')

@section('content')

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
						<div>
							<p class="small-title">Detail de l'article</p>
							<h3 class="title">Designation</h3>
							<p class="text">Taille disponible: 
								<select name="taille" id="taille">
									@foreach($tailles as $taille)
                                    <option value="{{$taille->id}}">{{$taille->taille}}</option>
									@endforeach
                                </select>
							</p>
                            <p class="text">Couleur disponible: 
								<select name="taille" id="taille">
									@foreach($couleurs as $couleur)
                                    <option value="{{$couleur->id}}">{{$couleur->taille}}</option>
									@endforeach
                                </select>
							</p>
							<h1 class="price">$PrixN <s>$PrixR</s></h1>
						</div>
                        <div class="col-lg-6 col-12">
                            <a href="{{route('detail.create')}}" class="btn btn-primary">Ajouter une couleur</a>
                            <a href="/taille" class="btn btn-primary">Ajouter une taille</a>
                        </div>
					</div>	
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- /End Cowndown Area -->

@endsection