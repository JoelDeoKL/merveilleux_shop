@extends('layoutx')

@section('content')

<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach($articles as $article)
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
                                    <div class="product-gallery">
                                        <div class="product-img">
                                            <img src="{{asset('images/2.png')}}" alt="#">
                                        </div>
                                    </div>
                                <!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>{{$article->designation}}</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> {{$article->etat ? 'in stock' : 'Indisponible'}}</span>
                                        </div>
                                    </div>
                                    <h3>${{$article->prix_unitaire}}</h3>
                                    <div class="quickview-peragraph">
                                        <p>{{$article->description}}</p>
                                    </div>
                                    <form action="{{route('panier.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="size">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <h5 class="title">Taille</h5>
                                                    <select name="taille" id="taille">
                                                        @foreach($tailles as $taille)
                                                            <option>{{$taille->taille}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <h5 class="title">Color</h5>
                                                    <select name="couleur" id="couleur">
                                                        @foreach($couleurs as $couleur)
                                                            <option>{{$couleur->couleur}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quantity">
                                            <!-- Input Order -->
                                            <div class="input-group">
                                                <div class="button minus">
                                                    <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quantite">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="quantite" class="input-number"  data-min="1" data-max="100" value="1">
                                                <div class="button plus">
                                                    <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quantite">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!--/ End Input Order -->
                                        </div>
                                        <div class="add-to-cart">
                                            <input type="hidden" name="designation" value="{{$article->designation}}">
                                            <input type="hidden" name="description_article" value="{{$article->description_article}}">
                                            <input type="hidden" name="prix_unitaire" value="{{$article->prix_unitaire}}">
                                            <input type="hidden" name="etat" value="1">
                                            <input type="hidden" name="users_id" value="1">
                                            <input type="submit" value="Ajouter au Panier" class="btn btn-success float-right">                                            <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                            <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->

@endsection