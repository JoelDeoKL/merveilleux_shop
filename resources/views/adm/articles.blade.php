@extends('layoutx')

@section('content')
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>PRODUIT</th>
                            <th>NOM</th>
                            <th class="text-center">PRIX ACHAT</th>
                            <th class="text-center">QUANTITE</th>
                            <th class="text-center">PRIX UNITAIRE</th>
                            <th class="text-center">REDUCTION</th>
                            <th class="text-center"><i class="ti-eye"></i></th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td class="image" data-title="No"><img src="{{asset('storage/' . $article->image)}}" width=200 class="img-thumnail" alt="article-imag"></td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{$article->designation}}</a></p>
                                    <p class="product-des">{{$article->description_article}}</p>
                                </td>
                                <td class="price" data-title="Price"><span>${{$article->prix_achat}} </span></td>
                                <td class="qty" data-title="Qty"><span>{{$article->quantite}}</span></td>
                                <td class="total-amount" data-title="Total"><span>${{$article->prix_unitaire}}</span></td>
                                <td class="reduction" data-title="Reduction"><span>${{$article->reduction}}</span></td>
                                <td class="action" data-title="View"><a href="/adm/{{$article->id}}"><i class="ti-eye"></i></a></td>
                                <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
            <div class="col-12">
                <br>
                <a href="{{URL('adm/create')}}" class="btn btn-primary">Ajouter</a>
            </div>
        </div>
    </div>
</div>

@endsection