<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $portfolios = \App\Models\Portfolio::where('is_visible', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->take(4) // Show up to 4 portfolios on the home page
            ->get();
            
        return view('welcome', compact('portfolios'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
