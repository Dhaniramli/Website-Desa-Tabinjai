@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="row">
        <div class="col-lg-6  mx-auto my-auto">
            <div class="card shadow mb-4">
                <form action="/admin/pekerjaan/{{ $item->id }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="card-header">
                        <h5 class="h3 text-gray-800">Edit Jumlah Penduduk</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="work" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control @error('work') is-invalid @enderror" id="work"
                                name="work" required value="{{ old('work', $item->work) }}">
                            @error('work')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="total" class="form-label">Jumlah</label>
                            <input type="number" class="form-control @error('total') is-invalid @enderror" id="total"
                                name="total" required value="{{ old('total', $item->total) }}">
                            @error('total')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="{{ URL::previous() }}" class="btn btn-danger mr-2">Batal</a>
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                    </div>
                 </form>
            </div>
        </div>

    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>