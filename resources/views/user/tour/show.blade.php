@extends('user.layouts.main')

@section('content')
<div class="container show-berita show-wisata">
    <div class="row">
        <div class="col-lg-9 mx-auto my-auto">
            <div data-aos="zoom-in" class="card show-berita-1 border-0">
                <div class="title-show-berita">
                    <h2>{{ $tours->title }}</h2>
                </div>
                <div class="lokasi d-flex mt-2 align-items-center">
                    <div class="icon-lokasi d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </div>
                    <h4 class="card-subtitle">{{ $tours->address }}</h4>
                </div>
                <div class="show-img">
                    <img src="{{ asset('storage/' . $tours->image) }}" alt="...">
                </div>
                <div class="card-body p-2" style="text-align: justify">
                    <p class="card-text">{!! $tours->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection