@extends('user.layouts.main')

@section('content')
<div class="container show-berita">
    <div class="row">
        <div class="col-lg-9 mx-auto my-auto">
            <div data-aos="zoom-in" class="card show-berita-1 border-0">
                <div class="title-show-berita">
                    <h2>{{ $berita->title }}</h2>
                </div>
                <div class="title-show-berita-2 d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar4" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                    </svg>
                    <div class="date">
                        {{ date('d F Y', strtotime($berita->created_at)) }}
                    </div>
                </div>
                <div class="show-img">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="...">
                </div>
                <div class="card-body p-2" style="text-align: justify">
                    <p class="card-text" >{!! $berita->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection