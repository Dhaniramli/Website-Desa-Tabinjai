@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800 text-center">Sejarah</h1>

    @if (session()->has('success'))
    {{-- @include('admin.layouts.partials.alertSuccess') --}}    
    <div class="alert alert-success d-flex justify-content-center" role="alert" style="width: 200px;">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-lg-12  mx-auto my-auto">
            <div class="card shadow mb-4">
                <form action="/admin/history/{{ ($items->count() ? 'update' : 'create') }}" method="POST">
                    @csrf
                    @if ($items->count())
                    @method('put')
                    @endif

                    <input type="hidden" name="id" value="1">

                    <div class="card-body">
                        <div class="mb-3">
                            @error('body')
                            {{-- <p class="text-danger">{{ $message }}</p> --}}
                            @enderror
                            <input id="body" type="hidden" name="body"
                                value="{{ old('body', ($items->count() ? $items[0]->body : '')) }}">
                            <trix-editor input="body"></trix-editor>
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
