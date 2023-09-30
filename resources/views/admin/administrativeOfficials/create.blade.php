@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Data Pejabat</h1>
    <div class="row">
        <div class="col-lg-8 mx-auto my-auto">

            <div class="card shadow mb-4">
                <form method="POST" action="/admin/pejabat-administrasi" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
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

                        {{-- <div class="mb-3">
                            <label for="position" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror" id="position"
                                name="position" required value="{{ old('position') }}">
                        @error('position')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    <div class="mb-3">
                        <label for="position" class="form-label">Jabatan</label>
                        <select class="form-select @error('position') is-invalid @enderror" id="position"
                            name="position" required>
                            <option value="" selected disabled>Pilih Jabatan</option>
                            <option value="Kepala Desa" {{ old('position') == 'Kepala Desa' ? 'selected' : '' }}>Kepala Desa
                            </option>
                            <option value="Sekretaris Desa" {{ old('position') == 'Sekretaris Desa' ? 'selected' : '' }}>Sekretaris Desa
                            </option>
                            <option value="Kasi Pemerintahan" {{ old('position') == 'Kasi Pemerintahan' ? 'selected' : '' }}>Kasi Pemerintahan
                            </option>
                            <option value="Kasi Pembangunan" {{ old('position') == 'Kasi Pembangunan' ? 'selected' : '' }}>Kasi Pembangunan
                            </option>
                            <option value="Kasi Kesra" {{ old('position') == 'Kasi Kesra' ? 'selected' : '' }}>Kasi Kesra
                            </option>
                            <option value="Kaur Administrasi" {{ old('position') == 'Kaur Administrasi' ? 'selected' : '' }}>Kaur Administrasi
                            </option>
                            <option value="Kaur Umum" {{ old('position') == 'Kaur Umum' ? 'selected' : '' }}>Kaur Umum
                            </option>
                            <option value="Kaur Keuangan" {{ old('position') == 'Kaur Keuangan' ? 'selected' : '' }}>Kaur Keuangan
                            </option>
                        </select>
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
                <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
            </div>
            </form>
        </div>

    </div>
</div>
</div>

@endsection
