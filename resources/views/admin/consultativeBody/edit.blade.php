@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Edit Data Pejabat</h1>
    <div class="row">
        <div class="col-lg-8 mx-auto my-auto">
            <div class="card shadow mb-4">
                <form method="POST" action="/admin/badan-permusyawaratan/{{ $item->id }}" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" required value="{{ old('name', $item->name) }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label for="position" class="form-label">Jabatan</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror" id="position"
                                name="position" required value="{{ old('position', $item->position) }}">
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
                            <option value="Ketua"
                                {{ old('position', $item->position) == 'Ketua' ? 'selected' : '' }}>Ketua
                            </option>
                            <option value="Wakil Ketua"
                                {{ old('position', $item->position) == 'Wakil Ketua' ? 'selected' : '' }}>Wakil Ketua
                            </option>
                            <option value="Sekretaris"
                                {{ old('position', $item->position) == 'Sekretaris' ? 'selected' : '' }}>Sekretaris
                            </option>
                            <option value="Anggota"
                                {{ old('position', $item->position) == 'Anggota' ? 'selected' : '' }}>Anggota
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
                        <input type="hidden" name="oldImage" value="{{ $item->image }}">
                        @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}"
                            class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
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
