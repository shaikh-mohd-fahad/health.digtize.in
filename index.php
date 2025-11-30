<?php include 'includes/header.php'; ?>
<!-- hero section -->
<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <div class="absolute inset-0 -z-10 h-full w-full bg-white bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:14px_24px]">
        <div class="absolute left-0 right-0 top-0 -z-10 m-auto h-[310px] w-[310px] rounded-full bg-teal-400 opacity-20 blur-[100px]"></div>
        <div class="absolute right-0 top-0 -z-10 h-[500px] w-[500px] rounded-full bg-blue-400 opacity-10 blur-[80px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-xs font-bold tracking-wide uppercase mb-6">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                    </span>
                    AI for Healthcare
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-6">
                    Your Clinic's New <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-teal-500">Super Receptionist.</span>
                </h1>
                
                <p class="text-lg text-slate-500 mb-8 leading-relaxed max-w-lg">
                    Stop losing patients to missed calls. We build <strong>Intelligent Websites</strong> and <strong>AI Chatbots</strong> that book appointments 24/7, answer FAQs, and grow your practice on autopilot.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-flex justify-center items-center px-8 py-4 text-base font-semibold text-white transition-all duration-200 bg-slate-900 rounded-lg hover:bg-slate-700 hover:shadow-lg hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900">
                        Deploy Your AI Agent
                    </a>
                    <a href="#demo" class="inline-flex justify-center items-center px-8 py-4 text-base font-semibold text-slate-700 transition-all duration-200 bg-white border border-slate-200 rounded-lg hover:bg-slate-50 hover:text-slate-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-200">
                        <svg class="w-5 h-5 mr-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Watch Demo
                    </a>
                </div>
                
                <div class="mt-8 flex items-center gap-4 text-sm text-slate-500">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-slate-200 border-2 border-white"></div>
                        <div class="w-8 h-8 rounded-full bg-slate-300 border-2 border-white"></div>
                        <div class="w-8 h-8 rounded-full bg-slate-400 border-2 border-white"></div>
                    </div>
                    <p>Trusted by <strong>10+ Doctors</strong> in Lucknow</p>
                </div>
            </div>

            <div class="relative lg:h-[600px] w-full flex items-center justify-center perspective-1000">
                <div class="relative w-[320px] bg-white rounded-[2.5rem] border-[8px] border-slate-900 shadow-2xl overflow-hidden transform rotate-[-3deg] hover:rotate-0 transition duration-500 ease-out z-10">
                    <div class="absolute top-0 inset-x-0 h-6 bg-slate-900 rounded-b-xl w-40 mx-auto z-20"></div>
                    
                    <div class="bg-slate-50 border-b p-4 pt-10 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-500 to-teal-400 flex items-center justify-center text-white font-bold text-xs">AI</div>
                        <div>
                            <p class="text-sm font-bold text-slate-800">Clinic Assistant</p>
                            <p class="text-xs text-green-500 flex items-center gap-1"><span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Online</p>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 space-y-4 h-[400px] flex flex-col justify-end pb-6">
                        <div class="flex gap-2">
                            <div class="w-6 h-6 rounded-full bg-blue-100 flex-shrink-0"></div>
                            <div class="bg-slate-100 text-slate-700 text-xs p-3 rounded-2xl rounded-tl-none max-w-[85%]">
                                Hello! Welcome to City Care Clinic. How can I help you today?
                            </div>
                        </div>
                         <div class="flex gap-2 justify-end">
                            <div class="bg-blue-600 text-white text-xs p-3 rounded-2xl rounded-tr-none max-w-[85%]">
                                What is the consultation fee for Dr. Sharma?
                            </div>
                        </div>
                         <div class="flex gap-2">
                            <div class="w-6 h-6 rounded-full bg-blue-100 flex-shrink-0"></div>
                            <div class="bg-slate-100 text-slate-700 text-xs p-3 rounded-2xl rounded-tl-none max-w-[85%] shadow-sm">
                                <p class="mb-2">Dr. Sharma's consultation fee is ₹800.</p>
                                <button class="block w-full text-center py-2 bg-white border border-slate-200 rounded-lg text-blue-600 font-semibold mt-1 hover:bg-blue-50">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[350px] h-[350px] bg-gradient-to-tr from-teal-200 to-blue-200 rounded-full blur-3xl opacity-50 -z-10"></div>
            </div>
        </div>
    </div>
