<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;



class NewsController extends Controller
{
    // Metode untuk menampilkan tampilan berita
    public function index()
    {
        // Anda dapat mengganti ini dengan logika untuk mengambil data berita dari database
        $news = News::all(); // Gantilah 'News' dengan model yang sesuai

        return view('news.index', compact('news'));
    }

    // Metode untuk menampilkan tampilan detail berita
    public function show($id)
    {
       $news = News::find($id);

       if (!$news) {
           abort(404, 'Berita tidak ditemukan');
       }

       return view('news.show', compact('news'));
    }


    public function create()
    {
    return view('news.create');
    }


    public function store(Request $request)
    {
    // Validasi data input
    $validatedData = $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    // Simpan data berita ke database
    $news = new News();
    $news->title = $validatedData['title'];
    $news->content = $validatedData['content'];
    $news->save();

    return redirect()->route('berita.index');
    }



}
