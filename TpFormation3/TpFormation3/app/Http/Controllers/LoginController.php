<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function connect(Request $request){
        $ls = ['email' => $request->email , 'password' => $request->password];
        $ok = Auth::attempt($ls);
        if($ok)
        {
            $request->session()->regenerate();
            return redirect()->route('commandes.index');
        }
        else
        {
            return back()->withErrors([
                'erreur' => 'Email ou Mot de Passe Invalide !'
            ])->onlyInput('erreur');
        }
    }
}
