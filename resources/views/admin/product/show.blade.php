@extends('admin.layouts.main')

@section('content')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8  mx-auto my-auto">
            <div class="card shadow">
                <div class="card-body">

                    <h2 class="mb-3">{{ $item->title }}</h2>
                    <a href="{{ URL::previous() }}" class="btn btn-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Kembali</a>
                    <a href="/admin/berita/edit/{{ $item->slug }}" class="btn btn-warning"><i class="fa fa-keyboard"
                            aria-hidden="true"></i> Edit</a>
                    <a href="/admin/berita/hapus/{{ $item->slug }}" class="btn btn-danger"><i class="fa fa-trash"
                            aria-hidden="true"></i> Hapus</a>

                    @if ($item->image)
                    {{-- <div class="" style="max-height: 350px; overflow:hidden;"> --}}
                    <div class="" style="width: 100%;">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid mt-3 w-100">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/1200x400?noimage" alt="" class="img-fluid mt-3">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $item->body !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
