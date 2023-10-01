@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Data Pejabat</h1>
    <div class="row">
        <div class="col-lg-8 mx-auto my-auto">

            <div class="card shadow mb-4">
                <form method="POST" action="/admin/pejabat-dusun/store" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="hamlet_id" value="{{ $item->id }}">

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" required value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror"
                                id="position" name="position" required value="{{ old('position') }}">
                            @error('position')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input class="form-control" type="file" id="image" name="image" @error('image') is-invalid
                                @enderror onchange="previewImage()">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{ URL::previous() }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
