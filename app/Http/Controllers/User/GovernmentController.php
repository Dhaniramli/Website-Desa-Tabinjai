<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficials;
use App\Models\ConsultativeBody;
use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    public function index()
    {
        $pejabatAdmis = AdministrativeOfficials::all();
        $kepalaDesa = AdministrativeOfficials::where('position', 'Kepala Desa')->first();
        $pejabatBpds = ConsultativeBody::all();

        return view('user.government.index', compact('pejabatAdmis', 'pejabatBpds', 'kepalaDesa'));
    }
}
