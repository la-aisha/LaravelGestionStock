<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorties extends Model
{
    use HasFactory;
    protected $fillable = array('products_id','qtS','prix', 'dateS');
    public static $rules= array(
        'products_id'=>'required|integer',
        'qtS'=>'required|min:10',
        'prix'=>'required|integer',
        'dateS'=>'required|integer');

    public function products(){
        return $this->belongsTo('Product::class');
    }    

}
