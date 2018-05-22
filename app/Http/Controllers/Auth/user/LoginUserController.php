<?php

namespace App\Http\Controllers\Auth\user;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\loginRequest;
class LoginUserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest:user','guest:admin'])->except('logout');

    }

    public function showLoginForm()
    {
        return view('auth.user.login_register');
    }

    public function login(loginRequest $request)
    {
        $cre = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('user')->attempt($cre))
            return redirect('/');
        else
            return redirect('/login');
    }


}
