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
                           <div class="alert alert-success">Entrees ajouté</div>
                        @else
                            <div class="alert alert-danger">Entrees non ajouté</div>
                        @endif
                    @endif
                    <form method="POST" action="{{ route('persistsorties') }}">
                        @csrf 
                        <div class="form-group">
                            <label class="control-label" for="nom">quantite</label>
                            <input class="form-control" type="number" name="quantite" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">prix</label>
                            <input class="form-control" type="number" name="prix" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">date</label>
                            <input class="form-control" type="date" name="date" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="medecins_id">Choisissez un Produit</label>
                            <select class="form-control" type="text" name="products_id" id="medecins_id">
                                <option value="0">Faites un choix</option>
                                @foreach($produits as $produit)
                                <option value="{{$produit->id}}">{{$produit->libelle}} </option> 
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
