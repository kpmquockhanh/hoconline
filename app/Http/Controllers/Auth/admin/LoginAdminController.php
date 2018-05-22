<?php

namespace App\Http\Controllers\Auth\admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\loginRequest;
class LoginAdminController extends Controller
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
        $this->middleware(['guest:admin'])->except('logout');

    }

    public function showLoginForm()
    {
        return view('auth.admin.login_register');
    }

    public function login(loginRequest $request)
    {
        $cre = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('admin')->attempt($cre))
            return redirect('/admin');
        else
            return redirect('/login');
    }


}
