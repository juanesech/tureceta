<?php

namespace App\Http\Controllers;

use App\RecetaIngrediente;
use Illuminate\Http\Request;
use App\Ingrediente;
use App\Medida;
use App\Receta;

class AdminRecetaIngredienteController extends Controller
{
    public function index()
    {
        $recetas = Receta::pluck('nombre', 'id');
        $ingredientes = Ingrediente::pluck('nombre', 'id');
        $recetaIngredientes = RecetaIngrediente::all();

        foreach (RecetaIngrediente::all('receta_id') as $receta_id){

            $receta = Receta::select('nombre')
                                ->where('id', '=', $receta_id);
            foreach ($receta as $rec){
                $recetas[] = $rec->nombre;
            }
        }

        foreach (RecetaIngrediente::all('ingrediente_id') as $ingrediente_id){

            $ingrediente = Ingrediente::select('nombre')
                ->where('id', '=', $ingrediente_id);
            foreach ($ingrediente as $ingr){
                $ingredientes[] = $ingr->nombre;
            }
        }

        return view('adminRecetaIngrediente',compact('recetaIngredientes', 'recetas', 'ingredientes', 'medidas'));

    }

    public function store(Request $request)
    {
        request()->validate([
            'ingrediente_id' => 'required',
            'cantidad' => 'required',
            'receta_id' => 'required',
        ]);

        RecetaIngrediente::create($request->all());
        return redirect()->route('adminRecetaIngrediente.index')
            ->with('success','Relación creada');
    }


    public function destroy(Request $request)
    {
        $id_ingrediente = $request-> ingrediente_id;
        $id_receta = $request-> receta_id;
        RecetaIngrediente::where('ingrediente_id', $id_ingrediente)
            ->where('receta_id', $id_receta)
            ->delete();
        return redirect()->route('adminRecetaIngrediente.index')
            ->with('success','Relación Eliminada');
    }
}
