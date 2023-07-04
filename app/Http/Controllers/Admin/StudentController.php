<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Specialty;
use App\Models\Ariza;
use Auth;

class StudentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $students = User::where('role_id',2)->get();
        return view('admin.student.index',compact('students'));
    }

    public function send_form(Request $request){
        $faculties = Faculty::all();
        $speciality = Specialty::all();
        return view('send_form', compact('faculties','speciality'));
    }

    public function store_form(Request $request){
        $request->validate([
            'faculty'=>'required',
            'speciality'=>'required',
            'course'=>'required',
            'gender'=>'required',
        ]);

        Ariza::create([
            'user_id'=>auth()->user()->id,
            'faculty_id'=>$request->get('faculty'),
            'specialty_id'=>$request->get('speciality'),
            'course'=>$request->get('course'),
            'gender'=>$request->get('gender'),
            'city'=>$request->get('address'),
        ]);

        return redirect()->route('home')->with('success','Siz ariza yubordingiz!!');
    }

    public function my(Request $request){
        $user = Auth::user();
        $ariza = Ariza::where('user_id',$user->id)->get();
        return view('my_request', compact('ariza'));
    }


}
