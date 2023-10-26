<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccordingTowork;
use Illuminate\Http\Request;

class AccordingToworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AccordingTowork::all();
        $totalAll = AccordingTowork::sum('total');

        return view('admin.accordingTowork.index', compact('items', 'totalAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accordingTowork.create');
    }

    /**
     * Store a newly created resource in storwork.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'work' => 'required',
            'total' => 'required',
        ], [
            'work.required' => 'Kolom pekerjaan harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);


        AccordingTowork::create($validatedData);

        return redirect('/admin/pekerjaan')->with('success', 'Berhasil disimpan!');
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
        $item = AccordingTowork::find($id);
        return view('admin.accordingTowork.edit', compact('item'));
    }

    /**
     * Update the specified resource in storwork.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'work' => 'required',
            'total' => 'required',
        ], [
            'work.required' => 'Kolom pekerjaan harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);

        AccordingTowork::where('id', $id)->update($validatedData);

        return redirect('/admin/pekerjaan')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storwork.
     */
    public function destroy(string $id)
    {
        AccordingTowork::destroy($id);
        return redirect('/admin/pekerjaan');
    }
}
