<x-layout>
    <!-- Page Header -->
    <section class="relative pt-32 pb-16 lg:pt-48 lg:pb-24 overflow-hidden bg-dark text-white">
        <!-- Abstract Background -->
        <div class="absolute inset-0 z-0">
             <div class="absolute inset-0 bg-gradient-to-br from-dark via-slate-900 to-black"></div>
             <!-- Grid overlay -->
             <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.05)_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]"></div>
        </div>
        
        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center relative z-10">
            <div class="inline-flex items-center px-3 py-1 rounded-full border border-cta/20 bg-cta/10 text-cta text-xs font-medium mb-6 fade-in-up">
                Our Journal
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold tracking-tight mb-6 text-balance fade-in-up delay-100">
                Insights & <span class="text-transparent bg-clip-text bg-gradient-to-r from-cta to-primary">Perspectives.</span>
            </h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto text-balance fade-in-up delay-200">
                Thoughts, stories, and ideas about design, technology, and building digital experiences.
            </p>
        </div>
    </section>

    <!-- Blog Grid -->
    <section class="py-24 bg-dark text-white relative">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                 
                @forelse($blogs as $blog)
                <!-- Blog Card -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/5] cursor-pointer shadow-2xl bg-slate-800/50">
                    @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    @else
                    <div class="absolute inset-0 w-full h-full bg-slate-800 group-hover:bg-slate-700 transition-colors duration-700"></div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 transition-opacity"></div>
                    
                    <a href="{{ route('blog.show', $blog->slug) }}" class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-x-4 group-hover:translate-x-0 z-20">
                        <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20 hover:bg-white/20 transition-colors">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 text-white"></i>
                        </div>
                    </a>

                    <div class="absolute bottom-0 left-0 p-6 w-full z-10 pointer-events-none">
                        <div class="flex items-center gap-2 mb-3 text-[10px] font-medium tracking-wider uppercase text-slate-400">
                            <span>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}</span>
                        </div>
                        <h3 class="text-xl font-serif font-bold mb-2 line-clamp-2" title="{{ $blog->title }}">{{ $blog->title }}</h3>
                        <p class="text-slate-300 text-sm line-clamp-2">
                            {{ $blog->excerpt ?? Str::limit(strip_tags($blog->content), 100) }}
                        </p>
                    </div>
                    
                    <!-- Overlay link to make the whole card clickable -->
                    <a href="{{ route('blog.show', $blog->slug) }}" class="absolute inset-0 z-0 text-transparent">Read {{ $blog->title }}</a>
                </div>
                @empty
                <div class="col-span-full text-center py-12 text-slate-400">
                    <p class="text-lg">No articles have been published yet. Check back soon!</p>
                </div>
                @endforelse

             </div>
             
             <!-- Pagination -->
             @if($blogs->hasPages())
             <div class="mt-16 flex justify-center">
                 {{ $blogs->links() }}
             </div>
             @endif
        </div>
    </section>

    <!-- Call to Action -->
     <section class="py-24 bg-primary text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M0 40V0H40" fill="none" stroke="currentColor" stroke-width="2"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-pattern)"/>
            </svg>
        </div>

        <div class="mx-auto max-w-4xl px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-serif font-bold tracking-tight mb-6">Stay Updated</h2>
            <p class="text-lg text-white/80 mb-10 max-w-2xl mx-auto">
                Join our newsletter to receive our latest articles and insights directly in your inbox.
            </p>
            <a href="{{ url('/contact') }}"
                class="inline-block bg-white text-primary px-8 py-4 rounded-lg text-base font-bold hover:bg-slate-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Subscribe to Newsletter
            </a>
        </div>
    </section>
</x-layout>
