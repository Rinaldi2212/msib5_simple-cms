<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        Category::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        return redirect('/categories');
    }

    // Tambahkan method edit, update, dan destroy sesuai kebutuhan.
}
