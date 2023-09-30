@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Anggota Badan Permusyawaratan Desa Tabbinjai</h1>
    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="/admin/badan-permusyawaratan/create" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                </span>
                <span class="text">Tambah Pejabat</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 align-middle text-center">No</th>
                            <th class="col-4">Nama</th>
                            <th class="col-3">Jabatan</th>
                            <th class="col-2">Gambar</th>
                            <th class="col-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td class="col-1 align-middle text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->position }}</td>
                            <td class="align-middle text-center"><img src="{{ asset('storage/' . $item->image) }}" alt="" style="width: 100px;"></td>
                            <td class="align-middle text-center">
                                <a href="/admin/badan-permusyawaratan/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                <a id="deleteButton" href="/admin/badan-permusyawaratan/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a>
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