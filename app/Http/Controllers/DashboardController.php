<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartamento;

class DashboardController extends Controller
{
    public function index () {
        $apartamentos = Apartamento::orderBy('id', 'desc')->get();
        return view('dashboards.index', ['apartamentos'=>$apartamentos]);
    }
}
