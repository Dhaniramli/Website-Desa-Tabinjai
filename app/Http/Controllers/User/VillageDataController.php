<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccordingToage;
use App\Models\AccordingToeducation;
use App\Models\AccordingTogender;
use App\Models\AccordingToincome;
use App\Models\AccordingTowork;
use Illuminate\Http\Request;

class VillageDataController extends Controller
{
    public function index()
    {
        $gender = AccordingTogender::all();
        $totalGenderAll = AccordingTogender::sum('total');

        $umur = AccordingToage::all();
        $totalumurAll = AccordingToage::sum('total');

        $pendidikan = AccordingToeducation::all();
        $totalPendidikanAll = AccordingToeducation::sum('total');

        $pekerjaan = AccordingTowork::all();
        $totalPekerjaanAll = AccordingTowork::sum('total');

        $penghasilan = AccordingToincome::all();
        $totalPenghasilanAll = AccordingToincome::sum('total');

        return view('user.villageData.index', compact('gender', 'totalGenderAll', 'umur', 'totalumurAll', 'totalPendidikanAll', 'pendidikan', 'pekerjaan', 'totalPekerjaanAll', 'penghasilan', 'totalPenghasilanAll'));
    }
}
