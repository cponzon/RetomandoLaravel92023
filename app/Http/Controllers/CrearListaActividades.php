<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearListaActividades extends Controller
{
    public function funcioncrearlistaactividades(Request $request){
        return view('actividades');
    }

    /*public function almacenarlistaactividades(Request $request){
        dd($request->all());
    }*/
}
