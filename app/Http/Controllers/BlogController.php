<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_published', true)
            ->orderByRaw('COALESCE(published_at, created_at) DESC')
            ->paginate(9); // Using pagination, assuming 9 per page is good for a 3-column grid
        
        return view('blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('is_published', true)->where('slug', $slug)->firstOrFail();
        
        return view('blog-detail', compact('blog'));
    }
}
