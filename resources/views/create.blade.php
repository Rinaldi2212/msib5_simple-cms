@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($post) ? 'Edit Post' : 'Create Post' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($post) ? route('posts.update', $post) : route('posts.store') }}">
                        @csrf
                        @if (isset($post))
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ isset($post) ? $post->title : old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" name="content" class="form-control" required>{{ isset($post) ? $post->content : old('content') }}</textarea>
                        </div>

                        <!-- Add more fields as needed -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ isset($post) ? 'Update' : 'Create' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
