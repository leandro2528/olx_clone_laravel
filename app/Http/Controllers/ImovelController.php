<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartamento;

class ImovelController extends Controller
{
    public function index() {
       
        return view('imoveis.index');
    }
}
