<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "bienvenido 1";
    }
    public function create(){
        return "en esta pagina puede crear un curso";
    }
    public function show($curso){
        return "bienvenido al $curso";
    }
}
