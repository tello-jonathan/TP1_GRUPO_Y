<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paquetes;

class PaquetesController extends Controller
{
    public function index(){
        return view('pages/paquetes');
    }
}
