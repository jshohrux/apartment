<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ariza;

class AdminController extends Controller
{
    //

    public function index(Request $request){
        return view('admin.dashboard');
    }

    public function arizalar(Request $request){
        $arizalar = Ariza::all();
        return view('admin.arizalar.index', compact('arizalar'));
    }
}
