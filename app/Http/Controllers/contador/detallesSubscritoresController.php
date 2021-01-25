<?php

namespace App\Http\Controllers\contador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detallesSubscritoresController extends Controller
{
    public function showSubcritores(){
        return view('contador.subscritores');
    }
}
