<x-layout>
    <!-- Page Header & Form Section -->
    <section class="relative pt-32 pb-24 lg:pt-48 lg:pb-32 overflow-hidden min-h-screen flex items-center">
        <!-- Abstract Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full -z-10 pointer-events-none">
            <div class="absolute top-0 right-0 w-full h-1/2 bg-gradient-to-b from-indigo-50/50 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-slate-50 to-transparent"></div>
            <div class="absolute top-1/4 right-1/4 w-[500px] h-[500px] bg-primary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"></div>
            <div class="absolute bottom-1/4 left-1/4 w-[500px] h-[500px] bg-secondary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000"></div>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">
                
                <!-- Left Column: Context & Information -->
                <div class="fade-in-up">
                    <div class="inline-flex items-center px-3 py-1 rounded-full border border-primary/20 bg-primary/5 text-primary text-xs font-medium mb-6">
                        Let's Talk
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold tracking-tight text-dark mb-6 text-balance">
                        Start a <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-cta">Conversation.</span>
                    </h1>
                    <p class="text-lg text-muted mb-10 text-balance leading-relaxed">
                        Whether you have a fully formed RFP or just an idea on a napkin, we're ready to listen. Drop us a line and let's explore how we can accelerate your business.
                    </p>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-white shadow-sm border border-slate-100 flex items-center justify-center text-primary group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-dark mb-1">Email Us</h3>
                                <a href="mailto:hello@yamarta.com" class="text-muted hover:text-primary transition-colors">hello@yamarta.com</a>
                                <p class="text-xs text-slate-400 mt-1">We respond within 24 business hours.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-white shadow-sm border border-slate-100 flex items-center justify-center text-primary group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-dark mb-1">Visit Our Office</h3>
                                <p class="text-muted">Gedung Yamarta, Lt. 3<br>Jl. Sudirman Kav 21, Jakarta Selatan<br>12920, Indonesia</p>
                            </div>
                        </div>

                         <div class="flex items-start gap-4 group">
                            <div class="w-12 h-12 rounded-xl bg-white shadow-sm border border-slate-100 flex items-center justify-center text-primary group-hover:scale-110 group-hover:bg-primary group-hover:text-white transition-all duration-300">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-dark mb-1">Call Us</h3>
                                <p class="text-muted">+62 21 555 1234</p>
                                <p class="text-xs text-slate-400 mt-1">Mon-Fri from 9am to 6pm WIB.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Contact Form -->
                <div class="relative fade-in-up delay-200">
                    <!-- Glassmorphism Container -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-primary to-secondary rounded-3xl opacity-20 blur lg:opacity-30"></div>
                    <div class="relative bg-white/80 backdrop-blur-xl rounded-3xl p-8 lg:p-10 shadow-2xl border border-white/50">
                        <h2 class="text-2xl font-serif font-bold text-dark mb-6">Send us a message</h2>
                        
                        <form action="#" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label for="first_name" class="block text-sm font-medium text-dark">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="John">
                                </div>
                                <div class="space-y-2">
                                    <label for="last_name" class="block text-sm font-medium text-dark">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="Doe">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-medium text-dark">Email Address</label>
                                <input type="email" name="email" id="email" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="john@company.com">
                            </div>

                            <div class="space-y-2">
                                <label for="company" class="block text-sm font-medium text-dark">Company <span class="text-slate-400 font-normal">(Optional)</span></label>
                                <input type="text" name="company" id="company" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all" placeholder="Acme Corp">
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="block text-sm font-medium text-dark">How can we help?</label>
                                <textarea name="message" id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-200 bg-white/50 focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all resize-none" placeholder="Tell us about your project goals, timeline, and budget..."></textarea>
                            </div>

                            <button type="submit" class="w-full bg-primary text-white py-4 rounded-lg font-bold shadow-lg shadow-primary/30 hover:shadow-primary/50 hover:bg-indigo-700 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2 group">
                                Send Message
                                <i data-lucide="send" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                            </button>
                            
                            <p class="text-center text-xs text-slate-500 mt-4">
                                By submitting this form, you agree to our <a href="#" class="text-primary hover:underline">Privacy Policy</a>.
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
