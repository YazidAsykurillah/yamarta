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
                Selected Work
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold tracking-tight mb-6 text-balance fade-in-up delay-100">
                Digital Products That <span class="text-transparent bg-clip-text bg-gradient-to-r from-cta to-primary">Perform.</span>
            </h1>
            <p class="mt-4 text-lg text-slate-400 max-w-2xl mx-auto text-balance fade-in-up delay-200">
                A showcase of our best work. We blend precise engineering with stunning design to deliver digital experiences that captivate and convert.
            </p>
        </div>
    </section>

    <!-- Portfolio Grid & Filters -->
    <section class="py-24 bg-dark text-white relative" id="portfolio-section">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            
            <!-- Filter Options -->
            @if(isset($allTags) && $allTags->count() > 0)
            <div class="flex flex-wrap justify-center gap-4 mb-16 fade-in-up delay-300">
                <button class="portfolio-filter-btn active px-6 py-2 rounded-full border border-cta/30 bg-cta/10 text-white font-medium hover:bg-cta hover:border-cta transition-all duration-300" data-filter="all">
                    All Projects
                </button>
                @foreach($allTags as $tag)
                <button class="portfolio-filter-btn px-6 py-2 rounded-full border border-white/10 bg-white/5 text-white/70 font-medium hover:bg-white/10 hover:text-white transition-all duration-300" data-filter="{{ Str::slug($tag) }}">
                    {{ $tag }}
                </button>
                @endforeach
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 transition-all duration-500" id="portfolio-grid">
                 
                @forelse($portfolios as $portfolio)
                <!-- Project -->
                @php
                    $itemTags = $portfolio->tags ? collect($portfolio->tags)->map(fn($tag) => Str::slug($tag))->implode(' ') : '';
                @endphp
                <div class="portfolio-item group relative overflow-hidden rounded-2xl aspect-[4/3] cursor-pointer shadow-2xl transition-all duration-500 ease-in-out transform scale-100 opacity-100" data-tags="{{ $itemTags }}">
                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 transition-opacity"></div>
                    
                    <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="absolute top-6 right-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-x-4 group-hover:translate-x-0 z-20">
                        <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center border border-white/20 hover:bg-white/20 transition-colors">
                            <i data-lucide="arrow-up-right" class="w-4 h-4 text-white"></i>
                        </div>
                    </a>

                    <div class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 w-full z-10 pointer-events-none">
                        @if($portfolio->tags)
                        <div class="flex flex-wrap gap-2 mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            @foreach($portfolio->tags as $tag)
                            <span class="px-2 py-1 rounded-md bg-white/10 backdrop-blur-sm border border-white/10 text-[10px] font-medium tracking-wider uppercase text-white">{{ $tag }}</span>
                            @endforeach
                        </div>
                        @endif
                        <h3 class="text-2xl md:text-3xl font-serif font-bold mb-2">{{ $portfolio->title }}</h3>
                        <p class="text-slate-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-200 line-clamp-2">
                            {{ $portfolio->description }}
                        </p>
                    </div>
                    
                    <!-- Overlay link to make the whole card clickable -->
                    <a href="{{ route('portfolio.show', $portfolio->slug) }}" class="absolute inset-0 z-0"></a>
                </div>
                @empty
                <div class="col-span-full text-center py-12 text-slate-400">
                    <p class="text-lg">Projects are currently being updated. Check back soon!</p>
                </div>
                @endforelse

             </div>
        </div>
    </section>

    <!-- Project Inquiry CTA -->
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
            <h2 class="text-3xl md:text-5xl font-serif font-bold tracking-tight mb-6">Have a project in mind?</h2>
            <p class="text-lg text-white/80 mb-10 max-w-2xl mx-auto">
                We're currently accepting new projects. Let's discuss your objectives and see how our expertise can accelerate your business.
            </p>
            <a href="{{ url('/contact') }}"
                class="inline-block bg-white text-primary px-8 py-4 rounded-lg text-base font-bold hover:bg-slate-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Start a Conversation
            </a>
        </div>
    </section>
    </section>

    <!-- Vanilla JS Portfolio Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.portfolio-filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => {
                        b.classList.remove('active', 'bg-cta', 'border-cta', 'text-white');
                        b.classList.add('border-white/10', 'bg-white/5', 'text-white/70');
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('active', 'bg-cta', 'border-cta', 'text-white');
                    this.classList.remove('border-white/10', 'bg-white/5', 'text-white/70');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    portfolioItems.forEach(item => {
                        // First hide item
                        item.classList.remove('scale-100', 'opacity-100');
                        item.classList.add('scale-95', 'opacity-0');
                        
                        setTimeout(() => {
                            if (filterValue === 'all' || item.getAttribute('data-tags').includes(filterValue)) {
                                item.style.display = 'block';
                                // Slight delay to allow display:block to apply before animating in
                                setTimeout(() => {
                                    item.classList.remove('scale-95', 'opacity-0');
                                    item.classList.add('scale-100', 'opacity-100');
                                }, 50);
                            } else {
                                item.style.display = 'none';
                            }
                        }, 300); // 300ms matches the transition duration
                    });
                });
            });
        });
    </script>
</x-layout>
