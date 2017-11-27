<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecetaIngrediente extends Model
{
    protected $fillable =[
        'receta_id',
        'medida_id',
        'ingrediente_id',
        'cantidad'
    ];

    public function receta(){
        return $this->belongsTo('App\Receta');
    }

    public function ingrediente(){
        return $this->belongsTo('App\Ingrediente');
    }

    public function scopeCantidadIngredienteReceta($query, $receta_id, $ingrediente_id){
        return $query->select('cantidad')
                    ->where('receta_id', '=', $receta_id)
                    ->where('ingrediente_id', '=', $ingrediente_id);
    }

}
