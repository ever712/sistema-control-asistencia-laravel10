<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Institucion;
use App\Models\Pasante;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class PasanteController extends Controller
{
    public function dispayPasantes(){
        $pasantes = Pasante::all();
        return view('admin.pasante.index', compact('pasantes'));
    }

    public function createPasantes(){
        $departamentos = Departamento::all();
        $supervisores = Supervisor::all();
        $instituciones = Institucion::all();
        return view('admin.pasante.create',compact('departamentos','supervisores','instituciones'));
    }

    public function storePasantes(Request $request){
        // dd($request);
        Request()->validate([
            'nombre' => 'required',
            'ci' => 'required',
            'email' => 'required',
            'departamento_id' => 'required',
            'supervisor_id' => 'required',
            'institucion_id' => 'required',
        ]);

        $defaulPassword = $request->email;

        $createPasante = Pasante::create([
            'nombre' => $request->nombre,
            'ci' => $request->ci,
            'email' => $request->email,
            'password' => bcrypt($defaulPassword),
            'departamento_id' => $request->departamento_id,
            'supervisor_id' => $request->supervisor_id,
            'institucion_id' => $request->institucion_id,
        ]);

        if ($createPasante) {
            return redirect()->route('display.pasantes');
        }
    }

    public function editPasantes($id){
        // dd($id);
        $pasante = Pasante::find($id);
        $departamentos = Departamento::all();
        $supervisores = Supervisor::all();
        $instituciones = Institucion::all();
        return view('admin.pasante.edit',compact('pasante','departamentos','supervisores','instituciones'));
    }

    public function updatePasantes(Request $request, $id){
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
            'departamento_id' => $request->departamento_id,
            'supervisor_id' => $request->supervisor_id,
            'institucion_id' => $request->institucion_id,
        ]);

        if ($pasanteUpdate) {
            return redirect()->route('display.pasantes');
        }
    }

    public function deletePasantes($id){
        $deletePasante = Pasante::find($id);
        $deletePasante->delete();

        if ($deletePasante) {
            return redirect()->route('display.pasantes');
        }
    }
}
