<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countDepartamento = Departamento::count();
        $ultimaFecha = Departamento::max('created_at');
        $fechaFormateada = Carbon::parse($ultimaFecha)->format('d/m/Y');
        return view('home',compact('countDepartamento','fechaFormateada'));
    }
}
