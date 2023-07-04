<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth','is_admin']);
    }

    public function index(Request $request){
        $students = User::where('role_id',2)->get();
        return view('admin.student.index',compact('students'));
    }
}
