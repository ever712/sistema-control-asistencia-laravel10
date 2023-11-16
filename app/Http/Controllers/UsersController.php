<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //

    public function profile(){
        $profile = User::find(Auth::user()->id);

        return view('admin.usuario.profile', compact('profile'));
    }

    public function editUsuario($id){
        $usuario = User::find($id);
        return view('admin.usuario.edit',compact('usuario'));
    }

    public function updateUsuario(Request $request){
        // dd($request);
        $updatePassword = User::find(Auth::user()->id);
        $updatePassword->update([
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('home');
    }
}
