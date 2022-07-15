<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //use HasFactory;
    
    use HasFactory;
    protected $fillable = array('nomRole');
    public static $rules= array('nomRole'=>'required|min:3');
}
