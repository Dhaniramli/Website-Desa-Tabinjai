@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800 text-center">Jumlah Penduduk Menurut Jenis Kelamin Desa Tabbinjai</h1>
    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="/admin/jenis-kelamin/create" class="btn btn-success btn-icon-split">
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 align-middle text-center">No</th>
                            <th class="col-4">Jenis Kelamin</th>
                            <th class="col-3">Jumlah</th>
                            <th class="col-2">Persentase &#40;%&#41;</th>
                            <th class="col-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td class="col-1 align-middle text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->total }}</td>
                            <td>{{ number_format(($item->total / $totalAll) * 100, 1)}} &#40;%&#41;</td>
                            <td class="align-middle text-center">
                                <a href="/admin/jenis-kelamin/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <a id="deleteButton" href="/admin/jenis-kelamin/hapus/{{ $item->id }}"
                                    class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td class="text-center">Total</td>
                            <td>{{ $totalAll }}</td>
                            <td>
                                @if ($totalAll > 0)
                                100 &#40;%&#41;
                                @else
                                0
                                @endif
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
