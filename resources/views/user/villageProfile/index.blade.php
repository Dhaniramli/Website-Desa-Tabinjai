@extends('user.layouts.main')

@section('content')
<div class="container-fluid profil-desa-1"
    style="background-image: url('{{ asset('images/profile-desa-image.png') }}'); background-size: cover;">
    <div class="container profil-desa-2">
        <div class="row">
            <div class="col-lg-7">
                <h1><span class="utama">Desa Tabbinjai</span>, Sebuah Desa Yang Terletak Di Sulawesi Selatan, Kab. Sinjai</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Cursus quam dictum tellus sit faucibus. Tristique aliquet et urna mattis condimentum elementum elit. Nec tellus bibendum ac pellentesque massa.</p>
            </div>
        </div>
        <div class="tombol">
            <a href="#" class="btn btn-tombol">Visi Misi</a>
            <a href="#" class="btn btn-tombol">Sejarah</a>
            <a href="#" class="btn btn-tombol">Lebih Lengkap</a>
        </div>
    </div>
</div>

{{-- SEJARAH --}}
<div class="container-fluid sejarah-1" style="background-image: url('{{ asset('images/bg-sejarah.png') }}'); background-size: cover;">
    <h1 class="text-center">Sejarah Desa Tabbinjai</h1>

    <div class="container sejarah-2">
        <div class="card card-sejarah">
            {!! substr($sejarah->body, 0, 1048) !!}
            <a href="/profil-desa/sejarah" class="selengkapnya">Lihat selengkapnya...</a>
        </div>
    </div>
</div>

{{-- VISI MISI --}}
<div class="container profil-desa-vismis">
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
@endsection
