@extends('user.layouts.main')

@section('content')
<div class="container-fluid pemerintahan-1"
    style="background-image: url('{{ asset('images/bg-pemerintahan.png') }}'); background-size: cover;">
    <div class="container pemerintahan-2">
        <div class="row">
            <div class="col-lg-9">
                <h1>Jelajahi <span class="utama">Struktur Organisasi</span> Desa Tabbinjai dan Temukan Peran Setiap
                    Anggotanya</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid struktur-organisasi">
    <div class="container struktur-organisasi-2">
        <h1>Struktur Organisasi</h1>

        @if (!$kepalaDesa)
        <div class="no-data-pemerintahan">
            <img src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
            <h5>Tidak ada data!</h5>
        </div>
        @else
        <div class="row pejabat-desa-1 align-content-center">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="card">
                    <div class="img2"><img src="{{ asset('storage/' . $kepalaDesa->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($kepalaDesa->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($kepalaDesa->position, 80, '...') }}</h2>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (!$pejabatAdmis->count())
        <div class="no-data-pemerintahan">
            <img src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
            <h5>Tidak ada data!</h5>
        </div>
        @else
        <div class="row pejabat-desa-2 align-content-center">
            @foreach ($pejabatAdmis->skip(1)->take(2) as $pejabat2)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="card card-pejabat">
                    <div class="img2"><img src="{{ asset('storage/' . $pejabat2->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($pejabat2->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($pejabat2->position, 80, '...') }}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <div class="row pejabat-desa-3 align-content-center">
            @foreach ($pejabatAdmis->skip(3) as $pejabat3)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="card card-pejabat">
                    <div class="img2"><img src="{{ asset('storage/' . $pejabat3->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($pejabat3->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($pejabat3->position, 80, '...') }}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- PEJABAT BPD --}}
<div class="container-fluid bpd">
    <div class="container bpd-2">
        <h1 class="text-center">BPD</h1>

        @if (!$pejabatBpds->count())
        <div class="container no-data-pemerintahan">
            <div class="no-data-2">
                <img src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
                <h5>Tidak ada data!</h5>
            </div>
        </div>
        @else
        <div class="row bpd-3 align-content-center">
            @foreach ($pejabatBpds as $pejabat3)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="card card-pejabat">
                    <div class="img2"><img src="{{ asset('storage/' . $pejabat3->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($pejabat3->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($pejabat3->position, 80, '...') }}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>

{{-- @endif --}}
@endsection
