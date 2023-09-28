<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VissionMission;
use Illuminate\Http\Request;

class VissionMissionController extends Controller
{
    public function index() {
        $items = VissionMission::all();

        return view('admin.vissionMission.index', compact('items'));
    }

    public function storeVission(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required',
            'vission' => '',
        ]);

        VissionMission::create($validatedData);

        return redirect('/admin/visi-misi')->with('success', 'Berhasil disimpan!');
    }

    public function updateVission(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required',
            'vission' => '',
        ]);

        VissionMission::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/visi-misi')->with('success', 'Berhasil disimpan!');
    }
    
    public function storeMission(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required',
            'mission' => '',
        ]);

        VissionMission::create($validatedData);

        return redirect('/admin/visi-misi')->with('success', 'Berhasil disimpan!');
    }

    public function updateMission(Request $request) {
        $validatedData = $request->validate([
            'id' => 'required',
            'mission' => '',
        ]);

        VissionMission::where('id', $validatedData['id'])->update($validatedData);

        return redirect('/admin/visi-misi')->with('success', 'Berhasil disimpan!');
    }
}
