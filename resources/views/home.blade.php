<x-layouts.public title="Lumina Online Library | Home Segment & Book Finder Function">

    <!-- Hero Section -->
    <section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-purple-500/10 border border-purple-500/25 text-purple-300 text-xs sm:text-sm font-semibold tracking-wide">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-ping"></span>
                        <span>✨ Segment 1: Home Page & Interactive Digital Reader</span>
                    </div>

                    <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight text-white leading-[1.15] font-heading">
                        Unfold the Universe of <span class="purple-blue-gradient-text">Knowledge</span>
                    </h1>

                    <p class="text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                        Access millions of curated e-books, high-fidelity audiobooks, and peer-reviewed research papers anytime, anywhere with Lumina Online Library.
                    </p>

                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                        <a href="#home-function" class="px-8 py-4 rounded-xl purple-blue-gradient hover:opacity-95 text-white font-bold shadow-xl shadow-purple-600/30 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
                            <span>Try Home Function (Book Finder)</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </a>

                        <a href="{{ route('services') }}" class="px-8 py-4 rounded-xl bg-slate-900 hover:bg-slate-800 border border-purple-900/50 text-white font-semibold shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                            Explore Services Segment &rarr;
                        </a>
                    </div>
                </div>

                <!-- Right Generated Artwork Showcase -->
                <div class="lg:col-span-5 relative">
                    <div class="relative rounded-2xl glass-purple-card overflow-hidden shadow-2xl purple-blue-glow border border-purple-500/40 group">
                        <img src="{{ asset('images/library_hero.jpg') }}" alt="Lumina Digital Library Interface" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        
                        <div class="absolute bottom-4 left-4 right-4 p-4 rounded-xl bg-slate-900/90 border border-purple-900/60 backdrop-blur-md flex items-center justify-between text-xs text-white">
                            <div>
                                <div class="font-bold text-purple-300 font-heading">Featured Collection: Sci-Fi & Quantum Computing</div>
                                <div class="text-slate-400 text-[11px]">Instant Reader Stream Enabled</div>
                            </div>
                            <span class="px-2.5 py-1 rounded-full bg-blue-500/20 text-blue-300 font-mono font-bold">2,400+ Borrowed Today</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SEGMENT 1 FUNCTION DEMO: Interactive E-Book Search & Live Reader Input/Output Engine -->
    <section id="home-function" class="py-20 bg-slate-900/70 border-y border-purple-900/40 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 text-xs font-bold uppercase tracking-wider font-heading">
                    ⚡ Segment 1 Function Demo
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white font-heading">Home Function: Live E-Book Search & Digital Reader</h2>
                <p class="text-slate-300 text-sm">Enter your search query and customize reading preferences to see the live e-book finder and reader engine function in real-time!</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- INPUT FORM PANEL -->
                <div class="lg:col-span-5 rounded-3xl glass-purple-card p-6 sm:p-8 border border-purple-500/40 shadow-2xl space-y-6">
                    <div class="flex items-center gap-3 border-b border-purple-900/50 pb-4">
                        <div class="w-10 h-10 rounded-xl purple-blue-gradient text-white flex items-center justify-center font-bold text-lg">
                            🔍
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white font-heading">Input Parameters</h3>
                            <p class="text-xs text-purple-300">Customize catalog search & reading engine</p>
                        </div>
                    </div>

                    <form onsubmit="runHomeFunction(event)" class="space-y-4 text-xs">
                        
                        <!-- Input 1: Search Query -->
                        <div>
                            <label class="block font-bold text-purple-200 uppercase tracking-wider mb-2">1. Enter Book Title, Author or Topic</label>
                            <input id="input-book-query" type="text" value="Chronicles of Nebula" required placeholder="e.g. Chronicles of Nebula, Artificial Intelligence..."
                                   class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-purple-900/60 text-white text-sm focus:outline-none focus:border-purple-500 transition-all">
                        </div>

                        <!-- Input 2: Format Choice -->
                        <div>
                            <label class="block font-bold text-purple-200 uppercase tracking-wider mb-2">2. Select Preferred Format</label>
                            <select id="input-book-format" class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-purple-900/60 text-white text-sm focus:outline-none focus:border-purple-500">
                                <option value="EPUB E-Book">EPUB Digital E-Book</option>
                                <option value="PDF Academic Document">PDF Academic Document</option>
                                <option value="HD Audiobook Stream">HD Audiobook Stream</option>
                            </select>
                        </div>

                        <!-- Input 3: Font Style -->
                        <div>
                            <label class="block font-bold text-purple-200 uppercase tracking-wider mb-2">3. Reader Font Style</label>
                            <div class="grid grid-cols-3 gap-2">
                                <button type="button" onclick="setReaderFont('font-sans')" class="font-opt px-3 py-2 rounded-lg bg-purple-900/40 border border-purple-500 text-white font-bold text-xs">Sans-Serif</button>
                                <button type="button" onclick="setReaderFont('font-serif')" class="font-opt px-3 py-2 rounded-lg bg-slate-900 border border-purple-900/50 text-slate-300 text-xs">Serif</button>
                                <button type="button" onclick="setReaderFont('font-mono')" class="font-opt px-3 py-2 rounded-lg bg-slate-900 border border-purple-900/50 text-slate-300 text-xs">Monospace</button>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <button type="submit" class="w-full py-4 rounded-xl purple-blue-gradient text-white font-bold text-sm shadow-xl hover:opacity-95 transition-opacity flex items-center justify-center gap-2">
                            <span>Execute Home Function (Find & Load Book)</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </form>
                </div>

                <!-- OUTPUT DISPLAY PANEL -->
                <div class="lg:col-span-7 rounded-3xl glass-purple-card p-6 sm:p-8 border border-blue-500/40 shadow-2xl space-y-6">
                    <div class="flex items-center justify-between border-b border-purple-900/50 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center font-bold text-lg">
                                📖
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white font-heading">Function Output Result</h3>
                                <p class="text-xs text-blue-300">Live In-Browser E-Book Digital Reader Output</p>
                            </div>
                        </div>
                        <span id="output-status-pill" class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 font-mono text-xs font-bold">● Function Active</span>
                    </div>

                    <!-- Simulated Live Reader Viewport -->
                    <div class="rounded-2xl bg-slate-950 border border-purple-900/60 p-6 space-y-4 min-h-[320px] flex flex-col justify-between">
                        <div class="flex items-center justify-between border-b border-slate-800 pb-3 text-xs">
                            <span id="output-book-title" class="font-bold text-purple-300 font-heading">Title: Chronicles of Nebula</span>
                            <span id="output-book-format" class="text-blue-400 font-mono">Format: EPUB E-Book</span>
                        </div>

                        <!-- Main Reading Text Area -->
                        <div id="output-reader-text" class="text-sm text-slate-300 leading-relaxed font-sans space-y-3">
                            <p>
                                <span class="text-purple-400 font-bold text-lg">Chapter 1: The Quantum Signal.</span> High above the orbital ring of Orion, Captain Elara Vance calibrated the deep-range antennae. A faint harmonic frequency pulsed through the starship's neural interface—a beacon sent across 40 light-years of unknown space.
                            </p>
                            <p class="text-slate-400 text-xs italic">
                                "The universe does not speak in words," Elara whispered to the AI core. "It speaks in light and math."
                            </p>
                        </div>

                        <!-- Reader Toolbar Controls -->
                        <div class="pt-4 border-t border-slate-800 flex flex-wrap items-center justify-between gap-4 text-xs">
                            <div class="flex items-center gap-2">
                                <button onclick="prevChapter()" class="px-3 py-1.5 rounded-lg bg-slate-900 border border-purple-900/50 text-slate-300 hover:text-white">&larr; Prev Chapter</button>
                                <span id="chapter-num" class="font-mono text-purple-300">Page 14 of 320</span>
                                <button onclick="nextChapter()" class="px-3 py-1.5 rounded-lg bg-slate-900 border border-purple-900/50 text-slate-300 hover:text-white">Next Chapter &rarr;</button>
                            </div>
                            <button onclick="bookmarkBook()" class="px-3 py-1.5 rounded-lg bg-purple-600/30 text-purple-300 hover:bg-purple-600 hover:text-white font-bold transition-colors">
                                🔖 Bookmark Position
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Book Grid Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
                <h2 class="text-xs font-bold uppercase tracking-widest text-purple-400 font-heading">Curated Collection</h2>
                <h3 class="text-3xl font-extrabold text-white font-heading">Trending Digital Titles</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="rounded-2xl glass-purple-card p-6 border border-purple-900/40 space-y-4">
                    <div class="w-full h-40 rounded-xl bg-purple-900/50 p-4 flex flex-col justify-end">
                        <h4 class="font-bold text-white text-base">Chronicles of Nebula</h4>
                        <p class="text-xs text-purple-300">By Elara Vance</p>
                    </div>
                    <button onclick="quickLoadBook('Chronicles of Nebula', 'Sci-Fi Novel')" class="w-full py-2 rounded-lg purple-blue-gradient text-white font-bold text-xs">Load into Reader Engine</button>
                </div>

                <div class="rounded-2xl glass-purple-card p-6 border border-purple-900/40 space-y-4">
                    <div class="w-full h-40 rounded-xl bg-blue-900/50 p-4 flex flex-col justify-end">
                        <h4 class="font-bold text-white text-base">The Silicon Mind</h4>
                        <p class="text-xs text-blue-300">By Dr. Aris Thorre</p>
                    </div>
                    <button onclick="quickLoadBook('The Silicon Mind', 'AI & Computer Science')" class="w-full py-2 rounded-lg purple-blue-gradient text-white font-bold text-xs">Load into Reader Engine</button>
                </div>

                <div class="rounded-2xl glass-purple-card p-6 border border-purple-900/40 space-y-4">
                    <div class="w-full h-40 rounded-xl bg-indigo-900/50 p-4 flex flex-col justify-end">
                        <h4 class="font-bold text-white text-base">Echoes of Stoicism</h4>
                        <p class="text-xs text-indigo-300">By Marcus Aurelius & Helena K.</p>
                    </div>
                    <button onclick="quickLoadBook('Echoes of Stoicism', 'Philosophy')" class="w-full py-2 rounded-lg purple-blue-gradient text-white font-bold text-xs">Load into Reader Engine</button>
                </div>

                <div class="rounded-2xl glass-purple-card p-6 border border-purple-900/40 space-y-4">
                    <div class="w-full h-40 rounded-xl bg-pink-900/50 p-4 flex flex-col justify-end">
                        <h4 class="font-bold text-white text-base">Lost Horizon of Orion</h4>
                        <p class="text-xs text-pink-300">By Dr. Julian Thorne</p>
                    </div>
                    <button onclick="quickLoadBook('Lost Horizon of Orion', 'Astronomy')" class="w-full py-2 rounded-lg purple-blue-gradient text-white font-bold text-xs">Load into Reader Engine</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Function Scripts -->
    <script>
        let currentFontClass = 'font-sans';
        let currentPageNum = 14;

        function setReaderFont(fontClass) {
            currentFontClass = fontClass;
            document.querySelectorAll('.font-opt').forEach(btn => {
                btn.classList.remove('bg-purple-900/40', 'border-purple-500', 'text-white');
                btn.classList.add('bg-slate-900', 'border-purple-900/50', 'text-slate-300');
            });
            event.currentTarget.classList.add('bg-purple-900/40', 'border-purple-500', 'text-white');
            event.currentTarget.classList.remove('bg-slate-900', 'border-purple-900/50', 'text-slate-300');

            const readerText = document.getElementById('output-reader-text');
            readerText.className = `text-sm text-slate-300 leading-relaxed ${fontClass} space-y-3`;
        }

        function runHomeFunction(e) {
            e.preventDefault();
            const query = document.getElementById('input-book-query').value;
            const format = document.getElementById('input-book-format').value;

            document.getElementById('output-book-title').innerText = 'Title: ' + query;
            document.getElementById('output-book-format').innerText = 'Format: ' + format;
            
            const textElem = document.getElementById('output-reader-text');
            textElem.innerHTML = `
                <p><span class="text-purple-400 font-bold text-lg">Results for "${query}":</span> Loaded successfully into the Lumina reader engine.</p>
                <p class="text-slate-200">"Knowledge is the light that guides humanity through the deepest shadows of uncertainty." — Lumina Library Archives.</p>
            `;
            
            document.getElementById('output-status-pill').innerText = '● Book Loaded Successfully';
        }

        function quickLoadBook(title, genre) {
            document.getElementById('input-book-query').value = title;
            document.getElementById('output-book-title').innerText = 'Title: ' + title;
            document.getElementById('output-book-format').innerText = 'Genre: ' + genre;
            
            const textElem = document.getElementById('output-reader-text');
            textElem.innerHTML = `
                <p><span class="text-purple-400 font-bold text-lg">Now Reading "${title}":</span></p>
                <p class="text-slate-300">Chapter 1 loaded from the Lumina Digital Stream. Enjoy your reading session!</p>
            `;
            document.getElementById('home-function').scrollIntoView({ behavior: 'smooth' });
        }

        function nextChapter() {
            currentPageNum += 1;
            document.getElementById('chapter-num').innerText = `Page ${currentPageNum} of 320`;
        }

        function prevChapter() {
            if (currentPageNum > 1) {
                currentPageNum -= 1;
                document.getElementById('chapter-num').innerText = `Page ${currentPageNum} of 320`;
            }
        }

        function bookmarkBook() {
            alert(`Bookmark saved at Page ${currentPageNum}!`);
        }
    </script>

</x-layouts.public>
