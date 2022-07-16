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
        return view('entrees.add',['produits' => $produits]);

    }
    public function getAll(){


        $liste_entrees = Entrees::paginate(5); // equivaut de : select * from produit limit 2;
        return view('entrees.list',['liste_entrees' => $liste_entrees]);
    }
    public function edit($id){
        $produits = Product::all();
        $entrees = Entrees::find($id);
        return view('entrees.edit',['entrees' => $entrees,'produits' => $produits]);
    }
    public function update(Request $request){
        // Recupère les informations à partir de la base de donnée
        $entrees = Entrees::find($request->id);
        $entrees->quantite = $request->quantite; 
        $entrees->prix = $request->prix; 
        $entrees->dateE = $request->date;   
  
        $entrees->products_id = $request->products_id  ;
        $result = $entrees->save(); // 1 ou 0
        return $this->getAll();
    }
    public function delete($id){

        $entrees = Entrees::find($id); // equivaut de : select * from produit where $id=$id; 
        if($entrees != null)
        {
           $entrees->delete();
        }
        return $this->getAll();
    }
    public function persist(Request $request){
        $produits = Product::all();

        
        $entrees = new Entrees(); 
        $entrees->quantite = $request->quantite; 
        $entrees->prix = $request->prix; 
        $entrees->dateE = $request->date;   
  
        $entrees->products_id = $request->products_id  ;

        $result = $entrees->save(); // 1 ou 0

        //$categories = Category::all();
        // return view('produit.add',compact('categories'));
        return view('entrees.add',['confirmation' => $result ,'produits' => $produits] );
        //return $this->getAll(); // Une fois enregistré il reste sur la page d'enregistrement

    }
}
