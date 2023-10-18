@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Berita Baru</h1>
        <form method="POST" action="{{ route('berita.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Isi Berita</label>
                <textarea name="content" id="content" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
@endsection
