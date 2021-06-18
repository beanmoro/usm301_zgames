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
    public function crearConsolas(){

        $consola = new Consola();

        $consola->nombre = "Nintendo Switch";
        $consola->marca = "Nintendo";
        $consola->anio = 2015;

        $consola->save();
        return $consola;
    }
}
