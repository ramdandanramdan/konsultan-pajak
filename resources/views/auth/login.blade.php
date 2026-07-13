<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Konsultan Pajak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Definisi Warna Kustom (Sesuai Tema) */
        :root {
            --color-main: #1e3a8a; /* Biru Tua */
            --color-text: #1a1a1a; /* Hitam */
        }
        .bg-main-color { background-color: var(--color-main); }
        .text-main-color { color: var(--color-main); }
        .hover\:bg-main-darker:hover { background-color: #1c2a71; }

        /* Animasi Card (Smoothness) */
        .login-card {
            /* Meningkatkan bayangan untuk tampilan yang lebih premium */
            box-shadow: 0 20px 50px -12px rgba(30, 58, 138, 0.4), 0 8px 15px -4px rgba(30, 58, 138, 0.2);
            border: 1px solid #e5e7eb; /* Tambah border halus */
        }
        /* Animasi Input Fokus */
        .input-focus:focus {
            border-color: var(--color-main);
            box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.3);
            transition: all 0.2s ease-in-out;
        }

        /* Gaya khusus untuk ilustrasi SVG */
        .svg-illustration {
            width: 100%;
            height: auto;
            max-width: 350px; /* Batasi ukuran ilustrasi */
        }
    </style>
    
    {{-- 💡 1. TAMBAH AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
</head>
<body class="antialiased bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-5xl w-full mx-auto p-4 sm:p-8">

        <div class="flex flex-col md:flex-row bg-white rounded-2xl overflow-hidden login-card">
            
            {{-- ====================================================== --}}
            {{-- 1. SISI ILUSTRASI (BIRU) - Efek AOS: Fade Right --}}
            {{-- ====================================================== --}}
            <div class="md:w-1/2 bg-main-color text-white p-10 flex flex-col justify-center items-center text-center space-y-6 relative overflow-hidden" 
                 data-aos="fade-right" data-aos-duration="1000">
                
                {{-- Dekorasi Latar Belakang --}}
                <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23ffffff\' d=\'M 10 10 L 10 90 L 90 90 L 90 10 Z\' stroke-width=\'1\' stroke=\'%23ffffff\' opacity=\'0.2\'/%3E%3C/svg%3E');"></div>

                <a href="{{ route('home') }}" class="text-4xl font-extrabold tracking-tight z-10">
                    KONSULTAN <span class="text-yellow-300">PAJAK</span>
                </a>

                <h1 class="text-2xl font-semibold mt-4 z-10" data-aos="fade-up" data-aos-delay="200">Selamat Datang!</h1>
                <p class="text-gray-200 mt-2 max-w-sm z-10" data-aos="fade-up" data-aos-delay="300">
                    Masuk untuk mengakses sistem Admin atau Dashboard Pengguna dan kelola informasi perpajakan Anda.
                </p>

                {{-- ILUSTRASI SVG (Ditempel langsung) --}}
                <div class="mt-8 z-10" data-aos="zoom-in" data-aos-delay="400">
                    <svg class="svg-illustration" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4Z" fill="#FCD34D"/>
                        <path d="M15.5 8.5C15.5 7.67 14.83 7 14 7H10C9.17 7 8.5 7.67 8.5 8.5V15.5C8.5 16.33 9.17 17 10 17H14C14.83 17 15.5 16.33 15.5 15.5V8.5Z" fill="#3B82F6"/>
                        <path d="M14 9.5H10V10.5H14V9.5Z" fill="#D1D5DB"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 11C11.45 11 11 11.45 11 12C11 12.55 11.45 13 12 13C12.55 13 13 12.55 13 12C13 11.45 12.55 11 12 11Z" fill="#FBBF24"/>
                        <path d="M12 13C12.55 13 13 12.55 13 12C13 11.45 12.55 11 12 11C11.45 11 11 11.45 11 12C11 12.55 11.45 13 12 13Z" fill="#4B5563"/>
                        <path d="M15.5 14H8.5V15.5H15.5V14Z" fill="#D1D5DB"/>
                        <path d="M10 14.75H9.5V14.25H10V14.75Z" fill="#4B5563"/>
                        <path d="M14 14.75H13.5V14.25H14V14.75Z" fill="#4B5563"/>
                        <path d="M12 14.75C12.41 14.75 12.75 14.41 12.75 14C12.75 13.59 12.41 13.25 12 13.25C11.59 13.25 11.25 13.59 11.25 14C11.25 14.41 11.59 14.75 12 14.75Z" fill="#4B5563"/>
                        <path d="M14 10.5H10V11.5H14V10.5Z" fill="#9CA3AF"/>
                        <path d="M16.5 12C16.5 11.72 16.39 11.46 16.2 11.27C16.01 11.08 15.75 10.97 15.48 10.97C15.21 10.97 14.95 11.08 14.76 11.27C14.57 11.46 14.46 11.72 14.46 12C14.46 12.28 14.57 12.54 14.76 12.73C14.95 12.92 15.21 13.03 15.48 13.03C15.75 13.03 16.01 12.92 16.2 12.73C16.39 12.54 16.5 12.28 16.5 12Z" fill="#D1D5DB"/>
                        <path d="M7.5 12C7.5 11.72 7.39 11.46 7.2 11.27C7.01 11.08 6.75 10.97 6.48 10.97C6.21 10.97 5.95 11.08 5.76 11.27C5.57 11.46 5.46 11.72 5.46 12C5.46 12.28 5.57 12.54 5.76 12.73C5.95 12.92 6.21 13.03 6.48 13.03C6.75 13.03 7.01 12.92 7.2 12.73C7.39 12.54 7.5 12.28 7.5 12Z" fill="#D1D5DB"/>
                    </svg>
                </div>
                
            </div>

            {{-- ====================================================== --}}
            {{-- 2. SISI FORM LOGIN - Efek AOS: Fade Left --}}
            {{-- ====================================================== --}}
            <div class="md:w-1/2 p-8 sm:p-12 flex flex-col justify-center" 
                 data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-gray-900 mb-2 text-center">Masuk ke Akun</h2>
                <p class="text-gray-600 text-center mb-6 text-sm">Akses dashboard Anda dengan kredensial terdaftar.</p>
                
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div data-aos="fade-up" data-aos-delay="100">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="w-full p-3 border border-gray-300 rounded-lg input-focus" 
                               placeholder="contoh@konsultanpajak.com">
                    </div>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               class="w-full p-3 border border-gray-300 rounded-lg input-focus" 
                               placeholder="Masukkan kata sandi">
                    </div>

                    <div class="flex justify-between items-center text-sm" data-aos="fade-up" data-aos-delay="300">
                        <label for="remember_me" class="flex items-center text-gray-600">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-main-color shadow-sm focus:ring-main-color" name="remember">
                            <span class="ml-2">Ingat Saya</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-main-color hover:text-gray-900 transition duration-200" href="{{ route('password.request') }}">
                                Lupa Password?
                            </a>
                        @endif
                    </div>

                    <div class="mt-8" data-aos="fade-up" data-aos-delay="400">
                        <button type="submit" class="w-full px-4 py-3 bg-main-color text-white font-semibold rounded-lg shadow-xl hover:bg-main-darker transition duration-300 transform hover:scale-[1.01] active:scale-[0.99]">
                            MASUK
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center text-sm text-gray-600">
                    Belum punya akun? 
                    <a href="{{ route('register') }}" class="font-semibold text-main-color hover:underline transition duration-200">
                        Daftar Akun Pengguna
                    </a>
                </div>

            </div>
        </div>

    </div>

    {{-- 💡 2. TAMBAH AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    {{-- 💡 3. INISIALISASI AOS --}}
    <script>
        AOS.init({
            once: true, // Animasi hanya terjadi sekali saat elemen masuk viewport
            disable: 'mobile', // Opsional: Matikan AOS pada perangkat mobile
        });
    </script>
</body>
</html>