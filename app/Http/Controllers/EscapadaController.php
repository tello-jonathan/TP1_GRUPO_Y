<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escapada;

class EscapadaController extends Controller
{
    public function index(){
        return view('pages.Escapadas');
    }
}
