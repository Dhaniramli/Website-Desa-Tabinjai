<div class="modal fade" id="{{ 'editPejabatDusun' . $itemOffice->id }}" tabindex="-1"
    aria-labelledby="{{ 'editPejabatDusun' . $itemOffice->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{ 'editPejabatDusun' . $itemOffice->id }}Label">Edit Pejabat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST" action="/admin/pejabat-dusun/update/{{ $itemOffice->id }}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <input type="hidden" name="hamlet_id" value="{{ $itemOffice->hamlet_id }}">

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Dusun</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" required value="{{ old('name', $itemOffice->name) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Jabatan</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror" id="position"
                            name="position" required value="{{ old('position', $itemOffice->position) }}">
                        @error('position')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="hidden" name="oldImage" value="{{ $itemOffice->image }}">
                        <input class="form-control" type="file" id="image" name="image" @error('image') is-invalid
                            @enderror onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        @if ($itemOffice->image)
                        <img src="{{ asset('storage/' . $itemOffice->image) }}"
                            class="img-preview img-fluid mb-3 mt-3 col-sm-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 mt-3 col-sm-5">
                        @endif
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-auto" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
