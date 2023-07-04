<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $phone = $data['phone'];
        $data['phone'] = preg_replace('/[^0-9]+/', '', $phone);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:12', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ],
        [
            'name.required'=>'Maydon to\'ldirilishi shart',
            'phone.required'=>'Maydon to\'ldirilishi shart',
            'phone.unique'=>'Bunday telefon raqamiga ega foydalanuvchi mavjud',
            'password.required'=>'Maydon to\'ldirilishi shart',
            'password.confirmed'=>'Parollar mos kelmadi',
            'phone.min'=>'Telefon raqami xato kiritildi',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $phone = $data['phone'];
        $data['phone'] = preg_replace('/[^0-9]+/', '', $phone);
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'email'=>'test@test.com',
            'role_id'=>2,
        ]);
    }
}
