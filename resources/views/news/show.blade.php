@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Berita</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $news->title }}</h5>
            <p class="card-text">{{ $news->content }}</p>
            <a href="{{ route('berita.show', ['id' => $news->id]) }}">Lihat Detail</a>

        </div>
    </div>
</div>
@endsection
