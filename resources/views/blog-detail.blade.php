<x-layout 
    :customTitle="$blog->title . ' | Yamarta'" 
    :customDescription="Str::limit(strip_tags($blog->excerpt ?? $blog->content), 160)"
    :customOgImage="$blog->image ? asset('storage/' . $blog->image) : null"
>
    <!-- Blog Hero -->
    <section class="relative pt-32 pb-16 lg:pt-48 lg:pb-24 overflow-hidden bg-dark text-white min-h-[60vh] flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
             @if($blog->image)
             <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover opacity-20">
             @else
             <div class="absolute inset-0 bg-slate-900"></div>
             @endif
             <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/80 to-transparent"></div>
        </div>
        
        <div class="mx-auto max-w-4xl px-6 lg:px-8 relative z-10 w-full text-center">
            <div class="mb-8">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center text-sm font-medium text-slate-400 hover:text-white transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
                    Back to Journal
                </a>
            </div>
            
            <div class="inline-flex items-center px-3 py-1 rounded-full border border-cta/20 bg-cta/10 text-cta text-xs font-medium mb-6 fade-in-up">
                {{ $blog->published_at ? $blog->published_at->format('F d, Y') : $blog->created_at->format('F d, Y') }}
            </div>
            
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-serif font-bold tracking-tight mb-8 text-balance fade-in-up delay-100">
                {{ $blog->title }}
            </h1>
            
            @if($blog->excerpt)
            <p class="text-xl text-slate-300 max-w-3xl mx-auto text-balance fade-in-up delay-200">
                {{ $blog->excerpt }}
            </p>
            @endif
        </div>
    </section>

    <!-- Blog Content -->
    <section class="py-16 md:py-24 bg-dark text-white">
        <div class="mx-auto max-w-3xl px-6 lg:px-8">
            <div class="prose prose-invert prose-lg max-w-none fade-in-up delay-300 prose-a:text-cta hover:prose-a:text-cta/80 prose-img:rounded-xl">
                {!! $blog->content !!}
            </div>
            
            <div class="mt-16 pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="text-slate-400 text-sm">
                    Published on {{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}
                </div>
                
                <!-- Simple Share Buttons -->
                <div class="flex items-center gap-4">
                    <span class="text-sm text-slate-400 font-medium">Share:</span>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->title) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-white/10 transition-colors text-slate-300 hover:text-white">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path></svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($blog->title) }}" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-white/10 transition-colors text-slate-300 hover:text-white">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter CTA -->
     <section class="py-24 bg-primary text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
             <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
        </div>

        <div class="mx-auto max-w-4xl px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-serif font-bold tracking-tight mb-6">Enjoyed this article?</h2>
            <p class="text-lg text-white/80 mb-10 max-w-2xl mx-auto">
                Subscribe to our newsletter for more insights on design, digital products, and technology.
            </p>
            <a href="{{ url('/contact') }}"
                class="inline-block bg-white text-primary px-8 py-4 rounded-lg text-base font-bold hover:bg-slate-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Subscribe Now
            </a>
        </div>
    </section>
</x-layout>
