<x-layout>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Abstract Background Elements -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 pointer-events-none">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob">
            </div>
            <div
                class="absolute top-1/3 right-1/4 w-96 h-96 bg-cta/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute -bottom-8 left-1/3 w-96 h-96 bg-secondary/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center px-3 py-1 rounded-full border border-primary/20 bg-primary/5 text-primary text-xs font-medium mb-8 fade-in-up">
                <span class="flex h-2 w-2 rounded-full bg-cta mr-2"></span>
                Strategic Digital Partner
            </div>

            <h1
                class="text-5xl md:text-7xl lg:text-8xl font-serif font-bold tracking-tight text-dark mb-8 text-balance fade-in-up delay-100">
                Building Digital That <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-cta">Drives Growth.</span>
            </h1>

            <p class="mt-6 text-lg md:text-xl leading-8 text-muted max-w-2xl mx-auto text-balance fade-in-up delay-200">
                Yamarta crafts high-quality websites and applications for growing businesses in Indonesia. Mature
                strategy, precise execution, and calm confidence.
            </p>

            <div class="mt-10 flex items-center justify-center gap-x-6 fade-in-up delay-300">
                <a href="{{ url('/contact') }}"
                    class="bg-primary text-white px-8 py-3.5 rounded-lg text-base font-semibold hover:bg-indigo-700 transition-all duration-300 shadow-xl hover:shadow-indigo-500/30 transform hover:-translate-y-1">
                    Get Started
                </a>
                <a href="{{ url('/portfolio') }}"
                    class="text-sm font-semibold leading-6 text-dark hover:text-primary transition-colors flex items-center gap-2 group">
                    View Our Work <i data-lucide="arrow-right"
                        class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white/50 relative">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center mb-16">
                <h2 class="text-base font-semibold leading-7 text-primary">Our Expertise</h2>
                <p class="mt-2 text-3xl font-serif font-bold tracking-tight text-dark sm:text-4xl">Precision-Engineered
                    Digital Solutions</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="glass p-8 rounded-2xl hover:bg-white transition-all duration-300 shadow-sm hover:shadow-xl hover:-translate-y-1 group border border-slate-100">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300 text-primary">
                        <i data-lucide="monitor" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3 font-serif">Web Development</h3>
                    <p class="text-muted leading-relaxed">High-performance corporate websites and landing pages built on
                        modern stacks. SEO-optimized and responsive.</p>
                </div>

                <!-- Service 2 -->
                <div
                    class="glass p-8 rounded-2xl hover:bg-white transition-all duration-300 shadow-sm hover:shadow-xl hover:-translate-y-1 group border border-slate-100">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300 text-primary">
                        <i data-lucide="smartphone" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3 font-serif">App Development</h3>
                    <p class="text-muted leading-relaxed">Scalable web applications and internal tools that streamline
                        operations and drive business efficiency.</p>
                </div>

                <!-- Service 3 -->
                <div
                    class="glass p-8 rounded-2xl hover:bg-white transition-all duration-300 shadow-sm hover:shadow-xl hover:-translate-y-1 group border border-slate-100">
                    <div
                        class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300 text-primary">
                        <i data-lucide="palette" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold text-dark mb-3 font-serif">UI/UX Design</h3>
                    <p class="text-muted leading-relaxed">User-centric interfaces that are intuitive, accessible, and
                        visually stunning. Design that works.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="py-24 overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-primary">How We Work</h2>
                    <p class="mt-2 text-3xl font-serif font-bold tracking-tight text-dark sm:text-4xl mb-8">A Structured
                        Path to Success</p>
                    <p class="text-muted text-lg mb-10">We don't rely on guesswork. Our process is a refined methodology
                        designed to deliver consistent, high-quality results for every project.</p>

                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-sm">01</span>
                            <div>
                                <h4 class="font-bold text-dark text-lg">Discovery</h4>
                                <p class="text-muted mt-1">Deep dive into your business goals, audience, and market
                                    landscape.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-sm">02</span>
                            <div>
                                <h4 class="font-bold text-dark text-lg">Strategy & Design</h4>
                                <p class="text-muted mt-1">Architecting the solution and visualizing the user
                                    experience.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-sm">03</span>
                            <div>
                                <h4 class="font-bold text-dark text-lg">Build & Develop</h4>
                                <p class="text-muted mt-1">Clean, semantic code implementation using modern best
                                    practices.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <span
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-sm">04</span>
                            <div>
                                <h4 class="font-bold text-dark text-lg">Optimize & Launch</h4>
                                <p class="text-muted mt-1">Rigorous testing, performance tuning, and seamless
                                    deployment.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-primary to-cta rounded-2xl opacity-20 blur-2xl -z-10">
                    </div>
                    <div
                        class="glass p-8 rounded-2xl border border-white/50 aspect-square flex items-center justify-center relative overflow-hidden">
                        <!-- Detailed Process Graphic -->
                        <div class="relative w-full h-full flex items-center justify-center">
                            <!-- Central Connecting Line -->
                            <div
                                class="absolute h-[80%] w-0.5 bg-gradient-to-b from-primary/10 via-primary/50 to-cta/50 rounded-full">
                            </div>

                            <!-- Floating Nodes -->
                            <div class="flex flex-col justify-between h-[80%] w-full max-w-sm z-10">

                                <!-- Node 1: Discovery -->
                                <div class="flex items-center gap-4 w-full">
                                    <div class="w-1/2 flex justify-end">
                                        <div
                                            class="bg-white p-3 rounded-lg shadow-lg border border-primary/10 flex items-center gap-2">
                                            <div class="p-1.5 bg-primary/10 rounded-md text-primary"><i
                                                    data-lucide="search" class="w-4 h-4"></i></div>
                                            <span class="text-xs font-bold text-dark">Discovery</span>
                                        </div>
                                    </div>
                                    <div class="relative flex items-center justify-center">
                                        <div
                                            class="w-3 h-3 bg-primary rounded-full z-20 shadow-[0_0_10px_rgba(99,102,241,0.5)]">
                                        </div>
                                        <div
                                            class="absolute w-8 h-8 bg-primary/20 rounded-full animate-ping opacity-75">
                                        </div>
                                    </div>
                                    <div class="w-1/2"></div>
                                </div>

                                <!-- Node 2: Strategy -->
                                <div class="flex items-center gap-4 w-full flex-row-reverse">
                                    <div class="w-1/2 flex justify-start">
                                        <div
                                            class="bg-white p-3 rounded-lg shadow-lg border border-primary/10 flex items-center gap-2">
                                            <div class="p-1.5 bg-indigo-500/10 rounded-md text-indigo-500"><i
                                                    data-lucide="map" class="w-4 h-4"></i></div>
                                            <span class="text-xs font-bold text-dark">Strategy</span>
                                        </div>
                                    </div>
                                    <div class="relative flex items-center justify-center">
                                        <div class="w-3 h-3 bg-indigo-500 rounded-full z-20"></div>
                                    </div>
                                    <div class="w-1/2"></div>
                                </div>

                                <!-- Node 3: Build -->
                                <div class="flex items-center gap-4 w-full">
                                    <div class="w-1/2 flex justify-end">
                                        <div
                                            class="bg-white p-3 rounded-lg shadow-lg border border-primary/10 flex items-center gap-2">
                                            <div class="p-1.5 bg-blue-500/10 rounded-md text-blue-500"><i
                                                    data-lucide="code-2" class="w-4 h-4"></i></div>
                                            <span class="text-xs font-bold text-dark">Build</span>
                                        </div>
                                    </div>
                                    <div class="relative flex items-center justify-center">
                                        <div class="w-3 h-3 bg-blue-500 rounded-full z-20"></div>
                                    </div>
                                    <div class="w-1/2"></div>
                                </div>

                                <!-- Node 4: Launch -->
                                <div class="flex items-center gap-4 w-full flex-row-reverse">
                                    <div class="w-1/2 flex justify-start">
                                        <div
                                            class="bg-white p-3 rounded-lg shadow-lg border border-cta/10 flex items-center gap-2">
                                            <div class="p-1.5 bg-cta/10 rounded-md text-cta"><i data-lucide="rocket"
                                                    class="w-4 h-4"></i></div>
                                            <span class="text-xs font-bold text-dark">Launch</span>
                                        </div>
                                    </div>
                                    <div class="relative flex items-center justify-center">
                                        <div
                                            class="w-3 h-3 bg-cta rounded-full z-20 shadow-[0_0_10px_rgba(34,197,94,0.5)]">
                                        </div>
                                    </div>
                                    <div class="w-1/2"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 bg-dark text-white relative">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex justify-between items-end mb-16">
                <div class="max-w-xl">
                    <h2 class="text-base font-semibold leading-7 text-cta">Selected Works</h2>
                    <p class="mt-2 text-3xl font-serif font-bold tracking-tight text-white sm:text-4xl">Digital
                        Excellence in Action</p>
                </div>
                <a href="{{ url('/portfolio') }}"
                    class="hidden md:flex items-center text-sm font-semibold text-white/70 hover:text-white transition-colors gap-2 group">
                    View All Projects <i data-lucide="arrow-right"
                        class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @forelse($portfolios as $portfolio)
                <!-- Project -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/3] cursor-pointer shadow-2xl">
                    @if($portfolio->images->isNotEmpty())
                    <img src="{{ asset('storage/' . $portfolio->images->first()->image) }}" alt="{{ $portfolio->title }}"
                        class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    @endif
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

            <div class="mt-12 text-center md:hidden">
                <a href="{{ url('/portfolio') }}"
                    class="inline-flex items-center text-sm font-semibold text-white/70 hover:text-white transition-colors gap-2">
                    View All Projects <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why-us" class="py-24 bg-white relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-base font-semibold leading-7 text-primary">Why Yamarta</h2>
                <p class="mt-2 text-3xl font-serif font-bold tracking-tight text-dark sm:text-4xl">Built on Trust &
                    Transparency</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6">
                    <div
                        class="mx-auto w-16 h-16 bg-indigo-50 rounded-full flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">Reliable Partners</h3>
                    <p class="text-muted leading-relaxed">We don't ghost. We communicate clearly and deliver on our
                        promises, every time.</p>
                </div>

                <div class="p-6">
                    <div
                        class="mx-auto w-16 h-16 bg-indigo-50 rounded-full flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="zap" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">Performance First</h3>
                    <p class="text-muted leading-relaxed">Speed isn't a feature; it's a requirement. We build fast,
                        efficient digital products.</p>
                </div>

                <div class="p-6">
                    <div
                        class="mx-auto w-16 h-16 bg-indigo-50 rounded-full flex items-center justify-center mb-6 text-primary">
                        <i data-lucide="trending-up" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-lg font-bold text-dark mb-2">Growth Oriented</h3>
                    <p class="text-muted leading-relaxed">Our solutions are designed to scale with your business as you
                        expand and evolve.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-light relative overflow-hidden">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center mb-16">
                <h2 class="text-base font-semibold leading-7 text-primary">Testimonials</h2>
                <p class="mt-2 text-3xl font-serif font-bold tracking-tight text-dark sm:text-4xl">Trusted by Industry
                    Leaders</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div
                    class="glass p-8 rounded-2xl border border-white/60 shadow-sm relative hover:shadow-md transition-shadow duration-300 text-center">
                    <div class="flex justify-center mb-6">
                        <i data-lucide="quote" class="w-10 h-10 text-primary/30 fill-current"></i>
                    </div>
                    <p class="text-muted mb-6 leading-relaxed relative z-10">"Yamarta transformed our digital presence.
                        Their strategic approach to UX and precise execution helped us double our conversion rates in
                        just three months."</p>
                    <div class="flex items-center justify-center gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-xs font-serif font-bold text-slate-500">
                            AS</div>
                        <div class="text-left">
                            <h4 class="font-bold text-dark text-sm">Sarah Jenkins</h4>
                            <p class="text-xs text-muted">CMO, TechFlow</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="glass p-8 rounded-2xl border border-white/60 shadow-sm relative hover:shadow-md transition-shadow duration-300 text-center">
                    <div class="flex justify-center mb-6">
                        <i data-lucide="quote" class="w-10 h-10 text-primary/30 fill-current"></i>
                    </div>
                    <p class="text-muted mb-6 leading-relaxed relative z-10">"A partner that actually listens. The team
                        delivered a complex fintech platform that is both secure and incredibly user-friendly.
                        Outstanding work."</p>
                    <div class="flex items-center justify-center gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-xs font-serif font-bold text-slate-500">
                            MR</div>
                        <div class="text-left">
                            <h4 class="font-bold text-dark text-sm">Marcus Ray</h4>
                            <p class="text-xs text-muted">CEO, Amanah Capital</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="glass p-8 rounded-2xl border border-white/60 shadow-sm relative hover:shadow-md transition-shadow duration-300 text-center">
                    <div class="flex justify-center mb-6">
                        <i data-lucide="quote" class="w-10 h-10 text-primary/30 fill-current"></i>
                    </div>
                    <p class="text-muted mb-6 leading-relaxed relative z-10">"Clean code, modern design, and seamless
                        communication. Yamarta built our e-commerce site from scratch and it's been performing
                        flawlessly."</p>
                    <div class="flex items-center justify-center gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center text-xs font-serif font-bold text-slate-500">
                            EL</div>
                        <div class="text-left">
                            <h4 class="font-bold text-dark text-sm">Elena Lin</h4>
                            <p class="text-xs text-muted">Founder, Luxe Heritage</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-primary/5 -z-10"></div>
        <div class="mx-auto max-w-4xl px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-serif font-bold tracking-tight text-dark mb-6">Ready to Elevate Your
                Digital Presence?</h2>
            <p class="text-lg text-muted mb-10 max-w-2xl mx-auto">Let's build something extraordinary together. Schedule
                a discovery call with our team today.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ url('/contact') }}"
                    class="w-full sm:w-auto bg-primary text-white px-8 py-4 rounded-lg text-base font-semibold hover:bg-indigo-700 transition-all duration-300 shadow-xl hover:shadow-indigo-500/30">
                    Get Your Free Strategy Session
                </a>
                <a href="{{ url('/contact') }}"
                    class="w-full sm:w-auto px-8 py-4 rounded-lg text-base font-semibold text-primary border border-primary/20 hover:bg-white transition-all duration-300">
                    Contact Support
                </a>
            </div>
        </div>
    </section>
</x-layout>