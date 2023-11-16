<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

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
        return redirect()->route('home');
    }

    public function editImageUsuario($id)
    {
        $usuario = User::find($id);
        return view('admin.usuario.edit-image', compact('usuario'));
    }

    // public function updateImageUsuario(Request $request)
    // {
    //     Request()->validate([
    //         'image' => 'required'
    //     ]);

    //     $destinationPath = 'assete/images/users';
    //     $myImage = $request->image->getClientOriginalName();
    //     $request->image->move(public_path($destinationPath), $myImage);

    //     $updateImage = User::find(Auth::user()->id);
    //     $updateImage->update([
    //         'image' => $request->image,
    //     ]);
    //     return redirect()->route('profile');
    // }
    // public function updateImageUsuario(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'required',
    //     ]);

    //     $destinationPath = 'assets/images/users';
    //     $myImage = $request->image->hashName(); // Genera un nombre único

    //     $request->image->move(public_path($destinationPath), $myImage);

    //     $user = User::find(Auth::user()->id);

    //     $user->update([
    //         'image' => $myImage,
    //     ]);
    //     if ($user) {
    //         return redirect()->route('profile');
    //     }
    // }
    public function updateImageUsuario(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destinationPath = 'assets/images/users';
        $myImage = $request->image->hashName();

        $img = Image::make($request->image->path());
        $img->fit(128, 128);
        $img->save(public_path($destinationPath . '/' . $myImage));

        $user = User::find(Auth::user()->id);

        $user->update([
            'image' => $myImage,
        ]);

        return redirect()->route('profile');
    }
}
