@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Postingan</h1>
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
