<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Akash Kumar Kundu - Full Stack Laravel & Livewire Software Engineer Profile">

        <title>Akash Kumar Kundu - Full Stack designer Profile</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <script>
            // Simple 2-mode Dark/Light theme initializer
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
                <a href="#hero" class="flex items-center gap-3 group">
                    <div class="relative">
                        <img src="/images/avatar.jpg" alt="Akash Kumar Kundu" class="w-9 h-9 rounded-full object-cover ring-2 ring-indigo-500/50 group-hover:ring-indigo-400 transition-all">
                        <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 border-2 border-white dark:border-zinc-950 rounded-full"></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-sm tracking-tight text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Akash Kumar Kundu</span>
                        <span class="text-[11px] text-slate-500 dark:text-zinc-400">Full Stack Developer</span>
                    </div>
                </a>

                <!-- Navigation Anchors -->
                <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-700 dark:text-zinc-300">
                    <a href="#about" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">About</a>
                    <a href="#skills" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Skills</a>
                    <a href="#projects" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Projects</a>
                    <a href="#experience" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Experience</a>
                    <a href="#contact" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Contact</a>
                </nav>

                <!-- Actions: Simple 2-Mode Light/Dark Toggle & Auth Links -->
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
                            <svg class="w-3.5 h-3.5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            Dashboard
                        </a>
                        <a href="{{ route('profile.edit') }}" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-indigo-600 hover:bg-indigo-500 text-white shadow-lg shadow-indigo-600/25 transition-all">
                            Settings
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-3.5 py-1.5 rounded-lg text-xs font-medium text-slate-700 dark:text-zinc-300 hover:text-indigo-600 dark:hover:text-white transition-colors">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-indigo-600 hover:bg-indigo-500 text-white shadow-lg shadow-indigo-600/20 transition-all">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </header>

        <main class="flex-grow">
            <!-- Hero Section -->
            <section id="hero" class="pt-16 pb-20 md:pt-24 md:pb-28 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <!-- Left Hero Content -->
                    <div class="lg:col-span-7 flex flex-col space-y-6">
                        
                        <!-- Availability Pill -->
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 dark:text-emerald-400 text-xs font-medium w-fit">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 dark:bg-emerald-400 animate-pulse"></span>
                            Available for Opportunities & Projects
                        </div>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-none">
                            Hi, I'm <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 dark:from-indigo-400 dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">Akash Kumar Kundu</span>
                        </h1>

                        <p class="text-base sm:text-lg text-slate-600 dark:text-zinc-400 max-w-2xl font-normal leading-relaxed">
                            Passionate Full-Stack Developer Focusing on in building robust, modern web applications using <strong class="text-slate-900 dark:text-zinc-200 font-semibold">Laravel 13</strong>, <strong class="text-slate-900 dark:text-zinc-200 font-semibold">Livewire 4</strong>, and <strong class="text-slate-900 dark:text-zinc-200 font-semibold">Tailwind CSS v4</strong>. Turning big ideas into seamless digital experiences.
                        </p>

                        <!-- Tech Badges -->
                        <div class="flex flex-wrap items-center gap-2 pt-1">
                            <span class="px-3 py-1 bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-md text-xs font-medium text-slate-700 dark:text-zinc-300 shadow-sm dark:shadow-none">PHP 8.3+</span>
                            <span class="px-3 py-1 bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-md text-xs font-medium text-slate-700 dark:text-zinc-300 shadow-sm dark:shadow-none">Laravel 13</span>
                            <span class="px-3 py-1 bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-md text-xs font-medium text-slate-700 dark:text-zinc-300 shadow-sm dark:shadow-none">Livewire 4</span>
                            <span class="px-3 py-1 bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-md text-xs font-medium text-slate-700 dark:text-zinc-300 shadow-sm dark:shadow-none">Tailwind CSS v4</span>
                            <span class="px-3 py-1 bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-md text-xs font-medium text-slate-700 dark:text-zinc-300 shadow-sm dark:shadow-none">SQLite / MySQL</span>
                        </div>

                        <!-- CTA Action Buttons -->
                        <div class="flex flex-wrap items-center gap-4 pt-4">
                            <a href="#contact" class="px-6 py-3 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-semibold text-sm shadow-xl shadow-indigo-600/25 transition-all flex items-center gap-2">
                                <span>Contact Akash</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="#projects" class="px-6 py-3 rounded-xl bg-white dark:bg-zinc-900 hover:bg-slate-100 dark:hover:bg-zinc-800 text-slate-800 dark:text-zinc-200 border border-slate-200 dark:border-zinc-800 font-semibold text-sm shadow-sm transition-all">
                                View Projects
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Card / Profile Display -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <!-- Glow frame -->
                            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-3xl blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                            
                            <div class="relative bg-white/90 dark:bg-zinc-900/90 border border-slate-200 dark:border-zinc-800 rounded-3xl p-6 backdrop-blur-xl shadow-2xl shadow-slate-300/40 dark:shadow-none space-y-6">
                                <div class="flex items-center gap-4">
                                    <img src="/images/avatar.jpg" alt="Akash Kumar Kundu" class="w-24 h-28 rounded-2xl object-cover ring-2 ring-indigo-500/50 shadow-md">
                                    <div>
                                        <h2 class="text-xl font-bold text-slate-900 dark:text-white">Akash Kumar Kundu</h2>
                                        <p class="text-xs text-indigo-600 dark:text-indigo-400 font-medium mt-0.5">Software Developer & Architect</p>
                                        <p class="text-xs text-slate-500 dark:text-zinc-400 mt-1 flex items-center gap-1">
                                            <svg class="w-3.5 h-3.5 text-slate-400 dark:text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                            Full Stack Developer
                                        </p>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 py-4 border-y border-slate-200 dark:border-zinc-800 text-center">
                                    <div>
                                        <span class="block text-xl font-extrabold text-slate-900 dark:text-white">100%</span>
                                        <span class="text-[11px] text-slate-500 dark:text-zinc-400 font-medium">Dedication</span>
                                    </div>
                                    <div>
                                        <span class="block text-xl font-extrabold text-slate-900 dark:text-white">365</span>
                                        <span class="text-[11px] text-slate-500 dark:text-zinc-400 font-medium">Opportunities</span>
                                    </div>
                                    <div>
                                        <span class="block text-xl font-extrabold text-slate-900 dark:text-white">25+</span>
                                        <span class="text-[11px] text-slate-500 dark:text-zinc-400 font-medium">Projects</span>
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-400 dark:text-zinc-500">Motto & Focus</span>
                                    <div class="p-3.5 rounded-xl bg-slate-100/80 dark:bg-zinc-950/60 border border-slate-200 dark:border-zinc-800/80 text-xs text-slate-700 dark:text-zinc-300 space-y-1">
                                        <div class="flex items-center justify-between">
                                            <span class="font-medium text-indigo-600 dark:text-indigo-300">"One Year = 365 Opportunities"</span>
                                            <span class="text-[10px] text-emerald-600 dark:text-emerald-400">Active</span>
                                        </div>
                                        <p class="text-slate-500 dark:text-zinc-400 text-[11px]">Continuously learning, innovating, and building high-impact software solutions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section id="about" class="py-20 bg-slate-100/60 dark:bg-zinc-900/50 border-y border-slate-200/80 dark:border-zinc-800/60 px-4 sm:px-6 lg:px-8">
                <div class="max-w-6xl mx-auto space-y-12">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">About Akash</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">Driven by Innovation, Quality & Clean Code</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card 1 -->
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 space-y-4 hover:border-indigo-500/50 shadow-sm dark:shadow-none transition-all">
                            <div class="w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Backend Mastery</h3>
                            <p class="text-sm text-slate-600 dark:text-zinc-400 leading-relaxed">
                                Building clean, efficient PHP 8.3 and Laravel 13 web systems with scalable database design and Eloquent ORM.
                            </p>
                        </div>

                        <!-- Card 2 -->
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 space-y-4 hover:border-purple-500/50 shadow-sm dark:shadow-none transition-all">
                            <div class="w-12 h-12 rounded-xl bg-purple-500/10 border border-purple-500/20 text-purple-600 dark:text-purple-400 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Reactive UI Development</h3>
                            <p class="text-sm text-slate-600 dark:text-zinc-400 leading-relaxed">
                                Designing responsive and interactive web interfaces using Livewire 4, Flux components, and Tailwind CSS v4.
                            </p>
                        </div>

                        <!-- Card 3 -->
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 space-y-4 hover:border-pink-500/50 shadow-sm dark:shadow-none transition-all">
                            <div class="w-12 h-12 rounded-xl bg-pink-500/10 border border-pink-500/20 text-pink-600 dark:text-pink-400 flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Quality & Reliability</h3>
                            <p class="text-sm text-slate-600 dark:text-zinc-400 leading-relaxed">
                                Writing maintainable code with Pest testing, static analysis, secure authentication, and seamless user experiences.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills & Capabilities Section -->
            <section id="skills" class="py-20 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
                <div class="space-y-12">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Skills</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">Akash's Technical Stack</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Backend Skills -->
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-slate-200 dark:border-zinc-800 shadow-sm dark:shadow-none space-y-6">
                            <h3 class="text-base font-bold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-indigo-500 dark:bg-indigo-400"></span>
                                Backend & Database Development
                            </h3>

                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between text-xs font-medium text-slate-700 dark:text-zinc-300 mb-1.5">
                                        <span>PHP 8.3 / Laravel 13</span>
                                        <span class="text-indigo-600 dark:text-indigo-400">95%</span>
                                    </div>
                                    <div class="w-full h-2 bg-slate-200 dark:bg-zinc-800 rounded-full overflow-hidden">
                                        <div class="w-[95%] h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-medium text-slate-700 dark:text-zinc-300 mb-1.5">
                                        <span>REST APIs & Auth Infrastructure</span>
                                        <span class="text-indigo-600 dark:text-indigo-400">90%</span>
                                    </div>
                                    <div class="w-full h-2 bg-slate-200 dark:bg-zinc-800 rounded-full overflow-hidden">
                                        <div class="w-[90%] h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-medium text-slate-700 dark:text-zinc-300 mb-1.5">
                                        <span>SQLite / MySQL Database Design</span>
                                        <span class="text-indigo-600 dark:text-indigo-400">92%</span>
                                    </div>
                                    <div class="w-full h-2 bg-slate-200 dark:bg-zinc-800 rounded-full overflow-hidden">
                                        <div class="w-[92%] h-full bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Frontend Skills -->
                        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/80 border border-slate-200 dark:border-zinc-800 shadow-sm dark:shadow-none space-y-6">
                            <h3 class="text-base font-bold text-slate-900 dark:text-white flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-purple-500 dark:bg-purple-400"></span>
                                Frontend & UI Design
                            </h3>

                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between text-xs font-medium text-slate-700 dark:text-zinc-300 mb-1.5">
                                        <span>Livewire 4 / Flux Components</span>
                                        <span class="text-purple-600 dark:text-purple-400">94%</span>
                                    </div>
                                    <div class="w-full h-2 bg-slate-200 dark:bg-zinc-800 rounded-full overflow-hidden">
                                        <div class="w-[94%] h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-medium text-slate-700 dark:text-zinc-300 mb-1.5">
                                        <span>Tailwind CSS v4 & Responsive Layouts</span>
                                        <span class="text-purple-600 dark:text-purple-400">96%</span>
                                    </div>
                                    <div class="w-full h-2 bg-slate-200 dark:bg-zinc-800 rounded-full overflow-hidden">
                                        <div class="w-[96%] h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-medium text-slate-700 dark:text-zinc-300 mb-1.5">
                                        <span>Vite & Modern Frontend Tooling</span>
                                        <span class="text-purple-600 dark:text-purple-400">88%</span>
                                    </div>
                                    <div class="w-full h-2 bg-slate-200 dark:bg-zinc-800 rounded-full overflow-hidden">
                                        <div class="w-[88%] h-full bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Featured Projects Section -->
            <section id="projects" class="py-20 bg-slate-100/60 dark:bg-zinc-900/50 border-y border-slate-200/80 dark:border-zinc-800/60 px-4 sm:px-6 lg:px-8">
                <div class="max-w-6xl mx-auto space-y-12">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Projects</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">Akash's Featured Works</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Project Card 1 -->
                        <div class="group bg-white dark:bg-zinc-900 rounded-2xl border border-slate-200 dark:border-zinc-800 overflow-hidden hover:border-indigo-500/50 shadow-md dark:shadow-none transition-all flex flex-col">
                            <div class="relative overflow-hidden aspect-video">
                                <img src="/images/project-ecommerce.jpg" alt="E-Commerce Analytics Platform" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 dark:from-zinc-950 via-transparent to-transparent opacity-60"></div>
                            </div>

                            <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 border border-indigo-500/20">Laravel 13</span>
                                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-purple-500/10 text-purple-600 dark:text-purple-400 border border-purple-500/20">Livewire 4</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">ECommerce Analytics Platform</h3>
                                    <p class="text-xs text-slate-600 dark:text-zinc-400 leading-relaxed">
                                        High-performance web dashboard providing real-time store order tracking, product management, and sales metrics.
                                    </p>
                                </div>

                                <div class="pt-2 flex items-center justify-between border-t border-slate-200 dark:border-zinc-800">
                                    <a href="#" class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 flex items-center gap-1">
                                        <span>View Details</span>
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>
                                    <span class="text-[11px] text-slate-500 dark:text-zinc-500">Public Demo</span>
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 2 -->
                        <div class="group bg-white dark:bg-zinc-900 rounded-2xl border border-slate-200 dark:border-zinc-800 overflow-hidden hover:border-indigo-500/50 shadow-md dark:shadow-none transition-all flex flex-col">
                            <div class="relative overflow-hidden aspect-video">
                                <img src="/images/project-analytics.jpg" alt="SaaS Telemetry Dashboard" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 dark:from-zinc-950 via-transparent to-transparent opacity-60"></div>
                            </div>

                            <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-blue-500/10 text-blue-600 dark:text-blue-400 border border-blue-500/20">SaaS Platform</span>
                                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">SQLite / Redis</span>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Astra Telemetry Dashboard</h3>
                                    <p class="text-xs text-slate-600 dark:text-zinc-400 leading-relaxed">
                                        Real-time application health monitoring software with high-throughput event processing and responsive alerts.
                                    </p>
                                </div>

                                <div class="pt-2 flex items-center justify-between border-t border-slate-200 dark:border-zinc-800">
                                    <a href="#" class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 flex items-center gap-1">
                                        <span>View Details</span>
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>
                                    <span class="text-[11px] text-slate-500 dark:text-zinc-500">Enterprise</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience Timeline Section -->
            <section id="experience" class="py-20 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto">
                <div class="space-y-12">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Career</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">Experience & Journey</p>
                    </div>

                    <div class="relative max-w-3xl mx-auto before:absolute before:inset-y-0 before:left-4 md:before:left-1/2 before:-translate-x-1/2 before:w-0.5 before:bg-slate-200 dark:before:bg-zinc-800 space-y-8">
                        
                        <!-- Timeline Item 1 -->
                        <div class="relative flex items-center md:justify-between group">
                            <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-600 text-white font-bold text-xs shadow-lg shadow-indigo-600/30 z-10 shrink-0 md:order-1 md:absolute md:left-1/2 md:-translate-x-1/2">
                                1
                            </div>
                            <div class="ml-6 md:ml-0 md:w-[45%] p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 space-y-2 shadow-sm dark:shadow-none hover:border-indigo-500/40 transition-all">
                                <span class="text-[11px] font-semibold text-indigo-600 dark:text-indigo-400 uppercase">2024 — Present</span>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Full Stack Software Developer</h3>
                                <p class="text-xs text-slate-600 dark:text-zinc-400 leading-relaxed">
                                    Developing high-performance web solutions with Laravel 13, Livewire 4, and modern database architectures.
                                </p>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="relative flex items-center md:justify-between group">
                            <div class="flex items-center justify-center w-8 h-8 rounded-full bg-purple-600 text-white font-bold text-xs shadow-lg shadow-purple-600/30 z-10 shrink-0 md:order-1 md:absolute md:left-1/2 md:-translate-x-1/2">
                                2
                            </div>
                            <div class="ml-6 md:ml-0 md:w-[45%] md:ml-auto p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 space-y-2 shadow-sm dark:shadow-none hover:border-purple-500/40 transition-all">
                                <span class="text-[11px] font-semibold text-purple-600 dark:text-purple-400 uppercase">2022 — 2024</span>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Web Engineer</h3>
                                <p class="text-xs text-slate-600 dark:text-zinc-400 leading-relaxed">
                                    Designed dynamic web applications, optimized database query speed, and implemented responsive UI designs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact" class="py-20 bg-slate-100/60 dark:bg-zinc-900/50 border-t border-slate-200/80 dark:border-zinc-800/60 px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto space-y-12">
                    <div class="text-center max-w-2xl mx-auto space-y-3">
                        <h2 class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Get In Touch</h2>
                        <p class="text-3xl font-extrabold text-slate-900 dark:text-white">Connect With Akash Kumar Kundu</p>
                        <p class="text-sm text-slate-600 dark:text-zinc-400">Have a project idea, question, or opportunity? Send a message below.</p>
                    </div>

                    <div class="bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-3xl p-6 sm:p-10 backdrop-blur-xl shadow-xl dark:shadow-2xl">
                        <form onsubmit="event.preventDefault(); alert('Thank you for contacting Akash Kumar Kundu! Your message has been received.');" class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-semibold text-slate-700 dark:text-zinc-300">Your Name</label>
                                    <input type="text" placeholder="Your Full Name" required class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-zinc-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-semibold text-slate-700 dark:text-zinc-300">Email Address</label>
                                    <input type="email" placeholder="yourname@example.com" required class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-zinc-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-semibold text-slate-700 dark:text-zinc-300">Subject</label>
                                <input type="text" placeholder="Project Inquiry / Opportunity" required class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-zinc-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-semibold text-slate-700 dark:text-zinc-300">Message</label>
                                <textarea rows="4" placeholder="Tell Akash about your project or inquiry..." required class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-zinc-950 border border-slate-200 dark:border-zinc-800 text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-zinc-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all resize-none"></textarea>
                            </div>

                            <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-bold text-sm shadow-xl shadow-indigo-600/20 transition-all">
                                Send Message to Akash
                            </button>
                        </form>
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
                    <a href="#hero" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center gap-1">
                        Back to Top
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                    </a>
                </div>
            </div>
        </footer>

    </body>
</html>
