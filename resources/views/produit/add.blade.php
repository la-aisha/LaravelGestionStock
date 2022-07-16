@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulaire') }}</div>

                <div class="card-body">
                @if(isset($confirmation))
                        @if($confirmation == 1)
                           <div class="alert alert-success">Produit ajouté</div>
                        @else
                            <div class="alert alert-danger">Produit non ajouté</div>
                        @endif
                    @endif
                    <form method="POST" action="{{ route('persistproduit') }}">
                        @csrf 
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom du Produit</label>
                            <input class="form-control" type="text" name="nom" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">Stock</label>
                            <input class="form-control" type="text" name="stock" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="medecins_id">Choisissez un medecin</label>
                            <select class="form-control" type="text" name="categories_id" id="medecins_id">
                                <option value="0">Faites un choix</option>
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->nomCat}} </option> 
                                @endforeach
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer">
                            <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
