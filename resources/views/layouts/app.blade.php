@php
    use Illuminate\Support\Facades\Auth;
    // Mendapatkan nama route saat ini untuk highlighting navigasi
    $currentRouteName = Route::currentRouteName();

    // Tambahkan variabel untuk mengecek apakah kita berada di halaman utama (route = '/')
    $isHome = $currentRouteName === 'home' || $currentRouteName === null || ($currentRouteName === 'welcome' && Route::has('welcome'));

    // Definisi Link Navigasi agar bisa diakses di Desktop dan Mobile
    $navLinks = [
        'home' => ['label' => 'Beranda', 'url' => route('home'), 'is_active' => $isHome],
        'company.profile' => ['label' => 'Profil Perusahaan', 'url' => route('company.profile')],
        'services' => ['label' => 'Layanan Kami', 'url' => route('services')],
        'news' => ['label' => 'NEWS', 'url' => route('news')],
        'knowledge' => ['label' => 'Knowledge', 'url' => route('knowledge')],
        'contact' => ['label' => 'Contact Us', 'url' => route('contact')],
    ];
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konsultan Pajak - @yield('title', 'Solusi Pajak Terpercaya')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- 💡 TAMBAHKAN LIBRARY AOS CSS DI SINI --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        /* Definisi Warna Custom */
        :root {
            --color-main: #1e3a8a; /* Biru Tua */
            --color-main-darker: #1c2a71; /* Hover main color */
            --color-text: #1a1a1a; /* Hitam */
            --color-light-blue: #eff6ff; /* bg-blue-50 untuk Auth */
            --color-secondary-light: #bfdbfe; /* Warna untuk highlight di footer biru */
        }
        .bg-main-color { background-color: var(--color-main); }
        .text-main-color { color: var(--color-main); }
        .hover\:bg-main-darker:hover { background-color: var(--color-main-darker); }
        .smooth-transition { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }

        /* Style untuk Link Navigasi */
        /* ... (CSS Navigasi tidak berubah) ... */
        .nav-link {
            position: relative;
            padding-left: 1rem; 
            padding-right: 1rem; 
            color: #4b5563; 
            font-weight: 600; 
            height: 5rem;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 0.875rem;
            transition: color 0.3s ease-out;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0; 
            left: 50%; 
            width: 0; 
            height: 3px; 
            background-color: var(--color-main);
            transition: width 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94), left 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .nav-link:hover {
            color: var(--color-main); 
        }

        .nav-link:hover::after {
            width: 100%; 
            left: 0; 
        }

        .active-link {
            color: var(--color-main) !important;
            font-weight: 700; 
        }

        .active-link::after {
            width: 100%; 
            left: 0; 
        }
        .copy-popup {
            transition: all 0.3s ease-in-out;
        }

        /* ... (CSS Auth Button & Dropdown tidak berubah) ... */
        .modern-auth-button {
            display: flex;
            align-items: center;
            background-color: var(--color-light-blue); 
            border: 1px solid #dbeafe; 
            border-radius: 9999px; 
            padding: 0.5rem 1.25rem;
            cursor: pointer;
            font-weight: 600;
            color: var(--color-main);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 20;
        }
        .modern-auth-button:hover {
            background-color: #c3d6fa; 
        }

        .auth-dropdown-menu {
            transform: translateY(-5px); 
            opacity: 0;
            visibility: hidden;
            pointer-events: none; 
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
        }
        .auth-dropdown-menu.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
            pointer-events: auto; 
        }
        
        .guest-login {
            border: 1px solid var(--color-main);
            padding: 0.5rem 1rem;
            border-radius: 9999px; 
            color: var(--color-main);
            transition: all 0.3s;
            font-weight: 600;
            text-align: center;
            font-size: 0.875rem; 
        }
        .guest-login:hover {
            background-color: var(--color-light-blue);
        }
        .guest-register {
            background-color: var(--color-main);
            padding: 0.5rem 1rem;
            border-radius: 9999px; 
            color: white;
            transition: all 0.3s;
            font-weight: 600;
            text-align: center;
            font-size: 0.875rem; 
            box-shadow: 0 4px 6px -1px rgba(30, 58, 138, 0.1), 0 2px 4px -1px rgba(30, 58, 138, 0.06);
        }
        .guest-register:hover {
            background-color: var(--color-main-darker);
        }
    </style>
