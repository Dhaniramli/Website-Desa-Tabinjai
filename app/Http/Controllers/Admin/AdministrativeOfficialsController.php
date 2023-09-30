<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficials;
use Illuminate\Support\Facades\Storage;

class AdministrativeOfficialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AdministrativeOfficials::all();

        return view('admin.administrativeOfficials.index', compact('items'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.administrativeOfficials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('administrative-officials-images');
        }

        AdministrativeOfficials::create($validatedData);

        return redirect('/admin/pejabat-administrasi')->with('success', 'Berhasil ditambahkan!');
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
        $item = AdministrativeOfficials::where('id', $id)->first();

        if (!$item) {
            abort(404);
        }

        return view('admin.administrativeOfficials.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'image' => 'image|file',
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('administrative-officials-images');
        }

        AdministrativeOfficials::where('id', $id)->update($validatedData);

        return redirect('/admin/pejabat-administrasi')->with('success', 'Berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = AdministrativeOfficials::where('id', $id)->first();

        if($item->image){
            Storage::delete($item->image);
        }
        AdministrativeOfficials::destroy($id);

        return redirect('/admin/pejabat-administrasi');
    }
}
