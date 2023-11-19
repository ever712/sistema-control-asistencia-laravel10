<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Departamento;
use App\Models\Institucion;
use App\Models\Pasante;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasanteController extends Controller
{


    public function dispayPasantes()
    {
        $pasantes = Pasante::all();
        return view('admin.pasante.index', compact('pasantes'));
    }

    public function createPasantes()
    {
        $departamentos = Departamento::all();
        $supervisores = Supervisor::all();
        $instituciones = Institucion::all();
        return view('admin.pasante.create', compact('departamentos', 'supervisores', 'instituciones'));
    }

    public function storePasantes(Request $request)
    {
        // dd($request);
        Request()->validate([
            'nombre' => 'required',
            'ci' => 'required',
            'email' => 'required',
            'departamento_id' => 'required',
            'supervisor_id' => 'required',
            'institucion_id' => 'required',
        ]);


        $createPasante = Pasante::create([
            'nombre' => $request->nombre,
            'ci' => $request->ci,
            'email' => $request->email,
            'password' => Hash::make($request->email),
            'departamento_id' => $request->departamento_id,
            'supervisor_id' => $request->supervisor_id,
            'institucion_id' => $request->institucion_id,
        ]);

        if ($createPasante) {
            return redirect()->route('display.pasantes');
        }
    }

    public function editPasantes($id)
    {
        // dd($id);
        $pasante = Pasante::find($id);
        $departamentos = Departamento::all();
        $supervisores = Supervisor::all();
        $instituciones = Institucion::all();
        return view('admin.pasante.edit', compact('pasante', 'departamentos', 'supervisores', 'instituciones'));
    }

    public function updatePasantes(Request $request, $id)
    {
        Request()->validate([
            'nombre' => 'required',
            'ci' => 'required',
            'email' => 'required',
            'departamento_id' => 'required',
            'supervisor_id' => 'required',
            'institucion_id' => 'required',
        ]);

        $pasanteUpdate = Pasante::find($id);
        $pasanteUpdate->update([
            'nombre' => $request->nombre,
            'ci' => $request->ci,
            'email' => $request->email,
            'password' => Hash::make($request->email),
            'departamento_id' => $request->departamento_id,
            'supervisor_id' => $request->supervisor_id,
            'institucion_id' => $request->institucion_id,
        ]);

        if ($pasanteUpdate) {
            return redirect()->route('display.pasantes');
        }
    }

    public function deletePasantes($id)
    {
        $deletePasante = Pasante::find($id);
        $deletePasante->delete();

        if ($deletePasante) {
            return redirect()->route('display.pasantes');
        }
    }

    public function viewLogin()
    {
        return view('admin.pasante.view-login');
    }

    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('pasante')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect()->route('pasantes.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function indexDashboard()
    {
        $asistenciaPasante = Asistencia::where('pasante_id',Auth::guard('pasante')->user()->id)->get();

        return view('admin.pasante.panel-pasante',compact('asistenciaPasante'));
    }

    public function cerrarSesion()
    {
        Auth::guard('pasante')->logout();
        return redirect()->route('view.login');
    }
}
