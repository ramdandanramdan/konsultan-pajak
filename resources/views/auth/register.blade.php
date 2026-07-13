<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar - Konsultan Pajak</title>
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
        .auth-card {
            box-shadow: 0 20px 50px -12px rgba(30, 58, 138, 0.4), 0 8px 15px -4px rgba(30, 58, 138, 0.2);
            border: 1px solid #e5e7eb;
        }
        /* Animasi Input Fokus */
        .input-focus:focus {
            border-color: var(--color-main);
            box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.3);
            transition: all 0.2s ease-in-out;
        }

        /* Gaya khusus untuk ilustrasi SVG */
        .svg-register-illustration {
            width: 100%;
            height: auto;
            max-width: 380px;
        }
    </style>
    
    {{-- 💡 1. TAMBAH AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
</head>
<body class="antialiased bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-5xl w-full mx-auto p-4 sm:p-8">

        <div class="flex flex-col md:flex-row bg-white rounded-2xl overflow-hidden auth-card">
            
            {{-- ====================================================== --}}
            {{-- 1. SISI INFORMASI (BIRU) - Efek AOS: Fade Right --}}
            {{-- ====================================================== --}}
            <div class="md:w-1/2 bg-main-color text-white p-10 flex flex-col justify-center items-center text-center space-y-6 relative overflow-hidden" 
                 data-aos="fade-right" data-aos-duration="1000">
                
                {{-- Dekorasi Latar Belakang --}}
                <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath fill=\'%23ffffff\' d=\'M 10 10 L 10 90 L 90 90 L 90 10 Z\' stroke-width=\'1\' stroke=\'%23ffffff\' opacity=\'0.2\'/%3E%3C/svg%3E');"></div>

                {{-- Logo dan Nama Aplikasi --}}
                <a href="{{ route('home') }}" class="text-4xl font-extrabold tracking-tight z-10">
                    KONSULTAN <span class="text-yellow-300">PAJAK</span>
                </a>

                {{-- Judul dan Deskripsi --}}
                <h1 class="text-2xl font-semibold mt-4 z-10" data-aos="fade-up" data-aos-delay="200">Bergabunglah dengan Komunitas Kami</h1>
                <p class="text-gray-200 mt-2 max-w-sm z-10" data-aos="fade-up" data-aos-delay="300">
                    Daftarkan akun Anda sekarang untuk mendapatkan akses penuh ke berita pajak terbaru dan fitur manajemen data yang eksklusif.
                </p>

                {{-- ILUSTRASI SVG --}}
                <div class="mt-8 z-10 w-full flex justify-center" data-aos="zoom-in" data-aos-delay="400">
                    <svg class="svg-register-illustration" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4Z" fill="#FCD34D"/>
                        <path d="M15 9H9V10H15V9Z" fill="#FFFFFF"/>
                        <path d="M15 11H9V12H15V11Z" fill="#FFFFFF"/>
                        <path d="M15 13H9V14H15V13Z" fill="#FFFFFF"/>
                        <path d="M16 16.5L12 19L8 16.5V15.5L12 18L16 15.5V16.5Z" fill="#3B82F6"/>
                        <path d="M17 6H7C6.45 6 6 6.45 6 7V17C6 17.55 6.45 18 7 18H17C17.55 18 18 17.55 18 17V7C18 6.45 17.55 6 17 6ZM17 7V11H7V7H17ZM7 17V12H17V17H7Z" fill="#4B5563"/>
                        <path d="M12 14.5L10.5 16L12 17.5L13.5 16L12 14.5Z" fill="#FBBF24"/>
                        <path d="M14.5 7H9.5V8H14.5V7Z" fill="#9CA3AF"/>
                        <path d="M14.5 9H9.5V10H14.5V9Z" fill="#9CA3AF"/>
                        <path d="M14.5 11H9.5V12H14.5V11Z" fill="#9CA3AF"/>
                        <path d="M14.5 13H9.5V14H14.5V13Z" fill="#9CA3AF"/>
                    </svg>
                </div>
                
            </div>

            {{-- ====================================================== --}}
            {{-- 2. SISI FORM REGISTER - Efek AOS: Fade Left --}}
            {{-- ====================================================== --}}
            <div class="md:w-1/2 p-8 sm:p-12 flex flex-col justify-center" 
                 data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-gray-900 mb-2 text-center">Buat Akun Baru</h2>
                <p class="text-gray-600 text-center mb-6 text-sm">Isi data diri Anda di bawah ini.</p>
                
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <div data-aos="fade-up" data-aos-delay="100">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                            class="w-full p-3 border border-gray-300 rounded-lg input-focus" 
                            placeholder="Contoh: Budi Santoso">
                    </div>

                    <div data-aos="fade-up" data-aos-delay="200">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            class="w-full p-3 border border-gray-300 rounded-lg input-focus" 
                            placeholder="contoh@email.com">
                    </div>

                    <div data-aos="fade-up" data-aos-delay="300">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="w-full p-3 border border-gray-300 rounded-lg input-focus" 
                            placeholder="Minimal 8 karakter">
                    </div>

                    <div data-aos="fade-up" data-aos-delay="400">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            class="w-full p-3 border border-gray-300 rounded-lg input-focus" 
                            placeholder="Ulangi password di atas">
                    </div>

                    <div class="pt-2" data-aos="fade-up" data-aos-delay="500">
                        <button type="submit" class="w-full px-4 py-3 bg-main-color text-white font-semibold rounded-lg shadow-xl hover:bg-main-darker transition duration-300 transform hover:scale-[1.01] active:scale-[0.99]">
                            DAFTAR SEKARANG
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center text-sm text-gray-600">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="font-semibold text-main-color hover:underline transition duration-200">
                        Masuk ke Akun
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