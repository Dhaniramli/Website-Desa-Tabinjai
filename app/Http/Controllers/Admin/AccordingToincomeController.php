<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccordingToincome;
use Illuminate\Http\Request;

class AccordingToincomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AccordingToincome::all();
        $totalAll = AccordingToincome::sum('total');

        return view('admin.accordingToincome.index', compact('items', 'totalAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.accordingToincome.create');
    }

    /**
     * Store a newly created resource in storincome.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'income' => 'required',
            'total' => 'required',
        ], [
            'income.required' => 'Kolom penghasilan harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);


        AccordingToincome::create($validatedData);

        return redirect('/admin/penghasilan')->with('success', 'Berhasil disimpan!');
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
        $item = AccordingToincome::find($id);
        return view('admin.accordingToincome.edit', compact('item'));
    }

    /**
     * Update the specified resource in storincome.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'income' => 'required',
            'total' => 'required',
        ], [
            'income.required' => 'Kolom penghasilan harus diisi.',
            'total.required' => 'Kolom jumlah harus diisi.'
        ]);

        AccordingToincome::where('id', $id)->update($validatedData);

        return redirect('/admin/penghasilan')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storincome.
     */
    public function destroy(string $id)
    {
        AccordingToincome::destroy($id);
        return redirect('/admin/penghasilan');
    }
}
