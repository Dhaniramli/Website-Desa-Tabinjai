<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccordingTogender;
use Illuminate\Http\Request;

class AccordingTogenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AccordingTogender::all();
        $totalAll = AccordingTogender::sum('total');

        return view('admin.accordingTogender.index', compact('items', 'totalAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accordingTogender.create');
    }

    /**
     * Store a newly created resource in storgender.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gender' => 'required',
            'total' => 'required',
        ], [
            'gender.required' => 'Kolom jenis kelamin harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);


        AccordingTogender::create($validatedData);

        return redirect('/admin/jenis-kelamin')->with('success', 'Berhasil disimpan!');
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
        $item = AccordingTogender::find($id);
        return view('admin.accordingTogender.edit', compact('item'));
    }

    /**
     * Update the specified resource in storgender.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'gender' => 'required',
            'total' => 'required',
        ], [
            'gender.required' => 'Kolom jenis kelamin harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);

        AccordingTogender::where('id', $id)->update($validatedData);

        return redirect('/admin/jenis-kelamin')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storgender.
     */
    public function destroy(string $id)
    {
        AccordingTogender::destroy($id);
        return redirect('/admin/jenis-kelamin');
    }
}
