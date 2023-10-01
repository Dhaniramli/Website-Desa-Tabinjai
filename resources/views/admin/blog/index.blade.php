@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Berita</h1>
    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="/admin/berita/create" class="btn btn-success btn-icon-split float-right">
                <span class="text">Tambah Berita</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 align-middle text-center">No</th>
                            <th class="col-5">Judul Berita</th>
                            <th class="col-3">Gambar</th>
                            <th class="col-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td class="col-1 align-middle text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td class="align-middle text-center"><img src="{{ asset('storage/' . $item->image) }}" alt="" style="width: 200px;"></td>
                            <td class="align-middle text-center">
                                <a href="/admin/berita/show/{{ $item->slug }}" class="btn btn-info">Lihat</a>
                                <a href="/admin/berita/edit/{{ $item->slug }}" class="btn btn-warning">Edit</a>
                                <a id="deleteButton" href="/admin/berita/hapus/{{ $item->slug }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>