@extends('user.layouts.main')

@section('content')
<div class="container show-sejarah">
    <h1 class="text-center">Sejarah Desa Tabbinjai</h1>

    <div class="card card-show-sejarah">
        <div class="text-justify" style="text-align: justify">
            {!! $sejarah->body !!}
        </div>
    </div>
</div>
@endsection