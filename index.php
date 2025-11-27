<?php include 'includes/header.php'; ?>

<section class="pt-32 pb-20 bg-gradient-to-b from-medical-50 to-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="relative z-10">
                <span class="inline-block py-1 px-3 rounded-full bg-teal-100 text-teal-800 text-sm font-semibold mb-6">
                    Designed exclusively for Medical Professionals
                </span>
                <h1 class="text-5xl md:text-6xl font-bold text-medical-900 leading-tight mb-6">
                    Automate your Clinic while you treat <span class="text-medical-500">Patients.</span>
                </h1>
                <p class="text-xl text-slate-500 mb-8 leading-relaxed">
                    We build high-performance websites and AI Receptionists that manage appointments, answer patient queries, and grow your practice 24/7.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-flex justify-center items-center px-8 py-4 text-lg font-semibold rounded-xl text-white bg-medical-600 hover:bg-medical-500 shadow-xl shadow-medical-500/20 transition-all">
                        Get Your Digital Clinic
                    </a>
                    <a href="#demo" class="inline-flex justify-center items-center px-8 py-4 text-lg font-semibold rounded-xl text-medical-700 bg-white border border-slate-200 hover:bg-slate-50 transition-all">
                        See AI Demo
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -top-10 -right-10 w-72 h-72 bg-teal-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
                <div class="absolute -bottom-10 -left-10 w-72 h-72 bg-medical-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
                
                <div class="relative rounded-2xl shadow-2xl bg-white p-2 border border-slate-100">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80" alt="Doctor using tablet" class="rounded-xl w-full object-cover h-[500px]">
                    
                    <div class="absolute bottom-8 left-8 bg-white p-4 rounded-lg shadow-lg border border-slate-100 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-wider">New Appointment</p>
                            <p class="text-sm font-bold text-slate-800">Booked via AI Chatbot</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-medical-900">Everything a Modern Clinic Needs</h2>
            <p class="mt-4 text-lg text-slate-500">Stop relying on JustDial or generic agencies.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-medical-100 rounded-xl flex items-center justify-center text-medical-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3">High-Converting Website</h3>
                <p class="text-slate-600">A clean, mobile-responsive website designed to build trust. Includes doctor profiles, department details, and easy location maps.</p>
            </div>

            <div class="p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:shadow-lg transition-shadow duration-300">
                <div class="w-14 h-14 bg-teal-100 rounded-xl flex items-center justify-center text-teal-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3">Medical AI Receptionist</h3>
                <p class="text-slate-600">An intelligent chatbot trained on <strong>your</strong> clinic's data. It answers fees, timings, and FAQs instantly on WhatsApp or Web.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-20 bg-medical-900 text-white">
    <div class="max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-8">Ready to upgrade your practice?</h2>
        <form action="submit.php" method="POST" class="space-y-4 text-left bg-white p-8 rounded-xl shadow-2xl">
            <div>
                <label class="block text-slate-700 font-medium mb-2">Doctor/Clinic Name</label>
                <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-slate-300 text-slate-900 focus:ring-2 focus:ring-medical-500 outline-none">
            </div>
            <div>
                <label class="block text-slate-700 font-medium mb-2">Phone Number</label>
                <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-slate-300 text-slate-900 focus:ring-2 focus:ring-medical-500 outline-none">
            </div>
            <button type="submit" class="w-full py-4 bg-medical-600 hover:bg-medical-500 text-white font-bold rounded-lg transition-colors">
                Request Callback
            </button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>