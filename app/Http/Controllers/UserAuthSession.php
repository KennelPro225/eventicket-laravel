<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthSession extends Controller
{
    public function UserLogin(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $validation = $request->validate([
            'email' => "required|email",
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('login');
        } else {
            return back()->withErrors([
                'message' => "Email ou Mot de passe incorrect",
            ]);
        }
    }

    public function UserRegister(UserRegisterRequest $userRequest, User $user)
    {
        $validation = $userRequest;
        if ($validation || $userRequest->password == $userRequest->cpassword) {
            $user->nom = $userRequest->user_nom;
            $user->prenom = $userRequest->user_prenom;
            $user->email = $userRequest->email;
            $user->password = Hash::make($userRequest->password);
            $user->save();
            return redirect('login');
        } else {
            return redirect()->back()->withErrors(['confirmation' => 'Le mot de passe ne correspond pas']);
        }
    }

    public function Logout()
    {
        // Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
