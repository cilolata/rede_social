<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile($id){
        $usuario = User::find($id);
        return view('profile')->with('usuario', $usuario);
    }
}
