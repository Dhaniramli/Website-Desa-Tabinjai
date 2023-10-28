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
            <a href="#visi-misi" class="btn btn-tombol">Visi Misi</a>
            <a href="#sejarah" class="btn btn-tombol">Sejarah</a>
            <a href="#geografis" class="btn btn-tombol">Letak Geografis</a>
        </div>
    </div>
</div>

{{-- SEJARAH --}}
<div id="sejarah" class="container-fluid sejarah-1" style="background-image: url('{{ asset('images/bg-sejarah.png') }}'); background-size: cover;">
    <h1 class="text-center">Sejarah Desa Tabbinjai</h1>

    <div class="container sejarah-2">
        <div class="card shadow card-sejarah">
            {!! substr($sejarah->body, 0, 1048) !!}
            <a href="/profil-desa/sejarah" class="selengkapnya">Lihat selengkapnya...</a>
        </div>
    </div>
</div>

{{-- VISI MISI --}}
<div class="container profil-desa-vismis" id="visi-misi">
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

{{-- LETAK GEOGRAFIS --}}
<div id="geografis" class="container-fluid geografis p-0">
    <h1 class="text-center">Letak Geografis</h1>
    <div class="mapping">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63577.285205184926!2d119.95204529119104!3d-5.171001636111848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe9a145b79f9c9%3A0x5194792c31e69de3!2sTabbinjai%2C%20Kec.%20Tombolo%20Pao%2C%20Kabupaten%20Gowa%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1698487889961!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection
