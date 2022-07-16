<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrees extends Model
{
    use HasFactory;
     protected $fillable = array('products_id','qtE','prix', 'dateE');
    public static $rules= array(
        //'products_id'=>'required|integer',
        'qtE'=>'required|min:10',
        'prix'=>'required|integer',
        'dateE'=>'required|integer'); 

     public function products(){
        return $this->belongsTo('Product::class');
    }    

}
