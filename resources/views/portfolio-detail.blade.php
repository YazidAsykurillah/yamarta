<x-layout 
    :customTitle="$portfolio->title" 
    :customDescription="Str::limit(strip_tags($portfolio->description), 160)"
    :customOgImage="$portfolio->images->isNotEmpty() ? asset('storage/' . $portfolio->images->first()->image) : null"
>
    <!-- Push Swiper CSS to head if push stacks were used, alternatively add locally -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <style>
        .swiper-button-next,
        .swiper-button-prev {
            color: white !important;
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(8px) !important;
            border-radius: 50% !important;
            width: 48px !important;
            height: 48px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            margin-top: -24px !important;
        }
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px !important;
            font-weight: 800 !important;
            line-height: 1 !important;
            margin: 0 !important;
            padding: 0 !important;
            position: relative !important;
            top: auto !important;
            left: auto !important;
            transform: none !important;
        }
        .swiper-pagination-bullet {
            background: rgba(255, 255, 255, 0.5);
            opacity: 1;
        }
        .swiper-pagination-bullet-active {
            background: white;
            width: 24px;
            border-radius: 4px;
        }
    </style>
    <!-- Project Hero -->
    <section class="relative pt-32 pb-8 lg:pt-48 lg:pb-12 overflow-hidden bg-dark text-white min-h-[40vh] flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
             @if($portfolio->images->isNotEmpty())
             <img src="{{ asset('storage/' . $portfolio->images->first()->image) }}" alt="{{ $portfolio->title }}" class="w-full h-full object-cover opacity-20">
             @endif
             <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/80 to-transparent"></div>
        </div>
        
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 w-full">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center text-sm font-medium text-slate-400 hover:text-white mb-8 transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
                Back to Selected Work
            </a>
            
            @if($portfolio->tags)
            <div class="flex flex-wrap gap-3 mb-6 fade-in-up delay-100">
                @foreach($portfolio->tags as $tag)
                <span class="px-3 py-1 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-xs font-semibold tracking-wide uppercase text-white">{{ $tag }}</span>
                @endforeach
            </div>
            @endif
            
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold tracking-tight mb-6 text-balance fade-in-up">
                {{ $portfolio->title }}
            </h1>
        </div>
    </section>

    <!-- Project Details -->
    <section class="pt-8 pb-16 md:pt-12 md:pb-24 bg-dark text-white">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24">
                <!-- Main Content -->
                <div class="lg:col-span-8 space-y-8 fade-in-up delay-200">
                    <div class="prose prose-invert prose-lg max-w-none">
                        <p class="text-slate-300 leading-relaxed text-lg md:text-xl">
                            {{ $portfolio->description }}
                        </p>
                    </div>
                    
                    @if($portfolio->images->isNotEmpty())
                    <div class="mt-12 w-full fade-in-up delay-400">
                        @if($portfolio->images->count() > 1)
                            <!-- Swiper for Multiple Images -->
                            <div class="swiper portfolioSwiper rounded-2xl overflow-hidden shadow-2xl bg-white/5 border border-white/10 group">
                                <div class="swiper-wrapper">
                                    @foreach($portfolio->images as $img)
                                    <div class="swiper-slide list-none p-2 md:p-4 pb-12 w-full">
                                        <div class="aspect-video w-full rounded-xl overflow-hidden relative bg-black/20">
                                            <img src="{{ asset('storage/' . $img->image) }}" alt="{{ $portfolio->title }}" class="absolute inset-0 w-full h-full object-cover">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Navigation arrows -->
                                <div class="swiper-button-next opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="swiper-button-prev opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <!-- Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        @else
                            <!-- Single Image Fallback -->
                            <div class="rounded-2xl overflow-hidden shadow-2xl bg-white/5 p-2 md:p-4 border border-white/10">
                                <div class="aspect-video w-full rounded-xl overflow-hidden relative bg-black/20">
                                    <img src="{{ asset('storage/' . $portfolio->images->first()->image) }}" alt="{{ $portfolio->title }}" class="absolute inset-0 w-full h-full object-cover">
                                </div>
                            </div>
                        @endif
                    </div>
                    @endif
                </div>
                
                <!-- Sidebar -->
                <div class="lg:col-span-4 fade-in-up delay-300">
                    <div class="bg-white/5 border border-white/10 p-8 rounded-2xl backdrop-blur-sm sticky top-32">
                        <h3 class="text-xl font-bold font-serif mb-6 text-white text-balance">Project Details</h3>
                        
                        <div class="space-y-6">
                            @if($portfolio->tags)
                            <div>
                                <p class="text-sm text-slate-400 mb-2">Services & Technologies</p>
                                <div class="flex flex-wrap gap-2 text-white">
                                    @foreach($portfolio->tags as $tag)
                                    <span class="text-sm font-medium">{{ $tag }}</span>{{ !$loop->last ? ', ' : '' }}
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            
                            @if($portfolio->external_link)
                            <div class="pt-6 border-t border-white/10">
                                <a href="{{ $portfolio->external_link }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full bg-cta hover:bg-cta/90 text-dark px-6 py-4 rounded-lg font-bold transition-all duration-300 transform hover:-translate-y-1">
                                    Visit Live Project
                                    <i data-lucide="external-link" class="w-4 h-4 ml-2"></i>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
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
            <h2 class="text-3xl md:text-5xl font-serif font-bold tracking-tight mb-6 text-white text-balance">Inspired by this project?</h2>
            <p class="text-lg text-white/80 mb-10 max-w-2xl mx-auto">
                Let's discuss how we can bring similar success to your business. We're ready to start building.
            </p>
            <a href="{{ url('/contact') }}"
                class="inline-block bg-white text-primary px-8 py-4 rounded-lg text-base font-bold hover:bg-slate-100 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                Start Your Project
            </a>
        </div>
    </section>
    </section>

    <!-- Swiper JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if(document.querySelector('.portfolioSwiper')) {
                const swiper = new Swiper('.portfolioSwiper', {
                    loop: true,
                    spaceBetween: 20,
                    centeredSlides: true,
                    grabCursor: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }
        });
    </script>
</x-layout>
