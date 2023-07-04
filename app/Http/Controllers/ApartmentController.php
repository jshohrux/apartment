<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Places;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apartments = Apartment::all();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function show_places(Request $request, $id){
        $places = Places::where('apartment_id',$id)->orderBy('name')->get();
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

        Places::create([
            'name'=>$request->get('name'),
            'count'=>$request->get('count'),
            'apartment_id'=>$id,
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda  qo\'shildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('show_places',$id)->with($notification);

    }
}
