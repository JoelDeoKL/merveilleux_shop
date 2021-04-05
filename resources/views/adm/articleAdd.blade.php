@extends('layoutx')

@section('content')

<section class="shop checkout section">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-12 col-md-6">
				<div class="checkout-form">
					<h2>Enregister un nouvel article</h2>
					<!-- Form -->
                    <form action="{{route('adm.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Designation<span>*</span></label>
                                    <input type="text" name="designation" id="designation"  class="form-control @error('designation') is-invalid @enderror">
                                    @error('designation')
                                    <div class="is-invalid">
                                        {{ $errors->first('designation') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Description<span>*</span></label>
                                    <textarea id="description_article" name="description_article" class="form-control @error('description_article') is-invalid @enderror" rows="4"></textarea>                                    @error('description_article')
                                    <div class="is-invalid">
                                        {{ $errors->first('description_article') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Code<span>*</span></label>
                                    <input type="text" id="code" name="code"  class="form-control @error('code') is-invalid @enderror">
                                    @error('code')
                                    <div class="is-invalid">
                                        {{ $errors->first('code') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Etat<span>*</span></label>
                                    <select class="custom-select @error('etat') is-invalid @enderror" name="etat" id="etat">
                                    <option value="1">Disponoble</option>
                                    <option value="0">Indisponible</option>
                                    </select>
                                    @error('etat')
                                    <div class="is-invalid">
                                        {{ $errors->first('etat') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Quantité<span>*</span></label>
                                    <input type="number" id="quantite" name="quantite"  class="form-control @error('quantite') is-invalid @enderror">
                                    @error('quantite')
                                    <div class="is-invalid">
                                        {{ $errors->first('quantite') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Prix d'Achat<span>*</span></label>
                                    <input type="number" id="prix_achat" name="prix_achat"  class="form-control @error('prix_achat') is-invalid @enderror">
                                    @error('prix_achat')
                                    <div class="is-invalid">
                                        {{ $errors->first('prix_achat') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Prix d'unitaire<span>*</span></label>
                                    <input type="number" name="prix_unitaire" id="prix_unitaire"  class="form-control @error('prix_unitaire') is-invalid @enderror">
                                    @error('prix_unitaire')
                                    <div class="is-invalid">
                                        {{ $errors->first('prix_unitaire') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Reduction<span>*</span></label>
                                    <input type="number" name="reduction" id="reduction"  class="form-control @error('reduction') is-invalid @enderror">
                                    @error('reduction')
                                    <div class="is-invalid">
                                        {{ $errors->first('reduction') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                <label>Categorie<span>*</span></label>
                                    <select class="custom-select" name="categories_id" id="categories_id" class="form-control @error('categories_id') is-invalid @enderror">
                                        @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->nom_categorie}}</option>
                                        @endforeach
                                    </select>
                                    @error('categories_id')
                                    <div class="is-invalid">
                                        {{ $errors->first('categories_id') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                    <div class="is-invalid">
                                        {{ $errors->first('image') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Ajouter" class="btn btn-success float-right">
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h1>Create</h1>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
    </div>
</section>

@endsection