</section>

<!-- tech stack section -->
<section class="border-y border-slate-100 bg-white py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm font-semibold text-slate-400 uppercase tracking-widest mb-8">Powered by Industry Leading Tech</p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-70 grayscale hover:grayscale-0 transition-all duration-500">
            <div class="flex items-center gap-2">
                <svg class="h-8 w-8 text-slate-800" viewBox="0 0 24 24" fill="currentColor"><path d="M22.2819 9.8211a5.9847 5.9847 0 0 0-.5157-4.9108 6.0462 6.0462 0 0 0-6.5098-2.9A6.0651 6.0651 0 0 0 4.9807 4.1818a5.9847 5.9847 0 0 0-3.9977 2.9 6.0462 6.0462 0 0 0 .7427 7.0966 5.98 5.98 0 0 0 .511 4.9107 6.051 6.051 0 0 0 6.5146 2.9001A5.9847 5.9847 0 0 0 13.2599 24a6.0557 6.0557 0 0 0 5.7718-4.2058 5.9894 5.9894 0 0 0 3.9977-2.9001 6.0557 6.0557 0 0 0-.7475-7.0729zm-9.022 12.6081a4.4755 4.4755 0 0 1-2.8764-1.0408l.1419-.0804 4.7783-2.7582a.7948.7948 0 0 0 .3927-.6813v-6.7369l2.02 1.1686a.071.071 0 0 1 .038.052v5.5826a4.504 4.504 0 0 1-4.4945 4.4944zm-9.6607-4.1254a4.4708 4.4708 0 0 1-.5346-3.0137l.142.0852 4.783 2.7582a.7712.7712 0 0 0 .7806 0l5.8428-3.3685v2.3324a.0804.0804 0 0 1-.0332.0615L9.74 19.9502a4.4992 4.4992 0 0 1-6.1408-1.6464zM2.3408 7.8956a4.485 4.485 0 0 1 2.3655-1.9728V11.6a.7664.7664 0 0 0 .3879.6765l5.8144 3.3543-2.0201 1.1685a.0757.0757 0 0 1-.071 0l-4.8303-2.7865A4.504 4.504 0 0 1 2.3408 7.872zm16.5963 3.8558L13.1038 8.364 15.1192 7.2a.0757.0757 0 0 1 .071 0l4.8303 2.7913a4.4944 4.4944 0 0 1-.6765 8.1042v-5.6772a.79.79 0 0 0-.407-.667zm2.0107-3.0231l-.142-.0852-4.7735-2.7818a.7759.7759 0 0 0-.7854 0L9.409 9.2297V6.8974a.0662.0662 0 0 1 .0284-.0615l4.8303-2.7866a4.4992 4.4992 0 0 1 6.6802 4.66zM8.3065 12.863l-2.02-1.1638a.0804.0804 0 0 1-.038-.0567V6.0742a4.4992 4.4992 0 0 1 7.3757-3.4537l-.142.0805L8.704 5.459a.7948.7948 0 0 0-.3927.6813zm1.0916-5.7056l4.854 2.8009v5.6111l-4.854-2.7961z"/></svg>
                <span class="font-bold text-lg text-slate-700">OpenAI</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                <span class="font-bold text-lg text-slate-700">WhatsApp API</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="font-bold text-lg text-slate-700">Laravel 11</span>
            </div>
             <div class="flex items-center gap-2">
                 <span class="font-bold text-lg text-slate-700">Cloud Host</span>
            </div>
        </div>
    </div>
</section>

