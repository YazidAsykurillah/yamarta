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

    <title>{{ $site_settings?->company_name.' | '.$title ?? config('app.name') }}</title>
    @if($site_settings?->favicon)
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $site_settings->favicon) }}">
    @endif
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
                        class="font-serif text-2xl font-bold tracking-tight text-dark group-hover:text-primary transition-colors duration-300">
                        @if($site_settings?->logo)
                            <img src="{{ asset('storage/' . $site_settings->logo) }}" alt="{{ $site_settings->company_name ?? 'Logo' }}" class="h-10 w-auto">
                        @else
                            {{ $site_settings?->company_name ?? config('app.name') }}
                        @endif
                    </a>
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
                        id="mobile-menu-button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-muted hover:text-primary focus:outline-none"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span id="menu-icon-open" class="block"><i data-lucide="menu" class="w-6 h-6"></i></span>
                        <span id="menu-icon-close" class="hidden"><i data-lucide="x" class="w-6 h-6"></i></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white border-t border-slate-100 shadow-xl" id="mobile-menu">
            <div class="px-4 pt-2 pb-6 space-y-2 sm:px-3">
                <a href="{{ url('/') }}"
                    class="block px-3 py-2.5 rounded-md text-base font-medium {{ request()->is('/') ? 'text-primary bg-primary/5' : 'text-dark hover:text-primary hover:bg-slate-50' }} transition-colors">Home
                </a>
                <a href="{{ url('/about') }}"
                    class="block px-3 py-2.5 rounded-md text-base font-medium {{ request()->is('about') ? 'text-primary bg-primary/5' : 'text-dark hover:text-primary hover:bg-slate-50' }} transition-colors">About Us
                </a>
                <a href="{{ url('/portfolio') }}"
                    class="block px-3 py-2.5 rounded-md text-base font-medium {{ request()->is('portfolio') ? 'text-primary bg-primary/5' : 'text-dark hover:text-primary hover:bg-slate-50' }} transition-colors">Portfolio
                </a>
                <a href="{{ url('/blog') }}"
                    class="block px-3 py-2.5 rounded-md text-base font-medium {{ request()->is('blog*') ? 'text-primary bg-primary/5' : 'text-dark hover:text-primary hover:bg-slate-50' }} transition-colors">Journal
                </a>
                <a href="{{ url('/contact') }}"
                    class="block px-3 py-2.5 rounded-md text-base font-medium {{ request()->is('contact') ? 'text-primary bg-primary/5' : 'text-dark hover:text-primary hover:bg-slate-50' }} transition-colors">Contact
                </a>
                <div class="mt-6 pt-2 px-3">
                    <a href="{{ url('/contact') }}"
                        class="flex w-full justify-center bg-primary text-white px-5 py-3 rounded-lg text-base font-semibold hover:bg-indigo-700 transition-all duration-300 shadow-md">
                        Start Project
                    </a>
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
                    <span class="font-serif text-2xl font-bold text-white tracking-tight">
                        @if($site_settings?->logo)
                            <img src="{{ asset('storage/' . $site_settings->logo) }}" alt="{{ $site_settings->company_name ?? 'Logo' }}" class="h-10 w-auto">
                        @else
                            {{ $site_settings?->company_name ?? 'Yamarta.' }}
                        @endif
                    </span>
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
                        @foreach($social_links as $link)
                            <a href="{{ $link->url }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors" title="{{ $link->name }}">
                                @if(strtolower($link->name) == 'facebook')
                                    <i data-lucide="facebook" class="w-5 h-5"></i>
                                @elseif(strtolower($link->name) == 'twitter' || strtolower($link->name) == 'x')
                                    <i data-lucide="twitter" class="w-5 h-5"></i>
                                @elseif(strtolower($link->name) == 'instagram')
                                    <i data-lucide="instagram" class="w-5 h-5"></i>
                                @elseif(strtolower($link->name) == 'linkedin')
                                    <i data-lucide="linkedin" class="w-5 h-5"></i>
                                @elseif(strtolower($link->name) == 'youtube')
                                    <i data-lucide="youtube" class="w-5 h-5"></i>
                                @else
                                    <i data-lucide="link" class="w-5 h-5"></i>
                                @endif
                            </a>
                        @endforeach
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

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIconOpen = document.getElementById('menu-icon-open');
        const menuIconClose = document.getElementById('menu-icon-close');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                const isHidden = mobileMenu.classList.contains('hidden');
                mobileMenuButton.setAttribute('aria-expanded', !isHidden);
                
                if (isHidden) {
                    menuIconOpen.classList.remove('hidden');
                    menuIconOpen.classList.add('block');
                    menuIconClose.classList.add('hidden');
                    menuIconClose.classList.remove('block');
                } else {
                    menuIconOpen.classList.add('hidden');
                    menuIconOpen.classList.remove('block');
                    menuIconClose.classList.remove('hidden');
                    menuIconClose.classList.add('block');
                }
            });
        }
    </script>
</body>

</html>
