<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $fillable =[
        'nombre'
    ];

    public function recetasIngredientes(){
        return $this->hasMany('App\RecetaIngrediente');
    }
}
