<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Pasante;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function registrar(Request $request)
    {
        $ci = $request->ci;
        $observacion = $request->observacion;
        Request()->validate([
            'ci' => 'required'
        ]);

        $buscarPasante = Pasante::where('ci', $ci)->first();

        if ($buscarPasante === null) {
            return redirect('/')->with('error','Buenos días usted no esta registrad@ en la Base de Datos, puede comunicarse con el Administrador');
        }

        $verificarSalida = Asistencia::where('pasante_id', $buscarPasante->id)->latest()->first();
        // dd($verificarSalida);
        // dd($buscarPasante);
        if ($verificarSalida === null) {
            // dd("realizar una accion");
            $createAsistencia =  Asistencia::create([
                'pasante_id' => $buscarPasante->id,
                'observacion' => 'Entrada: '.$observacion,
                'ingreso' => now(),
                'salida' => null
            ]);
            if ($createAsistencia) {
                // dd('se ha registrado la entrada correctamente, no olvide registrar la salida');
                return redirect('/')->with('create','Bienvenido '.$buscarPasante->nombre .', se ha registrado la entrada correctamente, no olvide registrar la salida. Que tenga un buen día');
            }
        } else if ($verificarSalida->salida !== null) {

            $createAsistencia =  Asistencia::create([
                'pasante_id' => $buscarPasante->id,
                'observacion' => 'Entrada: '.$observacion,
                'ingreso' => now(),
                'salida' => null
            ]);
            if ($createAsistencia) {
                return redirect('/')->with('create','Bienvenido '.$buscarPasante->nombre .', se ha registrado la entrada correctamente, no olvide registrar la salida. Que tenga un buen día');
            }
        } else {
            $obsUpdate = $verificarSalida->observacion . ' | Salida: ' . $observacion;
            $verificarSalida->update([
                'observacion' => $obsUpdate,
                'salida' => now(),
            ]);

            if ($verificarSalida) {
                return redirect('/')->with('update','Bienvenido '.$buscarPasante->nombre.', su salida ha sido registrada correctamente, que tenga un buen resto del día');
                // dd('se ha registrado la salida correctamente, que tenga un buen resto del día');
            }
        }

    }
}
