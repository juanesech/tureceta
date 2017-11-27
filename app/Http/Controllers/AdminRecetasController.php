<?php

namespace App\Http\Controllers;

use App\Receta;
use App\Ingrediente;
use App\Medida;
use App\RecetaIngrediente;
use Illuminate\Http\Request;

class AdminRecetasController extends Controller
{
    public function index()
    {
        $recetas = Receta::all()->sortByDesc("created_at");
        $ingredientes = Ingrediente::pluck('nombre', 'id');
        return view('adminRecetas',compact('recetas', 'ingredientes'));

    }

    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
            'instrucciones' => 'required',
        ]);
        Receta::create($request->all());
        return redirect()->route('adminRecetas.index')
            ->with('success','Receta creada');
    }

    public function show($id)
    {
        $receta = Receta::find($id);
        $ingredientesReceta = Receta::find($id)->ingredientesRecetas->sortByDesc("created_at");

        foreach ($ingredientesReceta as $ingred) {
            $ingredientes_id = $ingred->ingrediente_id;

            $ingredientes[] = Ingrediente::find($ingredientes_id)->nombre;

            $cantidades = RecetaIngrediente::cantidadIngredienteReceta($id, $ingredientes_id)->get();
            foreach ($cantidades as $cant){
                $cantidad[] = $cant->cantidad;
            }

        }


        return view('receta',compact('receta', 'ingredientes', 'cantidad'));
    }


    public function destroy($id)
    {
        Receta::find($id)->delete();
        return redirect()->route('adminRecetas.index')
            ->with('success','Receta Eliminada');
    }
}
