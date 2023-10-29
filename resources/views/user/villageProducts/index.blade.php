@extends('user.layouts.main')

@section('content')
<div class="container produk-desa-1">
    <h1 class="text-center">Produk Desa</h1>

    <div class="row produk-desa-2">
        @foreach ($produks as $item)
        <div class="col-lg-4 col-md-6">
            <div class="card produk-desa-3">
                <div class="produk-img">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ Str::limit($item->title, 80, '...') }}</h5>
                    <div class="card-text">
                        {!! substr(strip_tags($item->body), 0, 80)
                        !!}{{ strlen(strip_tags($item->body)) > 80 ? '...' : '' }}
                    </div>
                    <a href="/produk-desa/{{ $item->id }}" class="selengkapnya">Baca selengkapnya...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="tombol-paging d-flex justify-content-center mt-5 mb-5">
        {{ $produks->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
