@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire d'enregistrement des produits</div>

                <div class="card-body">
                    @if(isset($confirmation))
                        @if($confirmation == 1)
                           <div class="alert alert-success">produit ajouté</div>
                        @else
                            <div class="alert alert-danger">produit non ajouté</div>
                        @endif
                    @endif
                    <form method="POST" action="{{route('updateproduit')}}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="id">Identifiant du produit</label>
                            <!-- value="{{ $produit->id }}" Tous les values permettent de renvoyer les valeurs saisies pour nous permettre d'editer les informations. --> 
                            <input class="form-control" readonly="true" type="text" name="id" id="id" value="{{ $produit->id }}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom du produit</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="{{ $produit->libelle }}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom stock</label>
                            <input class="form-control" type="text" name="stock" id="nom" value="{{ $produit->stock }}"/>
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
                            <a class="btn btn-danger" href="{{ route('getallcategorie')}}">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

