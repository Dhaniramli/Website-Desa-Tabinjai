@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Pejabat Dusun {{ $item->name }}</h1>
    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="/admin/dusun" class="btn btn-secondary">Kembali</a>
            <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#createPejabatDusun">
                Tambah Pejabat
            </button>
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
                        @foreach ($itemOffices as $itemOffice)
                        <tr>
                            <td class="col-1 align-middle text-center">{{ $loop->iteration }}</td>
                            <td>{{ $itemOffice->name }}</td>
                            <td>{{ $itemOffice->position }}</td>
                            <td class="align-middle text-center"><img src="{{ asset('storage/' . $itemOffice->image) }}" alt="" style="width: 100px;"></td>
                            <td class="align-middle text-center">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#{{ 'editPejabatDusun' . $itemOffice->id }}">
                                    Edit
                                </button>
                                <a id="deleteButton" href="/admin/pejabat-dusun/hapus/{{ $itemOffice->id }}" class="btn btn-danger">Hapus</a>
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

@include('admin.hamletOffice.create')

@foreach ($itemOffices as $itemOffice)
@include('admin.hamletOffice.edit')
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>