@extends('layouts.app')

@section('content')
<div class="container-lg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Entree</div>
                <div class="card-body">
                   <table class="table table-bordered table-striped">
                       <tr>
                       <th>Id</th>
                           <th>Quantite</th>
                           <th>Prix</th>
                           <th>Date</th> 
                           <th>Produit</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_entrees as $entrees)
                            <tr>
                                <td>{{$entrees->id}}</td>
                                <td>{{$entrees->quantite}}</td>
                                <td>{{$entrees->prix}}</td>
                                <td>{{$entrees->dateE}}</td>
                                <td>{{$entrees->products_id}}</td>

                                <td>
                                    <a href="{{ route('editentrees',['id'=>$entrees->id])}}">Editer</a>
                                    <a href="{{ route('deleteentrees',['id'=>$entrees->id])}}" onclick="return confirm('Voulez-vous supprimer ?');">Supprimer</a>
                                </td>
                            </tr>
                       @endforeach
                   </table>
                   {{ $liste_entrees->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
