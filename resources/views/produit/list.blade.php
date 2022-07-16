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
                           <th>Libellé</th>
                           <th>Stock</th>
                           <th>Categorie</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_produits as $produit)
                            <tr>
                                <td>{{$produit->id}}</td>
                                <td>{{$produit->libelle}}</td>
                                <td>{{$produit->stock}}</td>
                                <td>{{$produit->categories_id}}</td>

                                <td>
                                    <a href="{{ route('editproduit',['id'=>$produit->id])}}">Editer</a>
                                    <a href="{{ route('deleteproduit',['id'=>$produit->id])}}" onclick="return confirm('Voulez-vous supprimer ?');">Supprimer</a>
                                </td>
                            </tr>
                       @endforeach
                   </table>
                   {{ $liste_produits->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des categories</div>
                <div class="card-body">
                   <table class="table table-bordered table-striped">
                       <tr>
                           <th>Identifiant</th>
                           <th>Libellé</th>
                           <th>Stock</th>
                           <th>Action</th>
                       </tr>
                       @foreach($liste_produits as $produit)
                            <tr>
                                <td>{{$produit->id}}</td>
                                <td>{{$produit->libelle}}</td>
                                <td>{{$produit->stock}}</td>
                                <td><a href="{{ route('editproduit',['id'=>$produit->id])}}">Editer</a></td>
                                <td> <a href="{{ route('deleteproduit',['id'=>$produit->id])}}" onclick="return confirm('Voulez-vous supprimer ?');">Supprimer</a></td>
                            </tr>
                       @endforeach
                   </table>
                   {{ $liste_produits->links() }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
