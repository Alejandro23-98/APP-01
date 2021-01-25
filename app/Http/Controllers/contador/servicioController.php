<?php

namespace App\Http\Controllers\contador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class servicioController extends Controller
{
    public function showServicioForm(){
        return view('contador.newServicio');
    }
    public function showEditServicioForm(){
        return view('contador.editServicio');
    }
}
