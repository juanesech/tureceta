<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuscarController extends Controller
{
    public function index(){
        $resultadoBusqueda = '';
        return view('home')->with('resultadoBusqueda', $resultadoBusqueda);
    }

    public function buscar(Request $request){
        $ingredientes = explode(',',$request->busqueda);

        try{
            foreach ($ingredientes as $ingrediente) {
                $resultados = DB::table('receta_ingredientes')
                    ->join('ingredientes', 'ingredientes.id', '=', 'receta_ingredientes.ingrediente_id')
                    ->join('recetas', 'recetas.id', '=', 'receta_id')
                    ->where('ingredientes.nombre', '=', $ingrediente)
                    ->get();
                foreach ($resultados as $resultado) {
                    $resultadoBusqueda[] = $resultado->nombre;
                    $resultadoBusquedaId[] = $resultado->receta_id;
                }
            }
            $resultadoBusqueda = array_unique($resultadoBusqueda);
            return view('home')->with('resultadoBusqueda', $resultadoBusqueda)->with('resultadoBusquedaId', $resultadoBusquedaId);

        }catch (\Exception $e) {
            $resultadoBusqueda = 'Lo sentimos, aún no tenemos recetas que contengan alguno de estos ingredientes';
            $resultadoBusquedaId = '';
            return view('home')->with('resultadoBusqueda', $resultadoBusqueda)->with('resultadoBusquedaId', $resultadoBusquedaId);
        }
    }
}
