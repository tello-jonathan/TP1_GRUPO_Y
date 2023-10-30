<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class InicioController extends Controller
{
    public function index(){
        return view('index');
    }
}