<!-- services section -->
<section id="services" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-slate-900 tracking-tight sm:text-4xl">Digital Infrastructure for Doctors</h2>
            <p class="mt-4 text-lg text-slate-500">We don't just make websites. We build systems that save you 2+ hours every day.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-2 group relative overflow-hidden bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-blue-50 rounded-full blur-2xl group-hover:bg-blue-100 transition-colors"></div>
                
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/30">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Custom AI Receptionist</h3>
                    <p class="text-slate-500 mb-6 max-w-md">Train an AI on your clinic's specific data. It handles patient inquiries about fees, timings, and location on WhatsApp and Web. It never sleeps, never takes a holiday.</p>
                    <ul class="space-y-2 text-sm text-slate-600 font-medium">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Instant Replies (0s delay)
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Multilingual Support (Hindi/English)
                        </li>
                    </ul>
                </div>
            </div>

            <div class="group relative bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-teal-500 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-teal-500/30">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">High-Speed Medical Website</h3>
                <p class="text-slate-500 text-sm">SEO-optimized pages that help local patients find you on Google Maps. Clean, professional, and fast.</p>
            </div>

            <div class="group relative bg-white p-8 rounded-3xl shadow-sm border border-slate-200 hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-violet-500 rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-violet-500/30">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Automated Booking</h3>
                <p class="text-slate-500 text-sm">Syncs with your calendar. Patients book slots, you get notified. No back-and-forth calls.</p>
            </div>

            <div class="md:col-span-2 group relative overflow-hidden bg-slate-900 p-8 rounded-3xl shadow-lg border border-slate-800">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-900/50 to-teal-900/50"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-2">HIPAA & Data Privacy</h3>
                        <p class="text-slate-300 max-w-sm">We ensure patient data remains confidential. Security is built into the foundation of our code.</p>
                    </div>
                    <div class="flex-shrink-0">
                         <span class="inline-flex items-center px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white font-mono text-sm">
                            <svg class="w-4 h-4 mr-2 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            Encrypted
                         </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- detailed services section -->
<section class="py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
        
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="order-2 lg:order-1 relative">
                <div class="absolute inset-0 bg-blue-100 rounded-3xl transform rotate-3 scale-95"></div>
                <div class="relative bg-white border border-slate-100 p-8 rounded-3xl shadow-xl">
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                            <div class="bg-slate-100 p-3 rounded-lg text-sm text-slate-600 w-3/4">Is the clinic open on Sunday?</div>
                        </div>
                        <div class="flex gap-3 justify-end">
                             <div class="bg-blue-600 p-3 rounded-lg text-sm text-white w-3/4">Yes, Dr. Sharma is available from 10 AM to 2 PM on Sundays. Would you like to book a slot?</div>
                             <div class="w-8 h-8 rounded-full bg-blue-100"></div>
                        </div>
                         <div class="flex gap-3">
                            <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                            <div class="bg-slate-100 p-3 rounded-lg text-sm text-slate-600 w-2/4">Yes, please.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                </div>
                <h3 class="text-3xl font-bold text-slate-900 mb-4">The Receptionist that Never Sleeps</h3>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Your front desk staff gets tired, takes holidays, and misses calls. Our AI Agent handles hundreds of patients simultaneously.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <strong>Trained on your Data:</strong> Knows your fees, timings, and procedures.
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <strong>WhatsApp Integration:</strong> Patients chat where they are comfortable.
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <strong>Lead Capture:</strong> Sends new patient details directly to your phone.
                    </li>
                </ul>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="order-1">
                <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center text-teal-600 mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                </div>
                <h3 class="text-3xl font-bold text-slate-900 mb-4">Websites Built for Trust & Speed</h3>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Patients Google you before they visit. If your website looks old or doesn't open fast, you lose them. We build premium digital clinics.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-teal-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <strong>SEO Optimized:</strong> Rank higher on "Dentist near me" searches.
                    </li>
                    <li class="flex items-center gap-3 text-slate-700">
                        <svg class="w-5 h-5 text-teal-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <strong>Mobile First:</strong> Looks perfect on every smartphone.
                    </li>
                </ul>
            </div>
            <div class="order-2 relative">
                <div class="absolute inset-0 bg-teal-100 rounded-3xl transform -rotate-3 scale-95"></div>
                <div class="relative bg-white border border-slate-100 rounded-xl shadow-xl overflow-hidden h-64">
                    <div class="bg-slate-50 border-b p-3 flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-400"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                        <div class="w-3 h-3 rounded-full bg-green-400"></div>
                    </div>
                    <div class="p-6">
                        <div class="h-4 bg-slate-200 rounded w-1/3 mb-4"></div>
                        <div class="h-32 bg-slate-100 rounded w-full mb-4"></div>
                        <div class="flex gap-4">
                            <div class="h-20 bg-slate-100 rounded w-1/2"></div>
                            <div class="h-20 bg-slate-100 rounded w-1/2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- portfolio section  -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-900">Recent Implementations</h2>
            <p class="text-slate-500 mt-2">See how we transformed these medical practices.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group bg-white rounded-2xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all duration-300">
                <div class="h-48 bg-blue-100 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center text-blue-300 font-bold text-4xl opacity-20">CLINIC</div>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs font-bold rounded">AI Chatbot</span>
                        <span class="px-2 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded">Booking System</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">City Dental Care</h3>
                    <p class="text-slate-500 text-sm mb-4">Automated patient follow-ups and reduced reception workload by 40%.</p>
                    <a href="#" class="text-blue-600 font-semibold text-sm hover:underline">View Case Study &rarr;</a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all duration-300">
                <div class="h-48 bg-teal-100 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center text-teal-300 font-bold text-4xl opacity-20">HOSPITAL</div>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-4">
                        <span class="px-2 py-1 bg-teal-50 text-teal-600 text-xs font-bold rounded">Website Redesign</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Sunshine Orthopedics</h3>
                    <p class="text-slate-500 text-sm mb-4">A complete brand overhaul with SEO that increased local patient footfall.</p>
                    <a href="#" class="text-teal-600 font-semibold text-sm hover:underline">View Case Study &rarr;</a>
                </div>
            </div>

            <div class="group bg-white rounded-2xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all duration-300">
                <div class="h-48 bg-violet-100 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center text-violet-300 font-bold text-4xl opacity-20">PATH LAB</div>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-4">
                        <span class="px-2 py-1 bg-violet-50 text-violet-600 text-xs font-bold rounded">Report Automation</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Rapid Path Labs</h3>
                    <p class="text-slate-500 text-sm mb-4">WhatsApp bot that allows patients to download reports automatically.</p>
                    <a href="#" class="text-violet-600 font-semibold text-sm hover:underline">View Case Study &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- // testimonials section -->
