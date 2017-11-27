<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use App\Medida;
use App\Receta;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all()->sortByDesc("created_at");
        return view('adminIngredientes',compact('ingredientes'));

    }

    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'required',
        ]);
        Ingrediente::create($request->all());
        return redirect()->route('adminIngredientes.index')
            ->with('success','Ingrediente creado');
    }


    public function destroy($id)
    {
        Ingrediente::find($id)->delete();
        return redirect()->route('adminIngredientes.index')
            ->with('success','Ingrediente Eliminado');
    }
}
