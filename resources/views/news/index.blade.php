@extends('layouts.app')

@section('title', 'Berita Pajak Terbaru')

@section('content')

    {{-- HERO SECTION NEWS (Tetap Clean, hanya ubah background) --}}
    <section class="bg-gradient-to-r from-gray-100 to-main-color/5 pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-3">
                Pusat Analisis & Informasi Perpajakan
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Kumpulan berita, regulasi, dan analisis dari tim ahli kami. Tetap selangkah di depan.
            </p>
        </div>
    </section>

    {{-- MAIN CONTENT GRID --}}
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- BLOK PENCARIAN DENGAN FILTER TERINTEGRASI --}}
            <div class="mb-12" data-aos="fade-down">
                <div class="max-w-4xl mx-auto relative p-4 bg-white rounded-xl shadow-2xl border-b-4 border-main-color">
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-3">
                        
                        {{-- Input Pencarian Utama --}}
                        <div class="relative flex-grow">
                            <input type="text" placeholder="Cari regulasi, kata kunci, atau topik..." 
                                   class="w-full p-3 pl-10 border-2 border-gray-200 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 transition duration-300">
                            <svg class="absolute left-3 top-3.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>

                        {{-- Filter Kategori (Select Dropdown) --}}
                        <select class="w-full sm:w-1/4 p-3 border-2 border-gray-200 rounded-lg bg-yellow-50/70 text-gray-800 font-medium focus:ring-yellow-500 focus:border-yellow-500 transition duration-300">
                            <option value="">Semua Kategori</option>
                            <option value="regulasi">Regulasi Terbaru</option>
                            <option value="kepatuhan">Tips Kepatuhan</option>
                            <option value="internasional">Pajak Internasional</option>
                            <option value="opini">Opini Pembaca</option>
                        </select>
                        
                        {{-- Filter Sumber/Moderasi (Select Dropdown) --}}
                        <select class="w-full sm:w-1/4 p-3 border-2 border-gray-200 rounded-lg bg-main-color/5 text-gray-800 font-medium focus:ring-yellow-500 focus:border-yellow-500 transition duration-300">
                            <option value="">Semua Sumber</option>
                            <option value="verified">Tim Analis (Verified)</option>
                            <option value="submitted">Opini Pembaca (Submitted)</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- GRID UTAMA: KONTEN (2/3) + SIDEBAR (1/3) --}}
            <div class="lg:grid lg:grid-cols-12 lg:gap-16">

                {{-- KOLOM KONTEN UTAMA (8/12) --}}
                <div class="lg:col-span-8 space-y-12">
                    
                    {{-- FEATURED ARTICLE (Dengan warna solid untuk tag dan CTA) --}}
                    <div class="bg-white rounded-2xl overflow-hidden shadow-2xl border-t-8 border-yellow-500 group cursor-pointer" data-aos="zoom-in">
                        <img class="w-full h-80 object-cover transition duration-500 group-hover:scale-[1.03]" 
                             src={{ asset('img/pelaporanpph.webp') }} 
                             alt="Featured Article Visual">
                        <div class="p-6 md:p-8">
                            <span class="text-xs font-semibold text-white bg-red-600 px-3 py-1 rounded-full uppercase shadow-lg">🚨 REGULASI KRITIS</span>
                            <h2 class="text-3xl font-extrabold text-gray-900 mt-4 mb-3 leading-snug group-hover:text-main-color transition duration-300">
                                Batas Waktu Pelaporan PPh Badan Dipercepat: Apa yang Harus Disiapkan Bisnis Anda?
                            </h2>
                            <p class="text-gray-700 mb-4 line-clamp-3">
                                Analisis mendalam mengenai Peraturan Direktur Jenderal Pajak terbaru yang mempengaruhi jadwal penutupan buku dan pelaporan wajib pajak korporasi. Hindari sanksi denda sekarang juga.
                            </p>
                            <div class="flex justify-between items-center text-sm text-gray-500 font-medium border-t pt-3">
                                <span>24 Oktober 2025 | Tim Analis Verified</span>
                                <span class="text-yellow-600 font-bold hover:text-main-color transition duration-300">Baca Detail &rarr;</span>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-3xl font-extrabold text-gray-900 border-b-4 border-yellow-500/50 pb-3 mb-6">Semua Artikel</h3>
                    
                    {{-- DAFTAR ARTIKEL (Menggunakan warna aksen pada border dan tag) --}}
                    <div class="space-y-6">
                        
                        {{-- Artikel 1: Kepatuhan (Yellow Accent) --}}
                        <a href="#" class="block p-5 bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-l-4 border-yellow-500/80 transform hover:scale-[1.01]" data-aos="fade-up" data-aos-delay="100">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 hover:text-yellow-600">
                                        Tips Menghindari Kesalahan Saat Pengajuan Restitusi PPN
                                    </h4>
                                    <p class="text-sm text-gray-600 mt-1 line-clamp-2">Panduan praktis untuk memastikan dokumen Anda lengkap dan memuluskan proses pengembalian kelebihan bayar PPN.</p>
                                </div>
                                <div class="flex-shrink-0 ml-4 text-right">
                                    <span class="text-xs font-semibold text-white bg-yellow-500 px-2 py-0.5 rounded-full shadow-sm">Kepatuhan</span>
                                    <p class="text-xs text-gray-500 mt-1">18 Okt 2025</p>
                                </div>
                            </div>
                        </a>

                        {{-- Artikel 2: Opini (Main Color Accent) --}}
                        <a href="#" class="block p-5 bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-l-4 border-main-color/80 transform hover:scale-[1.01]" data-aos="fade-up" data-aos-delay="200">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 hover:text-main-color">
                                        Opini Praktisi: Dampak Perpajakan pada Tren Kerja Remote
                                    </h4>
                                    <p class="text-sm text-gray-600 mt-1 line-clamp-2">Sudut pandang mengenai tantangan PPh 21 dan struktur penggajian di era hybrid working.</p>
                                </div>
                                <div class="flex-shrink-0 ml-4 text-right">
                                    <span class="text-xs font-semibold text-white bg-main-color px-2 py-0.5 rounded-full shadow-sm">Opini</span>
                                    <p class="text-xs text-gray-500 mt-1">12 Okt 2025</p>
                                </div>
                            </div>
                        </a>
                        
                        {{-- Artikel 3: Sengketa (Yellow Accent) --}}
                        <a href="#" class="block p-5 bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 border-l-4 border-yellow-500/80 transform hover:scale-[1.01]" data-aos="fade-up" data-aos-delay="300">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 hover:text-yellow-600">
                                        Taktik Negosiasi Terbaik Saat Menghadapi Pemeriksaan Pajak
                                    </h4>
                                    <p class="text-sm text-gray-600 mt-1 line-clamp-2">Strategi yang harus dipegang teguh oleh wajib pajak saat pendampingan audit.</p>
                                </div>
                                <div class="flex-shrink-0 ml-4 text-right">
                                    <span class="text-xs font-semibold text-white bg-yellow-500 px-2 py-0.5 rounded-full shadow-sm">Sengketa</span>
                                    <p class="text-xs text-gray-500 mt-1">5 Okt 2025</p>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                    
                    {{-- Pagination Bawah --}}
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

                {{-- KOLOM SIDEBAR (4/12) --}}
                <div class="lg:col-span-4 mt-12 lg:mt-0 space-y-10">
                    
                    {{-- Sidebar 1: KATEGORI (Accent Background) --}}
                    <div class="bg-main-color/10 p-6 rounded-xl shadow-lg border-l-4 border-main-color" data-aos="fade-left">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 border-b border-main-color/50 pb-2">Jelajahi Topik</h3>
                        <ul class="space-y-3">
                            <li><a href="#" class="flex justify-between items-center text-lg text-gray-800 hover:text-yellow-600 font-medium transition duration-200"><span>Regulasi Terbaru</span><span class="text-sm bg-yellow-500 text-white px-2 py-0.5 rounded-full font-bold">12</span></a></li>
                             <li><a href="#" class="flex justify-between items-center text-lg text-gray-800 hover:text-yellow-600 font-medium transition duration-200"><span>Tips Kepatuhan</span><span class="text-sm bg-main-color text-white px-2 py-0.5 rounded-full font-bold">8</span></a></li>
                             <li><a href="#" class="flex justify-between items-center text-lg text-gray-800 hover:text-yellow-600 font-medium transition duration-200"><span>Pajak Internasional</span><span class="text-sm bg-yellow-500 text-white px-2 py-0.5 rounded-full font-bold">4</span></a></li>
                            <li><a href="#" class="flex justify-between items-center text-lg text-gray-800 hover:text-yellow-600 font-medium transition duration-200"><span>Opini Pembaca</span><span class="text-sm bg-main-color text-white px-2 py-0.5 rounded-full font-bold">3</span></a></li>
                        </ul>
                    </div>
                    
                    {{-- Sidebar 2: TRENDING NEWS (Yellow Accent Background) --}}
                    <div class="bg-yellow-50 p-6 rounded-xl shadow-lg border-l-4 border-yellow-600" data-aos="fade-left" data-aos-delay="200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 border-b border-yellow-600/50 pb-2 flex items-center">
                            <span class="text-main-color mr-2 text-3xl">🔥</span> Paling Populer
                        </h3>
                        <ol class="space-y-3 list-decimal list-inside text-gray-700">
                            <li><a href="#" class="hover:text-yellow-600 font-semibold line-clamp-2">Perhitungan PPh 21 Pegawai Kontrak Terbaru.</a></li>
                            <li><a href="#" class="hover:text-yellow-600 font-semibold line-clamp-2">Revisi UU Harmonisasi Peraturan Perpajakan (HPP)</a></li>
                             <li><a href="#" class="hover:text-yellow-600 font-semibold line-clamp-2">Indikator Risiko Audit: Cek Kesehatan Pajak Anda.</a></li>
                        </ol>
                    </div>

                    {{-- Sidebar 3: TOOLKIT & RESOURCES (Main Color Background) --}}
                    <div class="bg-main-color p-6 rounded-xl shadow-xl border-l-4 border-yellow-500 text-white" data-aos="fade-left" data-aos-delay="300">
                        <h3 class="text-2xl font-bold mb-4 border-b border-yellow-500 pb-2 flex items-center">
                            <span class="text-yellow-500 mr-2 text-3xl">🛠️</span> Toolkit & Resources
                        </h3>
                        <p class="mb-4 text-sm opacity-90">Akses cepat ke alat bantu dan panduan praktis kami.</p>
                        <ul class="space-y-3">
                            <li>
                                <a href="#" class="flex items-center text-white hover:text-yellow-400 font-semibold transition duration-300">
                                    <span class="text-xl mr-2">🧮</span> Kalkulator PPh 21 Otomatis
                                </a>
                            </li>
                             <li>
                                <a href="#" class="flex items-center text-white hover:text-yellow-400 font-semibold transition duration-300">
                                    <span class="text-xl mr-2">📊</span> Indikator Risiko Audit (Gratis)
                                </a>
                            </li>
                             <li>
                                <a href="#" class="flex items-center text-white hover:text-yellow-400 font-semibold transition duration-300">
                                    <span class="text-xl mr-2">📁</span> Download Formulir Pajak
                                </a>
                            </li>
                        </ul>
                    </div>

                    {{-- Sidebar 4: CTA OPINI/KONTRIBUSI (Yellow Background) --}}
                    <div class="bg-yellow-500 p-8 rounded-xl shadow-2xl border-b-4 border-main-color" data-aos="fade-left" data-aos-delay="400">
                        <h3 class="text-2xl font-extrabold text-main-darker mb-3">Kontribusikan Opini Anda</h3>
                        <p class="text-gray-800 mb-6">
                            Bagikan pandangan Anda. Artikel Anda akan melalui proses moderasi ketat.
                        </p>
                        {{-- CTA DUMMY (Akan diganti Form) --}}
                        <a href="#" class="w-full inline-block text-center py-3 px-6 border-2 border-main-color text-sm font-bold rounded-full text-white bg-main-color hover:bg-main-darker transition duration-300 shadow-lg">
                            Kirim Artikel (Moderasi Aktif) &rarr;
                        </a>
                    </div>
                    
                </div> {{-- End Kolom Sidebar --}}

            </div>
            
        </div>
    </div>
@endsection