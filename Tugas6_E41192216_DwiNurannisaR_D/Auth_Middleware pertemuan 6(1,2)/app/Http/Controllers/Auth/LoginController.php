<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
   
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $REQUEST)
    {
        $this->validate($_REQUES, [
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $loginType = filter_var($_REQUEST->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $login =[
            $loginType => $_REQUEST->username,
            'password' =>$_REQUEST->password
        ];

        if(auth()->attempt($login)) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    }
}
