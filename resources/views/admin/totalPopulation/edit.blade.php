@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="row">
        <div class="col-lg-6  mx-auto my-auto">
            <div class="card shadow mb-4">
                <form action="/admin/jumlah-penduduk/{{ $items->id }}" method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="1">

                    <div class="card-header">
                        <h5 class="h3 text-gray-800">Edit Jumlah Penduduk</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="man" class="form-label">Laki - Laki</label>
                            <input type="number" class="form-control @error('man') is-invalid @enderror" id="man"
                                name="man" required value="{{ old('man', $items->man) }}">
                            @error('man')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="woman" class="form-label">Perempuan</label>
                            <input type="number" class="form-control @error('woman') is-invalid @enderror" id="woman"
                                name="woman" required value="{{ old('woman', $items->woman) }}">
                            @error('woman')
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