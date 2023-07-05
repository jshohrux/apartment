<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ariza;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function index(Request $request){
        $users = User::where('role_id',2)->count();
        $active = Ariza::where('status',1)->count();
        $inactive = Ariza::where('status',-1)->count();
        $pending = Ariza::where('status',0)->count();
        return view('admin.dashboard', compact('users','active','inactive','pending'));
    }

    public function arizalar(Request $request){
        $arizalar = Ariza::orderBy('id','DESC')->get();
        return view('admin.arizalar.index', compact('arizalar'));
    }

    public function edit(Request $request, $id){
        $ariza = Ariza::findOrfail($id);
        return view('admin.arizalar.edit', compact('ariza'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'status'=>"required"
        ]);
        $ariza = Ariza::findOrfail($id);
        if($request->status==1){
            $request->validate([
                'apartment'=>'required',
                'floor'=>'required',
            ]);
        }

        $ariza->update([
            'status'=>$request->get('status'),
            'apartment_id'=>$request->get('apartment'),
            'floor'=>$request->get('floor'),
            'description'=>$request->get('description'),
        ]);
        return redirect()->route('arizalar');
    }

    public function new(Request $request){
        $arizalar = Ariza::where('status',0)->orderBy('id','desc')->get();
        return view('admin.arizalar.new', compact('arizalar'));
    }

    public function accepted(Request $request){
        $arizalar = Ariza::where('status',1)->orderBy('id','desc')->get();
        return view('admin.arizalar.accepted', compact('arizalar'));
    }

    public function rejected(Request $request){
        $arizalar = Ariza::where('status',-1)->orderBy('id','desc')->get();
        return view('admin.arizalar.rejected', compact('arizalar'));
    }
}
