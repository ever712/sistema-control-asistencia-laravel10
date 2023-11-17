<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Departamento;
use App\Models\Institucion;
use App\Models\Pasante;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
        $countPasantes = Pasante::count();
        $lastDatePasantes = Pasante::max('created_at');
        $dateFormatPasantes = Carbon::parse($lastDatePasantes)->format('d/m/Y');
        $countAsistencias = Asistencia::count();
        $lastDateAsistencia = Asistencia::max('created_at');
        $dateFormatAsistencia = Carbon::parse($lastDateAsistencia)->format('d/m/Y');
        return view('home',compact('countDepartamento','fechaFormateada','countSupervisor','dateFormatSupervisor','countInstitucion','dateFormatInstitucion','countPasantes','dateFormatPasantes','countAsistencias','dateFormatAsistencia'));
    }

    public function cerrarSesion()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
