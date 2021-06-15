<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;

class GrupoController extends Controller
{
    public function inicio(){
    	return redirect()->action([GrupoController::class,"index"]);
    }

    public function index(){
    	$grupos = Grupo::all();    	
        return view("grupos.index",["arrayGrupos"=>$grupos]);
    }
}
