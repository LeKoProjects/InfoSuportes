<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Suporte de TI Especializado - Infraestrutura, Redes e Segurança">
    <title>@yield('title', 'E-TI SOLUTI - Suporte Especializado em TI')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js para interatividade -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#e6f0ff',
                            100: '#b3d4ff',
                            200: '#80b8ff',
                            300: '#4d9cff',
                            400: '#1a80ff',
                            500: '#0066cc', // Cor principal
                            600: '#0052a3',
                            700: '#003d7a',
                            800: '#002952',
                            900: '#001429',
                        },
                        accent: {
                            500: '#00A86B', // Verde confiança
                            600: '#008c59',
                        },
                        action: {
                            500: '#FF6B35', // Laranja ação
                            600: '#e55a2b',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <script>
        (() => {
            const savedTheme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const useDarkMode = savedTheme === 'dark' || (!savedTheme && prefersDark);

            document.documentElement.classList.toggle('dark', useDarkMode);
        })();
    </script>

    <style>
        [x-cloak] { display: none !important; }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Counter animation */
        @keyframes countUp {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .animate-count-up {
            animation: countUp 0.5s ease-out;
        }

        /* Theme mapping: force full-page dark/light inversion for existing utility classes */
        html.dark .bg-white {
            background-color: rgb(17 24 39) !important;
        }

        html.dark .bg-gray-50 {
            background-color: rgb(31 41 55) !important;
        }

        html.dark .bg-gray-100 {
            background-color: rgb(55 65 81) !important;
        }

        html.dark .text-gray-900 {
            color: rgb(249 250 251) !important;
        }

        html.dark .text-gray-800 {
            color: rgb(243 244 246) !important;
        }

        html.dark .text-gray-700 {
            color: rgb(229 231 235) !important;
        }

        html.dark .text-gray-600,
        html.dark .text-gray-500 {
            color: rgb(209 213 219) !important;
        }

        html.dark .border-gray-200,
        html.dark .border-gray-100 {
            border-color: rgb(75 85 99) !important;
        }

        html.dark .from-gray-50 {
            --tw-gradient-from: rgb(31 41 55) var(--tw-gradient-from-position) !important;
            --tw-gradient-to: rgb(31 41 55 / 0) var(--tw-gradient-to-position) !important;
        }

        html.dark .to-white {
            --tw-gradient-to: rgb(17 24 39) var(--tw-gradient-to-position) !important;
        }
    </style>

    @stack('styles')
</head>
<body class="font-sans antialiased bg-white text-gray-900 dark:bg-gray-950 dark:text-gray-100">

    <!-- Header/Navigation -->
    <header x-data="{ mobileMenuOpen: false, scrolled: false }"
            @scroll.window="scrolled = window.scrollY > 20"
            :class="scrolled ? 'shadow-md bg-white dark:bg-gray-900' : 'bg-white dark:bg-gray-900'"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">N</span>
                        </div>
                        <span class="text-2xl font-bold text-gray-900">E-TI SOLUTI</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="#solucoes" class="text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium transition-colors">Soluções</a>
                    <a href="#servicos" class="text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium transition-colors">Serviços</a>
                    <a href="#clientes" class="text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium transition-colors">Clientes</a>
                    <a href="#sobre" class="text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium transition-colors">Sobre</a>
                    <a href="#contato" class="text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium transition-colors">Contato</a>
                </nav>


                <!-- Desktop CTAs -->
                <div class="hidden lg:flex items-center space-x-6">
                    <button onclick="toggleTheme()" class="ml-4 p-2 rounded-lg border border-gray-300 dark:border-gray-700">
                        🌙
                    </button>
                    <a href="#demo" class="text-primary-500 hover:text-primary-600 font-semibold transition-colors">
                        Diagnóstico Gratuito
                    </a>
                    <a href="#contato" class="bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-all transform hover:scale-105">
                        Fale com Especialista
                    </a>
                </div>

                <!-- Mobile menu button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="lg:hidden p-2 rounded-md text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen"
             x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 transform -translate-y-2"
             x-transition:enter-end="opacity-100 transform translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 transform translate-y-0"
             x-transition:leave-end="opacity-0 transform -translate-y-2"
             class="lg:hidden border-t border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900">
            <div class="px-4 py-6 space-y-4">
                <a href="#solucoes" @click="mobileMenuOpen = false" class="block text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium">Soluções</a>
                <a href="#servicos" @click="mobileMenuOpen = false" class="block text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium">Serviços</a>
                <a href="#clientes" @click="mobileMenuOpen = false" class="block text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium">Clientes</a>
                <a href="#sobre" @click="mobileMenuOpen = false" class="block text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium">Sobre</a>
                <a href="#contato" @click="mobileMenuOpen = false" class="block text-gray-700 dark:text-gray-200 hover:text-primary-500 font-medium">Contato</a>
                <div class="pt-4 border-t border-gray-200 dark:border-gray-700 space-y-3">
                    <a href="#demo" class="block w-full text-center bg-gray-100 dark:bg-gray-800 text-primary-500 px-6 py-3 rounded-lg font-semibold">
                        Diagnóstico Gratuito
                    </a>
                    <a href="#contato" class="block w-full text-center bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold">
                        Fale com Especialista
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Coluna 1: Sobre -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xl">N</span>
                        </div>
                        <span class="text-2xl font-bold text-white">E-TI SOLUTI</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Especialistas em Infraestrutura, Redes e Segurança para empresas que não podem parar.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Coluna 2: Serviços -->
                <div>
                    <h4 class="text-white font-semibold text-lg mb-4">Serviços</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">Infraestrutura Microsoft</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Redes MikroTik</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Segurança Fortinet</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Suporte 24/7</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Consultoria</a></li>
                    </ul>
                </div>

                <!-- Coluna 3: Empresa -->
                <div>
                    <h4 class="text-white font-semibold text-lg mb-4">Empresa</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre Nós</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cases de Sucesso</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Certificações</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Carreira</a></li>
                    </ul>
                </div>

                <!-- Coluna 4: Contato -->
                <div>
                    <h4 class="text-white font-semibold text-lg mb-4">Contato</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>(71) 98419-8239</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>contato@E-TI SOLUTI.com.br</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Salvador, Bahia - Brasil</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-500">
                <p>&copy; {{ date('Y') }} E-TI SOLUTI. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- AOS Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        function toggleTheme(){
            const html = document.documentElement
            html.classList.toggle('dark')

            localStorage.theme = html.classList.contains('dark') ? 'dark' : 'light'
        }
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true,
            offset: 100
        });
    </script>

    @stack('scripts')
</body>
</html>

