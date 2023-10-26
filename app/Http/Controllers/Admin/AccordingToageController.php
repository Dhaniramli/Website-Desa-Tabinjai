<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccordingToage;
use Illuminate\Http\Request;

class AccordingToageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AccordingToage::all();
        $totalAll = AccordingToage::sum('total');

        return view('admin.accordingToage.index', compact('items', 'totalAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accordingToage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'age' => 'required',
            'total' => 'required',
        ], [
            'age.required' => 'Kolom umur harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);


        AccordingToage::create($validatedData);

        return redirect('/admin/umur')->with('success', 'Berhasil disimpan!');
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
        $item = AccordingToage::find($id);
        return view('admin.accordingToage.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'age' => 'required',
            'total' => 'required',
        ], [
            'age.required' => 'Kolom umur harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);

        AccordingToage::where('id', $id)->update($validatedData);

        return redirect('/admin/umur')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AccordingToage::destroy($id);
        return redirect('/admin/umur');
    }
}
