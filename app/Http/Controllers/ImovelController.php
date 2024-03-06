<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartamento;

class ImovelController extends Controller
{
    public function index() {
        $apartamentos = Apartamento::orderBy('id', 'desc')->get();
        return view('imoveis.index', ['apartamentos'=>$apartamentos]);
    }
}
