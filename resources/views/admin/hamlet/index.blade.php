@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Dusun Desa Tabbinjai</h1>
    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="card shadow mb-4">
        <div class="card-header">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createDusun">
                Tambah Dusun
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 align-middle text-center">No</th>
                            <th class="col-5">Nama Dusun</th>
                            <th class="col-3 text-center">Data Pejabat Dusun</th>
                            <th class="col-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td class="col-1 align-middle text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td class="text-center">
                                <a href="/admin/dusun/{{ $item->id }}/data-pejabat" class="btn btn-info">Data
                                    Pejabat</a>
                            </td>
                            <td class="align-middle text-center">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#{{ 'editDusun' . $item->id }}">
                                    Edit
                                </button>
                                <a id="deleteButton" href="/admin/dusun/hapus/{{ $item->id }}"
                                    class="btn btn-danger">Hapus</a>
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

@include('admin.hamlet.create')

@foreach ($items as $item)
@include('admin.hamlet.edit')
@endforeach

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
