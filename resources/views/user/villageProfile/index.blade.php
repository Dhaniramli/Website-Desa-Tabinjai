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
@endsection
