<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{  
    public function loginForm(){
        if(auth()->user() != null)
            return redirect()->route('inicio');
        return view('auth.login');
    }
    public function login(Request $request)
    {
        
        $credentials = $request->only('name', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('miembros');
        }
        return back()->withErrors([
            'result' => 'Usuar o contraseña incorrectos',
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function registerForm(){
        if(auth()->user() != null)
            return redirect()->route('inicio');
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $user = new User();
        $user->name = $request->name;   
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->birthday = $request->birthday;
        $user->rol = 'member';
        $user->save();
        Auth::login($user);
        return redirect()->route('miembros');
    }
}
