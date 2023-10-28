@extends('user.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 home-1 order-lg-1 order-2">
            <h1>Selamat Datang Di Website <span class="green-text">Desa Tabbinjai</span></h1>
            <p><span class="bold-text">Website Desa Tabbinjai</span> adalah usaha menggambarkan secara utuh tentang
                kondisi Desa. Data-data yang disusun diambil dari semua data yang tersedia dan bisa didapatkan.</p>
        </div>
        <div class="col-lg-6 home-2 order-lg-2 order-1">
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
                    <p class="text-center fs-4">Not found!</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="container berita">
    <h1 class="text-center">Berita</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card berita-1">
                <div class="card-img">
                    <img src="{{ asset('storage/' . $beritas[0]->image) }}" alt="...">
                </div>
                <div class="card-body p-0">
                    <div class="card-title d-flex">
                        <div class="title-1">
                            Seminar Desa
                        </div>
                        <div class="title-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar4" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                            </svg>
                            <div class="date">
                                {{ date('d F Y', strtotime($beritas[0]->created_at)) }}
                            </div>
                        </div>
                    </div>
                    <h2>{{ $beritas[0]->title }}</h2>
                    <p class="card-text">{{ $beritas[0]->excerpt }}</p>
                    <a class="lengkapnya" href="/berita/{{ $beritas[0]->slug }}">Baca selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                @foreach ($beritas->skip(1) as $berita)
                <div class="col-lg-6">
                    <div class="card berita-1">
                        <div class="card-subimg">
                            <img src="{{ asset('storage/' . $berita->image) }}" alt="...">
                        </div>
                        <div class="card-body p-0">
                            <div class="card-title d-flex">
                                <div class="title-1">
                                    Seminar Desa
                                </div>
                                <div class="title-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-calendar4" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                    </svg>
                                    <div class="date">
                                        {{ date('d F Y', strtotime($berita->created_at)) }}
                                    </div>
                                </div>
                            </div>
                            <h2>{{ $berita->title }}</h2>
                            <a class="lengkapnya" href="{{ $berita->slug }}">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
