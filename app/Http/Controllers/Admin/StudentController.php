<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Specialty;
use App\Models\Ariza;
use App\Models\Region;
use App\Models\District;
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
        $regions = Region::all();
        $districts = District::all();

        $ariza = Ariza::where('user_id',auth()->id())->where('status',0)->first();

        if($ariza){
            return view('send_form')->with('success','Siz ariza yuborgansiz. Arizangiz 24 soat ichida ko\'rib chiqiladi!!');
        }

        $ariza = Ariza::where('user_id',auth()->id())->where('status',1)->first();

        if($ariza){
            return view('send_form')->with('success','Siz arizangiz qabul qilingan!!');
        }

        return view('send_form', compact('faculties','speciality','regions','districts'));
    }

    public function store_form(Request $request){
        $request->validate([
            'fullname'=>'required',
            'birthday'=>'required',
            'passport'=>'required',
            'region'=>'required',
            'district'=>'required',
            'faculty'=>'required',
            'speciality'=>'required',
            'course'=>'required',
            'gender'=>'required',
            'photo'=>'required',
            'file'=>'required|mimes:jpg,pdf,doc,docx,png',
            'phone'=>'required|min:13',
        ]);

        $image = $request->photo;
        $filename_image = date('YmdHi').$image->getClientOriginalName();
        $filename_image = str_replace(" ","_", $filename_image);
        $path_photo = $image->storeAs('public/uploads/photos',$filename_image);

        $file = $request->file;
        $filename = date('YmdHi').$file->getClientOriginalName();
        $filename = str_replace(" ","_", $filename);
        $path_file = $file->storeAs('public/uploads/files',$filename);

        Ariza::create([
            'user_id'=>auth()->user()->id,
            'faculty_id'=>$request->get('faculty'),
            'specialty_id'=>$request->get('speciality'),
            'course'=>$request->get('course'),
            'gender'=>$request->get('gender'),
            'city'=>$request->get('address'),
            'fullname'=>$request->get('fullname'),
            'passport'=>$request->get('passport'),
            'birthday'=>$request->get('birthday'),
            'region_id'=>$request->get('region'),
            'district_id'=>$request->get('district'),
            'photo'=>$path_photo,
            'file'=>$path_file,
            'phone'=>$request->get('phone'),
        ]);

        return redirect()->route('home')->with('success','Siz ariza yubordingiz!!');
    }

    public function my(Request $request){
        $user = Auth::user();
        $arizalar = Ariza::where('user_id',$user->id)->get();
        return view('my_request', compact('arizalar'));
    }

    public function my_show(Request $request, $id){
        $my_ariza = Ariza::findOrfail($id);
        if($my_ariza->user_id!=auth()->id()){
            return abort(403);
        }
        return view('show', compact('my_ariza'));
    }


}
