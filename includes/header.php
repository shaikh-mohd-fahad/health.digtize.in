<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digtize Health | AI & Web Solutions for Doctors</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        medical: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9', // Trust Blue
                            600: '#0284c7',
                            900: '#0c4a6e',
                        },
                        teal: {
                            500: '#14b8a6', // Healing Green
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-slate-600 antialiased bg-white overflow-x-hidden">

<nav class="fixed w-full z-50 bg-white/80 backdrop-blur-lg border-b border-slate-200/50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center gap-2">
                <span class="text-2xl font-bold text-medical-900">Digtize<span class="text-medical-500">Health</span></span>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <a href="#services" class="text-slate-600 hover:text-medical-600 font-medium transition">Solutions</a>
                <a href="#work" class="text-slate-600 hover:text-medical-600 font-medium transition">Work</a>
                <a href="#contact" class="bg-medical-600 text-white px-6 py-2.5 rounded-full font-medium hover:bg-medical-500 transition shadow-lg shadow-medical-500/30">
                    Book Consultation
                </a>
            </div>
            
            <div class="md:hidden flex items-center">
                <a href="#contact" class="text-medical-600 font-bold text-sm">Book Now</a>
            </div>
        </div>
    </div>
</nav>