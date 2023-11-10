<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    public function displayInstituciones(){
        $instituciones = Institucion::all();
        return view('admin.institucion.index',compact('instituciones'));
    }

    public function createInstituciones(){
        return view('admin.institucion.create');
    }

    public function storeInstituciones(Request $request){
        // dd($request);
        Request()->validate([
            'nombre' => 'required',
            'direccion' => 'required',
        ]);

        $createInstitucion = Institucion::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion
        ]);

        if ($createInstitucion) {
            return redirect()->route('display.instituciones');
        }
    }

    public function editInstituciones($id){
        // dd($id);
        $institucion = Institucion::find($id);
        return view('admin.institucion.edit', compact('institucion'));
    }

    public function updateInstituciones(Request $request, $id){
        Request()->validate([
            'nombre' => 'required',
            'direccion' => 'required',
        ]);

        $institucionUpdate = Institucion::find($id);
        $institucionUpdate->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
        ]);

        if ($institucionUpdate) {
            return redirect()->route('display.instituciones');
        }
    }

    public function deleteInstituciones($id){
        $deleteInstitucion = Institucion::find($id);
        $deleteInstitucion->delete();

        if($deleteInstitucion){
            return redirect()->route('display.instituciones');
        }
    }
}
