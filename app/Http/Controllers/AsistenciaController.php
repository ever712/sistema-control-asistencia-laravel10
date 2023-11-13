<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function displayAsistencias(){
        $asistencias = Asistencia::all();
        return view('admin.asistencia.index',compact('asistencias'));
    }

    public function createAsistencias(){

    }
    public function storeAsistencias(){

    }
    public function editAsistencias($id){
        $asistencia = Asistencia::find($id);
        return view('admin.asistencia.edit',compact('asistencia'));
    }
    public function updateAsistencias(Request $request, $id){
        Request()->validate([
            'observacion' => 'required'
        ]);

        $updateAsistencia = Asistencia::find($id);
        $updateAsistencia->update([
            'observacion' => $request->observacion
        ]);

        if ($updateAsistencia) {
            return redirect()->route('display.asistencias');
        }
    }
    public function deleteAsistencias(){

    }
}
