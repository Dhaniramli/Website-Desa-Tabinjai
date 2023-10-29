@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="row">
        <div class="col-lg-6  mx-auto my-auto">
            <div class="card shadow mb-4">
                 <form action="/admin/nomor-kontak" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="1">

                    <div class="card-header">
                        <h5 class="h3 text-gray-800">Tambah Nomor Kontak</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="number" class="form-label">Nomor Kontak</label>
                            <input type="number" class="form-control @error('number') is-invalid @enderror" id="number"
                                name="number" required value="{{ old('number') }}">
                            @error('number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                    </div>
                 </form>
            </div>
        </div>

    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>