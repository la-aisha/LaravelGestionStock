<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('nomCat');
    public static $rules= array('nomCat'=>'required|min:15');

    public function product(){
        return $this->hasMany('App\Product');
    }

}

