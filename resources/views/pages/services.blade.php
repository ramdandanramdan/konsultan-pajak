@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')

    {{-- HERO SECTION LAYANAN --}}
    <section class="bg-main-color/5 pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4" data-aos="fade-up">
                Solusi Perpajakan Komprehensif
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Layanan kami dirancang untuk lebih dari sekadar kepatuhan. Kami membantu Anda merencanakan, mengoptimalkan, dan melindungi masa depan finansial Anda.
            </p>
        </div>
    </section>

    {{-- BAGIAN A: PERKENALAN - MENGAPA METODOLOGI KAMI BERBEDA --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-start">
                
                {{-- Blok Teks Kiri --}}
                <div class="lg:col-span-6" data-aos="fade-right">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1">
                        Keunggulan Sistem Kami
                    </span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">
                        Mengapa Metodologi Kami Berbeda?
                    </h2>
                    <p class="mt-4 text-lg text-gray-700">
                        Kami tidak hanya mengisi formulir. Kami mengintegrasikan kepatuhan (compliance) dengan perencanaan strategis (planning) menggunakan sistem internal yang canggih. Ini adalah pendekatan holistik yang meminimalkan risiko dan memaksimalkan efisiensi pajak Anda.
                    </p>
                    <div class="mt-8 p-6 rounded-xl bg-main-color/10 border-l-4 border-main-color">
                        <p class="text-xl font-bold text-main-color italic">
                            Kami mengubah beban kepatuhan menjadi keunggulan kompetitif bagi bisnis Anda.
                        </p>
                    </div>
                </div>

                {{-- Keunggulan Kolektif (Tiga Poin Utama) Kanan --}}
                <div class="lg:col-span-6 mt-12 lg:mt-0 space-y-8">
                    
                    {{-- Poin 1: Analisis Berlapis --}}
                    <div class="flex items-start p-4 rounded-xl shadow-md bg-gray-50 border-t-2 border-yellow-500" data-aos="fade-left" data-aos-delay="100">
                        <span class="text-2xl mr-4 text-yellow-600 font-extrabold flex-shrink-0">1.</span>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Analisis Berlapis (Multi-Layer Review)</h3>
                            <p class="text-gray-700 mt-1">
                                Setiap transaksi ditinjau oleh tim spesialis yang berbeda—kepatuhan, audit, dan legal—untuk memitigasi celah risiko dari berbagai sudut pandang.
                            </p>
                        </div>
                    </div>
                    
                    {{-- Poin 2: Solusi Berbasis Data --}}
                    <div class="flex items-start p-4 rounded-xl shadow-md bg-gray-50 border-t-2 border-yellow-500" data-aos="fade-left" data-aos-delay="200">
                        <span class="text-2xl mr-4 text-yellow-600 font-extrabold flex-shrink-0">2.</span>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Solusi Berbasis Data (Data-Driven Insight)</h3>
                            <p class="text-gray-700 mt-1">
                                Keputusan perencanaan pajak didukung oleh data finansial historis dan proyeksi masa depan, memastikan strategi Anda akurat dan optimal.
                            </p>
                        </div>
                    </div>
                    
                    {{-- Poin 3: Transparansi Proses --}}
                    <div class="flex items-start p-4 rounded-xl shadow-md bg-gray-50 border-t-2 border-yellow-500" data-aos="fade-left" data-aos-delay="300">
                        <span class="text-2xl mr-4 text-yellow-600 font-extrabold flex-shrink-0">3.</span>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Transparansi Proses (Clear Accountability)</h3>
                            <p class="text-gray-700 mt-1">
                                Klien memiliki akses real-time ke status pekerjaan, jadwal pelaporan, dan dokumen, memastikan tidak ada kejutan di kemudian hari.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN B: TIGA PILAR LAYANAN (SOFT SELLING SOLUSI) --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">
                Tiga Pilar Utama Layanan Kami
            </h2>

            <div class="grid md:grid-cols-3 gap-10">
                
                {{-- PILAR 1: PERLINDUNGAN KEPATUHAN (COMPLIANCE SHIELD) --}}
                <div class="p-8 bg-white rounded-2xl shadow-2xl border-b-8 border-main-color transform hover:translate-y-[-5px] transition duration-500" data-aos="zoom-in-up" data-aos-delay="100">
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-3xl font-extrabold text-main-color">Compliance Shield</h3>
                        <span class="text-4xl">🛡️</span>
                    </div>
                    
                    <p class="text-sm font-semibold text-gray-500 mb-2 uppercase">Fokus Masalah:</p>
                    <p class="text-lg text-gray-800 font-medium">Menghindari denda, sanksi, dan risiko audit yang tidak perlu.</p>
                    
                    <ul class="list-none space-y-2 text-gray-700 mt-4">
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Bantuan Penyusunan PPh Badan/Pribadi.</li>
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Pelaporan SPT Masa & Tahunan Akurat.</li>
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Verifikasi Transaksi dan Bukti Potong.</li>
                    </ul>
                    
                    {{-- Koneksi Gratis --}}
                    <div class="mt-6 border-t pt-4">
                        <a href="#" class="text-sm font-bold text-yellow-600 hover:text-yellow-700 flex items-center">
                            Lihat NEWS terbaru untuk risiko denda bulan ini. &rarr;
                        </a>
                    </div>

                    {{-- CTA di Kartu --}}
                    <button class="w-full mt-4 py-3 border border-transparent text-white font-bold rounded-full bg-main-color hover:bg-main-darker transition duration-300">
                        Jelajahi Solusi Kepatuhan
                    </button>
                </div>

                {{-- PILAR 2: OPTIMALISASI STRATEGIS (FINANCIAL OPTIMIZATION) --}}
                <div class="p-8 bg-white rounded-2xl shadow-2xl border-b-8 border-yellow-500 transform hover:translate-y-[-5px] transition duration-500" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-3xl font-extrabold text-yellow-600">Financial Optimization</h3>
                        <span class="text-4xl">💡</span>
                    </div>
                    
                    <p class="text-sm font-semibold text-gray-500 mb-2 uppercase">Fokus Masalah:</p>
                    <p class="text-lg text-gray-800 font-medium">Pembayaran pajak yang terlalu tinggi dan perencanaan yang tidak efisien.</p>
                    
                    <ul class="list-none space-y-2 text-gray-700 mt-4">
                        <li class="flex items-start"><span class="text-main-color mr-2">✓</span> Perencanaan Pajak Jangka Pendek & Panjang.</li>
                        <li class="flex items-start"><span class="text-main-color mr-2">✓</span> Review Struktur Bisnis untuk Efisiensi.</li>
                        <li class="flex items-start"><span class="text-main-color mr-2">✓</span> Analisis Dampak Pajak Transaksi Besar.</li>
                    </ul>
                    
                    {{-- Koneksi Gratis --}}
                    <div class="mt-6 border-t pt-4">
                        <a href="#" class="text-sm font-bold text-main-color hover:text-main-darker flex items-center">
                            Baca KNOWLEDGE BASE kami tentang Teknik Penghematan Pajak Legal. &rarr;
                        </a>
                    </div>

                    {{-- CTA di Kartu --}}
                    <button class="w-full mt-4 py-3 border border-transparent text-white font-bold rounded-full bg-yellow-500 hover:bg-yellow-600 transition duration-300">
                        Pahami Strategi Optimalisasi
                    </button>
                </div>

                {{-- PILAR 3: RESOLUSI SENGKETA (DISPUTE RESOLUTION) --}}
                <div class="p-8 bg-white rounded-2xl shadow-2xl border-b-8 border-main-color transform hover:translate-y-[-5px] transition duration-500" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-3xl font-extrabold text-main-color">Dispute Resolution</h3>
                        <span class="text-4xl">⚖️</span>
                    </div>
                    
                    <p class="text-sm font-semibold text-gray-500 mb-2 uppercase">Fokus Masalah:</p>
                    <p class="text-lg text-gray-800 font-medium">Klien yang sudah menerima surat pemeriksaan atau keberatan dari otoritas.</p>
                    
                    <ul class="list-none space-y-2 text-gray-700 mt-4">
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Pendampingan Audit (Pemeriksaan) Pajak.</li>
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Pengajuan Keberatan dan Banding Resmi.</li>
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Negosiasi dan Restitusi Kelebihan Bayar.</li>
                    </ul>
                    
                    {{-- Koneksi Gratis --}}
                    <div class="mt-6 border-t pt-4">
                        <a href="#" class="text-sm font-bold text-yellow-600 hover:text-yellow-700 flex items-center">
                            Gunakan TOOLS gratis kami: Indikator Risiko Audit. &rarr;
                        </a>
                    </div>

                    {{-- CTA di Kartu --}}
                    <button class="w-full mt-4 py-3 border border-transparent text-white font-bold rounded-full bg-main-color hover:bg-main-darker transition duration-300">
                        Dapatkan Bantuan Darurat Audit
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN D (BARU): KONSULTASI PAJAK INTERNASIONAL & TRANSFER PRICING --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                
                {{-- Ilustrasi Gambar Kiri --}}
                <div class="lg:col-span-6 relative order-1 lg:order-1" data-aos="fade-right">
                    <div class="p-6 bg-yellow-50 rounded-2xl shadow-2xl border-b-8 border-main-color">
                        <img class="w-full h-80 object-cover rounded-xl shadow-xl" 
                             src={{ asset('img/pajaklintas.webp') }} 
                             alt="Ilustrasi Jaringan Global/Internasional">
                        <div class="absolute bottom-4 right-10 bg-white p-3 rounded-lg shadow-xl border-t-2 border-yellow-500 transform rotate-2">
                             <p class="text-sm font-bold text-yellow-600">Pajak Lintas Batas</p>
                        </div>
                    </div>
                </div>

                {{-- Konten Teks Kanan --}}
                <div class="lg:col-span-6 mt-12 lg:mt-0 order-2 lg:order-2" data-aos="fade-left">
                    <span class="text-sm font-semibold tracking-wider text-main-color uppercase border-b-2 border-main-color/50 pb-1">
                        Layanan Khusus Korporat
                    </span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">
                        Pajak Internasional & Transfer Pricing (TP)
                    </h2>
                    <p class="mt-4 text-lg text-gray-700">
                        Bagi perusahaan dengan transaksi afiliasi lintas negara, kepatuhan Transfer Pricing adalah kritis. Kami memastikan dokumentasi TP Anda sesuai dengan standar OECD dan regulasi domestik.
                    </p>
                    <ul class="list-none space-y-3 text-gray-800 mt-4 border-l-4 border-yellow-500 pl-4">
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Penyusunan Dokumen Master File & Local File.</li>
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Analisis Kesebandingan (Benchmark Study).</li>
                        <li class="flex items-start"><span class="text-yellow-500 mr-2">✓</span> Konsultasi *Tax Treaty* dan Permanent Establishment.</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-full text-white bg-yellow-500 hover:bg-yellow-600 shadow-lg smooth-transition">
                        Eksplorasi Solusi Pajak Global &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    {{-- BAGIAN E (BARU): EDUKASI PAJAK IN-HOUSE & WORKSHOP --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                
                {{-- Konten Teks Kiri --}}
                <div class="lg:col-span-6" data-aos="fade-right">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1">
                        Penguatan Internal
                    </span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">
                        Edukasi & Workshop Pajak In-House
                    </h2>
                    <p class="mt-4 text-lg text-gray-700">
                        Investasi terbaik adalah pada tim internal Anda. Kami menyediakan program pelatihan khusus, disesuaikan dengan industri dan masalah pajak spesifik perusahaan Anda.
                    </p>
                    <ul class="list-none space-y-3 text-gray-800 mt-4 border-l-4 border-main-color pl-4">
                        <li class="flex items-start"><span class="text-main-color mr-2">✓</span> Pelatihan Kepatuhan PPN dan PPh terbaru.</li>
                        <li class="flex items-start"><span class="text-main-color mr-2">✓</span> Simulasi Audit dan Pemeriksaan.</li>
                        <li class="flex items-start"><span class="text-main-color mr-2">✓</span> Workshop Pembuatan Laporan Keuangan Fiskal.</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-full text-white bg-main-color hover:bg-main-darker shadow-lg smooth-transition">
                        Ajukan Jadwal Workshop &rarr;
                    </a>
                </div>

                {{-- Ilustrasi Gambar Kanan --}}
                <div class="lg:col-span-6 relative mt-12 lg:mt-0" data-aos="fade-left">
                    <div class="p-6 bg-main-color/10 rounded-2xl shadow-2xl border-b-8 border-yellow-500">
                        <img class="w-full h-80 object-cover rounded-xl shadow-xl" 
                             src={{ asset('img/workshop.webp') }}
                             alt="Ilustrasi Kelas/Workshop Edukasi">
                        <div class="absolute bottom-4 left-10 bg-white p-3 rounded-lg shadow-xl border-t-2 border-main-color transform -rotate-2">
                             <p class="text-sm font-bold text-main-color">Upgrade Tim Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN C: INTEGRASI NILAI GRATIS (VALUE INTEGRATION) --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-6" data-aos="fade-up">
                Pengetahuan dan Alat Eksklusif, Gratis untuk Anda
            </h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="100">
                **Jangan Ambil Risiko, Dapatkan Pengetahuan.** Kami percaya edukasi adalah garis pertahanan pertama Anda. Akses nilai tambah kami di bawah ini.
            </p>

            <div class="grid md:grid-cols-3 gap-8">
                
                {{-- Fitur 1: NEWS (Regulasi Terbaru) --}}
                <div class="p-8 rounded-xl shadow-xl bg-main-color/5 border-t-4 border-yellow-500 flex flex-col h-full" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-4xl mb-4 text-yellow-600">📰</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">NEWS (Regulasi Terbaru)</h3>
                    <p class="text-gray-700 flex-grow">
                        Tim analis kami menyaring update peraturan pajak mingguan agar Anda selalu selangkah di depan dan terhindar dari ketidakpatuhan terbaru.
                    </p>
                    <a href="#" class="mt-4 text-sm font-bold text-main-color hover:text-main-darker underline">
                        "Lihat Ringkasan Minggu Ini" &rarr;
                    </a>
                </div>

                {{-- Fitur 2: KNOWLEDGE BASE (Edukasi Mendalam) --}}
                <div class="p-8 rounded-xl shadow-xl bg-main-color/5 border-t-4 border-main-color flex flex-col h-full" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-4xl mb-4 text-main-color">📚</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">KNOWLEDGE BASE (Edukasi Mendalam)</h3>
                    <p class="text-gray-700 flex-grow">
                        Akses ratusan panduan dan artikel mendalam yang dibuat untuk memberikan Anda kejelasan di tengah kerumitan perpajakan.
                    </p>
                    <a href="#" class="mt-4 text-sm font-bold text-yellow-600 hover:text-yellow-700 underline">
                        "Akses Panduan Pajak" &rarr;
                    </a>
                </div>

                {{-- Fitur 3: TOOLS (Alat Digital) --}}
                <div class="p-8 rounded-xl shadow-xl bg-main-color/5 border-t-4 border-yellow-500 flex flex-col h-full" data-aos="zoom-in" data-aos-delay="400">
                    <div class="text-4xl mb-4 text-yellow-600">🛠️</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">TOOLS (Alat Digital)</h3>
                    <p class="text-gray-700 flex-grow">
                        Gunakan kalkulator dan kuesioner otomatis kami untuk mendapatkan penilaian risiko cepat, gratis, dan real-time.
                    </p>
                    <a href="#" class="mt-4 text-sm font-bold text-main-color hover:text-main-darker underline">
                        "Gunakan Alat Gratis" &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    

@endsection