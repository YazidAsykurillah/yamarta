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

    public function submitContact(Request $request)
    {
        // Honeypot check: if the hidden field is filled, it's likely a bot.
        // We pretend the submission was successful to not give them a clue.
        if (!empty($request->input('website_url'))) {
            return redirect()->back()->with('success', 'Your message has been sent successfully. We will get back to you shortly!');
        }

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\Message::create($validated);

        return redirect()->back()->with('success', 'Your message has been sent successfully. We will get back to you shortly!');
    }
}
