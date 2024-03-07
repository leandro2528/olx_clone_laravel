<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartamento;
use App\Models\Tipoapartamento; 
use App\Models\Quantidade; 

class ApartamentoController extends Controller
{
    public function create() {
        $tipoapartamentos = TipoApartamento::all();
        $quantidades = Quantidade::all();
        return view('apartamentos.create', ['tipoapartamentos'=>$tipoapartamentos, 'quantidades'=>$quantidades]);
    }

    public function store(Request $request) {
        Apartamento::create($request->all());
        return redirect()->route('dashboards-index');
    }

    public function edit($id) {
        $apartamentos = Apartamento::where('id', $id)->first();
        return view('apartamentos.edit', ['apartamentos'=>$apartamentos]);
    }
}
