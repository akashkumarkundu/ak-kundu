<x-layouts.public title="Lumina Online Library | Contact Segment & Librarian Inquiry Function">

    <!-- Contact Hero -->
    <section class="py-16 lg:py-20 border-b border-purple-900/30 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-300 text-xs sm:text-sm font-semibold mb-6">
                <span>💬 Segment 3: Contacts & Live Librarian Support Engine</span>
            </div>
            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight mb-6 font-heading">
                Contact <span class="purple-blue-gradient-text">Lumina Library</span>
            </h1>
            <p class="text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Have a question about your membership, need research assistance, or want to request a new title? Test the contact function below!
            </p>
        </div>
    </section>

    <!-- SEGMENT 3 FUNCTION DEMO: Interactive Inquiry Input & Live Ticket Response Output Engine -->
    <section id="contact-function" class="py-20 bg-slate-900/70 border-b border-purple-900/40 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-xs font-bold uppercase tracking-wider font-heading">
                    ⚡ Segment 3 Function Demo
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white font-heading">Contact Function: Live Librarian Inquiry & Response Engine</h2>
                <p class="text-slate-300 text-sm">Fill in your message inputs to test the contact submission function and view the instant librarian ticket output!</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- INPUT FORM PANEL -->
                <div class="lg:col-span-6 rounded-3xl glass-purple-card p-6 sm:p-8 border border-indigo-500/40 shadow-2xl space-y-6">
                    <div class="flex items-center gap-3 border-b border-purple-900/50 pb-4">
                        <div class="w-10 h-10 rounded-xl purple-blue-gradient text-white flex items-center justify-center font-bold text-lg">
                            ✉️
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white font-heading">Contact Input Form</h3>
                            <p class="text-xs text-indigo-300">Submit your librarian inquiry parameters</p>
                        </div>
                    </div>

                    <form action="{{ route('contact.submit') }}" method="POST" onsubmit="runContactFunction(event)" class="space-y-4 text-xs">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Input 1: Name -->
                            <div>
                                <label class="block font-bold text-purple-200 uppercase tracking-wider mb-2">1. Your Full Name <span class="text-rose-400">*</span></label>
                                <input id="contact-input-name" type="text" name="name" value="{{ old('name', 'Sarah Jenkins') }}" required placeholder="e.g. Sarah Jenkins"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-purple-900/60 text-white text-sm focus:outline-none focus:border-purple-500">
                            </div>

                            <!-- Input 2: Email -->
                            <div>
                                <label class="block font-bold text-purple-200 uppercase tracking-wider mb-2">2. Reader Email <span class="text-rose-400">*</span></label>
                                <input id="contact-input-email" type="email" name="email" value="{{ old('email', 'sarah@university.edu') }}" required placeholder="sarah@university.edu"
                                       class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-purple-900/60 text-white text-sm focus:outline-none focus:border-purple-500">
                            </div>
                        </div>

                        <!-- Input 3: Subject -->
                        <div>
                            <label class="block font-bold text-purple-200 uppercase tracking-wider mb-2">3. Inquiry Subject / Book Title <span class="text-rose-400">*</span></label>
                            <input id="contact-input-subject" type="text" name="subject" value="{{ old('subject', 'Requesting IEEE Research Paper Access for AI Thesis') }}" required placeholder="e.g. Requesting addition of Quantum Physics"
                                   class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-purple-900/60 text-white text-sm focus:outline-none focus:border-purple-500">
                        </div>

                        <!-- Input 4: Message -->
                        <div>
                            <label class="block font-bold text-purple-200 uppercase tracking-wider mb-2">4. Detailed Inquiry Message <span class="text-rose-400">*</span></label>
                            <textarea id="contact-input-message" name="message" rows="3" required placeholder="Describe your question or research request..."
                                      class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-purple-900/60 text-white text-sm focus:outline-none focus:border-purple-500 leading-relaxed">{{ old('message', 'Hello Lumina Library, I am working on my thesis and need full PDF access to IEEE AI Papers from 2026. Thank you!') }}</textarea>
                        </div>

                        <!-- Action Button -->
                        <button type="submit" class="w-full py-4 rounded-xl purple-blue-gradient text-white font-bold text-sm shadow-xl hover:opacity-95 transition-opacity flex items-center justify-center gap-2">
                            <span>Execute Contact Function (Submit & Generate Response)</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </form>
                </div>

                <!-- OUTPUT DISPLAY PANEL -->
                <div class="lg:col-span-6 rounded-3xl glass-purple-card p-6 sm:p-8 border border-indigo-500/40 shadow-2xl space-y-6">
                    <div class="flex items-center justify-between border-b border-purple-900/50 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold text-lg">
                                🎫
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white font-heading">Function Output Ticket</h3>
                                <p class="text-xs text-indigo-300">Live Librarian Response Ticket Result</p>
                            </div>
                        </div>
                        <span id="contact-status-pill" class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 font-mono text-xs font-bold">● Ticket Created</span>
                    </div>

                    <!-- Ticket Output Display Card -->
                    <div class="rounded-2xl bg-slate-950 border border-purple-900/60 p-6 space-y-4 shadow-xl">
                        
                        <div class="flex items-center justify-between border-b border-slate-800 pb-3 text-xs">
                            <span id="ticket-id" class="font-bold text-purple-300 font-mono">Ticket ID: #LUM-TK8492</span>
                            <span class="text-emerald-400 font-mono font-bold">Priority: High (Scholar)</span>
                        </div>

                        <div class="space-y-2 text-xs">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Requester Name:</span>
                                <span id="ticket-name" class="text-white font-semibold">Sarah Jenkins</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Recipient Email:</span>
                                <span id="ticket-email" class="text-blue-300 font-mono">sarah@university.edu</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Subject:</span>
                                <span id="ticket-subject" class="text-purple-300 font-semibold truncate max-w-[220px]">IEEE Research Paper Access</span>
                            </div>
                        </div>

                        <!-- Automated Response Simulation -->
                        <div class="p-4 rounded-xl bg-indigo-950/60 border border-indigo-500/40 space-y-2 text-xs">
                            <div class="flex items-center gap-2 text-indigo-300 font-bold">
                                <span>📚 Automated Librarian Response:</span>
                            </div>
                            <p id="ticket-response" class="text-slate-200 leading-relaxed italic">
                                "Hello Sarah Jenkins, your research request regarding IEEE AI Papers has been logged. Lumina Library has dispatched your request to Head Librarian Dr. Vance. PDF download links will be sent to sarah@university.edu!"
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Info Column -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl bg-slate-900/80 border border-purple-900/40 space-y-2">
                    <h3 class="font-bold text-white text-base font-heading">🏛️ Lumina Main Branch</h3>
                    <p class="text-slate-400 text-xs">450 Knowledge Boulevard, Academic District<br>Boston, MA 02115, USA</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-900/80 border border-purple-900/40 space-y-2">
                    <h3 class="font-bold text-white text-base font-heading">📞 Direct Contact Desk</h3>
                    <p class="text-slate-400 text-xs">Librarian Email: librarian@luminalibrary.org<br>Help Desk: +1 (888) 555-READ</p>
                </div>
                <div class="p-6 rounded-2xl bg-slate-900/80 border border-purple-900/40 space-y-2">
                    <h3 class="font-bold text-white text-base font-heading">⏰ Operating Hours</h3>
                    <p class="text-slate-400 text-xs">Digital Catalog: 24/7 Available<br>Physical Desk: Mon - Sat 8 AM - 10 PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Function Scripts -->
    <script>
        function runContactFunction(e) {
            // Note: form submits via POST to backend, but we also demonstrate live output function here!
            const name = document.getElementById('contact-input-name').value;
            const email = document.getElementById('contact-input-email').value;
            const subject = document.getElementById('contact-input-subject').value;
            
            document.getElementById('ticket-name').innerText = name;
            document.getElementById('ticket-email').innerText = email;
            document.getElementById('ticket-subject').innerText = subject;
            
            const randomTk = '#LUM-TK' + Math.floor(1000 + Math.random() * 9000);
            document.getElementById('ticket-id').innerText = 'Ticket ID: ' + randomTk;
            document.getElementById('ticket-response').innerText = `"Hello ${name}, your inquiry regarding '${subject}' has been logged into Lumina Library ticket system. A confirmation email has been dispatched to ${email}!"`;
            document.getElementById('contact-status-pill').innerText = '● Ticket Dispatched';
        }
    </script>

</x-layouts.public>
