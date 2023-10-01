@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    @if (session()->has('success'))
    @include('admin.layouts.partials.alertSuccess')
    @endif

    <div class="row">
        <div class="col-lg-6  mx-auto my-auto">
            <div class="card shadow mb-4">
                <div class="card-header text-center">
                    <h4>Visi</h4>
                </div>
                <form action="/admin/vission/{{ ($items->count() ? 'update' : 'create') }}" method="POST">
                    @csrf
                    @if ($items->count())
                    @method('put')
                    @endif

                    <input type="hidden" name="id" value="1">

                    <div class="card-body">
                        <div class="mb-3">
                            @error('vission')
                            {{-- <p class="text-danger">{{ $message }}</p> --}}
                            @enderror
                            <input id="vission" type="hidden" name="vission"
                                value="{{ old('vission', ($items->count() ? $items[0]->vission : '')) }}">
                            <trix-editor input="vission"></trix-editor>
                        </div>
                    </div>
                    <div class="card-footer d-flex">
                        <button type="submit" class="btn btn-success ml-auto">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header text-center">
                    <h4>Misi</h4>
                </div>
                <form action="/admin/mission/{{ ($items->count() ? 'update' : 'create') }}" method="POST">
                    @csrf
                    @if ($items->count())
                    @method('put')
                    @endif

                    <input type="hidden" name="id" value="1">

                    <div class="card-body">
                        <div class="mb-3">
                            @error('mission')
                            {{-- <p class="text-danger">{{ $message }}</p> --}}
                            @enderror
                            <input id="mission" type="hidden" name="mission"
                                value="{{ old('mission', ($items->count() ? $items[0]->mission : '')) }}">
                            <trix-editor input="mission"></trix-editor>
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