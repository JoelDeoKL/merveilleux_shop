@extends('layoutx')

@section('content')

<section class="shop checkout section">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-12 col-12">
				<div class="checkout-form">
					<h2>Ajouter un detail</h2>
					<!-- Form -->
                    <form action="/detail/store2" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Taille<span>*</span></label>
                                    <input type="text" name="taille" id="taille"  class="form-control @error('taille') is-invalid @enderror">
                                    @error('taille')
                                    <div class="is-invalid">
                                        {{ $errors->first('taille') }}
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
                                <label>Articles<span>*</span></label>
                                    <select class="custom-select" name="articles_id" id="articles_id" class="form-control @error('categories_id') is-invalid @enderror">
                                        @foreach($articles as $article)
                                        <option value="{{$article->id}}">{{$article->designation}}</option>
                                        @endforeach
                                    </select>
                                    @error('articles_id')
                                    <div class="is-invalid">
                                        {{ $errors->first('articles_id') }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Ajouter" class="btn btn-success float-right">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
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