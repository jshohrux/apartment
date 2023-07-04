<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\Validator;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $faculties = Faculty::all();
        return view('admin.faculty.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>'Maydon to\'ldirilishi shart!!'
        ]);

        Faculty::create([
            'name'=>$request->get('name'),
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda qo\'shildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('faculty')->with($notification);

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
        $faculty = Faculty::findOrfail($id);
        return view('admin.faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $faculty = Faculty::findOrfail($id);
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>'Maydon to\'ldirilishi shart!!'
        ]);

        $faculty->update([
            'name'=>$request->get('name'),
        ]);

        $notification = [
            'message' => 'Muvofaqqiyatli ravishda o\'zgartirildi',
            'alert-type' => 'success',
        ];
        return redirect()->route('faculty')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
