@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Edit Berita</h1>
    <div class="row">
        <div class="col-lg-8 mx-auto my-auto">
            <div class="card shadow mb-4">
                <form method="POST" action="/admin/berita/update/{{ $blog->slug }}" enctype="multipart/form-data">
                <div class="card-body">
                        @csrf
                        @method('put')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Berita</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" required value="{{ old('title', $blog->title) }}">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug', $blog->slug) }}" readonly>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                            @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}"
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

                        <div class="mb-3">
                            <label for="body" class="form-label">Isi Berita</label>
                            @error('body')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input id="body" type="hidden" name="body" value="{{ old('body', $blog->body) }}">
                            <trix-editor input="body"></trix-editor>
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

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/berita/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

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
