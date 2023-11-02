@extends('user.layouts.main')

@section('content')
<div class="container-fluid pemerintahan-1"
    style="background-image: url('{{ asset('images/bg-pemerintahan.png') }}'); background-size: cover;">
    <div class="container pemerintahan-2">
        <div class="row">
            <div class="col-lg-9">
                <h1 data-aos="zoom-in-right" data-aos-offset="300">Jelajahi <span class="utama">Struktur
                        Organisasi</span> Desa Tabbinjai dan Temukan Peran Setiap
                    Anggotanya</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid struktur-organisasi">
    <div class="container struktur-organisasi-2">
        <h1 data-aos="flip-up">Struktur Organisasi</h1>

        @if (!$kepalaDesa)
        <div class="no-data-pemerintahan">
            <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
            <h5 data-aos="flip-up">Tidak ada data!</h5>
        </div>
        @else
        <div class="row pejabat-desa-1 align-content-center">
            <div class="col-lg-4 col-md-6 mx-auto">
                <div data-aos="zoom-in" class="card">
                    <div class="img2"><img src="{{ asset('storage/' . $kepalaDesa->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($kepalaDesa->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($kepalaDesa->position, 80, '...') }}</h2>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="row pejabat-desa-2 align-content-center">
            @if (!$sekretaris)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="no-data-pemerintahan">
                    <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
                    <h5 data-aos="flip-up">Tidak ada data!</h5>
                </div>
            </div>
            @else
            <div class="col-lg-4 col-md-6 mx-auto">
                <div data-aos="zoom-in" class="card card-pejabat">
                    <div class="img2"><img src="{{ asset('storage/' . $sekretaris->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($sekretaris->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($sekretaris->position, 80, '...') }}</h2>
                    </div>
                </div>
            </div>
            @endif
            @if (!$kasiPemerintah)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="no-data-pemerintahan">
                    <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
                    <h5 data-aos="flip-up">Tidak ada data!</h5>
                </div>
            </div>
            @else
            <div class="col-lg-4 col-md-6 mx-auto">
                <div data-aos="zoom-in" class="card card-pejabat">
                    <div class="img2"><img src="{{ asset('storage/' . $kasiPemerintah->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($kasiPemerintah->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($kasiPemerintah->position, 80, '...') }}</h2>
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="row pejabat-desa-3 align-content-center">
            @foreach ($pejabatAdmis as $pejabat3)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div data-aos="zoom-in" class="card card-pejabat">
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
        <h1 data-aos="flip-up" class="text-center">BPD</h1>

        <div class="row bpd-3 align-content-center">
            <div class="col-lg-4 col-md-6 mx-auto">
                @if (!$wakilbps)
                <div class="container no-data-pemerintahan">
                    <div class="no-data-2">
                        <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px"
                            height="200px">
                        <h5 data-aos="flip-up">Tidak ada data!</h5>
                    </div>
                </div>
                @else
                <div data-aos="zoom-in" class="card card-pejabat mt-5">
                    <div class="img2"><img src="{{ asset('storage/' . $wakilbps->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($wakilbps->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($wakilbps->position, 80, '...') }}</h2>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-lg-4 col-md-6 mx-auto">
                @if (!$ketuabps)
                <div class="container no-data-pemerintahan">
                    <div class="no-data-2">
                        <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px"
                            height="200px">
                        <h5 data-aos="flip-up">Tidak ada data!</h5>
                    </div>
                </div>
                @else
                <div data-aos="zoom-in" class="card card-pejabat mt-5">
                    <div class="img2"><img src="{{ asset('storage/' . $ketuabps->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($ketuabps->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($ketuabps->position, 80, '...') }}</h2>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-lg-4 col-md-6 mx-auto">
                @if (!$sekretarisbps)
                <div class="container no-data-pemerintahan">
                    <div class="no-data-2">
                        <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px"
                            height="200px">
                        <h5 data-aos="flip-up">Tidak ada data!</h5>
                    </div>
                </div>
                @else
                <div data-aos="zoom-in" class="card card-pejabat mt-5">
                    <div class="img2"><img src="{{ asset('storage/' . $sekretarisbps->image) }}" alt="..."></div>
                    <div class="content-text">
                        <h2 class="card-title text-center">{{ Str::limit($sekretarisbps->name, 80, '...') }}</h1>
                            <h2 class="card-subtitle">{{ Str::limit($sekretarisbps->position, 80, '...') }}</h2>
                    </div>
                </div>
                @endif
            </div>
        </div>

        @if (!$pejabatBpds->count())
        <div class="container no-data-pemerintahan">
            <div class="no-data-2">
                <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
                <h5 data-aos="flip-up">Tidak ada data!</h5>
            </div>
        </div>
        @else
        <div class="row bpd-3 align-content-center">
            @foreach ($pejabatBpds as $pejabat3)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div data-aos="zoom-in" class="card card-pejabat mt-5">
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
