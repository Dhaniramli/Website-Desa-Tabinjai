<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficials;
use App\Models\Mission;
use App\Models\Vission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visi = Vission::where('id', 1)->first();
        $misi = Mission::where('id', 1)->first();

        $pejabatAdministrasi = AdministrativeOfficials::all();

        return view('user.index', compact('visi', 'misi', 'pejabatAdministrasi'));
    }
}
