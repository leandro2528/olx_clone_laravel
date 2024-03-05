<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartamento;

class DashboardController extends Controller
{
    public function index () {
        $apartamentos = Apartamento::all();
        return view('dashboards.index', ['apartamentos'=>$apartamentos]);
    }
}
