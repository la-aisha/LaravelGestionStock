@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulaire d'enregistrement des categories</div>

                <div class="card-body">
                    @if(isset($confirmation))
                        @if($confirmation == 1)
                           <div class="alert alert-success">categorie ajouté</div>
                        @else
                            <div class="alert alert-danger">categorie non ajouté</div>
                        @endif
                    @endif
                    <form method="POST" action="{{route('updatecategorie')}}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="id">Identifiant du categorie</label>
                            <!-- value="{{ $categorie->id }}" Tous les values permettent de renvoyer les valeurs saisies pour nous permettre d'editer les informations. --> 
                            <input class="form-control" readonly="true" type="text" name="id" id="id" value="{{ $categorie->id }}"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom du categorie</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="{{ $categorie->nomCat }}"/>
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

