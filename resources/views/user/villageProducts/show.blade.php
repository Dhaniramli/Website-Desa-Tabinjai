@extends('user.layouts.main')

@section('content')
<div class="container show-berita">
    <div class="row">
        <div class="col-lg-9 mx-auto my-auto">
            <div data-aos="zoom-in" class="card show-berita-1 border-0">
                <div class="title-show-berita">
                    <h2>{{ $produk->title }}</h2>
                </div>
                <div class="show-img">
                    <img src="{{ asset('storage/' . $produk->image) }}" alt="...">
                </div>
                <div class="card-body p-2" style="text-align: justify">
                    <p class="card-text">{!! $produk->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
