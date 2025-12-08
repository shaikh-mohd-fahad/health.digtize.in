<?php include 'includes/header.php'; ?>

<style>
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
        100% { transform: translateY(0px); }
    }
    @keyframes pulse-glow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-float-delayed {
        animation: float 6s ease-in-out 3s infinite;
    }
    .blob {
        position: absolute;
        filter: blur(80px);
        z-index: -1;
        opacity: 0.4;
        animation: pulse-glow 10s infinite;
    }
</style>

<section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
    <div class="blob bg-blue-400 w-96 h-96 rounded-full top-0 left-0 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="blob bg-teal-400 w-96 h-96 rounded-full bottom-0 right-0 translate-x-1/2 translate-y-1/2"></div>
    <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <div class="max-w-3xl" data-aos="fade-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 backdrop-blur-md border border-blue-100 shadow-sm text-blue-600 text-xs font-bold tracking-wide uppercase mb-8">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-500 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                    </span>
                    AI for Healthcare v2.0
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-8">
                    Your Clinic's New <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-teal-500 to-blue-600 bg-[length:200%_auto] animate-gradient">Super Receptionist.</span>
                </h1>
                
                <p class="text-xl text-slate-600 mb-10 leading-relaxed max-w-lg">
                    Stop losing patients to missed calls. We build <strong>Intelligent Websites</strong> and <strong>AI Chatbots</strong> that grow your practice on autopilot.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="group relative inline-flex justify-center items-center px-8 py-4 text-base font-semibold text-white bg-slate-900 rounded-xl overflow-hidden transition-all hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/30">
                        <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-600 to-teal-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="relative z-10">Deploy Your AI Agent</span>
                    </a>
                    
                    <a href="#services" class="inline-flex justify-center items-center px-8 py-4 text-base font-semibold text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 hover:border-slate-300 transition-all hover:-translate-y-1 shadow-sm">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        See It In Action
                    </a>
                </div>
                
                <div class="mt-10 flex items-center gap-4 text-sm font-medium text-slate-600">
                    <div class="flex -space-x-3">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full border-2 border-white shadow-md" alt="Doctor">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full border-2 border-white shadow-md" alt="Doctor">
                        <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-100 flex items-center justify-center text-xs text-slate-500 font-bold shadow-md">+10</div>
                    </div>
                    <p>Trusted by Doctors in <span class="text-blue-600">Lucknow</span></p>
                </div>
            </div>

            <div class="relative lg:h-[600px] w-full flex items-center justify-center perspective-1000" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute top-10 right-10 bg-white p-3 rounded-2xl shadow-xl animate-float-delayed z-20">
                    <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="absolute bottom-20 left-0 bg-white p-3 rounded-2xl shadow-xl animate-float z-20">
                    <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>

                <div class="relative w-[340px] bg-slate-900 rounded-[3rem] border-[8px] border-slate-900 shadow-2xl shadow-blue-500/20 overflow-hidden transform rotate-[-3deg] hover:rotate-0 transition duration-700 ease-out z-10">
                    <div class="absolute top-0 inset-x-0 h-7 bg-slate-900 rounded-b-xl w-40 mx-auto z-20"></div>
                    
                    <div class="bg-slate-800/50 backdrop-blur-md border-b border-white/10 p-5 pt-12 flex items-center gap-3">
                        <div class="relative">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-blue-500 to-teal-400 flex items-center justify-center text-white font-bold text-sm shadow-lg">AI</div>
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-slate-900 rounded-full"></div>
                        </div>
                        <div>
                            <p class="text-base font-bold text-white">Clinic Assistant</p>
                            <p class="text-xs text-slate-400">Replies instantly</p>
                        </div>
                    </div>
                    
                    <div class="bg-slate-900 p-4 space-y-4 h-[450px] flex flex-col justify-end pb-8">
                        <div class="flex gap-3" data-aos="fade-up" data-aos-delay="500">
                            <div class="bg-slate-800 text-slate-200 text-sm p-4 rounded-2xl rounded-tl-none max-w-[85%] leading-relaxed border border-white/5">
                                Hello! Welcome to City Care Clinic. How can I help you today?
                            </div>
                        </div>
                        <div class="flex gap-3 justify-end" data-aos="fade-up" data-aos-delay="1000">
                            <div class="bg-gradient-to-r from-blue-600 to-teal-500 text-white text-sm p-4 rounded-2xl rounded-tr-none max-w-[85%] leading-relaxed shadow-lg">
                                What is the consultation fee for Dr. Sharma?
                            </div>
                        </div>
                        <div class="flex gap-3" data-aos="fade-up" data-aos-delay="1500">
                            <div class="bg-slate-800 text-slate-200 text-sm p-4 rounded-2xl rounded-tl-none max-w-[85%] border border-white/5">
                                <p class="mb-3">Dr. Sharma's consultation fee is <span class="text-teal-400 font-bold">₹800</span>.</p>
                                <button class="w-full py-2.5 bg-white text-slate-900 font-bold rounded-lg text-xs hover:bg-slate-200 transition">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="border-y border-slate-100 bg-slate-50/50 py-8 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <p class="text-xs font-bold text-slate-400 uppercase tracking-[0.2em] mb-6">Powered by Enterprise Grade Technology</p>
        <div class="flex justify-center gap-12 opacity-60 grayscale mix-blend-multiply filter contrast-125">
             <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/OpenAI_Logo.svg" class="h-8" alt="OpenAI">
             <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="h-8" alt="WhatsApp">
             <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" class="h-8" alt="Laravel">
        </div>
    </div>
