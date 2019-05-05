<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return filter_var(request()->input('identity'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    protected function credentials(Request $request)
    {
        $request->merge([
            $this->username() => $request->input('identity'),
        ]);

        return $request->only($this->username(), 'password');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'identity'             => 'required',
            'password'             => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        toast('Welcome back '.$user->first_name, 'success', 'top-right');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'identity' => [trans('auth.failed')],
        ]);
    }

    public function logout(Request $request)
    {
        if (!auth()->check()) {
            $msg = 'You have not logged in before!';
            toast($msg, 'warning', 'top-right');

            return redirect(route('login'))->with(['warning' => $msg]);
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        $msg = 'You\'ve been logged out!';
        toast($msg, 'success', 'top-right');

        return $this->loggedOut($request) ?: redirect(route('login'))->with(['success' => $msg]);
    }
}
