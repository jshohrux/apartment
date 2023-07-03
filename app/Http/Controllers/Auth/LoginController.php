<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
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

    public function login(Request $request){
        $username = $request->get('phone');
        $username = preg_replace('/[^0-9]+/', '', $username);
        if (! Auth::attempt(['phone' => $username, 'password' => $request->password])) {
            return redirect()->back()->with('error', 'Telefon raqami yoki parol xato');
        }
        if(auth()->user()->role_id==1){
            return redirect()->route('admin.dashboard');
        }
        return redirect('home');
    }

    public function username()
    {
        return 'phone';
    }
}
