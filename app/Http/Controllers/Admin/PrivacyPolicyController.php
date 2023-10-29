<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = PrivacyPolicy::where('id', 1)->first();

        return view('admin.privacyPolicy.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.privacyPolicy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'body' => 'required',
        ], [
            'body.required' => 'Kolom Body harus diisi.'
        ]);

        PrivacyPolicy::create($validatedData);

        return redirect('/admin/privacy-policy')->with('success', 'Berhasil disimpan!');
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
        $item = PrivacyPolicy::where('id', 1)->first();

        return view('admin.privacyPolicy.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'body' => 'required',
        ],[
            'body.required' => 'Kolom Body harus diisi.',
        ]);

        PrivacyPolicy::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/privacy-policy')->with('success', 'Berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PrivacyPolicy::destroy($id);
        return redirect('/admin/privacy-policy');
    }
}