<section class="py-24 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-slate-900 mb-16">Trusted by Doctors</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="p-8 bg-slate-50 rounded-2xl relative">
                <svg class="absolute top-8 right-8 w-8 h-8 text-slate-200" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.0547 15.192 15.125 16.279 15.125C16.883 15.125 17.513 15.3438 17.969 15.8672C18.426 16.3906 18.665 17.1016 18.665 18C18.665 19.6562 17.318 21 15.659 21H14.017ZM16.279 13.125C14.398 13.125 12.872 14.6504 12.872 16.5312V21H9V12.9844C9 8.75 12.422 5.32812 16.657 5.32812V8.32812C14.086 8.32812 11.996 10.418 11.996 12.9844H13.633C15.094 12.9844 16.279 13.125 16.279 13.125ZM5.017 21L5.017 18C5.017 16.0547 6.192 15.125 7.279 15.125C7.883 15.125 8.513 15.3438 8.969 15.8672C9.426 16.3906 9.665 17.1016 9.665 18C9.665 19.6562 8.318 21 6.659 21H5.017ZM7.279 13.125C5.398 13.125 3.872 14.6504 3.872 16.5312V21H0V12.9844C0 8.75 3.422 5.32812 7.657 5.32812V8.32812C5.086 8.32812 2.996 10.418 2.996 12.9844H4.633C6.094 12.9844 7.279 13.125 7.279 13.125Z"/></svg>
                <div class="flex gap-1 text-yellow-400 mb-4">
                    ★★★★★
                </div>
                <p class="text-slate-600 italic mb-6">"Before Digtize, my receptionist was overwhelmed with calls asking for timings. Now the AI handles 90% of those queries."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-200"></div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">Dr. Amit Sharma</h4>
                        <p class="text-xs text-slate-500">Dentist, Gomti Nagar</p>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-slate-50 rounded-2xl relative">
                <svg class="absolute top-8 right-8 w-8 h-8 text-slate-200" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.0547 15.192 15.125 16.279 15.125C16.883 15.125 17.513 15.3438 17.969 15.8672C18.426 16.3906 18.665 17.1016 18.665 18C18.665 19.6562 17.318 21 15.659 21H14.017ZM16.279 13.125C14.398 13.125 12.872 14.6504 12.872 16.5312V21H9V12.9844C9 8.75 12.422 5.32812 16.657 5.32812V8.32812C14.086 8.32812 11.996 10.418 11.996 12.9844H13.633C15.094 12.9844 16.279 13.125 16.279 13.125ZM5.017 21L5.017 18C5.017 16.0547 6.192 15.125 7.279 15.125C7.883 15.125 8.513 15.3438 8.969 15.8672C9.426 16.3906 9.665 17.1016 9.665 18C9.665 19.6562 8.318 21 6.659 21H5.017ZM7.279 13.125C5.398 13.125 3.872 14.6504 3.872 16.5312V21H0V12.9844C0 8.75 3.422 5.32812 7.657 5.32812V8.32812C5.086 8.32812 2.996 10.418 2.996 12.9844H4.633C6.094 12.9844 7.279 13.125 7.279 13.125Z"/></svg>
                <div class="flex gap-1 text-yellow-400 mb-4">
                    ★★★★★
                </div>
                <p class="text-slate-600 italic mb-6">"The website they built is very fast. I'm actually getting patients finding me on Google Maps now."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-teal-200"></div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">Dr. Priya Verma</h4>
                        <p class="text-xs text-slate-500">Dermatologist, Hazratganj</p>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-slate-50 rounded-2xl relative">
                <svg class="absolute top-8 right-8 w-8 h-8 text-slate-200" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.0547 15.192 15.125 16.279 15.125C16.883 15.125 17.513 15.3438 17.969 15.8672C18.426 16.3906 18.665 17.1016 18.665 18C18.665 19.6562 17.318 21 15.659 21H14.017ZM16.279 13.125C14.398 13.125 12.872 14.6504 12.872 16.5312V21H9V12.9844C9 8.75 12.422 5.32812 16.657 5.32812V8.32812C14.086 8.32812 11.996 10.418 11.996 12.9844H13.633C15.094 12.9844 16.279 13.125 16.279 13.125ZM5.017 21L5.017 18C5.017 16.0547 6.192 15.125 7.279 15.125C7.883 15.125 8.513 15.3438 8.969 15.8672C9.426 16.3906 9.665 17.1016 9.665 18C9.665 19.6562 8.318 21 6.659 21H5.017ZM7.279 13.125C5.398 13.125 3.872 14.6504 3.872 16.5312V21H0V12.9844C0 8.75 3.422 5.32812 7.657 5.32812V8.32812C5.086 8.32812 2.996 10.418 2.996 12.9844H4.633C6.094 12.9844 7.279 13.125 7.279 13.125Z"/></svg>
                <div class="flex gap-1 text-yellow-400 mb-4">
                    ★★★★★
                </div>
                <p class="text-slate-600 italic mb-6">"Professional team. They understood the medical terminology and didn't need much explanation."</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-violet-200"></div>
                    <div>
                        <h4 class="font-bold text-slate-900 text-sm">City Care Clinic</h4>
                        <p class="text-xs text-slate-500">Administration Team</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- contact section -->
