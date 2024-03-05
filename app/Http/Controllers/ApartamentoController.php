<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartamento;

class ApartamentoController extends Controller
{
    public function create() {
        return view('apartamentos.create');
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
