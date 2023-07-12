<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Region;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $districts = District::all();
        return view('admin.district.index', compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $regions = Region::all();
        return view('admin.district.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'region_id'=>'required',
        ]);

        District::create([
            'name'=>$request->get('name'),
            'region_id'=>$request->get('region_id'),
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda qo\'shildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('districts')->with($notification);

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
        $district = District::findOrfail($id);
        $regions = Region::all();
        return view('admin.district.edit', compact('district','regions'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'region_id'=>'required',
        ]);
        $district=District::findOrfail($id);
        $district->update([
            'name'=>$request->name,
            'region_id'=>$request->get('region_id')
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda o\'zgartirildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('districts')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
