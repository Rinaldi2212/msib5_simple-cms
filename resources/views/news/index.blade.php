@extends('layouts.app')

@section('content')
<div class="container">
    <h1>List Berita</h1>

    <ul class="list-group">
        @foreach ($news as $newsItem)
            <li class="list-group-item">
                <a href="{{ route('berita.show', $newsItem->id) }}">{{ $newsItem->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
