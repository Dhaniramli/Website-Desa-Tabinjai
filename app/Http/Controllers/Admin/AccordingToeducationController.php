<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccordingToeducation;
use Illuminate\Http\Request;

class AccordingToeducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AccordingToeducation::all();
        $totalAll = AccordingToeducation::sum('total');

        return view('admin.accordingToeducation.index', compact('items', 'totalAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accordingToeducation.create');
    }

    /**
     * Store a newly created resource in storeducation.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'education' => 'required',
            'total' => 'required',
        ], [
            'education.required' => 'Kolom pendidikan harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);


        AccordingToeducation::create($validatedData);

        return redirect('/admin/pendidikan')->with('success', 'Berhasil disimpan!');
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
        $item = AccordingToeducation::find($id);
        return view('admin.accordingToeducation.edit', compact('item'));
    }

    /**
     * Update the specified resource in storeducation.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'education' => 'required',
            'total' => 'required',
        ], [
            'education.required' => 'Kolom pendidikan harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);

        AccordingToeducation::where('id', $id)->update($validatedData);

        return redirect('/admin/pendidikan')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storeducation.
     */
    public function destroy(string $id)
    {
        AccordingToeducation::destroy($id);
        return redirect('/admin/pendidikan');
    }
}
