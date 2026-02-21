@props([
    'customTitle' => null,
    'customDescription' => null,
    'customKeywords' => null,
    'customOgImage' => null,
])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $seo = \App\Models\SeoSetting::where('route_name', Route::currentRouteName())->first();
        $title = $customTitle ?: ($seo?->title ?: 'Yamarta | Strategic Digital Growth Partner');
        $description = $customDescription ?: ($seo?->description ?: 'Yamarta is a strategic digital partner building high-quality websites and applications for growing businesses in Indonesia.');
        $keywords = $customKeywords ?: $seo?->keywords;
        $keywordsString = is_array($keywords) ? implode(', ', $keywords) : $keywords;
        $ogImage = $customOgImage ?: ($seo?->og_image ? asset('storage/' . $seo->og_image) : asset('assets/images/og-default.jpg'));
        $url = url()->current();
    @endphp

    <title>{{ config('app.name').' | '.$title }}</title>
    <meta name="description" content="{{ $description }}">
    @if($keywordsString)
    <meta name="keywords" content="{{ $keywordsString }}">
    @endif

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $url }}" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:image" content="{{ $ogImage }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ $url }}" />
    <meta property="twitter:title" content="{{ $title }}" />
    <meta property="twitter:description" content="{{ $description }}" />
    <meta property="twitter:image" content="{{ $ogImage }}" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">

    <!-- Tailwind & Custom Styles via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Icons -->
    <script src="{{ asset('assets/js/lucide.js') }}"></script>
</head>

<body class="bg-light text-dark font-sans antialiased selection:bg-primary/20 selection:text-primary">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300 bg-white/70 backdrop-blur-md border-b border-white/50"
        id="navbar">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 cursor-pointer group hover:opacity-80 transition-opacity">
                    <a href="{{ url('/') }}"
                        class="font-serif text-2xl font-bold tracking-tight text-dark group-hover:text-primary transition-colors duration-300">Yamarta.</a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ url('/') }}"
                            class="text-sm font-medium {{ request()->is('/') ? 'text-primary' : 'text-muted hover:text-primary' }} transition-colors duration-200">Home
                        </a>
                        <a href="{{ url('/about') }}"
                            class="text-sm font-medium {{ request()->is('about') ? 'text-primary' : 'text-muted hover:text-primary' }} transition-colors duration-200">About Us
                        </a>
                        <a href="{{ url('/portfolio') }}"
                            class="text-sm font-medium {{ request()->is('portfolio') ? 'text-primary' : 'text-muted hover:text-primary' }} transition-colors duration-200">Portfolio
                        </a>
                        <a href="{{ url('/blog') }}"
                            class="text-sm font-medium {{ request()->is('blog*') ? 'text-primary' : 'text-muted hover:text-primary' }} transition-colors duration-200">Journal
                        </a>
                        <a href="{{ url('/contact') }}"
                            class="text-sm font-medium {{ request()->is('contact') ? 'text-primary' : 'text-muted hover:text-primary' }} transition-colors duration-200">Contact
                        </a>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="{{ url('/contact') }}"
                        class="bg-primary text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition-all duration-300 shadow-lg hover:shadow-indigo-500/30 transform hover:-translate-y-0.5">
                        Start Project
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-muted hover:text-primary focus:outline-none"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-slate-300 py-12 border-t border-slate-800">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-1">
                    <span class="font-serif text-2xl font-bold text-white tracking-tight">Yamarta.</span>
                    <p class="mt-4 text-sm leading-relaxed text-slate-400">
                        Strategic digital partner for growing businesses aiming for the next level.
                    </p>
                </div>

                <div class="col-span-1">
                    <h4 class="text-white font-bold mb-4">Services</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#" class="hover:text-primary transition-colors">Web Development</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">App Development</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">UI/UX Design</a></li>
                    </ul>
                </div>

                <div class="col-span-1">
                    <h4 class="text-white font-bold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ url('/about') }}" class="hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="{{ url('/portfolio') }}" class="hover:text-primary transition-colors">Portfolio</a></li>
                        <li><a href="{{ url('/blog') }}" class="hover:text-primary transition-colors">Journal</a></li>
                        <li><a href="{{ url('/contact') }}" class="hover:text-primary transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div class="col-span-1">
                    <h4 class="text-white font-bold mb-4">Social</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-white transition-colors"><i data-lucide="linkedin"
                                class="w-5 h-5"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i data-lucide="twitter"
                                class="w-5 h-5"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i data-lucide="instagram"
                                class="w-5 h-5"></i></a>
                    </div>
                </div>
            </div>

            <div
                class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
                <p>&copy; 2026 Yamarta Digital Agency. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-slate-300">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Initialize Icons -->
    <script>
        lucide.createIcons();

        // Navigation scroll effect
        window.addEventListener('scroll', function () {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 10) {
                nav.classList.add('shadow-md');
                nav.classList.add('bg-white/90');
                nav.classList.remove('bg-white/70');
            } else {
                nav.classList.remove('shadow-md');
                nav.classList.remove('bg-white/90');
                nav.classList.add('bg-white/70');
            }
        });
    </script>
</body>

</html>
