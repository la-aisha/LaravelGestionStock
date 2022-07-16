<?php

namespace App\Http\Controllers;
use App\Models\Sorties;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class SortieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add(){
        $produits = Product::all();
       // return view('produit.add',compact('categories'));
        return view('sorties.add',['produits' => $produits]);

    }
    public function getAll(){


        $liste_sortie = Sorties::paginate(5); // equivaut de : select * from produit limit 2;
        return view('sortie.list',['liste_sortie' => $liste_sorties]);
    }
    public function edit($id){
        $produits = Product::all();
        $sorties = Sorties::find($id);
        return view('sorties.edit',['sorties' => $sorties,'produits' => $produits]);
    }
    public function update(Request $request){
        // Recupère les informations à partir de la base de donnée
        $sorties = Sorties::find($request->id);
        $sorties->quantite = $request->quantite; 
        $sorties->prix = $request->prix; 
        $sorties->dateS = $request->date;   
  
        $sorties->products_id = $request->products_id  ;
        $result = $sorties->save(); // 1 ou 0
        return $this->getAll();
    }
    public function delete($id){

        $sorties = Sorties::find($id); // equivaut de : select * from produit where $id=$id; 
        if($sorties != null)
        {
           $sorties->delete();
        }
        return $this->getAll();
    }
    public function persist(Request $request){
        $produits = Product::all();

        
        $sorties = new Sorties(); 
        $sorties->quantite = $request->quantite; 
        $sorties->prix = $request->prix; 
        $sorties->dateS = $request->date;   
  
        $sorties->products_id = $request->products_id  ;

        $result = $sorties->save(); // 1 ou 0

        //$categories = Category::all();
        // return view('produit.add',compact('categories'));
        return view('sorties.add',['confirmation' => $result ,'produits' => $produits] );
        //return $this->getAll(); // Une fois enregistré il reste sur la page d'enregistrement

    }
}
