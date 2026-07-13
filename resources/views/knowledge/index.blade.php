@extends('layouts.app')

@section('title', 'Knowledge Base - Database Peraturan')

@section('content')

    {{-- HERO SECTION KNOWLEDGE: FOKUS & INFORMASI --}}
    <section class="bg-white pt-24 pb-12 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-2">
                Pusat Sumber Daya Perpajakan
            </h1>
            <p class="text-xl text-gray-600 max-w-4xl">
                Akses 5 jenis konten eksklusif: Regulasi, E-Book, E-Learning, Artikel, dan Template praktis.
            </p>
        </div>
    </section>

    {{-- MAIN CONTENT GRID: FOKUS PADA PENCARIAN & KARTU KONTEN --}}
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- BLOK PENCARIAN & FILTER CANGGIH --}}
            <div class="mb-12 p-6 bg-white rounded-xl shadow-xl border-t-4 border-yellow-500" data-aos="fade-down">
                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                    <span class="text-main-color mr-3 text-3xl">🔍</span> Cari Sumber Daya
                </h3>
                <div class="flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-3">
                    
                    {{-- Input Pencarian Utama --}}
                    <div class="relative flex-grow">
                        <input type="text" placeholder="Cari Judul, Nomor Peraturan, atau Topik..." 
                               class="w-full p-3 pl-10 border-2 border-gray-300 rounded-lg focus:ring-main-color focus:border-main-color transition duration-300">
                        <svg class="absolute left-3 top-3.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>

                    {{-- Filter Jenis Konten (5 Pilihan Baru) --}}
                    <select id="content-filter" class="w-full md:w-1/4 p-3 border-2 border-gray-300 rounded-lg bg-white text-gray-700 font-medium focus:ring-yellow-500 focus:border-yellow-500 transition duration-300">
                        <option value="all">Semua Konten</option>
                        <option value="regulasi">Database Regulasi</option>
                        <option value="ebook">E-Book & Panduan</option>
                        <option value="elearning">Modul E-Learning</option>
                        <option value="artikel">Artikel Pengetahuan</option>
                        <option value="template">Template & Formulir</option>
                    </select>
                    
                    {{-- Filter Tahun --}}
                    <select class="w-full md:w-1/4 p-3 border-2 border-gray-300 rounded-lg bg-white text-gray-700 font-medium focus:ring-main-color focus:border-main-color transition duration-300">
                        <option value="">Semua Tahun</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
            </div>

            {{-- GRID UTAMA: KONTEN (8/12) + SIDEBAR (4/12) --}}
            <div class="lg:grid lg:grid-cols-12 lg:gap-10">

                {{-- KOLOM KONTEN UTAMA (8/12) --}}
                <div class="lg:col-span-8 space-y-10">
                    
                    {{-- Navigasi Tab Besar (5 Jenis Konten) --}}
                    <div class="flex flex-wrap border-b-2 border-gray-200 mb-6" data-aos="fade-right">
                        <button class="tab-button active px-4 py-3 text-sm md:text-lg font-bold text-white bg-main-color rounded-t-lg shadow-md transition duration-300 mr-2 mb-2" data-tab="regulasi">
                            Database Regulasi
                        </button>
                        <button class="tab-button px-4 py-3 text-sm md:text-lg font-medium text-gray-700 bg-gray-200/50 hover:bg-yellow-500/30 rounded-t-lg transition duration-300 mr-2 mb-2" data-tab="ebook">
                            E-Book & Panduan
                        </button>
                        <button class="tab-button px-4 py-3 text-sm md:text-lg font-medium text-gray-700 bg-gray-200/50 hover:bg-yellow-500/30 rounded-t-lg transition duration-300 mr-2 mb-2" data-tab="elearning">
                            Modul E-Learning
                        </button>
                        <button class="tab-button px-4 py-3 text-sm md:text-lg font-medium text-gray-700 bg-gray-200/50 hover:bg-yellow-500/30 rounded-t-lg transition duration-300 mr-2 mb-2" data-tab="artikel">
                            Artikel Pengetahuan
                        </button>
                        <button class="tab-button px-4 py-3 text-sm md:text-lg font-medium text-gray-700 bg-gray-200/50 hover:bg-yellow-500/30 rounded-t-lg transition duration-300 mr-2 mb-2" data-tab="template">
                            Template & Formulir
                        </button>
                    </div>

                    {{-- KONTEN TAB: DATABASE REGULASI (HTML INLINE) --}}
                    <div class="tab-content active grid md:grid-cols-2 gap-6" id="tab-regulasi">
                        <h4 class="md:col-span-2 text-2xl font-bold text-gray-800">15 Regulasi Terbaru</h4>
                        
                        {{-- Item 1: Regulasi (PMK - High Priority) --}}
                        <div class="bg-white p-6 rounded-xl shadow-lg border-t-8 border-red-500 transform hover:scale-[1.02] transition duration-300 cursor-pointer">
                            <div class="flex justify-between items-start mb-3">
                                <span class="text-sm font-bold text-white bg-red-500 px-3 py-1 rounded-full uppercase">PMK</span>
                                <span class="text-xs text-gray-500">Ditetapkan: 29 Des 2023</span>
                            </div>
                            <h4 class="text-xl font-extrabold text-gray-900 mb-2 hover:text-red-600">
                                PMK No. 168 Tahun 2023 tentang PPh 21 (TER)
                            </h4>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                Peraturan Menteri Keuangan yang menjadi dasar hukum penggunaan Tarif Efektif Rata-rata (TER) untuk penghitungan PPh Pasal 21 bulanan.
                            </p>
                            <div class="flex justify-between items-center border-t pt-3">
                                <span class="text-sm text-yellow-600 font-bold">Wajib Baca &rarr;</span>
                                <span class="text-sm text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Download PDF
                                </span>
                            </div>
                        </div>

                        {{-- Item 2: Regulasi (UU - Major) --}}
                        <div class="bg-white p-6 rounded-xl shadow-lg border-t-8 border-main-color transform hover:scale-[1.02] transition duration-300 cursor-pointer">
                            <div class="flex justify-between items-start mb-3">
                                <span class="text-sm font-bold text-white bg-main-color px-3 py-1 rounded-full uppercase">UU</span>
                                <span class="text-xs text-gray-500">Ditetapkan: 29 Okt 2021</span>
                            </div>
                            <h4 class="text-xl font-extrabold text-gray-900 mb-2 hover:text-main-color">
                                UU Nomor 7 Tahun 2021 tentang Harmonisasi Peraturan Perpajakan
                            </h4>
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                Regulasi payung yang mengatur perubahan pada PPh, PPN, dan Ketentuan Umum dan Tata Cara Perpajakan (KUP).
                            </p>
                            <div class="flex justify-between items-center border-t pt-3">
                                <span class="text-sm text-yellow-600 font-bold">Wajib Baca &rarr;</span>
                                <span class="text-sm text-gray-500 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Download PDF
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    {{-- KONTEN TAB: E-BOOK & PANDUAN (LEBIH INTERAKTIF) --}}
                    <div class="tab-content hidden grid md:grid-cols-2 gap-6" id="tab-ebook">
                         <h4 class="md:col-span-2 text-2xl font-bold text-gray-800 border-l-4 border-yellow-500 pl-3">E-Book Pilihan untuk Anda</h4>
                        
                        {{-- Item 3: E-Book Dummy 1 --}}
                        <div class="bg-yellow-50 p-6 rounded-xl shadow-lg border-l-4 border-yellow-500 transform hover:translate-y-[-4px] transition duration-300 cursor-pointer flex flex-col justify-between">
                            <span class="text-sm font-bold text-yellow-700 mb-2">PANDUAN PREMIUM</span>
                            <h4 class="text-2xl font-extrabold text-gray-900 mb-2">Sistem Perpajakan Bisnis Start-Up</h4>
                            <p class="text-gray-700 mb-4 line-clamp-3">
                                Analisis mendalam mengenai kewajiban pajak PPh 21, PPh Badan, dan PPN untuk perusahaan rintisan di Indonesia.
                            </p>
                            <a href="#" class="mt-auto w-full inline-block text-center py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition duration-300">
                                UNDUH E-BOOK GRATIS &rarr;
                            </a>
                        </div>
                        
                        {{-- Item 4: E-Book Dummy 2 --}}
                        <div class="bg-yellow-50 p-6 rounded-xl shadow-lg border-l-4 border-yellow-500 transform hover:translate-y-[-4px] transition duration-300 cursor-pointer flex flex-col justify-between">
                            <span class="text-sm font-bold text-yellow-700 mb-2">GUIDEBOOK</span>
                            <h4 class="text-2xl font-extrabold text-gray-900 mb-2">Audit Pajak: Persiapan & Negosiasi</h4>
                            <p class="text-gray-700 mb-4 line-clamp-3">
                                Taktik dan checklist esensial yang harus disiapkan wajib pajak sebelum menghadapi pemeriksaan pajak dari DJP.
                            </p>
                            <a href="#" class="mt-auto w-full inline-block text-center py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition duration-300">
                                UNDUH E-BOOK GRATIS &rarr;
                            </a>
                        </div>
                    </div>

                    {{-- KONTEN TAB: MODUL E-LEARNING (LEBIH INTERAKTIF) --}}
                    <div class="tab-content hidden grid md:grid-cols-2 gap-6" id="tab-elearning">
                        <h4 class="md:col-span-2 text-2xl font-bold text-gray-800 border-l-4 border-green-500 pl-3">Seri Video Pembelajaran Terbaru</h4>
                        
                        {{-- Item 5: E-Learning Dummy 1 --}}
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-green-500 transform hover:shadow-xl transition duration-300 cursor-pointer group">
                             <div class="h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center relative overflow-hidden">
                                <img src={{ asset('img/pajaklintas.webp') }} alt="Video Cover" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white/90 group-hover:text-yellow-500 transition duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664l-3.197-2.132z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                            <h4 class="text-xl font-extrabold text-gray-900 mb-2 group-hover:text-green-600">
                                Modul 1: Penghitungan PPh Pasal 23 & PPN
                            </h4>
                            <p class="text-gray-600 mb-3 text-sm">Durasi: 2 jam 15 menit | Level: Dasar-Menengah</p>
                            <a href="#" class="text-green-600 font-bold hover:underline">Mulai Tonton Sekarang &rarr;</a>
                        </div>
                        
                        {{-- Item 6: E-Learning Dummy 2 --}}
                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-green-500 transform hover:shadow-xl transition duration-300 cursor-pointer group">
                             <div class="h-40 bg-gray-200 rounded-lg mb-4 flex items-center justify-center relative overflow-hidden">
                                <img src={{ asset('img/pajaklintas.jpeg') }} alt="Video Cover" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white/90 group-hover:text-yellow-500 transition duration-300" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664l-3.197-2.132z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                            <h4 class="text-xl font-extrabold text-gray-900 mb-2 group-hover:text-green-600">
                                Modul 2: Implementasi Akuntansi Pajak PSAK 70
                            </h4>
                            <p class="text-gray-600 mb-3 text-sm">Durasi: 1 jam 45 menit | Level: Mahir</p>
                            <a href="#" class="text-green-600 font-bold hover:underline">Mulai Tonton Sekarang &rarr;</a>
                        </div>
                    </div>
                    
                    {{-- KONTEN TAB: ARTIKEL PENGETAHUAN --}}
                    <div class="tab-content hidden space-y-4" id="tab-artikel">
                        <h4 class="text-2xl font-bold text-gray-800 border-l-4 border-main-color pl-3">Analisis Terbaru dari Tim Ahli</h4>
                        {{-- Dummy Article List (Mirip News tapi lebih fokus ke pengetahuan) --}}
                        @for ($i = 1; $i <= 3; $i++)
                            <a href="#" class="block p-4 bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-main-color">
                                <h4 class="text-xl font-bold text-gray-900 hover:text-main-color">Konsep PPh Final dan Non-Final: Studi Kasus 2025</h4>
                                <p class="text-sm text-gray-600 mt-1">Analisis mendalam mengenai batasan dan implikasi perpajakan dari PPh Final (UMKM) dan PPh Non-Final. (15 Okt 2025)</p>
                            </a>
                        @endfor
                    </div>

                    {{-- KONTEN TAB: TEMPLATE & FORMULIR --}}
                    <div class="tab-content hidden space-y-4" id="tab-template">
                        <h4 class="text-2xl font-bold text-gray-800 border-l-4 border-blue-500 pl-3">Unduh Template Siap Pakai</h4>
                        {{-- Dummy Template List --}}
                        @for ($i = 1; $i <= 3; $i++)
                            <a href="#" class="block p-4 bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-500 flex justify-between items-center">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 hover:text-blue-600">Template Perhitungan PPh 21 Tahunan Sesuai TER</h4>
                                    <p class="text-sm text-gray-600 mt-1">Format Excel siap pakai untuk kepatuhan bulanan dan tahunan. (.xlsx)</p>
                                </div>
                                <span class="text-blue-500 font-bold flex items-center text-sm">
                                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Unduh
                                </span>
                            </a>
                        @endfor
                    </div>
                    
                    {{-- Pagination Bawah (Dummy) --}}
                    <div class="flex justify-center mt-12 space-x-2" data-aos="fade-up">
                        <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-500 hover:bg-gray-100 transition duration-300">
                            <svg class="w-5 h-5 inline-block -mt-0.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Sebelumnya
                        </a>
                        <a href="#" class="px-4 py-2 border-2 border-main-color rounded-lg bg-main-color text-white font-bold shadow-md">1</a>
                        <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100 transition duration-300">2</a>
                        <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100 transition duration-300">3</a>
                        <a href="#" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100 transition duration-300">
                            Berikutnya
                            <svg class="w-5 h-5 inline-block -mt-0.5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                    
                </div> {{-- End Kolom Konten Utama --}}

                {{-- KOLOM SIDEBAR (4/12) (Tidak ada perubahan) --}}
                <div class="lg:col-span-4 mt-12 lg:mt-0 space-y-10">
                    
                    {{-- Sidebar 1: FILTER JENIS REGULASI (Visual Tile) --}}
                    <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-main-color" data-aos="fade-left">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-2 flex items-center">
                            <span class="text-main-color mr-2 text-3xl">📘</span> Filter Regulasi Cepat
                        </h3>
                        <div class="grid grid-cols-3 gap-3 text-sm">
                            <a href="#" class="bg-main-color text-white p-3 rounded-lg text-center font-bold shadow-md hover:bg-main-darker transition duration-300">UU</a>
                            <a href="#" class="bg-gray-100 text-gray-800 p-3 rounded-lg text-center font-medium hover:bg-yellow-100 transition duration-300">PP</a>
                            <a href="#" class="bg-yellow-500 text-white p-3 rounded-lg text-center font-bold shadow-md hover:bg-yellow-600 transition duration-300">PMK</a>
                            <a href="#" class="bg-gray-100 text-gray-800 p-3 rounded-lg text-center font-medium hover:bg-yellow-100 transition duration-300">PER</a>
                            <a href="#" class="bg-gray-100 text-gray-800 p-3 rounded-lg text-center font-medium hover:bg-yellow-100 transition duration-300">SE</a>
                            <a href="#" class="bg-gray-100 text-gray-800 p-3 rounded-lg text-center font-medium hover:bg-yellow-100 transition duration-300">SURAT</a>
                        </div>
                    </div>
                    
                    {{-- Sidebar 2: ARTIKEL PENGETAHUAN TERBARU --}}
                    <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-yellow-500" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-2 flex items-center">
                            <span class="text-yellow-500 mr-2 text-3xl">💡</span> Artikel Pengetahuan
                        </h3>
                        <ol class="space-y-3 list-decimal list-inside text-gray-700">
                            <li><a href="#" class="hover:text-yellow-600 font-semibold line-clamp-2">Perlakuan PPh Atas Saham Bonus dan Dividen Terselubung.</a></li>
                            <li><a href="#" class="hover:text-yellow-600 font-semibold line-clamp-2">Analisis Kasus: Restrukturisasi Utang dan Dampak Pajaknya.</a></li>
                        </ol>
                    </div>

                    {{-- Sidebar 3: CTA: MODUL E-LEARNING (CTA E-Learning lebih interaktif) --}}
                    <div class="bg-main-color p-8 rounded-xl shadow-2xl text-white border-b-4 border-yellow-500" data-aos="fade-left" data-aos-delay="300">
                        <h3 class="text-2xl font-extrabold mb-3 flex items-center">
                            <span class="text-yellow-500 text-3xl mr-2">▶️</span> Mulai Belajar Gratis!
                        </h3>
                        <p class="text-gray-200 mb-6">
                            Akses modul video pengenalan Akuntansi Pajak untuk pemula, sekarang juga.
                        </p>
                        {{-- CTA DUMMY --}}
                        <a href="#" class="w-full inline-block text-center py-3 px-6 border-2 border-white text-sm font-bold rounded-full text-main-color bg-white hover:bg-yellow-400 transition duration-300 shadow-lg">
                            Tonton Modul Dasar &rarr;
                        </a>
                    </div>
                    
                </div> {{-- End Kolom Sidebar --}}

            </div>
            
        </div>
    </div>
    
    {{-- JAVASCRIPT DUMMY UNTUK TAB INTERAKTIF --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tab = button.dataset.tab;

                    // Deactivate all buttons and hide all content
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-main-color', 'text-white', 'font-bold');
                        btn.classList.add('bg-gray-200/50', 'text-gray-700', 'font-medium');
                    });
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Activate selected button and show selected content
                    button.classList.add('active', 'bg-main-color', 'text-white', 'font-bold');
                    button.classList.remove('bg-gray-200/50', 'text-gray-700', 'font-medium');
                    document.getElementById(`tab-${tab}`).classList.remove('hidden');
                });
            });
            
            // Set initial state based on active class (Regulasi is active by default)
             document.querySelector('#tab-regulasi').classList.remove('hidden');
        });
    </script>

@endsection