<section id="contact" class="py-20">
    <div class="max-w-4xl mx-auto px-4">
        <div class="relative rounded-[2.5rem] overflow-hidden bg-gradient-to-br from-blue-600 to-teal-600 shadow-2xl">
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-64 h-64 bg-black opacity-10 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 p-10 md:p-16 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to upgrade your Clinic?</h2>
                <p class="text-blue-50 text-lg mb-8 max-w-xl mx-auto">Get a free consultation. We will analyze your current digital presence and propose a growth plan.</p>
                
                <form action="submit.php" method="POST" class="max-w-md mx-auto space-y-4">
                    <input type="text" name="name" placeholder="Doctor / Clinic Name" required class="w-full px-5 py-4 rounded-xl bg-white/90 backdrop-blur-sm border-0 text-slate-900 placeholder-slate-400 focus:ring-2 focus:ring-white/50 shadow-lg transition-all">
                    
                    <input type="tel" name="phone" placeholder="Phone Number" required class="w-full px-5 py-4 rounded-xl bg-white/90 backdrop-blur-sm border-0 text-slate-900 placeholder-slate-400 focus:ring-2 focus:ring-white/50 shadow-lg transition-all">
                    
                    <button type="submit" class="w-full py-4 px-6 bg-slate-900 text-white font-bold rounded-xl hover:bg-slate-800 transition-colors shadow-xl">
                        Request Callback
                    </button>
                    <p class="text-xs text-blue-100 mt-4">We respect your privacy. No spam, ever.</p>
                </form>
            </div>
        </div>
    </div>
</section>










<?php include 'includes/footer.php'; ?>