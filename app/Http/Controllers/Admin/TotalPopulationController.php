<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TotalPopulation;
use Illuminate\Http\Request;

class TotalPopulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TotalPopulation::where('id', 1)->first();
        return view('admin.totalPopulation.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.totalPopulation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'man' => 'required',
            'woman' => 'required',
        ], [
            'man.required' => 'Kolom laki - laki harus diisi.',
            'woman.required' => 'Kolom perempuan harus diisi.'
        ]);

        $validatedData['total'] = $validatedData['man'] + $validatedData['woman'];

        TotalPopulation::create($validatedData);

        return redirect('/admin/jumlah-penduduk')->with('success', 'Berhasil disimpan!');
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
        $items = TotalPopulation::where('id', 1)->first();
        return view('admin.totalPopulation.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'man' => 'required',
            'woman' => 'required',
        ], [
            'man.required' => 'Kolom laki - laki harus diisi.',
            'woman.required' => 'Kolom perempuan harus diisi.'
        ]);

        $validatedData['total'] = $validatedData['man'] + $validatedData['woman'];

        TotalPopulation::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/jumlah-penduduk')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TotalPopulation::destroy($id);
        return redirect('/admin/jumlah-penduduk');
    }
}
