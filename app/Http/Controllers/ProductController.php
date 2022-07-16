<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add(){
        $categories = Category::all();
       // return view('produit.add',compact('categories'));
        return view('produit.add',['categories' => $categories]);

    }
    public function getAll(){


        $liste_produits = Product::paginate(5); // equivaut de : select * from produit limit 2;
        //$liste_produits = produit::all(); // equivaut select * from produit;
        return view('produit.list',['liste_produits' => $liste_produits]);
    }
    public function edit($id){
        $categories = Category::all();
        $produit = Product::find($id);
        return view('produit.edit',['produit' => $produit,'categories' => $categories]);
    }
    public function update(Request $request){
        // Recupère les informations à partir de la base de donnée
        $produit = Product::find($request->id);
        $produit->libelle = $request->nom;
        $produit->stock = $request->stock;
        $produit->categories_id = $request->categories_id  ;

        $result = $produit->save(); // 1 ou 0
        return $this->getAll();
    }
    public function delete($id){

        $produit = Product::find($id); // equivaut de : select * from produit where $id=$id; 
        if($produit != null)
        {
           $produit->delete();
        }
        return $this->getAll();
    }
    public function persist(Request $request){
        $categories = Category::all();

        
        $produit = new Product(); 
        $produit->libelle = $request->nom; 
        $produit->stock = $request->stock;   
        $produit->categories_id = $request->categories_id  ;

        $result = $produit->save(); // 1 ou 0

        $categories = Category::all();
        // return view('produit.add',compact('categories'));
        return view('produit.add',['confirmation' => $result ,'categories' => $categories] );
        //return $this->getAll(); // Une fois enregistré il reste sur la page d'enregistrement

    }
}
