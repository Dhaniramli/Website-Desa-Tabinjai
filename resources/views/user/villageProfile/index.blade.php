@extends('user.layouts.main')

@section('content')
<div class="container-fluid profil-desa-1"
    style="background-image: url('{{ asset('images/profile-desa-image.png') }}'); background-size: cover;">
    <div class="container profil-desa-2">
        <div class="row">
            <div class="col-lg-7">
                <h1 data-aos="zoom-in-right" data-aos-offset="300"><span class="utama">Desa Tabbinjai</span>, Sebuah Desa Yang Terletak Di Sulawesi Selatan, Kab.
                    Sinjai</h1>
                <p data-aos="zoom-in-right" data-aos-easing="ease-in-sine">Dengan hadirnya website ini, masyarakat diharapkan bisa untuk: Mengakses informasi tentang desa Tabbinjai</p>
            </div>
        </div>
        <div class="tombol">
            <a data-aos="zoom-in" href="#visi-misi" class="btn btn-tombol">Visi Misi</a>
            <a data-aos="zoom-in" href="#sejarah" class="btn btn-tombol">Sejarah</a>
            <a data-aos="zoom-in" href="#geografis" class="btn btn-tombol">Letak Geografis</a>
        </div>
    </div>
</div>

{{-- SEJARAH --}}
<div id="sejarah" class="container-fluid sejarah-1"
    style="background-image: url('{{ asset('images/bg-sejarah.png') }}'); background-size: cover;">
    <h1 data-aos="flip-up" class="text-center">Sejarah Desa Tabbinjai</h1>

    @if (!$sejarah)
    <div class="no-data-pemerintahan">
        <img data-aos="zoom-in" src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
        <h5 data-aos="flip-up">Tidak ada data!</h5>
    </div>
    @else
    <div class="container sejarah-2">
        <div data-aos="zoom-in" class="card shadow card-sejarah">
            <div class="text-justify" style="text-align: justify">
                {!! substr($sejarah->body, 0, 1048) !!}
            </div>
            <a href="/profil-desa/sejarah" class="selengkapnya">Lihat selengkapnya...</a>
        </div>
    </div>
    @endif
</div>

{{-- VISI MISI --}}
<div class="container profil-desa-vismis" id="visi-misi">
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
            <div data-aos="flip-up" class="visi-content" style="text-align: justify">
                {!! $visi->body !!}
            </div>
            @endif
        </div>
        <div class="col-lg-6 home-4">
            <div class="logo-x-visi">
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
            <div data-aos="flip-up" class="misi-content" style="text-align: justify">
                {!! $misi->body !!}
            </div>
            @endif
        </div>
    </div>
</div>

{{-- LETAK GEOGRAFIS --}}
<div id="geografis" class="container-fluid geografis p-0">
    <h1 data-aos="flip-up" class="text-center">Letak Geografis</h1>
    <div class="mapping">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63577.285205184926!2d119.95204529119104!3d-5.171001636111848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe9a145b79f9c9%3A0x5194792c31e69de3!2sTabbinjai%2C%20Kec.%20Tombolo%20Pao%2C%20Kabupaten%20Gowa%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1698487889961!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection
