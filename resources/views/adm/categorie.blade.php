@extends('layoutx')

@section('content')
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading">
                            <th>ID</th>
                            <th>CATEGORIE</th>
                            <th>NOM CATEGORIE</th>
                            <th class="text-center">DESCRIPTION</th>
                            <th class="text-center"><i class="ti-eye"></i></th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($categories as $categorie)
                            <tr>
                                <td class="price" data-title="id"><span>{{++$i}} </span></td>
                                <td class="image" data-title="No"><img src="{{asset('storage/' . $categorie->image)}}" width=200 class="img-thumnail" alt="article-imag"></td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{$categorie->nom_categorie}}</a></p>
                                    <p class="product-des">{{$categorie->description_categorie}}</p>
                                </td>
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