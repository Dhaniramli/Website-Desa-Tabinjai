@extends('admin.layouts.main')

@section('content')
<div class="container-fluid content-total-population">

    <h1 class="h3 mb-2 text-gray-800 text-center">Jumlah Penduduk Desa Tabbinjai</h1>
    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="card shadow mb-4">
        <div class="card-header">
            @if(isset($items))
            <a id="deleteButton" href="/admin/jumlah-penduduk/hapus/{{ $items->id }}"
                class="btn btn-danger mr-2">Hapus</a>
            <a href="/admin/jumlah-penduduk/{{ $items->id }}/edit" class="btn btn-success btn-icon-split">
                <span class="text">Edit</span>
            </a>
            @else
            <a href="/admin/jumlah-penduduk/create" class="btn btn-success btn-icon-split">
                <span class="text">Tambah</span>
            </a>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1 align-middle text-center">No</th>
                            <th class="col-3 text-center">Jenis Kelamin</th>
                            <th class="col-3 text-center">Jumlah</th>
                            <th class="col-3 text-center">Persentase &#40;%&#41;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Laki - Laki</td>
                            <td class="text-center">
                                @if(isset($items))
                                {{ number_format($items->man, 0, ',', '.') }}
                                @else
                                No data
                                @endif
                            </td>
                            <td class="text-center">
                                @if(isset($items))
                                {{ number_format(($items->man / $items->total) * 100, 1)}} %
                                @else
                                No data
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Perempuan</td>
                            <td class="text-center">
                                @if(isset($items))
                                {{ number_format($items->woman, 0, ',', '.') }}
                                @else
                                No data
                                @endif
                            </td>
                            <td class="text-center">
                                @if(isset($items))
                                {{ number_format(($items->woman / $items->total) * 100, 1)}} %
                                @else
                                No data
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Total</td>
                            <td class="text-center">
                                @if(isset($items))
                                {{ number_format($items->total, 0, ',', '.') }}
                                @else
                                No data
                                @endif
                            </td>
                            <td class="text-center">
                                @if(isset($items))
                                100 %
                                @else
                                No data
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
