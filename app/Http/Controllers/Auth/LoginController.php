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
            $notification = [
                'message' => 'Telefon raqami yoki parol xato',
                'alert-type' => 'error',
            ];
            return redirect()->back()->with($notification);
        }
        if(auth()->user()->role_id==1){
            $notification = [
                'message' => 'Tizimga muvofaqiyatli kirdingiz',
                'alert-type' => 'success',
            ];
            return redirect()->route('admin.dashboard')->with($notification);
        }
        $notification = [
            'message' => 'Tizimga muvofaqiyatli kirdingiz',
            'alert-type' => 'success',
        ];
        return redirect()->route('home')->with($notification);
    }

    public function username()
    {
        return 'phone';
    }
}
