<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable =[
        'nombre',
        'instrucciones'
    ];

    public function ingredientesRecetas(){
        return $this->hasMany('App\RecetaIngrediente');
    }

}
