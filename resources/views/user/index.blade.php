@extends('user.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 home-1 order-2">
            <h1>Selamat Datang Di Website <span class="green-text">Desa Tabbinjai</span></h1>
            <p><span class="bold-text">Website Desa Tabbinjai</span> adalah usaha menggambarkan secara utuh tentang
                kondisi Desa. Data-data yang disusun diambil dari semua data yang tersedia dan bisa didapatkan.</p>
        </div>
        <div class="col-lg-6 home-2 order-1">
            <div class="image-home-2">
                <img src="{{ asset('images/Group 114.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

{{-- VISI MISI --}}
<div class="container">
    <div class="row visi-misi">
        <div class="col-lg-6 home-3">
            <div class="visi-logo">
                <img src="{{ asset('images/Frame 40.png') }}" alt="">
            </div>
            <div class="visi-title">
                <h1>Visi</h1>
            </div>
            <div class="visi-content">
                {!! $visi->body !!}
            </div>
        </div>
        <div class="col-lg-6 home-4">
            <div class="misi-logo">
                <img src="{{ asset('images/Frame 39.png') }}" alt="">
            </div>
            <div class="misi-title">
                <h1>Misi</h1>
            </div>
            <div class="misi-content">
                {!! $misi->body !!}
            </div>
        </div>
    </div>
</div>

{{-- PEJABAT DESA --}}
<div class="container-fluid" style="background-image: url('{{ asset('images/bg.png') }}'); background-size: cover;">
    <div class="container pejabat-desa">
        <h1 class="text-center">Pejabat Desa</h1>

        <div class="carousel-main carousel-galeri"
            data-flickity='{"autoPlay": 1500, "groupCells": true , "prevNextButtons": false, "pageDots": true}'>
            @if ($pejabatAdministrasi->count())
            @foreach ($pejabatAdministrasi as $pejabat)
            <div class="carousel-cell carousel-inner-gallery">
                <div class="overlay">
                    <div class="card">
                        <div class="img2"><img src="{{ asset('storage/' . $pejabat->image) }}" alt="..."></div>
                        <div class="content-text">
                            <h2 class="card-title text-center">{{ Str::limit($pejabat->name, 80, '...') }}</h1>
                                <h2 class="card-subtitle">{{ Str::limit($pejabat->position, 80, '...') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="parent-container">
                <div class="not-found"
                    style="height: 200px; display: flex; align-items: center; justify-content: center;">
                    <p class="text-center fs-4">Tidak ada gambar ditemukan!</p>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection
