@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des categories</div>
                <div class="card-body">
                   <table class="table table-bordered table-striped">
                       <tr>
                           <th>Identifiant</th>
                           <th>Nom du categorie</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_categories as $categorie)
                            <tr>
                                <td>{{$categorie->id}}</td>
                                <td>{{$categorie->nomCat}}</td>
                                <td>
                                <a href="{{ route('editcategorie',['id'=>$categorie->id])}}">Editer</a>
                                 <a href="{{ route('deletecategorie',['id'=>$categorie->id])}}" onclick="return confirm('Voulez-vous supprimer ?');">Supprimer</a>
                                </td>
                            </tr>
                       @endforeach
                   </table>
                   {{ $liste_categories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
