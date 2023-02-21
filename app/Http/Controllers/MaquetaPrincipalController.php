<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class MaquetaPrincipalController extends Controller
{
    public function funciondashboard(Request $request){
        
        return view('dashboard');
    }
}
