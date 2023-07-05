<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ariza;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role_id==1){
            return redirect()->route('admin.dashboard');
        }
        $ariza = Ariza::where('user_id',auth()->id())
                ->where('status',0)->first();

        if($ariza){
            return view('index')->with('success','Siz ariza yuborgansiz. Arizangiz 24 soat ichida ko\'rib chiqiladi!!');
        }

        return view('index');

    }
}
