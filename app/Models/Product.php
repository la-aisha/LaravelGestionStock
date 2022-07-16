<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    protected $fillable = array('categories_id','libelle','stock');
    public static $rules= array(
        'categories_id'=>'required|integer',
        'libelle'=>'required|min:2',
        'stock'=>'required|integer');


    public function Category(){
        return $this->belongsTo('Category::class');
    }
    public function Entrees(){
        return $this->hasMany('App/Entrees');
    }
    public function Sorties(){
        return $this->hasMany('App/Sorties');
    }
}
