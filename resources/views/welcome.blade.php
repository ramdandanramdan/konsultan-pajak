@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- ================================================================= --}}
    {{-- 1. HERO SECTION (Split Screen + Search Engine) - TETAP --}}
    {{-- ================================================================= --}}
    <section id="beranda" 
             class="relative bg-gradient-to-br from-white to-gray-50 pt-20 pb-20 sm:pt-24 sm:pb-28 overflow-hidden">
        
        {{-- Dekorasi Abstrak --}}
        <div class="absolute top-0 right-0 w-64 h-64 bg-main-color opacity-5 rounded-full filter blur-3xl -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
                
                {{-- KONTEN TEKS HERO (Teks 5 Kolom + Search Engine) --}}
                <div class="lg:col-span-5 lg:text-left">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1"
                          data-aos="fade-right" data-aos-delay="100">
                        Solusi Pajak Terdepan untuk Bisnis
                    </span>
                    
                    {{-- Judul Utama --}}
                    <h1 class="mt-4 text-5xl tracking-tight font-extrabold text-gray-900 sm:text-6xl md:text-6xl leading-tight"
                        data-aos="fade-right" data-aos-delay="300">
                        <span class="block">Mengubah Kepatuhan</span>
                        <span class="block text-main-color">Menjadi Keunggulan.</span>
                    </h1>
                    
                    {{-- Paragraf Pendukung --}}
                    <p class="mt-6 text-lg text-gray-700 max-w-xl"
                       data-aos="fade-right" data-aos-delay="500">
                        Fokus pada bisnis Anda, biarkan kami yang mengurus kerumitan perpajakan. Kami menjamin kepastian hukum dan efisiensi finansial.
                    </p>
                    
                    {{-- SEARCH ENGINE (Redesigned Form) --}}
                    <div class="mt-8" data-aos="fade-up" data-aos-delay="600">
                        <form action="{{ route('search') }}" method="GET" class="flex max-w-lg shadow-xl rounded-full overflow-hidden border-2 border-main-color/20 bg-white">
                            <input type="search" name="query" placeholder="Cari regulasi atau artikel pajak..."
                                   class="w-full px-6 py-3 text-gray-800 border-none focus:ring-0 focus:outline-none placeholder-gray-500" 
                                   required>
                            <button type="submit" class="px-5 py-3 bg-main-color text-white hover:bg-main-darker smooth-transition flex items-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </button>
                        </form>
                    </div>

                    {{-- Tombol CTA --}}
                    <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4" 
                         data-aos="zoom-in" data-aos-delay="700">
                        <a href="{{ route('services') }}" class="w-full sm:w-auto px-8 py-3 border border-transparent text-base font-bold rounded-full text-gray-900 bg-yellow-400 hover:bg-yellow-500 shadow-xl smooth-transition transform hover:scale-[1.02] flex items-center justify-center">
                            Lihat Semua Layanan &nbsp; <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto px-6 py-3 border border-main-color/50 text-base font-medium rounded-full text-main-color bg-white hover:bg-main-color/10 shadow-md smooth-transition flex items-center justify-center">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>

                {{-- VISUAL HERO (Gambar 7 Kolom) --}}
                <div class="mt-16 lg:mt-0 lg:col-span-7"
                     data-aos="fade-left" data-aos-delay="500" data-aos-duration="1200">
                    <img class="w-full max-w-3xl mx-auto rounded-xl shadow-2xl border-4 border-main-color/20 transform transition duration-500 hover:scale-[1.01]" 
                         src={{ asset('img/pp.png') }}
                         alt="Ilustrasi Tim Konsultan Pajak Profesional">
                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- 2. STANDAR LAYANAN (Split-Screen Design) - TETAP --}}
    {{-- ================================================================= --}}
    <section class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">
                Standar Layanan yang Kami Jamin
            </h2>
            
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                
                {{-- Konten Teks (Kiri) --}}
                <div class="lg:order-2 space-y-8" data-aos="fade-left" data-aos-delay="100">
                    
                    <div class="flex items-start space-x-4">
                        <svg class="w-8 h-8 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.418A9.957 9.957 0 0012 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10a9.957 9.957 0 00-1.782-5.582z"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Integritas Penuh dan Kepatuhan</h3>
                            <p class="text-lg text-gray-700 mt-1">Kami menjamin proses yang etis, transparan, dan sesuai hukum yang berlaku untuk kepatuhan mutlak bisnis Anda.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <svg class="w-8 h-8 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Respon dan Layanan Cepat</h3>
                            <p class="text-lg text-gray-700 mt-1">Respons terhadap regulasi dan pertanyaan klien diprioritaskan dalam 1x24 jam kerja.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <svg class="w-8 h-8 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2v5a2 2 0 01-2 2H9a2 2 0 01-2-2V9a2 2 0 012-2h6zM7 10h10"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Jaminan Kerahasiaan Data</h3>
                            <p class="text-lg text-gray-700 mt-1">Semua informasi finansial dan perpajakan klien dijaga kerahasiaannya dengan sistem keamanan terbaik.</p>
                        </div>
                    </div>
                    
                </div>
                
                {{-- Visual (Kanan) --}}
                <div class="" data-aos="fade-right">
                    {{-- Ganti dengan ilustrasi yang relevan, contoh ilustrasi checklist --}}
                    <img class="w-full max-w-md mx-auto" 
                         src={{ asset('img/pic1.png') }}
                         alt="Ilustrasi Standar Layanan dengan Checklist">
                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- 3. HIGHLIGHT/TRUST BAR - TETAP --}}
    {{-- ================================================================= --}}
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="sr-only">Statistik Kepercayaan</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                
                {{-- Highlight 1: Pengalaman --}}
                <div class="p-6 bg-white rounded-xl text-center shadow-lg border-b-4 border-main-color hover:shadow-2xl smooth-transition" data-aos="zoom-in" data-aos-delay="100">
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-3xl font-extrabold text-main-darker">10+</p>
                    <p class="text-sm uppercase tracking-wider text-gray-700 mt-1 font-semibold">Tahun Pengalaman</p>
                </div>

                {{-- Highlight 2: Klien --}}
                <div class="p-6 bg-white rounded-xl text-center shadow-lg border-b-4 border-main-color hover:shadow-2xl smooth-transition" data-aos="zoom-in" data-aos-delay="200">
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2M1 10h2"></path></svg>
                    <p class="text-3xl font-extrabold text-main-darker">500+</p>
                    <p class="text-sm uppercase tracking-wider text-gray-700 mt-1 font-semibold">Klien Terlayani</p>
                </div>

                {{-- Highlight 3: Kepatuhan --}}
                <div class="p-6 bg-white rounded-xl text-center shadow-lg border-b-4 border-main-color hover:shadow-2xl smooth-transition" data-aos="zoom-in" data-aos-delay="300">
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.418A9.957 9.957 0 0012 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10a9.957 9.957 0 00-1.782-5.582z"></path></svg>
                    <p class="text-3xl font-extrabold text-main-darker">99%</p>
                    <p class="text-sm uppercase tracking-wider text-gray-700 mt-1 font-semibold">Tingkat Kepatuhan</p>
                </div>

                 {{-- Highlight 4: Legalitas --}}
                <div class="p-6 bg-white rounded-xl text-center shadow-lg border-b-4 border-main-color hover:shadow-2xl smooth-transition" data-aos="zoom-in" data-aos-delay="400">
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <p class="text-3xl font-extrabold text-main-darker">100%</p>
                    <p class="text-sm uppercase tracking-wider text-gray-700 mt-1 font-semibold">Sertifikasi Legal</p>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- 4. FOKUS PADA TIGA PILAR UTAMA (Split-Screen Design) - TETAP --}}
    {{-- ================================================================= --}}
    <section class="py-20 sm:py-28 bg-main-color/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center"
                data-aos="fade-up">
                Fokus Pada Tiga Pilar Utama
            </h2>

            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                
                {{-- Visual (Kiri) --}}
                <div class=" /20" data-aos="fade-right">
                    {{-- Ilustrasi dari file Anda (image_3dbc54.png atau image_3dce81.png) --}}
                    <img class="w-full max-w-md mx-auto" 
                         src={{ asset('img/2.png') }} 
                         alt="Ilustrasi Checklist Layanan Profesional">
                </div>
                
                {{-- Konten Teks (Kanan) --}}
                <div class="mt-12 lg:mt-0 space-y-8" data-aos="fade-left" data-aos-delay="100">
                    
                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Kepatuhan & Pelaporan Akurat</h3>
                            <p class="text-lg text-gray-700 mt-1">Jaminan pelaporan SPT yang tepat waktu dan 100% akurat sesuai regulasi DJP terbaru.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Perencanaan Pajak Strategis</h3>
                            <p class="text-lg text-gray-700 mt-1">Konsultasi proaktif untuk mengoptimalkan beban pajak dan meningkatkan efisiensi finansial bisnis.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Pendampingan Hukum & Audit</h3>
                            <p class="text-lg text-gray-700 mt-1">Representasi dan pendampingan penuh saat pemeriksaan, keberatan, banding, hingga sengketa pajak.</p>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('services') }}" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-full text-white bg-main-color hover:bg-main-darker shadow-lg smooth-transition">
                            Pelajari Detail Layanan Kami &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- REVISI: 5. FORM REGULASI TERBARU & BERITA (Modern Wrapper) --}}
    {{-- ================================================================= --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Modern Wrapper Box --}}
            <div class="p-8 lg:p-12 bg-white rounded-2xl shadow-2xl border-t-8 border-yellow-500 transform hover:shadow-3xl transition duration-500" data-aos="fade-up">
                
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4 text-center">
                    Regulasi Terbaru & Berita
                </h2>
                <p class="text-xl text-gray-700 text-center mb-12" data-aos="fade-up" data-aos-delay="100">
                    Informasi perpajakan yang paling aktual, terkurasi, dan berdampak bagi bisnis Anda.
                </p>

                <div class="grid md:grid-cols-3 gap-8">
                    
                    {{-- Berita 1 (Card Modern) --}}
                    <a href="{{ route('news') }}" class="block bg-gray-50 rounded-xl shadow-lg border-b-4 border-main-color overflow-hidden transform hover:scale-[1.01] hover:shadow-xl transition duration-300 group">
                        <img class="w-full h-48 object-cover group-hover:opacity-90 transition duration-300" 
                             src={{ asset('img/tarifppn.webp') }}
                             alt="Gedung Kementerian Keuangan">
                        <div class="p-6">
                            <span class="text-xs font-semibold text-yellow-600 uppercase tracking-wider mb-2 block">Regulasi | 20 Okt 2025</span>
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-main-color smooth-transition line-clamp-2">
                                Perubahan Terbaru Tarif PPN di Tahun Fiskal 2026
                            </h3>
                            <p class="text-gray-700 text-sm mt-3 line-clamp-3">Pemerintah merilis peraturan baru mengenai penyesuaian tarif PPN yang akan berlaku efektif...</p>
                        </div>
                    </a>

                    {{-- Berita 2 (Card Modern) --}}
                    <a href="{{ route('news') }}" class="block bg-gray-50 rounded-xl shadow-lg border-b-4 border-main-color overflow-hidden transform hover:scale-[1.01] hover:shadow-xl transition duration-300 group">
                        <img class="w-full h-48 object-cover group-hover:opacity-90 transition duration-300" 
                             src={{ asset('img/sptonline.jpg') }}
                             alt="Ilustrasi E-Filing">
                        <div class="p-6">
                            <span class="text-xs font-semibold text-yellow-600 uppercase tracking-wider mb-2 block">E-Filing | 15 Okt 2025</span>
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-main-color smooth-transition line-clamp-2">
                                Panduan Lengkap Pelaporan SPT Badan Secara Online
                            </h3>
                            <p class="text-gray-700 text-sm mt-3 line-clamp-3">Mencakup langkah-langkah terbaru untuk pelaporan SPT Badan, serta tips menghindari kesalahan umum...</p>
                        </div>
                    </a>

                    {{-- Berita 3 (Card Modern) --}}
                    <a href="{{ route('news') }}" class="block bg-gray-50 rounded-xl shadow-lg border-b-4 border-main-color overflow-hidden transform hover:scale-[1.01] hover:shadow-xl transition duration-300 group">
                        <img class="w-full h-48 object-cover group-hover:opacity-90 transition duration-300" 
                             src={{ asset('img/umkm2.jpg') }} 
                             alt="Ilustrasi PPh">
                        <div class="p-6">
                            <span class="text-xs font-semibold text-yellow-600 uppercase tracking-wider mb-2 block">Analisis | 10 Okt 2025</span>
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-main-color smooth-transition line-clamp-2">
                                Dampak Kenaikan PPh Terhadap Arus Kas UMKM
                            </h3>
                            <p class="text-gray-700 text-sm mt-3 line-clamp-3">Analisis mendalam mengenai skema PPh terbaru dan strategi yang dapat diambil UMKM...</p>
                        </div>
                    </a>

                </div>

                <div class="mt-12 text-center" data-aos="fade-up" data-aos-delay="500">
                    <a href="{{ route('news') }}" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-full text-white bg-main-color hover:bg-main-darker shadow-lg smooth-transition">
                        Lihat Semua Berita & Regulasi &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Modern Wrapper Box --}}
            <div class="p-8 lg:p-12 bg-gray-50 rounded-2xl shadow-2xl border-t-8 border-main-color transform hover:shadow-3xl transition duration-500" data-aos="fade-up">

                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4 text-center">
                    Akses Knowledge Base (Edukasi Pajak)
                </h2>
                <p class="text-xl text-gray-700 text-center mb-12" data-aos="fade-up" data-aos-delay="100">
                    Jelajahi panduan, kalkulator, dan studi kasus yang disusun oleh ahli.
                </p>

                {{-- Filter/Topik Populer (Lebih Menonjol) --}}
                <div class="flex flex-wrap gap-4 justify-center mb-16" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('knowledge') }}" class="px-6 py-2 bg-main-color text-white text-sm font-bold rounded-full hover:bg-main-darker smooth-transition shadow-lg transform hover:scale-[1.05]">PPh Pasal 21</a>
                    <a href="{{ route('knowledge') }}" class="px-6 py-2 bg-yellow-400 text-gray-900 text-sm font-bold rounded-full hover:bg-yellow-500 smooth-transition shadow-lg transform hover:scale-[1.05]">Audit Pajak</a>
                    <a href="{{ route('knowledge') }}" class="px-6 py-2 border-2 border-gray-300 text-gray-800 text-sm font-bold rounded-full hover:bg-gray-200 smooth-transition transform hover:scale-[1.05]">SPT Badan Tahunan</a>
                    <a href="{{ route('knowledge') }}" class="px-6 py-2 border-2 border-gray-300 text-gray-800 text-sm font-bold rounded-full hover:bg-gray-200 smooth-transition transform hover:scale-[1.05]">Pajak Internasional</a>
                </div>
                
                {{-- Kategori Unggulan (Grid Modern) --}}
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    
                    {{-- Kategori 1: Kalkulator --}}
                    <a href="{{ route('knowledge') }}" class="block p-6 bg-white rounded-xl shadow-lg border-b-4 border-yellow-500 hover:shadow-xl transition duration-300 group transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="300">
                        <svg class="h-10 w-10 text-yellow-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m-3 3v6m-3 0h6m-3-3l-3-3"></path></svg>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-600">Kalkulator Pajak</h3>
                        <p class="text-sm text-gray-700 mt-2">Hitung PPN, PPh 21/23 secara otomatis dan akurat.</p>
                    </a>
                    
                    {{-- Kategori 2: Studi Kasus --}}
                    <a href="{{ route('knowledge') }}" class="block p-6 bg-white rounded-xl shadow-lg border-b-4 border-main-color hover:shadow-xl transition duration-300 group transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="400">
                        <svg class="h-10 w-10 text-main-color mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13M3.489 12.001a18.3 18.3 0 0017.02 0M10 21h4m-4 0v-6h4v6"></path></svg>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-main-darker">Studi Kasus Bisnis</h3>
                        <p class="text-sm text-gray-700 mt-2">Pelajari keberhasilan dan tantangan perpajakan dari berbagai industri.</p>
                    </a>

                    {{-- Kategori 3: Glosarium --}}
                    <a href="{{ route('knowledge') }}" class="block p-6 bg-white rounded-xl shadow-lg border-b-4 border-yellow-500 hover:shadow-xl transition duration-300 group transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="500">
                        <svg class="h-10 w-10 text-yellow-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-yellow-600">Glosarium Pajak A-Z</h3>
                        <p class="text-sm text-gray-700 mt-2">Definisi istilah pajak dan akuntansi dari yang paling dasar hingga kompleks.</p>
                    </a>
                    
                    {{-- Kategori 4: Video Tutorial --}}
                    <a href="{{ route('knowledge') }}" class="block p-6 bg-white rounded-xl shadow-lg border-b-4 border-main-color hover:shadow-xl transition duration-300 group transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="600">
                        <svg class="h-10 w-10 text-main-color mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-main-darker">Video Tutorial</h3>
                        <p class="text-sm text-gray-700 mt-2">Instruksi visual langkah demi langkah untuk pelaporan dan administrasi pajak.</p>
                    </a>

                </div>

                {{-- Tombol ke Halaman Knowledge --}}
                <div class="mt-16 text-center" data-aos="fade-up" data-aos-delay="700">
                    <a href="{{ route('knowledge') }}" class="inline-flex items-center px-8 py-3 border-2 border-main-color text-base font-bold rounded-full text-main-color bg-white hover:bg-main-color hover:text-white smooth-transition shadow-lg">
                        Jelajahi Semua Materi Knowledge &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-20 sm:py-28 bg-main-color/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">
                Keunggulan Portal Kami Dibanding Yang Lain
            </h2>

            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                
                {{-- Konten Teks (Kiri) --}}
                <div class="space-y-8" data-aos="fade-right" data-aos-delay="100">
                    
                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-yellow-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">One-Stop Solution Pajak</h3>
                            <p class="text-lg text-gray-700 mt-1">Menggabungkan informasi regulasi, edukasi, dan layanan konsultasi profesional dalam satu platform.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-yellow-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Akses Eksklusif Tools Pajak</h3>
                            <p class="text-lg text-gray-700 mt-1">Dilengkapi kalkulator PPh/PPN interaktif yang terintegrasi langsung dan *up-to-date*.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-yellow-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Jaringan Konsultan Tersertifikat</h3>
                            <p class="text-lg text-gray-700 mt-1">Hanya didukung oleh konsultan pajak berlisensi dengan pengalaman lebih dari 10 tahun.</p>
                        </div>
                    </div>
                    
                </div>
                
                {{-- Visual (Kanan) --}}
                <div class=" /20" data-aos="fade-right">
                    {{-- Ilustrasi yang menunjukkan perbandingan atau keunggulan teknologi/digital --}}
                    <img class="w-full max-w-md mx-auto" 
                         src={{ asset('img/6.png') }}
                         alt="Ilustrasi Keunggulan Digital dan Tools Pajak">
                </div>
                
            </div>
            
            <div class="mt-16 text-center">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-10 py-4 border border-transparent text-lg font-bold rounded-full text-white bg-yellow-500 hover:bg-yellow-600 shadow-2xl smooth-transition">
                    Dapatkan Solusi Terbaik Anda &rarr;
                </a>
            </div>
        </div>
    </section>

@endsection