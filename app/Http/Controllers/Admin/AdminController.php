<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\Ariza;
use App\Models\User;
use App\Models\Places;
use App\Models\Region;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;
use Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

    public function index(Request $request){
        $all = Ariza::count();
        $users = User::where('role_id',2)->count();
        $active = Ariza::where('status',1)->count();
        $inactive = Ariza::where('status',-1)->count();
        $pending = Ariza::where('status',0)->count();
        $male = Ariza::where('status',1)
                        ->where('gender',1)->count();

        $famale = Ariza::where('status',1)
                    ->where('gender',2)->count();
        return view('admin.dashboard', compact('users','active','inactive','pending','male','famale','all'));
    }

    public function arizalar(Request $request){
        $arizalar = Ariza::orderBy('id','DESC')->get();
        return view('admin.arizalar.index', compact('arizalar'));
    }

    public function edit(Request $request, $id){
        $ariza = Ariza::findOrfail($id);
        $places = Places::all();
        return view('admin.arizalar.edit', compact('ariza','places'));
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

    public function accepted(Request $filter){

        $query = Ariza::where('status',1)->orderBy('id','desc');
        if($filter->has('region') && $filter->get('region')!=NULL){
            $query->where('region_id',$filter->get('region'));
        }
        if($filter->has('faculty') && $filter->get('faculty')!=NULL){
            $query->where('faculty_id',$filter->get('faculty'));
        }
        if($filter->has('gender') && $filter->get('gender')!=NULL){
            $query->where('gender',$filter->get('gender'));
        }
        $arizalar =  $query->get();
        $regions = Region::all();
        $faculties = Faculty::all();
        $count = $arizalar->count();
        return view('admin.arizalar.accepted', compact('arizalar','regions','faculties','count'));
    }

    public function rejected(Request $request){
        $arizalar = Ariza::where('status',-1)->orderBy('id','desc')->get();
        return view('admin.arizalar.rejected', compact('arizalar'));
    }

    public function new_arizalar(Request $request){
        $new_count = Ariza::where('status',0)->count();
        return response()->json([
            'status'=>1,
            'msg'=>'ok',
            'new'=>$new_count,
        ]);
    }

    public function documents(Request $request){
        $documents = Document::all();
        return view('documents', compact('documents'));
    }

    public function documents_all(Request $request){
        $documents = Document::orderBy('id','DESC')->get();
        return view('admin.documents.index', compact('documents'));
    }

    public function documents_create(Request $request){
        return view('admin.documents.create');
    }

    public function documents_store(Request $request){

        $request->validate([
            'name'=>'required',
            'file'=>'required|mimes:pdf,doc,docx'
        ]);

        $file = $request->file;
        $original_name = $file->getClientOriginalName();
        $filename = date('YmdHi').$file->getClientOriginalName();
        $filename = str_replace(" ","_", $filename);
        $path = $file->storeAs('public/documents',$filename);

        Document::create([
            'name'=>$request->get('name'),
            'file'=>$path,
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda qo\'shildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('documents_all')->with($notification);
    }

    public function documents_edit(Request $request, $id){
        $document = Document::findOrfail($id);
        return view('admin.documents.edit', compact('document'));
    }

    public function documents_update(Request $request, $id){
        $request->validate([
            'name'=>'required',
        ]);
        $document = Document::findOrfail($id);
        $document->update([
            'name'=>$request->get('name'),
        ]);

        if($request->has('file')){
            if(Storage::exists($document->file)){
                Storage::delete($document->file);
            }
            $file = $request->file;
            $original_name = $file->getClientOriginalName();
            $filename = date('YmdHi').$file->getClientOriginalName();
            $filename = str_replace(" ","_", $filename);
            $path = $file->storeAs('public/documents',$filename);
            $document->update([
                'file'=>$path
            ]);
        }

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda qo\'shildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('documents_all')->with($notification);

    }

    public function sozlamalar(Request $request){
        $user = Auth::user();
        if($user->role_id==1){
            return view('admin.settings',compact('user'));
        }
        return view('settings',compact('user'));
    }

    public function general(Request $request,$id){
        $user = User::findOrfail($id);
        $request->validate([
            'name'=>'required',
            'phone'=>'required|min:17',
        ]);
        $phone = $request->get('phone');
        $phone = preg_replace('/[^0-9]+/', '', $phone);
        $user->update([
            'name'=>$request->get('name'),
            'phone'=>$phone,
        ]);

        if($request->get('currentPassword')){
            $request->validate([
                'newPassword'=>'required',
                'confirmPassword'=>'same:newPassword',
            ]);
            if(!Hash::check($request->currentPassword, $user->password)){
                $notification = [
                    'message' => 'Parol xato kiritildi',
                    'alert-type' => 'error',
                ];
                return redirect()->back()->with($notification);
            }
            $user->update([
                'password' => Hash::make($request->newPassword)
            ]);
        }

        $notification = [
            'message' => 'O\'zgartirildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('admin.dashboard')->with($notification);

    }

    public function all_regions(Request $request){
        $regions = Region::all();
        return view('admin.statistics.regions', compact('regions'));
    }

    public function all_faculty(Request $request){
        $faculties = Faculty::all();
        return view('admin.statistics.faculty', compact('faculties'));
    }
}
