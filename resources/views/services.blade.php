<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Services & Solutions by Akash Kumar Kundu - Full Stack Development, API Architecture & UI/UX">

        <title>Services & Solutions - Akash Kumar Kundu</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <script>
            // Anti-FOUC theme initializer
            if (localStorage.theme === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        </script>

        @fonts

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-50 dark:bg-zinc-950 text-slate-900 dark:text-zinc-100 font-sans antialiased selection:bg-indigo-500 selection:text-white min-h-screen flex flex-col relative overflow-x-hidden transition-colors duration-300">

        <!-- Background Ambient Glow Effects -->
        <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-gradient-to-tr from-indigo-500/10 dark:from-indigo-600/20 via-purple-500/10 dark:via-purple-600/15 to-pink-500/10 blur-[120px] pointer-events-none -z-10 rounded-full"></div>
        <div class="fixed bottom-0 right-0 w-[500px] h-[500px] bg-gradient-to-br from-blue-500/10 dark:from-blue-600/10 to-indigo-700/10 dark:to-indigo-900/20 blur-[140px] pointer-events-none -z-10 rounded-full"></div>

        <!-- Glassmorphism Navigation Bar -->
        <header class="sticky top-0 z-50 backdrop-blur-md bg-white/80 dark:bg-zinc-950/75 border-b border-slate-200/80 dark:border-zinc-800/80 transition-all duration-300">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <!-- Brand Logo & Status -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative">
                        <img src="/images/avatar.jpg" alt="Akash Kumar Kundu" class="w-9 h-9 rounded-full object-cover ring-2 ring-indigo-500/50 group-hover:ring-indigo-400 transition-all">
                        <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 border-2 border-white dark:border-zinc-950 rounded-full"></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-sm tracking-tight text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Akash Kumar Kundu</span>
                        <span class="text-[11px] text-slate-500 dark:text-zinc-400">Full Stack Developer</span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-700 dark:text-zinc-300">
                    <a href="{{ route('home') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Home Profiles</a>
                    <a href="{{ route('services') }}" class="text-indigo-600 dark:text-indigo-400 font-semibold border-b-2 border-indigo-600 dark:border-indigo-400 pb-0.5">Services & Solutions</a>
                    <a href="#estimator" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Cost Estimator</a>
                    <a href="#reviews" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Testimonials</a>
                </nav>

                <!-- Actions: Light/Dark Toggle & Auth Links -->
                <div class="flex items-center gap-3">
                    
                    <!-- Clean 2-Way Light / Dark Toggle Button -->
                    <div x-data="{
                        darkMode: document.documentElement.classList.contains('dark'),
                        toggleTheme() {
                            this.darkMode = !this.darkMode;
                            if (this.darkMode) {
                                document.documentElement.classList.add('dark');
                                localStorage.setItem('theme', 'dark');
                            } else {
                                document.documentElement.classList.remove('dark');
                                localStorage.setItem('theme', 'light');
                            }
                        }
                    }">
                        <button @click="toggleTheme()" type="button" class="px-3.5 py-1.5 rounded-xl bg-slate-100 dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 text-slate-800 dark:text-zinc-200 hover:border-indigo-500/50 transition-all flex items-center gap-1.5 text-xs font-semibold shadow-sm" title="Toggle Light / Dark Mode">
                            <template x-if="darkMode">
                                <span class="flex items-center gap-1.5 text-amber-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                    Light
                                </span>
                            </template>
                            <template x-if="!darkMode">
                                <span class="flex items-center gap-1.5 text-indigo-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                                    Dark
                                </span>
                            </template>
                        </button>
                    </div>

                    @auth
                        <a href="{{ route('dashboard') }}" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-slate-200 dark:bg-zinc-800 hover:bg-slate-300 dark:hover:bg-zinc-700 text-slate-800 dark:text-zinc-100 border border-slate-300 dark:border-zinc-700/60 transition-all flex items-center gap-1.5">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-3.5 py-1.5 rounded-lg text-xs font-medium text-slate-700 dark:text-zinc-300 hover:text-indigo-600 dark:hover:text-white transition-colors">
                            Log in
                        </a>
                    @endauth
                </div>
            </div>
        </header>

        <main class="flex-grow">
            <!-- Services Hero Banner -->
            <section class="pt-16 pb-20 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto text-center space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 text-xs font-medium">
                    ✨ Engineering High-Performance Digital Solutions
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                    Services & Software Solutions
                </h1>

                <p class="text-base sm:text-lg text-slate-600 dark:text-zinc-400 max-w-3xl mx-auto font-normal leading-relaxed">
                    Custom web application development, scalable API engineering, reactive UI design, and database optimization tailored to accelerate business growth.
                </p>

                <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                    <a href="#estimator" class="px-6 py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-semibold text-sm shadow-xl shadow-indigo-600/25 transition-all">
                        Calculate Project Estimate
                    </a>
                    <a href="{{ route('home') }}#contact" class="px-6 py-3 rounded-xl bg-white dark:bg-zinc-900 hover:bg-slate-100 dark:hover:bg-zinc-800 text-slate-800 dark:text-zinc-200 border border-slate-200 dark:border-zinc-800 font-semibold text-sm shadow-sm transition-all">
                        Book a Consultation
                    </a>
                </div>
            </section>

            <!-- Detailed Services Cards -->
            <section class="py-16 bg-slate-100/60 dark:bg-zinc-900/50 border-y border-slate-200/80 dark:border-zinc-800/60 px-4 sm:px-6 lg:px-8">
                <div class="max-w-6xl mx-auto space-y-12">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">What Akash Delivers</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">Specialized Technical Capabilities</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Service 1 -->
                        <div class="p-8 rounded-3xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 shadow-lg shadow-slate-200/50 dark:shadow-none space-y-4 hover:border-indigo-500/50 transition-all flex flex-col justify-between">
                            <div class="space-y-4">
                                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Full-Stack Web Development</h3>
                                <p class="text-xs text-slate-600 dark:text-zinc-400 leading-relaxed">
                                    End-to-end web applications built with **Laravel 13**, **Livewire 4**, and **Tailwind CSS v4**. Scalable, secure, and lightning-fast.
                                </p>
                            </div>
                            <ul class="text-xs text-slate-500 dark:text-zinc-400 space-y-2 pt-4 border-t border-slate-100 dark:border-zinc-800">
                                <li class="flex items-center gap-2">✓ Custom Business Portals</li>
                                <li class="flex items-center gap-2">✓ SaaS Product Platforms</li>
                                <li class="flex items-center gap-2">✓ E-Commerce Engines</li>
                            </ul>
                        </div>

                        <!-- Service 2 -->
                        <div class="p-8 rounded-3xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 shadow-lg shadow-slate-200/50 dark:shadow-none space-y-4 hover:border-purple-500/50 transition-all flex flex-col justify-between">
                            <div class="space-y-4">
                                <div class="w-14 h-14 rounded-2xl bg-purple-500/10 border border-purple-500/20 text-purple-600 dark:text-purple-400 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">API Infrastructure & Auth</h3>
                                <p class="text-xs text-slate-600 dark:text-zinc-400 leading-relaxed">
                                    Robust RESTful API design, third-party service integration, OAuth setup, and WebAuthn / Passkeys authentication.
                                </p>
                            </div>
                            <ul class="text-xs text-slate-500 dark:text-zinc-400 space-y-2 pt-4 border-t border-slate-100 dark:border-zinc-800">
                                <li class="flex items-center gap-2">✓ RESTful API Endpoints</li>
                                <li class="flex items-center gap-2">✓ Passkey & 2FA Auth</li>
                                <li class="flex items-center gap-2">✓ Payment Gateway Setup</li>
                            </ul>
                        </div>

                        <!-- Service 3 -->
                        <div class="p-8 rounded-3xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 shadow-lg shadow-slate-200/50 dark:shadow-none space-y-4 hover:border-pink-500/50 transition-all flex flex-col justify-between">
                            <div class="space-y-4">
                                <div class="w-14 h-14 rounded-2xl bg-pink-500/10 border border-pink-500/20 text-pink-600 dark:text-pink-400 flex items-center justify-center">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Database & Speed Tuning</h3>
                                <p class="text-xs text-slate-600 dark:text-zinc-400 leading-relaxed">
                                    Eloquent ORM query optimization, SQLite/MySQL index tuning, caching strategies, and load speed optimization.
                                </p>
                            </div>
                            <ul class="text-xs text-slate-500 dark:text-zinc-400 space-y-2 pt-4 border-t border-slate-100 dark:border-zinc-800">
                                <li class="flex items-center gap-2">✓ Query Performance Fixes</li>
                                <li class="flex items-center gap-2">✓ Redis Cache Integration</li>
                                <li class="flex items-center gap-2">✓ Schema Refactoring</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Interactive Project Cost & Timeline Estimator Widget -->
            <section id="estimator" class="py-20 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto">
                <div class="space-y-8" x-data="{
                    projectType: 'web-app',
                    features: ['auth', 'ui'],
                    urgency: 'standard',
                    get basePrice() {
                        if (this.projectType === 'web-app') return 1200;
                        if (this.projectType === 'ecommerce') return 1800;
                        if (this.projectType === 'api') return 900;
                        return 1500;
                    },
                    get featuresPrice() {
                        let total = 0;
                        if (this.features.includes('auth')) total += 300;
                        if (this.features.includes('ui')) total += 400;
                        if (this.features.includes('payment')) total += 500;
                        if (this.features.includes('api')) total += 350;
                        return total;
                    },
                    get multiplier() {
                        return this.urgency === 'express' ? 1.4 : 1.0;
                    },
                    get estimatedCost() {
                        return Math.round((this.basePrice + this.featuresPrice) * this.multiplier);
                    },
                    get estimatedDays() {
                        let days = Math.round(this.estimatedCost / 150);
                        return this.urgency === 'express' ? Math.max(4, Math.round(days * 0.6)) : days;
                    }
                }">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Interactive Tool</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">Project Cost & Timeline Estimator</p>
                        <p class="text-xs text-slate-600 dark:text-zinc-400">Select your project requirements to calculate an instant estimate.</p>
                    </div>

                    <div class="bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-3xl p-6 sm:p-10 shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        
                        <!-- Controls -->
                        <div class="lg:col-span-7 space-y-6">
                            <!-- Step 1: Project Type -->
                            <div class="space-y-3">
                                <label class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">1. Select Project Type</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <button @click="projectType = 'web-app'" :class="projectType === 'web-app' ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300' : 'border-slate-200 dark:border-zinc-800 bg-slate-50 dark:bg-zinc-950 text-slate-700 dark:text-zinc-300'" class="p-3 rounded-xl border text-xs font-semibold text-left transition-all">
                                        🌐 Custom Web App
                                    </button>
                                    <button @click="projectType = 'ecommerce'" :class="projectType === 'ecommerce' ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300' : 'border-slate-200 dark:border-zinc-800 bg-slate-50 dark:bg-zinc-950 text-slate-700 dark:text-zinc-300'" class="p-3 rounded-xl border text-xs font-semibold text-left transition-all">
                                        🛒 E-Commerce Platform
                                    </button>
                                    <button @click="projectType = 'api'" :class="projectType === 'api' ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300' : 'border-slate-200 dark:border-zinc-800 bg-slate-50 dark:bg-zinc-950 text-slate-700 dark:text-zinc-300'" class="p-3 rounded-xl border text-xs font-semibold text-left transition-all">
                                        ⚡ REST API Service
                                    </button>
                                    <button @click="projectType = 'saas'" :class="projectType === 'saas' ? 'border-indigo-600 bg-indigo-500/10 text-indigo-600 dark:text-indigo-300' : 'border-slate-200 dark:border-zinc-800 bg-slate-50 dark:bg-zinc-950 text-slate-700 dark:text-zinc-300'" class="p-3 rounded-xl border text-xs font-semibold text-left transition-all">
                                        📊 SaaS Product
                                    </button>
                                </div>
                            </div>

                            <!-- Step 2: Features -->
                            <div class="space-y-3">
                                <label class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">2. Additional Features</label>
                                <div class="grid grid-cols-2 gap-3 text-xs">
                                    <label class="flex items-center gap-2 p-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 cursor-pointer">
                                        <input type="checkbox" value="auth" x-model="features" class="rounded text-indigo-600">
                                        <span>2FA & Passkey Auth</span>
                                    </label>
                                    <label class="flex items-center gap-2 p-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 cursor-pointer">
                                        <input type="checkbox" value="ui" x-model="features" class="rounded text-indigo-600">
                                        <span>Flux UI & Animations</span>
                                    </label>
                                    <label class="flex items-center gap-2 p-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 cursor-pointer">
                                        <input type="checkbox" value="payment" x-model="features" class="rounded text-indigo-600">
                                        <span>Stripe/Payment Gateway</span>
                                    </label>
                                    <label class="flex items-center gap-2 p-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 cursor-pointer">
                                        <input type="checkbox" value="api" x-model="features" class="rounded text-indigo-600">
                                        <span>Third-Party Integrations</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Estimate Result Box -->
                        <div class="lg:col-span-5 bg-slate-900 dark:bg-zinc-950 text-white rounded-2xl p-6 sm:p-8 space-y-6 text-center border border-zinc-800 shadow-xl">
                            <span class="text-xs font-bold uppercase tracking-widest text-indigo-400">Estimated Investment</span>
                            <div class="space-y-1">
                                <span class="block text-4xl font-extrabold text-white" x-text="'$' + estimatedCost"></span>
                                <span class="text-xs text-zinc-400" x-text="'Estimated Delivery: ~' + estimatedDays + ' Days'"></span>
                            </div>

                            <div class="p-4 rounded-xl bg-zinc-900 border border-zinc-800 text-xs text-zinc-300 space-y-2 text-left">
                                <div class="flex justify-between">
                                    <span>Core Stack:</span>
                                    <span class="font-semibold text-indigo-300">Laravel 13 + Livewire 4</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Code Quality:</span>
                                    <span class="font-semibold text-emerald-400">100% Pest Tested</span>
                                </div>
                            </div>

                            <a href="{{ route('home') }}#contact" class="block w-full py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-bold text-xs shadow-lg transition-all">
                                Request Quote
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials & Client Reviews -->
            <section id="reviews" class="py-20 bg-slate-100/60 dark:bg-zinc-900/50 border-t border-slate-200/80 dark:border-zinc-800/60 px-4 sm:px-6 lg:px-8">
                <div class="max-w-6xl mx-auto space-y-12">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Testimonials</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">What Clients & Partners Say</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Review 1 -->
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 space-y-4 shadow-sm dark:shadow-none">
                            <div class="flex items-center gap-1 text-amber-400 text-sm">
                                ★★★★★
                            </div>
                            <p class="text-xs text-slate-600 dark:text-zinc-300 leading-relaxed italic">
                                "Akash built our web application with Laravel 13 and Livewire 4. The speed and quality of his code were outstanding. Delivered on time and exceeded our expectations!"
                            </p>
                            <div class="flex items-center gap-3 pt-2 border-t border-slate-100 dark:border-zinc-800">
                                <div class="w-8 h-8 rounded-full bg-indigo-500/20 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-xs">JS</div>
                                <div>
                                    <span class="block text-xs font-bold text-slate-900 dark:text-white">Jason Smith</span>
                                    <span class="text-[10px] text-slate-500 dark:text-zinc-400">Product Manager, TechCorp</span>
                                </div>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 space-y-4 shadow-sm dark:shadow-none">
                            <div class="flex items-center gap-1 text-amber-400 text-sm">
                                ★★★★★
                            </div>
                            <p class="text-xs text-slate-600 dark:text-zinc-300 leading-relaxed italic">
                                "Incredible mastery of database query optimization and API security. Akash fixed our performance bottlenecks in record time."
                            </p>
                            <div class="flex items-center gap-3 pt-2 border-t border-slate-100 dark:border-zinc-800">
                                <div class="w-8 h-8 rounded-full bg-purple-500/20 text-purple-600 dark:text-purple-400 flex items-center justify-center font-bold text-xs">EM</div>
                                <div>
                                    <span class="block text-xs font-bold text-slate-900 dark:text-white">Elena Martinez</span>
                                    <span class="text-[10px] text-slate-500 dark:text-zinc-400">CTO, SaaS Flow</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-white dark:bg-zinc-950 border-t border-slate-200 dark:border-zinc-800/80 py-8 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 dark:text-zinc-500">
                <div class="flex items-center gap-2">
                    <span>© {{ date('Y') }} Akash Kumar Kundu. Built with Laravel 13 & Livewire 4.</span>
                </div>
                <div class="flex items-center gap-6">
                    <a href="{{ route('home') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Home Profile</a>
                    <a href="{{ route('services') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Services</a>
                </div>
            </div>
        </footer>

    </body>
</html>