</section>

<section id="services" class="py-24 bg-white relative">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-100/50 rounded-full filter blur-3xl mix-blend-multiply animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-teal-100/50 rounded-full filter blur-3xl mix-blend-multiply animate-float-delayed"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-slate-900 tracking-tight mb-4">Digital Infrastructure <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-teal-500">Built for Doctors</span></h2>
            <p class="text-lg text-slate-500">We don't just make websites. We build automated systems that act as your digital assets.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-2 group relative bg-white/60 backdrop-blur-xl border border-white/20 p-8 rounded-3xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up">
                <div class="absolute inset-0 bg-gradient-to-br from-white/40 to-transparent rounded-3xl"></div>
                <div class="relative z-10 flex flex-col md:flex-row gap-8 items-center">
                    <div class="flex-1">
                        <div class="w-14 h-14 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/30 text-white">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">Custom AI Receptionist</h3>
                        <p class="text-slate-600 mb-6 leading-relaxed">Train an AI on your clinic's specific data. It handles patient inquiries about fees, timings, and location on WhatsApp and Web seamlessly.</p>
                        <ul class="space-y-2">
                             <li class="flex items-center gap-2 text-sm font-medium text-slate-700">
                                <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                24/7 Availability
                            </li>
                            <li class="flex items-center gap-2 text-sm font-medium text-slate-700">
                                <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Handles 100+ chats at once
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/3 h-48 bg-gradient-to-br from-blue-50 to-white rounded-2xl border border-blue-100 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-blue-200 rounded-full blur-2xl opacity-50"></div>
                         <div class="text-center">
                            <div class="text-4xl font-bold text-blue-600 mb-1">0s</div>
                            <div class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Response Time</div>
                         </div>
                    </div>
                </div>
            </div>

            <div class="group relative bg-white/60 backdrop-blur-xl border border-white/20 p-8 rounded-3xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-teal-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-teal-500/30 text-white">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Google Maps SEO</h3>
                <p class="text-slate-500 text-sm leading-relaxed">We optimize your digital presence so local patients find YOU first when they search "best doctor near me".</p>
            </div>

            <div class="group relative bg-white/60 backdrop-blur-xl border border-white/20 p-8 rounded-3xl shadow-xl hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-violet-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-violet-500/30 text-white">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Smart Booking</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Direct integration with your calendar. Patients book available slots, you get notified instantly.</p>
            </div>
            
            <div class="md:col-span-3 group relative overflow-hidden bg-slate-900 p-8 rounded-3xl shadow-2xl" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-teal-500/20"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-6">
                        <div class="p-3 bg-white/10 rounded-full">
                            <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">HIPAA Compliant & Secure</h3>
                            <p class="text-slate-400 text-sm">Your patient data is encrypted and safe.</p>
                        </div>
                    </div>
                    <button class="px-6 py-2 bg-white/10 border border-white/20 hover:bg-white/20 text-white rounded-lg text-sm font-semibold transition">Read Security Policy</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-slate-900">Go Live in 7 Days</h2>
            <p class="text-slate-500 mt-2">Zero technical headache for you.</p>
        </div>

        <div class="relative">
            <div class="hidden md:block absolute top-12 left-0 w-full h-0.5 bg-gradient-to-r from-blue-200 via-teal-200 to-blue-200 z-0"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative z-10">
                <div class="group text-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-24 h-24 mx-auto bg-white rounded-full border-4 border-blue-50 flex items-center justify-center shadow-lg mb-6 group-hover:scale-110 transition-transform duration-300 relative">
                         <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-2xl">1</div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Data Collection</h3>
                    <p class="text-slate-500 text-sm px-4">We collect your fee structure and FAQs. We take photos of your clinic if needed.</p>
                </div>

                <div class="group text-center" data-aos="fade-up" data-aos-delay="150">
                    <div class="w-24 h-24 mx-auto bg-white rounded-full border-4 border-teal-50 flex items-center justify-center shadow-lg mb-6 group-hover:scale-110 transition-transform duration-300 relative">
                         <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold text-2xl">2</div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">AI Training</h3>
                    <p class="text-slate-500 text-sm px-4">Our engineers train the chatbot to speak exactly like your staff.</p>
                </div>

                <div class="group text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-24 h-24 mx-auto bg-white rounded-full border-4 border-slate-100 flex items-center justify-center shadow-lg mb-6 group-hover:scale-110 transition-transform duration-300 relative">
                         <div class="w-16 h-16 bg-slate-900 rounded-full flex items-center justify-center text-white font-bold text-2xl">3</div>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Launch</h3>
                    <p class="text-slate-500 text-sm px-4">We connect your WhatsApp API and hand over the dashboard keys.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="work" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end mb-12" data-aos="fade-up">
            <div>
                <h2 class="text-3xl font-bold text-slate-900">Recent Implementations</h2>
                <p class="text-slate-500 mt-2">See how we transformed these medical practices.</p>
            </div>
            <a href="#" class="hidden md:inline-flex items-center text-blue-600 font-semibold hover:text-blue-700">View All Projects &rarr;</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group rounded-2xl overflow-hidden border border-slate-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 cursor-pointer" data-aos="fade-up">
                <div class="h-56 bg-gradient-to-br from-blue-100 to-white relative flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-blue-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                    <span class="text-blue-300/50 font-black text-5xl tracking-tighter group-hover:scale-110 transition-transform duration-500">CLINIC</span>
                </div>
                <div class="p-6 bg-white">
                    <div class="flex gap-2 mb-3">
                         <span class="px-2 py-1 bg-blue-50 text-blue-600 text-[10px] font-bold uppercase tracking-wider rounded">AI Chatbot</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">City Dental Care</h3>
                    <p class="text-slate-400 text-sm mt-1">Gomti Nagar, Lucknow</p>
                </div>
            </div>
             <div class="group rounded-2xl overflow-hidden border border-slate-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="h-56 bg-gradient-to-br from-teal-100 to-white relative flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-teal-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                    <span class="text-teal-300/50 font-black text-5xl tracking-tighter group-hover:scale-110 transition-transform duration-500">HOSPITAL</span>
                </div>
                <div class="p-6 bg-white">
                     <div class="flex gap-2 mb-3">
                         <span class="px-2 py-1 bg-teal-50 text-teal-600 text-[10px] font-bold uppercase tracking-wider rounded">Web Design</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Sunshine Orthopedics</h3>
                    <p class="text-slate-400 text-sm mt-1">Aliganj, Lucknow</p>
                </div>
            </div>
             <div class="group rounded-2xl overflow-hidden border border-slate-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="h-56 bg-gradient-to-br from-violet-100 to-white relative flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-violet-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                    <span class="text-violet-300/50 font-black text-5xl tracking-tighter group-hover:scale-110 transition-transform duration-500">LABS</span>
                </div>
                <div class="p-6 bg-white">
                     <div class="flex gap-2 mb-3">
                         <span class="px-2 py-1 bg-violet-50 text-violet-600 text-[10px] font-bold uppercase tracking-wider rounded">Automation</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Rapid Path Labs</h3>
                    <p class="text-slate-400 text-sm mt-1">Indira Nagar, Lucknow</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-slate-900 mb-16" data-aos="fade-up">Success Stories</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 bg-white rounded-2xl shadow-sm border border-slate-100" data-aos="fade-up">
                <div class="text-yellow-400 mb-4 flex">★★★★★</div>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">"Before Digtize, my receptionist was overwhelmed. Now the AI handles 90% of those queries regarding fees and timings. Highly recommended."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">AS</div>
                    <div>
                        <div class="font-bold text-slate-900 text-sm">Dr. Amit Sharma</div>
                        <div class="text-slate-500 text-xs">Dentist, Gomti Nagar</div>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-white rounded-2xl shadow-sm border border-slate-100" data-aos="fade-up" data-aos-delay="100">
                <div class="text-yellow-400 mb-4 flex">★★★★★</div>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">"The website they built is extremely fast. We noticed a 40% increase in patients finding us via Google Maps within 2 months."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 font-bold">PV</div>
                    <div>
                        <div class="font-bold text-slate-900 text-sm">Dr. Priya Verma</div>
                        <div class="text-slate-500 text-xs">Dermatologist, Hazratganj</div>
                    </div>
                </div>
            </div>
            <div class="p-8 bg-white rounded-2xl shadow-sm border border-slate-100" data-aos="fade-up" data-aos-delay="200">
                <div class="text-yellow-400 mb-4 flex">★★★★★</div>
                <p class="text-slate-600 text-sm leading-relaxed mb-6">"Very professional team. Fahad understood our medical requirements immediately without us needing to explain technical terms."</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-violet-100 flex items-center justify-center text-violet-600 font-bold">CC</div>
                    <div>
                        <div class="font-bold text-slate-900 text-sm">City Care Clinic</div>
                        <div class="text-slate-500 text-xs">Admin Team</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-white z-0"></div>
    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-slate-50 z-0"></div>

    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <div class="relative rounded-[2.5rem] overflow-hidden bg-slate-900 shadow-2xl shadow-blue-900/40" data-aos="zoom-in-up">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-teal-600 opacity-90"></div>
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-80 h-80 bg-blue-500 opacity-30 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-80 h-80 bg-teal-400 opacity-30 rounded-full blur-3xl animate-float-delayed"></div>
            
            <div class="relative z-10 p-10 md:p-16 text-center">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 tracking-tight">Ready to upgrade your Clinic?</h2>
                <p class="text-blue-50 text-lg mb-10 max-w-xl mx-auto leading-relaxed">Get a free consultation. We will analyze your current digital presence and propose a custom growth plan.</p>
                
                <form action="submit.php" method="POST" class="max-w-md mx-auto space-y-4">
                    <div class="group relative">
                        <input type="text" name="name" placeholder="Doctor / Clinic Name" required class="w-full px-6 py-4 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 text-white placeholder-white/60 focus:ring-2 focus:ring-white/50 focus:bg-white/20 outline-none transition-all shadow-lg">
                    </div>

                    <div class="relative group">
                         <select name="specialty" class="w-full px-6 py-4 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 text-white focus:text-white focus:ring-2 focus:ring-white/50 focus:bg-white/20 shadow-lg transition-all appearance-none cursor-pointer">
                            <option value="" disabled selected class="text-slate-900">Select Specialty</option>
                            <option value="dentist" class="text-slate-900">Dentist</option>
                            <option value="dermatologist" class="text-slate-900">Dermatologist</option>
                            <option value="orthopedic" class="text-slate-900">Orthopedic</option>
                            <option value="pediatrician" class="text-slate-900">Pediatrician</option>
                            <option value="general_physician" class="text-slate-900">General Physician</option>
                            <option value="other" class="text-slate-900">Other</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-6 pointer-events-none">
                            <svg class="w-5 h-5 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>

                    <div class="group relative">
                        <input type="tel" name="phone" placeholder="Phone Number" required class="w-full px-6 py-4 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 text-white placeholder-white/60 focus:ring-2 focus:ring-white/50 focus:bg-white/20 outline-none transition-all shadow-lg">
                    </div>
                    
                    <button type="submit" class="w-full py-4 px-6 bg-white text-blue-700 font-bold text-lg rounded-xl hover:bg-blue-50 hover:scale-[1.02] transition-all shadow-xl shadow-blue-900/20">Request Callback</button>
                    <p class="text-xs text-blue-100 mt-6 opacity-80">We respect your privacy. No spam, ever.</p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>