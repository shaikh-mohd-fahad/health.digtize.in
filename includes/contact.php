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