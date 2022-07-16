<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function add(){

        return view('categorie.add');
    }
    public function getAll(){

        $liste_categories = Category::paginate(5); // equivaut de : select * from categorie limit 2;
        //$liste_categories = categorie::all(); // equivaut select * from categorie;
        return view('categorie.list',['liste_categories' => $liste_categories]);
    }
    public function edit($id){

        $categorie = Category::find($id);
        return view('categorie.edit',['categorie' => $categorie]);
    }
    public function update(Request $request){
        // Recupère les informations à partir de la base de donnée
        $categorie = Category::find($request->id);
        $categorie->nomCat = $request->nom;
        $result = $categorie->save(); // 1 ou 0
        return $this->getAll();
    }
    public function delete($id){

        $categorie = Category::find($id); // equivaut de : select * from categorie where $id=$id; 
        if($categorie != null)
        {
           $categorie->delete();
        }
        return $this->getAll();
    }
    public function persist(Request $request){

        
        $category = new Category(); 
        $category->nomCat = $request->nom;   

        $result = $category->save(); // 1 ou 0

        return view('categorie.add',['confirmation' => $result]);
        //return $this->getAll(); // Une fois enregistré il reste sur la page d'enregistrement

    }
}
