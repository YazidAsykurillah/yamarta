<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = \App\Models\Portfolio::where('is_visible', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();
            
        // Extract unique tags for filtering
        $allTags = $portfolios->pluck('tags')->flatten()->filter()->unique()->values();
        
        return view('portfolio', compact('portfolios', 'allTags'));
    }

    public function show($slug)
    {
        $portfolio = \App\Models\Portfolio::where('is_visible', true)->where('slug', $slug)->firstOrFail();
        return view('portfolio-detail', compact('portfolio'));
    }
}
