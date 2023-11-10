<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Institucion;
use App\Models\Supervisor;
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
        $countSupervisor = Supervisor::count();
        $lastDateSupervisor = Supervisor::max('created_at');
        $dateFormatSupervisor = Carbon::parse($lastDateSupervisor)->format('d/m/Y');
        $countInstitucion = Institucion::count();
        $lastDateInsitucion = Institucion::max('created_at');
        $dateFormatInstitucion = Carbon::parse($lastDateInsitucion)->format('d/m/Y');
        return view('home',compact('countDepartamento','fechaFormateada','countSupervisor','dateFormatSupervisor','countInstitucion','dateFormatInstitucion'));
    }
}
