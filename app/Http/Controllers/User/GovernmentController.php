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
        $pejabatAdmis = AdministrativeOfficials::whereNot(function ($query) {
            $query->where('position', 'Kepala Desa')
                ->orWhere('position', 'Sekretaris Desa')
                ->orWhere('position', 'Kasi Pemerintahan');
        })->get();

        $kepalaDesa = AdministrativeOfficials::where('position', 'Kepala Desa')->first();
        $sekretaris = AdministrativeOfficials::where('position', 'Sekretaris Desa')->first();
        $kasiPemerintah = AdministrativeOfficials::where('position', 'Kasi Pemerintahan')->first();

        $ketuabps = ConsultativeBody::where('position', 'Ketua')->first();
        $wakilbps = ConsultativeBody::where('position', 'Wakil Ketua')->first();
        $sekretarisbps = ConsultativeBody::where('position', 'Sekretaris')->first();

        $pejabatBpds = ConsultativeBody::whereNot(function ($query) {
            $query->where('position', 'Ketua')
                ->orWhere('position', 'Wakil Ketua')
                ->orWhere('position', 'Sekretaris');
        })->get();

        return view('user.government.index', compact('pejabatAdmis', 'pejabatBpds', 'kepalaDesa', 'sekretaris', 'kasiPemerintah', 'ketuabps', 'wakilbps', 'sekretarisbps'));
    }
}
