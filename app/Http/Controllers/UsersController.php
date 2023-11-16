<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert; 

class UsersController extends Controller
{
    //

    public function profile()
    {
        $profile = User::find(Auth::user()->id);

        return view('admin.usuario.profile', compact('profile'));
    }

    public function editUsuario($id)
    {
        $usuario = User::find($id);
        return view('admin.usuario.edit', compact('usuario'));
    }

    public function updateUsuario(Request $request)
    {
        // dd($request);
        Request()->validate([
            'password' => ['required', 'string', 'min:8']
        ]);
        $updatePassword = User::find(Auth::user()->id);
        $updatePassword->update([
            'password' => Hash::make($request->password),
        ]);

        Alert::alert()->success('Contraseña Actualizada','La contraseña ha sido actualizada correctamente');

        return redirect()->route('profile');
    }

    public function editImageUsuario($id)
    {
        $usuario = User::find($id);
        return view('admin.usuario.edit-image', compact('usuario'));
    }

    public function updateImageUsuario(Request $request)
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

        $user = User::find(Auth::user()->id);

        $user->update([
            'image' => $myImage,
        ]);

        Alert::alert()->success('Imagen Actualizado','La imagen de perfil ha sido actualizada correctamente.');

        return redirect()->route('profile');
    }
}
