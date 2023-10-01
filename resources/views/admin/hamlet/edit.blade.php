<div class="modal fade" id="{{ 'editDusun' . $item->id }}" tabindex="-1"
    aria-labelledby="{{ 'editDusun' . $item->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{ 'editDusun' . $item->id }}Label">Edit Dusun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST" action="/admin/dusun/{{ $item->id }}">
                @csrf
                @method('put')

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Dusun</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" required value="{{ old('name', $item->name) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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
