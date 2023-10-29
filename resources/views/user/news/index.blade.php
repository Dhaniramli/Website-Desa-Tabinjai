@extends('user.layouts.main')

@section('content')
@if (!$news->count())
<div class="container no-data-1">
    <div class="no-data-2">
        <img src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
        <h5>Tidak ada data!</h5>
    </div>
</div>
@else
<div class="container berita-all-1">
    <h1 class="text-center">Berita</h1>

    <div class="row berita-all-2">
        @foreach ($news as $item)
        <div class="col-lg-4 col-md-6 mt-3">
            <div class="card berita-1">
                <div class="card-img">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="...">
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
                                {{ date('d F Y', strtotime($item->created_at)) }}
                            </div>
                        </div>
                    </div>
                    <h2>{{ $item->title }}</h2>
                    <p class="card-text">{{ $item->excerpt }}</p>
                    <a class="lengkapnya" href="/berita/{{ $item->slug }}">Baca selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

@endsection
