<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Lumina Online Library | Digital Books & Interactive Portal' }}</title>
    <meta name="description" content="Lumina Online Library - Access millions of e-books, audiobooks, academic journals, and virtual study spaces in purple & blue digital elegance.">

    <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: radial-gradient(circle at 15% 15%, #2e1065 0%, #1e1b4b 35%, #0f172a 70%, #030712 100%);
            background-attachment: fixed;
            color: #f8fafc;
        }
        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Outfit', sans-serif;
        }
        .purple-blue-gradient {
            background: linear-gradient(135deg, #9333ea 0%, #4f46e5 50%, #2563eb 100%);
        }
        .purple-blue-gradient-text {
            background: linear-gradient(135deg, #d8b4fe 0%, #818cf8 50%, #60a5fa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .purple-blue-glow {
            box-shadow: 0 0 45px -5px rgba(147, 51, 234, 0.45), 0 0 30px -5px rgba(59, 130, 246, 0.45);
        }
        .glass-purple-card {
            background: linear-gradient(135deg, rgba(30, 27, 75, 0.75) 0%, rgba(15, 23, 42, 0.85) 100%);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(168, 85, 247, 0.3);
            box-shadow: 0 20px 40px -15px rgba(15, 23, 42, 0.8);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col selection:bg-purple-600 selection:text-white antialiased">

    <!-- Top Announcement & Quick Function Switcher Bar -->
    <div id="top-announcement-bar" class="bg-gradient-to-r from-purple-900 via-indigo-950 to-blue-900 border-b border-purple-500/30 text-white text-xs py-2.5 px-4 text-center font-medium relative z-50 flex flex-wrap items-center justify-between gap-3 shadow-lg">
        <div class="flex items-center gap-2 mx-auto sm:mx-0">
            <span class="px-2.5 py-0.5 rounded-full bg-purple-500/30 border border-purple-400/30 font-bold uppercase tracking-wider text-[10px]">Interactive Library</span>
            <span>Test the 3 Segment Functions Live Below!</span>
        </div>

        <!-- Quick Demo Function Shortcuts -->
        <div class="flex items-center gap-2 mx-auto sm:mx-0 text-[11px]">
            <a href="{{ route('home') }}#home-function" class="px-3 py-1 rounded-full bg-purple-600/40 hover:bg-purple-600 text-purple-100 hover:text-white font-bold border border-purple-400/40 transition-all shadow-sm">
                🏠 1. Home Function (Book Finder)
            </a>
            <a href="{{ route('services') }}#services-function" class="px-3 py-1 rounded-full bg-blue-600/40 hover:bg-blue-600 text-blue-100 hover:text-white font-bold border border-blue-400/40 transition-all shadow-sm">
                📚 2. Services Function (Study Room Booking)
            </a>
            <a href="{{ route('contact') }}#contact-function" class="px-3 py-1 rounded-full bg-indigo-600/40 hover:bg-indigo-600 text-indigo-100 hover:text-white font-bold border border-indigo-400/40 transition-all shadow-sm">
                💬 3. Contact Function (Librarian Response)
            </a>
        </div>
    </div>

    <!-- Ambient Glowing Radial Spheres -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute -top-32 -left-32 w-[30rem] h-[30rem] bg-purple-600/30 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute top-1/3 -right-32 w-[30rem] h-[30rem] bg-blue-600/25 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-10 left-1/3 w-[30rem] h-[30rem] bg-indigo-600/25 rounded-full blur-[120px]"></div>
    </div>

    <!-- Header Navigation -->
    <header class="sticky top-0 z-40 backdrop-blur-xl bg-slate-950/80 border-b border-purple-500/30 shadow-xl shadow-purple-950/20 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl purple-blue-gradient flex items-center justify-center shadow-lg shadow-purple-600/30 group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-extrabold text-xl tracking-tight text-white group-hover:text-purple-300 transition-colors font-heading">LUMINA<span class="text-blue-400">.</span></span>
                        <span class="text-[10px] tracking-widest text-purple-300 font-semibold uppercase -mt-1">Online Library Portal</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center gap-1.5 bg-slate-900/90 p-1.5 rounded-full border border-purple-500/30 shadow-inner">
                    <a href="{{ route('home') }}" 
                       class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 text-white shadow-md shadow-purple-600/40 font-bold' : 'text-slate-300 hover:text-white hover:bg-slate-800/80' }}">
                        Home
                    </a>
                    <a href="{{ route('services') }}" 
                       class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('services') ? 'bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 text-white shadow-md shadow-purple-600/40 font-bold' : 'text-slate-300 hover:text-white hover:bg-slate-800/80' }}">
                        Services
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request()->routeIs('contact') ? 'bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 text-white shadow-md shadow-purple-600/40 font-bold' : 'text-slate-300 hover:text-white hover:bg-slate-800/80' }}">
                        Contact
                    </a>
                </nav>

                <!-- Search & Action Buttons -->
                <div class="hidden md:flex items-center gap-3">
                    <button onclick="toggleSearchModal()" type="button" class="p-2.5 rounded-full bg-slate-900 border border-purple-500/40 text-purple-300 hover:text-white hover:bg-slate-800 transition-colors shadow-sm" title="Search Library (Cmd+K)">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </button>

                    <a href="{{ route('contact') }}" class="px-5 py-2.5 rounded-full purple-blue-gradient hover:opacity-95 text-white text-sm font-semibold shadow-lg shadow-purple-600/30 hover:-translate-y-0.5 transition-all duration-300">
                        Get Library Pass
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex md:hidden items-center gap-2">
                    <button onclick="toggleSearchModal()" type="button" class="p-2 rounded-lg bg-slate-900 text-purple-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </button>

                    <button id="mobile-menu-btn" type="button" class="p-2.5 rounded-lg bg-slate-900 text-slate-300 hover:text-white focus:outline-none">
                        <svg id="menu-open-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Drawer -->
            <div id="mobile-menu" class="hidden md:hidden pb-6 pt-2 border-t border-purple-900/30">
                <div class="flex flex-col gap-2">
                    <a href="{{ route('home') }}" class="px-4 py-3 rounded-xl text-base font-medium {{ request()->routeIs('home') ? 'bg-purple-600 text-white' : 'text-slate-300 hover:bg-slate-900 hover:text-white' }}">
                        Home
                    </a>
                    <a href="{{ route('services') }}" class="px-4 py-3 rounded-xl text-base font-medium {{ request()->routeIs('services') ? 'bg-purple-600 text-white' : 'text-slate-300 hover:bg-slate-900 hover:text-white' }}">
                        Services
                    </a>
                    <a href="{{ route('contact') }}" class="px-4 py-3 rounded-xl text-base font-medium {{ request()->routeIs('contact') ? 'bg-purple-600 text-white' : 'text-slate-300 hover:bg-slate-900 hover:text-white' }}">
                        Contact
                    </a>
                    <a href="{{ route('contact') }}" class="mt-2 w-full text-center px-4 py-3 rounded-xl purple-blue-gradient text-white font-semibold shadow-md">
                        Get Library Pass
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow z-10">
        {{ $slot }}
    </main>

    <!-- Live Virtual Librarian Chatbot Assistant -->
    <div class="fixed bottom-6 right-6 z-50">
        <div id="librarian-chat" class="hidden w-80 sm:w-96 rounded-2xl glass-purple-card shadow-2xl p-4 mb-4 space-y-3 flex flex-col">
            <div class="flex items-center justify-between pb-3 border-b border-purple-900/50">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-purple-600 to-blue-500 flex items-center justify-center text-white text-xs font-bold shadow">
                        📚
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-white">Lumina Librarian Assistant</h4>
                        <span class="text-[10px] text-emerald-400 flex items-center gap-1 font-mono">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Active 24/7
                        </span>
                    </div>
                </div>
                <button onclick="toggleLibrarianChat()" class="text-slate-400 hover:text-white text-base">&times;</button>
            </div>
            
            <div id="chat-messages" class="h-56 overflow-y-auto space-y-3 text-xs pr-1">
                <div class="p-3 rounded-xl bg-slate-900/90 border border-purple-900/40 text-slate-300">
                    📖 Welcome to Lumina Online Library! Looking for an e-book, audiobook, or research journal? Ask me anything!
                </div>
            </div>

            <!-- Chips -->
            <div class="flex flex-wrap gap-1.5 pt-1">
                <button onclick="sendQuickChat('How to borrow an e-book?')" class="px-2.5 py-1 rounded-full bg-purple-600/20 hover:bg-purple-600 text-purple-300 hover:text-white text-[11px] font-medium border border-purple-500/30 transition-colors">
                    Borrow E-Books
                </button>
                <button onclick="sendQuickChat('Reserve a quiet study room')" class="px-2.5 py-1 rounded-full bg-blue-600/20 hover:bg-blue-600 text-blue-300 hover:text-white text-[11px] font-medium border border-blue-500/30 transition-colors">
                    Study Rooms
                </button>
            </div>

            <form onsubmit="handleLibrarianSubmit(event)" class="flex gap-2 pt-2 border-t border-purple-900/50">
                <input id="chat-input" type="text" placeholder="Search title, author, topic..." class="w-full px-3 py-1.5 rounded-lg bg-slate-900 border border-purple-900/50 text-xs text-white focus:outline-none focus:border-purple-500">
                <button type="submit" class="px-3 py-1.5 bg-purple-600 hover:bg-purple-500 text-white rounded-lg text-xs font-bold">Ask</button>
            </form>
        </div>

        <button onclick="toggleLibrarianChat()" class="w-14 h-14 rounded-full purple-blue-gradient text-white shadow-xl purple-blue-glow flex items-center justify-center hover:scale-110 transition-all duration-300">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
        </button>
    </div>

    <!-- Quick Search Overlay Modal -->
    <div id="search-modal" class="fixed inset-0 bg-slate-950/85 backdrop-blur-md z-50 hidden flex items-start justify-center pt-20 px-4">
        <div class="w-full max-w-2xl rounded-2xl glass-purple-card border border-purple-700/60 shadow-2xl p-6 space-y-4">
            <div class="flex items-center justify-between border-b border-purple-900/60 pb-3">
                <div class="flex items-center gap-3 w-full">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input id="modal-search-input" onkeyup="filterSearchResults()" type="text" placeholder="Search catalog for title, author, ISBN..." class="w-full bg-transparent text-white placeholder-purple-400/60 text-base focus:outline-none">
                </div>
                <button onclick="toggleSearchModal()" class="text-slate-400 hover:text-white text-lg">&times;</button>
            </div>
            
            <div id="search-results" class="space-y-2 max-h-80 overflow-y-auto text-sm">
                <a href="{{ route('home') }}#home-function" class="block p-3 rounded-xl bg-slate-900/70 hover:bg-purple-950/60 text-slate-200 transition-colors">
                    <div class="font-bold text-purple-300">Chronicles of Nebula</div>
                    <div class="text-xs text-blue-400">Sci-Fi Novel • By Elara Vance (Instant E-Book Borrow)</div>
                </a>
                <a href="{{ route('services') }}#services-function" class="block p-3 rounded-xl bg-slate-900/70 hover:bg-purple-950/60 text-slate-200 transition-colors">
                    <div class="font-bold text-blue-300">Reserve Quiet Study Pod / Virtual Room</div>
                    <div class="text-xs text-purple-400">Interactive Booking Function • Lumina Main Branch</div>
                </a>
                <a href="{{ route('contact') }}#contact-function" class="block p-3 rounded-xl bg-slate-900/70 hover:bg-purple-950/60 text-slate-200 transition-colors">
                    <div class="font-bold text-indigo-300">Submit Librarian Inquiry</div>
                    <div class="text-xs text-slate-400">Contact Function • Instant Response Simulator</div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-purple-900/40 z-10 relative pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Col 1: Brand & Status -->
                <div class="space-y-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg purple-blue-gradient flex items-center justify-center shadow-md">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <span class="font-extrabold text-lg text-white font-heading">LUMINA<span class="text-blue-400">.</span></span>
                    </a>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Connecting readers, researchers, and students to over 1.2M+ digital books, audiobooks, and academic archives.
                    </p>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 text-xs font-mono">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>Catalog Online & Active</span>
                    </div>
                </div>

                <!-- Col 2: Navigation -->
                <div class="space-y-3">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-purple-300 font-heading">Navigation</h3>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ route('home') }}" class="hover:text-purple-400 transition-colors">Home Segment</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-purple-400 transition-colors">Services Segment</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-purple-400 transition-colors">Contact Segment</a></li>
                        <li><a href="{{ route('services') }}#membership" class="hover:text-purple-400 transition-colors">Membership Pass</a></li>
                    </ul>
                </div>

                <!-- Col 3: Genres & Collections -->
                <div class="space-y-3">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-purple-300 font-heading">Digital Archives</h3>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="{{ route('home') }}#home-function" class="hover:text-blue-400 transition-colors">Sci-Fi & Astronomy</a></li>
                        <li><a href="{{ route('home') }}#home-function" class="hover:text-blue-400 transition-colors">Computer Science & AI</a></li>
                        <li><a href="{{ route('home') }}#home-function" class="hover:text-blue-400 transition-colors">Philosophy & Classics</a></li>
                        <li><a href="{{ route('home') }}#home-function" class="hover:text-blue-400 transition-colors">Audiobooks Stream</a></li>
                    </ul>
                </div>

                <!-- Col 4: Newsletter -->
                <div class="space-y-3">
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-purple-300 font-heading">Book Recommendations</h3>
                    <p class="text-sm text-slate-400">Subscribe for weekly curator picks and reading lists.</p>
                    <form onsubmit="event.preventDefault(); alert('Subscribed to Lumina Book Digest!'); this.reset();" class="flex gap-2">
                        <input type="email" required placeholder="Reader email" class="w-full px-3.5 py-2 bg-slate-900 border border-purple-900/50 rounded-lg text-sm text-slate-200 focus:outline-none focus:border-purple-500">
                        <button type="submit" class="px-4 py-2 purple-blue-gradient text-white rounded-lg text-sm font-medium transition-opacity hover:opacity-90">Join</button>
                    </form>
                </div>
            </div>

            <div class="border-t border-slate-900 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-slate-500">
                <p>&copy; {{ date('Y') }} Lumina Online Library. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-slate-400 transition-colors">Terms of Borrowing</a>
                    <a href="#" class="hover:text-slate-400 transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-slate-400 transition-colors">Copyright & Fair Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Master Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = document.getElementById('menu-open-icon');
            const closeIcon = document.getElementById('menu-close-icon');

            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function() {
                    const isHidden = mobileMenu.classList.contains('hidden');
                    if (isHidden) {
                        mobileMenu.classList.remove('hidden');
                        openIcon.classList.add('hidden');
                        closeIcon.classList.remove('hidden');
                    } else {
                        mobileMenu.classList.add('hidden');
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                });
            }

            document.addEventListener('keydown', function(e) {
                if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                    e.preventDefault();
                    toggleSearchModal();
                }
            });
        });

        function toggleSearchModal() {
            const modal = document.getElementById('search-modal');
            modal.classList.toggle('hidden');
            if (!modal.classList.contains('hidden')) {
                document.getElementById('modal-search-input').focus();
            }
        }

        function filterSearchResults() {
            const query = document.getElementById('modal-search-input').value.toLowerCase();
            const results = document.getElementById('search-results').children;
            for (let item of results) {
                if (item.innerText.toLowerCase().includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            }
        }

        function toggleLibrarianChat() {
            document.getElementById('librarian-chat').classList.toggle('hidden');
        }

        function sendQuickChat(text) {
            appendChatMessage('user', text);
            setTimeout(() => {
                let response = "Lumina Library provides instant e-book borrowing for all members! You can read directly in your browser or download EPUB/PDF formats.";
                appendChatMessage('librarian', response);
            }, 600);
        }

        function handleLibrarianSubmit(e) {
            e.preventDefault();
            const input = document.getElementById('chat-input');
            const val = input.value.trim();
            if (!val) return;
            appendChatMessage('user', val);
            input.value = '';
            
            setTimeout(() => {
                let reply = `Searching digital archives for "${val}"... We have 14 related e-books and research papers available!`;
                appendChatMessage('librarian', reply);
            }, 800);
        }

        function appendChatMessage(sender, text) {
            const container = document.getElementById('chat-messages');
            const div = document.createElement('div');
            if (sender === 'user') {
                div.className = 'p-3 rounded-xl bg-purple-600 text-white self-end ml-6 text-right font-medium';
            } else {
                div.className = 'p-3 rounded-xl bg-slate-900/90 border border-purple-900/40 text-slate-300 self-start mr-6';
            }
            div.innerText = text;
            container.appendChild(div);
            container.scrollTop = container.scrollHeight;
        }
    </script>
</body>
</html>
