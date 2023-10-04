@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">

    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="row">
        <div class="col-lg-12  mx-auto my-auto">
            <div class="card shadow mb-4">
                 <form action="/admin/visi/{{ $item->id }}" method="POST">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="1">

                    <div class="card-header">
                        <h5 class="h3 text-gray-800">Edit Data Visi</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input id="body" type="hidden" name="body"
                            value="{{ old('body', $item->body ) }}">
                            <trix-editor input="body"></trix-editor>
                            @error('body')
                            <p class="text-danger">{{ $message }}</p>
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