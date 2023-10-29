@extends('user.layouts.main')

@section('content')
@if (!$tours->count())
<div class="container no-data-1">
    <div class="no-data-2">
        <img src="{{ asset('images/noData.png') }}" alt="" width="200px" height="200px">
        <h5>Tidak ada data!</h5>
    </div>
</div>
@else

<div class="container produk-desa-1">
    <h1 class="text-center">Produk Wisata</h1>

    <div class="row produk-desa-2">
        @foreach ($tours as $item)
        <div class="col-lg-4 col-md-6">
            <div class="card produk-desa-3">
                <div class="produk-img">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <div class="lokasi d-flex mt-2">
                        <div class="icon-lokasi d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                        </div>
                        <h4 class="card-subtitle">{{ $item->address }}</h4>
                    </div>
                    <h5 class="card-title">{{ Str::limit($item->title, 80, '...') }}</h5>
                    
                    <div class="card-text">
                        {!! substr(strip_tags($item->body), 0, 80)
                        !!}{{ strlen(strip_tags($item->body)) > 80 ? '...' : '' }}
                    </div>
                    <a href="/produk-wisata/{{ $item->id }}" class="selengkapnya">Baca selengkapnya...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="tombol-paging d-flex justify-content-center mt-5 mb-5">
        {{ $tours->links('pagination::bootstrap-4') }}
    </div>
</div>
@endif
@endsection
