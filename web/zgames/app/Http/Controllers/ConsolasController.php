<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolasController extends Controller
{
    public function getMarcas(){

        //$marcas = ["Sony", "Microsoft", "Nintendo"];

        $marcas = array();
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";

        return $marcas;
    }

    /* 
     * Esta funcion va a ir a buscar todas las consolas que existen en la bd y las va a retornar
     */
    public function getConsolas(){
        //Equivalente a un select * from consolas

        $consolas = Consola::all();
        return $consolas;
    }

    /*
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * TODO: Mejorar esto para que no sea un ejemplo. 
     */
    public function crearConsola(Request $request){

        $input = $request->all();

        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anio = $input["anio"];

        $consola->save();
        return $consola;
    }
}
