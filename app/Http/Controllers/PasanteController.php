<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Departamento;
use App\Models\Institucion;
use App\Models\Pasante;
use App\Models\Supervisor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $asistenciaPasante = Asistencia::where('pasante_id', Auth::guard('pasante')->user()->id)->get();

        return view('admin.pasante.panel-pasante', compact('asistenciaPasante'));
    }

    public function cerrarSesion()
    {
        Auth::guard('pasante')->logout();
        return redirect()->route('view.login');
    }

    public function perfilPasante()
    {
        $profile = Pasante::find(Auth::guard('pasante')->user()->id);
        $primerRegistro = Asistencia::where('pasante_id', $profile->id)
            ->orderBy('ingreso', 'asc') // Asegúrate de que esté ordenado por ingreso ascendente
            ->first();
        $countAsistencias = Asistencia::where('pasante_id', Auth::guard('pasante')->user()->id)->count();
        return view('admin.pasante.perfil', compact('profile', 'primerRegistro', 'countAsistencias'));
    }

    public function editPassword($id)
    {
        return view('admin.pasante.edit-password');
    }

    public function updatePassword(Request $request)
    {
        Request()->validate([
            'password' => ['required', 'string', 'min:8'],
        ]);

        $updatePassword = Pasante::find(Auth::guard('pasante')->user()->id);
        $updatePassword->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('perfil.pasante');
    }

    public function editImagePasante()
    {
        return view('admin.pasante.edit-image');
    }

    public function updateImagePasante(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($request->image);
        $destinationPath = 'assets/images/users';
        $myImage = $request->image->hashName();

        $img = Image::make($request->image->path());
        $img->fit(128, 128);
        $img->save(public_path($destinationPath . '/' . $myImage));

        $pasante = Pasante::find((Auth::guard('pasante')->user()->id));

        $pasante->update([
            'image' => $myImage,
        ]);

        return redirect()->route('perfil.pasante');
    }

    public function pasanteReporte()
    {

        $asistenciaPasante = Asistencia::where('pasante_id', Auth::guard('pasante')->user()->id)->get();
        $primerRegistro = Asistencia::where('pasante_id', Auth::guard('pasante')->user()->id)
            ->orderBy('ingreso', 'asc') // Asegúrate de que esté ordenado por ingreso ascendente
            ->first();
        return view('admin.pasante.reporte-pasante', compact('asistenciaPasante', 'primerRegistro'));
    }

    public function buscarRangoAsistencia(Request $request)
    {
        $fechaInicio = $request->start . ' 00:00:00';
        $fechaFin = $request->end . ' 23:59:59';
        // dd($fechaFin);
        $asistenciaPasante = DB::table('asistencias')
            ->where('pasante_id', Auth::guard('pasante')->user()->id)
            ->whereBetween('ingreso', [$fechaInicio, $fechaFin])
            ->get();

        $primerRegistro = Asistencia::where('pasante_id', Auth::guard('pasante')->user()->id)
            ->orderBy('ingreso', 'asc') // Asegúrate de que esté ordenado por ingreso ascendente
            ->first();

        return view('admin.pasante.buscar-datos', compact('asistenciaPasante', 'primerRegistro', 'fechaInicio', 'fechaFin'));
    }



    public function pdf($fechaInicio, $fechaFin)
    {
        // dd($fechaFin);
        $primerRegistro = Asistencia::where('pasante_id', Auth::guard('pasante')->user()->id)
            ->orderBy('ingreso', 'asc') // Asegúrate de que esté ordenado por ingreso ascendente
            ->first();
        $asistenciaPasante = DB::table('asistencias')
            ->where('pasante_id', Auth::guard('pasante')->user()->id)
            ->whereBetween('ingreso', [$fechaInicio, $fechaFin])
            ->get();
        $pasante = Pasante::find(Auth::guard('pasante')->user()->id);
        $pdf = PDF::loadView('admin.pasante.pdf', compact('asistenciaPasante', 'primerRegistro','pasante'));

        return $pdf->download('reporte_asistencia.pdf');
    }
}
