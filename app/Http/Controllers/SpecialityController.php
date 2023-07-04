<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Models\Faculty;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $specialities = Specialty::all();
        return view('admin.speciality.index', compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $faculties = Faculty::all();
        return view('admin.speciality.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'faculty'=>"required|numeric"
        ],[
            'name.required'=>'Maydon to\'ldirilishi shart!!',
            'faculty.required'=>'Maydon to\'ldirilishi shart!!',
            'faculty.numeric'=>'Faqat sondan iborat bo\'lishi kerak',
        ]);

        Specialty::create([
            'name'=>$request->get('name'),
            'faculty_id'=>$request->get('faculty'),
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda qo\'shildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('speciality')->with($notification);
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
        $faculties = Faculty::all();
        $speciality = Specialty::findOrfail($id);
        return view('admin.speciality.edit', compact('speciality','faculties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $speciality = Specialty::findOrfail($id);
        $request->validate([
            'name'=>'required',
            'faculty'=>'required',
        ],[
            'name.required'=>'Maydon to\'ldirilishi shart!!'
        ]);

        $speciality->update([
            'name'=>$request->get('name'),
            'faculty_id'=>$request->get('faculty'),
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda o\'zgartirildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('speciality')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
