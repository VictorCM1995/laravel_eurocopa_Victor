<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    public function show(Pais $pais){
    		return view("paises.show",compact("pais"));
    }
    
}
