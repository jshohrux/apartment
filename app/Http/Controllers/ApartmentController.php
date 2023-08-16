<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Places;
use App\Models\Ariza;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apartments = Apartment::with('places')->get();
        return view('admin.apartment.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function places_edit(Request $request, string $id,$place)
    {
        //
        $apartment = Apartment::findOrfail($id);
        $place = Places::where('apartment_id',$id)
                ->where('id',$place)->first();

        return view('admin.apartment.places_edit', compact('apartment','place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function places_update(Request $request, string $id, string $place)
    {
        //
        $old_place = Places::where('apartment_id',$id)
                    ->where('id',$place)->first();
        $old_place->update([
            'name'=>$request->name,
            'count'=>$request->count,
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda o\'zgartirildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('show_places',$id)->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show_places(Request $request, $id){
        $places = Places::with(['arizalar'=>function($query) use ($id){
            $query->where('apartment_id',$id);
        }])->where('apartment_id',$id)->orderBy('name')->get();
        $apartment = Apartment::findOrfail($id);
        return view('admin.apartment.places', compact('places','apartment'));
    }

    public function add(Request $request,$id){
        $apartment = Apartment::findOrfail($id);
        return view('admin.apartment.add_places',compact('apartment'));
    }

    public function add_store(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'count'=>'required|numeric',
        ]);

        $place = Places::where('apartment_id',$id)
                ->where('name',$request->name)->first();

        if(empty($place)){
            Places::updateOrCreate([
                'name'=>$request->get('name'),
                'count'=>$request->get('count'),
                'apartment_id'=>$id,
            ]);
        }

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda  qo\'shildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('show_places',$id)->with($notification);

    }

    public function delete(Request $request, $id, $place){
        $place = Places::findOrfail($place);

        $place->delete();

        return redirect()->back();
    }

    public function get_places(Request $request){
        $places = Places::where('apartment_id', $request->id)->get();
        $str = "";
        foreach ($places as $value){
            $arizalar = Ariza::where('apartment_id',$request->id)
                        ->where('floor',$value->id)->count();
            $str .= '<option value="'.$value->id.'">'.$value->name.'-qavat ('.$value->count-$arizalar.' ta bo\'sh joy)</option>';
         }
        echo $str;
    }
}