</head>
<body class="antialiased text-color-text min-h-screen flex flex-col">

    {{-- Notifikasi Copy --}}
    <div id="copy-notification" class="fixed bottom-5 right-5 z-50 p-4 bg-green-600 text-white rounded-lg shadow-2xl flex items-center space-x-2 transform translate-y-full opacity-0 hidden smooth-transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.418A9.957 9.957 0 0012 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10a9.957 9.957 0 00-1.782-5.582z"></path></svg>
        <span>Link berhasil disalin!</span>
    </div>

    <header class="bg-white sticky top-0 z-40 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20"> 
                
                {{-- LOGO (Link Utama, sudah benar) --}}
                <a href="{{ route('home') }}" class="flex-shrink-0 text-3xl font-extrabold tracking-tight text-main-color">
                    KONSULTAN <span class="text-gray-900">PAJAK</span>
                </a>

                <div class="hidden md:flex items-center space-x-12"> 
                    
                    {{-- Navigasi Desktop (Rapi) --}}
                    <nav class="flex space-x-0"> 
                        @foreach ($navLinks as $routeName => $link)
                            @php
                                // Menggunakan is_active untuk Beranda, dan routeName untuk link lainnya
                                $isActive = ($link['is_active'] ?? false) || $currentRouteName === $routeName;
                            @endphp
                            
                            <a href="{{ $link['url'] }}" 
                               class="nav-link text-sm {{ $isActive ? 'active-link' : '' }}">
                                {{ $link['label'] }}
                            </a>
                        @endforeach
                    </nav>

                    {{-- Tombol Auth --}}
                    <div class="flex items-center">
                        @auth
                            <div id="auth-dropdown-container" class="relative h-auto flex items-center">
                                
                                <button id="auth-dropdown-button" class="modern-auth-button text-sm focus:outline-none">
                                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 11a1 1 0 01-2 0v-2.071c0-1.428-1.492-2.5-3.571-2.5h-4.858c-2.079 0-3.571 1.072-3.571 2.5V21a1 1 0 01-2 0v-2.071c0-2.31 2.227-4.179 4.858-4.179h4.858c2.631 0 4.858 1.869 4.858 4.179V21z"></path></svg>
                                    <span>Hi, {{ explode(' ', Auth::user()->name)[0] }}!</span>
                                    <svg id="dropdown-arrow" class="w-4 h-4 ml-1 text-main-color transform smooth-transition" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </button>
                                
                                <div id="auth-dropdown-menu" class="absolute right-0 top-full mt-3 w-48 bg-white border border-gray-200 rounded-lg shadow-xl auth-dropdown-menu z-50">
                                    <div class="py-1">
                                        @if (Auth::user()->email === 'admin@konsultanpajak.com')
                                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 smooth-transition">
                                                🔑 Dashboard Admin
                                            </a>
                                        @else
                                            <a href="{{ route('user.profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 smooth-transition">
                                                👤 Profil Saya
                                            </a>
                                        @endif
                                        <form method="POST" action="{{ route('logout') }}" class="border-t mt-1 pt-1">
                                            @csrf
                                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 smooth-transition">
                                                Keluar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="space-x-3">
                                <a href="{{ route('login') }}" class="guest-login">
                                    Login
                                </a>
                                <a href="{{ route('register') }}" class="guest-register">
                                    Daftar
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>

                <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-main-color hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-main-color md:hidden">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>
            </div>
        </div>

        {{-- Navigasi Mobile --}}
        <div class="md:hidden hidden bg-gray-50 border-t border-gray-200" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                @foreach ($navLinks as $routeName => $link)
                    @php
                        $isActive = ($link['is_active'] ?? false) || $currentRouteName === $routeName;
                    @endphp
                    <a href="{{ $link['url'] }}" 
                       class="text-gray-700 hover:bg-main-color hover:text-white block px-3 py-2 rounded-md text-base font-semibold smooth-transition
                       {{ $isActive ? 'bg-main-color text-white' : '' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach
                
                @auth
                    <p class="px-3 py-2 text-main-color font-semibold border-b border-gray-300">
                        Hi, {{ explode(' ', Auth::user()->name)[0] }}!
                    </p>
                    @if (Auth::user()->email === 'admin@konsultanpajak.com')
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-semibold smooth-transition">
                            Dashboard Admin
                        </a>
                    @else
                        <a href="{{ route('user.profile') }}" class="text-gray-700 hover:bg-gray-200 block px-3 py-2 rounded-md text-base font-semibold smooth-transition">
                            Profil Saya
                        </a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 hover:bg-red-50 block px-3 py-2 rounded-md text-base font-semibold smooth-transition w-full text-left">
                            Keluar
                        </button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="block px-3 py-2 mt-2 bg-main-color text-white rounded-md text-base font-semibold text-center smooth-transition hover:bg-main-darker">
                        Login / Daftar
                    </a>
                @endguest
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    

    {{-- 💡 FOOTER MINIMALIS MODERN DENGAN MAIN COLOR --}}
    {{-- Diubah: bg-gray-900 menjadi bg-main-color, Teks diubah menjadi white/light-gray --}}
    <footer class="bg-main-color text-white py-10 sm:py-16 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-12 text-center md:text-left">
                
                {{-- Kolom 1: Logo & Deskripsi Singkat --}}
                <div data-aos="fade-up" data-aos-delay="0">
                    <a href="{{ route('home') }}" class="flex-shrink-0 text-3xl font-extrabold tracking-tight text-white inline-block">
                        KONSULTAN <span class="text-blue-200">PAJAK</span> 
                        {{-- Menggunakan text-blue-200 sebagai highlight di atas main color --}}
                    </a>
                    <p class="mt-4 text-sm text-blue-100 max-w-xs mx-auto md:mx-0">
                        Solusi pajak terpercaya untuk bisnis Anda. Kami membantu menciptakan kepatuhan & efisiensi finansial.
                    </p>
                </div>

                {{-- Kolom 2: Tautan Cepat --}}
                <div data-aos="fade-up" data-aos-delay="150">
                    <h3 class="text-lg font-semibold text-white mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        {{-- Tautan diubah menjadi text-blue-100 dengan hover:text-white --}}
                        <li><a href="{{ route('home') }}" class="text-blue-100 hover:text-white smooth-transition text-sm">Beranda</a></li>
                        <li><a href="{{ route('services') }}" class="text-blue-100 hover:text-white smooth-transition text-sm">Layanan Kami</a></li>
                        <li><a href="{{ route('news') }}" class="text-blue-100 hover:text-white smooth-transition text-sm">NEWS</a></li>
                        <li><a href="{{ route('contact') }}" class="text-blue-100 hover:text-white smooth-transition text-sm">Kontak Kami</a></li>
                    </ul>
                </div>

                {{-- Kolom 3: Informasi Kontak --}}
                <div data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-lg font-semibold text-white mb-4">Kontak Kami</h3>
                    <ul class="space-y-2 text-sm text-blue-100">
                        <li class="flex items-center justify-center md:justify-start">
                            {{-- Ikon diubah menjadi text-blue-200 untuk sedikit kontras --}}
                            <svg class="w-5 h-5 mr-2 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Jl. Contoh No. 123, Jakarta</span>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <svg class="w-5 h-5 mr-2 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span>info@konsultanpajak.com</span>
                        </li>
                        <li class="flex items-center justify-center md:justify-start">
                            <svg class="w-5 h-5 mr-2 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>+62 812-3456-7890</span>
                        </li>
                    </ul>
                </div>

                {{-- Kolom 4: Sosial Media --}}
                <div data-aos="fade-up" data-aos-delay="450">
                    <h3 class="text-lg font-semibold text-white mb-4">Ikuti Kami</h3>
                    <div class="flex justify-center md:justify-start space-x-4">
                        {{-- Ikon diubah menjadi text-white dengan hover:text-blue-200 --}}
                        <a href="#" class="text-white hover:text-blue-200 smooth-transition" aria-label="Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.776-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="text-white hover:text-blue-200 smooth-transition" aria-label="Twitter">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012 10.77a4.095 4.095 0 003.29 4.026 4.097 4.097 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.271a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                        <a href="#" class="text-white hover:text-blue-200 smooth-transition" aria-label="Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.792.01 3.71.048 1.05.035 1.83.148 2.504.42 1.057.4 1.748 1.091 2.14 2.141.27.674.383 1.45.418 2.504.038.918.047 1.28.047 3.71s-.01 2.792-.048 3.71c-.035 1.05-.148 1.83-.42 2.504-.4 1.057-1.091 1.748-2.141 2.14-.674.27-1.45.383-2.504.418-.918.038-1.28.047-3.71.047s-2.792-.01-3.71-.048c-1.05-.035-1.83-.148-2.504-.42-1.057-.4-1.748-1.091-2.14-2.141-.27-.674-.383-1.45-.418-2.504-.038-.918-.047-1.28-.047-3.71s.01-2.792.048-3.71c.035-1.05.148-1.83.42-2.504.4-1.057 1.091-1.748 2.141-2.14.674-.27 1.45-.383 2.504-.418C9.517 2.01 9.88 2 12.315 2zm0 0l.011 7.113A7.123 7.123 0 0019.429 12h-7.113A7.123 7.123 0 0012.315 2zm0 1.5c-2.485 0-2.796.01-3.791.048-1.037.036-1.688.148-2.145.34-.482.203-.76.478-1.044.762-.284.283-.559.562-.762 1.044-.192.457-.304 1.108-.34 2.145-.038.995-.048 1.306-.048 3.791s.01 2.796.048 3.791c.036 1.037.148 1.688.34 2.145.203.482.478.76.762 1.044.283.284.562.559 1.044.762.457.192 1.108.304 2.145.34.995.038 1.306.048 3.791.048s2.796-.01 3.791-.048c1.037-.036 1.688-.148 2.145-.34.482-.203.76-.478.762-1.044.284-.283.562-.559.762-1.044.192-.457.304-1.108.34-2.145.038-.995.048-1.306.048-3.791s-.01-2.796-.048-3.791c-.036-1.037-.148-1.688-.34-2.145-.203-.482-.478-.76-.762-1.044-.283-.284-.562-.559-1.044-.762-.457-.192-1.108-.304-2.145-.34C14.811 3.51 14.5 3.5 12.015 3.5zm0 2.5c2.31 0 4.19 1.88 4.19 4.19s-1.88 4.19-4.19 4.19-4.19-1.88-4.19-4.19 1.88-4.19 4.19-4.19zm0 1.5c1.474 0 2.69 1.216 2.69 2.69s-1.216 2.69-2.69 2.69-2.69-1.216-2.69-2.69 1.216-2.69 2.69-2.69zm5.228-5.344a1.076 1.076 0 00-1.075-1.076 1.076 1.076 0 00-1.076 1.076 1.076 1.076 0 001.076 1.076 1.076 1.076 0 001.075-1.076z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="text-white hover:text-blue-200 smooth-transition" aria-label="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.529-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" /></svg>
                        </a>
                    </div>
                </div>

            </div>

            <div class="mt-8 pt-8 border-t border-blue-800 text-center text-sm text-blue-200" data-aos="fade-up" data-aos-delay="0">
                &copy; {{ date('Y') }} Konsultan Pajak. All rights reserved.
            </div>
        </div>
    </footer>

    {{-- 💡 2. TAMBAHKAN LIBRARY AOS JS DAN INITIALIZATION SCRIPT DI SINI --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialisasi AOS
        AOS.init({
            duration: 1000, // Durasi animasi dalam ms (default)
            once: true,     // Animasi hanya dimainkan sekali saat scroll ke bawah
        });
        
        // FUNGSI COPY TO CLIPBOARD
        function showCopyNotification() {
            const popup = document.getElementById('copy-notification');
            if (popup) {
                popup.classList.remove('hidden');
                setTimeout(() => {
                    popup.classList.remove('translate-y-full', 'opacity-0');
                }, 10); 
                
                setTimeout(() => {
                    popup.classList.add('translate-y-full', 'opacity-0');
                    setTimeout(() => {
                        popup.classList.add('hidden');
                    }, 300); 
                }, 2000); 
            }
        }
        
        // LOGIC UNTUK COPY LINK (Tetap di sini untuk berjaga-jaga)
        document.addEventListener('click', function(e) {
            let target = e.target.closest('a');
            if (target && target.getAttribute('href') === '#') {
                 e.preventDefault(); 
                 // Jika Anda memiliki logic copy link di sini, biarkan atau perbaiki sesuai kebutuhan Anda
                 // Contoh:
                 // navigator.clipboard.writeText('Isi Link yang Dicopy').then(() => {
                 //     showCopyNotification();
                 // });
            }
        });
        
        // MOBILE MENU TOGGLE
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // AUTH DROPDOWN TOGGLE
        const authButton = document.getElementById('auth-dropdown-button');
        const authMenu = document.getElementById('auth-dropdown-menu');
        const dropdownArrow = document.getElementById('dropdown-arrow');
        
        if(authButton && authMenu) {
            authButton.addEventListener('click', function(e) {
                e.stopPropagation();
                authMenu.classList.toggle('active');
                dropdownArrow.classList.toggle('rotate-180');
            });

            document.addEventListener('click', function(e) {
                if (!authButton.contains(e.target) && !authMenu.contains(e.target)) {
                    authMenu.classList.remove('active');
                    dropdownArrow.classList.remove('rotate-180');
                }
            });
        }
    </script>
</body>
</html>