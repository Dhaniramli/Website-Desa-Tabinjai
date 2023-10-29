@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Tambah Produk</h1>
    <div class="row">
        <div class="col-lg-8 mx-auto my-auto">

            <div class="card shadow mb-4">
                <form method="POST" action="/admin/produk-pangan" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" required value="{{ old('title') }}">
                            @error('title')
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

                        <div class="mb-3">
                            <label for="body" class="form-label">Deskripsi</label>
                            @error('body')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                            <trix-editor input="body"></trix-editor>
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

<script>
    document.addEventListener('trix-file-accept', function () {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

@endsection
