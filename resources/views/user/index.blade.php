@extends('user.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 home-1 order-lg-1 order-1">
            <h1 data-aos="zoom-in-right" data-aos-offset="300">Selamat Datang Di Website <span class="green-text">Desa Tabbinjai</span></h1>
            <p data-aos="zoom-in-right" data-aos-easing="ease-in-sine"><span class="bold-text">Website Desa Tabbinjai</span> adalah usaha menggambarkan secara utuh tentang
                kondisi Desa. Data-data yang disusun diambil dari semua data yang tersedia dan bisa didapatkan.</p>
        </div>
        <div class="col-lg-6 home-2 order-lg-2 order-2">
            <div class="image-home-2">
                <img data-aos="zoom-in" src="{{ asset('images/Group 114.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

{{-- VISI MISI --}}
<div class="container">
    <div class="row visi-misi">
        <div class="col-lg-6 home-3">
            <div class="logo-x-visi">
                <div class="visi-logo">
                    <img data-aos="zoom-in" src="{{ asset('images/Frame 40.png') }}" alt="">
                </div>
                <div class="visi-title">
                    <h1 data-aos="flip-up">Visi</h1>
                </div>
            </div>
            @if (!$visi)
            <div class="no-data-pemerintahan">
                <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
                <h5 data-aos="flip-up">Tidak ada data!</h5>
            </div>
            @else
            <div data-aos="flip-up" class="visi-content">
                {!! $visi->body !!}
            </div>
            @endif
        </div>
        <div class="col-lg-6 home-4">
            <div class="logo-x-misi">
                <div class="misi-logo">
                    <img data-aos="zoom-in" src="{{ asset('images/Frame 39.png') }}" alt="">
                </div>
                <div class="misi-title">
                    <h1 data-aos="flip-up">Misi</h1>
                </div>
            </div>
            @if (!$misi)
            <div class="no-data-pemerintahan">
                <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
                <h5 data-aos="flip-up">Tidak ada data!</h5>
            </div>
            @else
            <div data-aos="flip-up" class="misi-content">
                {!! $misi->body !!}
            </div>
            @endif
        </div>
    </div>
</div>

{{-- PEJABAT DESA --}}
<div class="container-fluid" style="background-image: url('{{ asset('images/bg.png') }}'); background-size: cover;">
    <div class="container pejabat-desa">
        <h1 data-aos="flip-up" class="text-center">Pejabat Desa</h1>

        @if (!$pejabatAdministrasi->count())
        <div class="no-data-pemerintahan">
            <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
            <h5 data-aos="flip-up">Tidak ada data!</h5>
        </div>
        @else
        <div class="carousel-main carousel-galeri"
            data-flickity='{"autoPlay": 1500, "groupCells": true , "prevNextButtons": false, "pageDots": true}'>
            @foreach ($pejabatAdministrasi as $pejabat)
            <div class="carousel-cell carousel-inner-gallery">
                <div class="overlay">
                    <div data-aos="flip-up" class="card">
                        <div class="img2"><img src="{{ asset('storage/' . $pejabat->image) }}" alt="..."></div>
                        <div class="content-text">
                            <h2 class="card-title text-center">{{ Str::limit($pejabat->name, 80, '...') }}</h1>
                                <h2 class="card-subtitle">{{ Str::limit($pejabat->position, 80, '...') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>

<div class="container produk-desa-athome">
    <div class="row">
        <div class="col-lg-6 produk-desa-athome-1">
            <h1 data-aos="flip-up">Produk Desa</h1>
            <p data-aos="flip-up">Produk Desa Tabbinjai di identifikasi ke dalam beberapa bidang produksi, seperti produksi Gula Aren, dan
                Wisata Menarik di Desa Tabbinjai</p>
        </div>
        <div class="col-lg-6">
            <div class="row produk-desa-athome-2">
                <div class="col-6">
                    <a data-aos="zoom-in" href="/produk-pangan" style="text-decoration: none;">
                        <div class="container tombol">
                            <img src="{{ asset('images/salad.png') }}" alt="">
                            <h2>Produk Pangan</h2>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a data-aos="zoom-in" href="/produk-wisata" style="text-decoration: none;">
                        <div class="container tombol">
                            <img src="{{ asset('images/location.png') }}" alt="">
                            <h2>Produk Wisata</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container berita">
    <h1 data-aos="flip-up" class="text-center">Berita</h1>

    @if (!$beritas->count())
    <div class="no-data-pemerintahan">
        <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
        <h5 data-aos="flip-up">Tidak ada data!</h5>
    </div>
    @else
    <div class="row">
        <div class="col-lg-6">
            <div data-aos="zoom-in" class="card berita-1">
                <div class="card-img">
                    <img src="{{ asset('storage/' . $beritas[0]->image) }}" alt="...">
                </div>
                <div class="card-body p-0">
                    <div class="card-title d-flex">
                        {{-- <div class="title-1">
                            Seminar Desa
                        </div> --}}
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
                    <div data-aos="zoom-in" class="card berita-1">
                        <div class="card-subimg">
                            <img src="{{ asset('storage/' . $berita->image) }}" alt="...">
                        </div>
                        <div class="card-body p-0">
                            <div class="card-title d-flex">
                                {{-- <div class="title-1">
                                    Seminar Desa
                                </div> --}}
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
    @endif
</div>
@endsection
