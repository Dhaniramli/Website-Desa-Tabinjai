@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Misi</h1>

    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="row">
        <div class="col-lg-12  mx-auto my-auto">
            <div class="card shadow mb-4">
              

                    <div class="card-body" style="min-height: 300px">
                        @if ($item)
                        <div class="teks mt-3">
                            {!! $item->body !!}
                        </div>
                        @else
                        <div class="d-flex justify-content-center align-items-center" style="min-height: 300px;">
                            <p class="text-center">Belum ada data!</p>
                        </div>
                        
                        @endif
                    </div>
                    <div class="card-footer d-flex">
                        @if ($item)
                        <a href="/admin/mission/{{ $item->id }}/edit" class="btn btn-success ml-auto">Edit</a>
                        <a id="deleteButton" href="/admin/mission/delete/{{ $item->id }}" class="btn btn-danger ml-3">Hapus</a>
                        @else
                        <a href="/admin/mission/create" class="btn btn-success ml-auto">Tambah</a>
                        @endif
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>