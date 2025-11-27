<footer class="bg-slate-50 border-t border-slate-200 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            
            <div class="col-span-1 md:col-span-2">
                <span class="text-2xl font-bold text-medical-900">Digtize<span class="text-medical-500">Health</span></span>
                <p class="mt-4 text-slate-500 text-sm leading-relaxed max-w-sm">
                    Empowering healthcare professionals with automated digital solutions. 
                    We build the technology so you can focus on patient care.
                </p>
                <div class="flex gap-4 mt-6">
                    <a href="#" class="text-slate-400 hover:text-medical-600 transition">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-slate-900 mb-4">Company</h4>
                <ul class="space-y-3 text-sm text-slate-600">
                    <li><a href="#" class="hover:text-medical-600 transition">Home</a></li>
                    <li><a href="#services" class="hover:text-medical-600 transition">Our Solutions</a></li>
                    <li><a href="#demo" class="hover:text-medical-600 transition">AI Demo</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-slate-900 mb-4">Contact</h4>
                <ul class="space-y-3 text-sm text-slate-600">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-medical-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>support@digtize.in</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-medical-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>Lucknow, India</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-slate-400">© <?php echo date("Y"); ?> Digtize.in. All rights reserved.</p>
            <div class="flex gap-6 text-xs text-slate-400">
                <a href="#" class="hover:text-slate-600">Privacy Policy</a>
                <a href="#" class="hover:text-slate-600">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>

</body>
</html>