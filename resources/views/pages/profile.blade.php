@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

    {{-- HERO SECTION PROFIL --}}
    <section class="bg-main-color/5 pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4" data-aos="fade-up">
                Profil Perusahaan Kami
            </h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Mengenal lebih dekat visi, misi, nilai inti, dan tim profesional yang menggerakkan solusi perpajakan terdepan.
            </p>
        </div>
    </section>

    {{-- 1. SEJARAH & FILOSOFI KAMI (Split Screen + Image Sentris) - TETAP --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                
                {{-- Konten Visual (7 Kolom Kiri) --}}
                <div class="lg:col-span-7 relative" data-aos="fade-right" data-aos-delay="100">
                    <div class="p-6 bg-gray-50 rounded-2xl shadow-2xl border-b-8 border-yellow-500 transform transition duration-500 hover:shadow-3xl">
                        <img class="w-full h-80 object-cover rounded-xl shadow-xl" 
                             src={{ asset('img/scbd.jpeg') }}
                             alt="Ilustrasi Kantor dan Jabat Tangan Klien">
                        <div class="absolute bottom-4 right-10 bg-white p-3 rounded-lg shadow-xl border-t-2 border-main-color transform rotate-2">
                             <p class="text-sm font-bold text-main-color">Didirikan 2015</p>
                        </div>
                    </div>
                </div>

                {{-- Konten Teks (5 Kolom Kanan) --}}
                <div class="lg:col-span-5 mt-12 lg:mt-0" data-aos="fade-left" data-aos-delay="300">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1">
                        Landasan Etika dan Profesionalisme
                    </span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">
                        Sejarah & Filosofi Kami
                    </h2>
                    <p class="mt-4 text-lg text-gray-700">
                        Kami adalah konsultan yang lahir dari kebutuhan akan kepastian hukum dan efisiensi finansial di tengah dinamika regulasi perpajakan Indonesia. Sejak berdiri, kami berpegang pada filosofi **"Kepatuhan adalah Strategi Terbaikami adalah konsultan yang lahir dari kebutuhan akan kepastian hukum dan efisiensi finansial di tengah dinamika regulasi perpajakan Indonesia. Sejak berdiri, kami berpegang pada filosofi **"Kepatuhan adalah Strategi Terbaik"**.ami adalah konsultan yang lahir dari kebutuhan akan kepastian hukum dan efisiensi finansial di tengah dinamika regulasi perpajakan Indonesia. Sejak berdiri, kami berpegang pada filosofi **"Kepatuhan adalah Strategi Terbaik"**.ami adalah konsultan yang lahir dari kebutuhan akan kepastian hukum dan efisiensi finansial di tengah dinamika regulasi perpajakan Indonesia. Sejak berdiri, kami berpegang pada filosofi **"Kepatuhan adalah Strategi Terbaik"**."**.
                    </p>
                    <p class="mt-4 text-xl font-bold text-main-color italic border-l-4 border-main-color pl-3">
                        Membangun kepercayaan klien melalui integritas dan solusi yang teruji.
                    </p>
                    {{-- TOMBOL CTA DIHILANGKAN (sesuai permintaan) --}}
                </div>
            </div>
        </div>
    </section>

    {{-- 2. PERJALANAN KONSULTASI PAJAK KAMI (TIMELINE) - TETAP --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">
                Perjalanan Konsultasi Pajak Kami
            </h2>

            <div class="relative wrap overflow-hidden p-10 h-full">
                {{-- Garis Timeline Vertikal --}}
                <div class="border-2-2 absolute border-opacity-20 border-main-color h-full border" style="left: 50%;"></div>
                
                {{-- Event 1: Pendirian --}}
                <div class="mb-8 flex justify-between items-center w-full right-timeline" data-aos="fade-right">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-main-color shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-sm">1</h1>
                    </div>
                    <div class="order-1 bg-white rounded-xl shadow-lg w-5/12 px-6 py-4 border-t-4 border-main-color transform hover:shadow-2xl transition duration-300">
                        <p class="mb-1 text-xs text-main-color uppercase font-bold">Tahun 2015</p>
                        <h3 class="mb-3 font-bold text-2xl text-gray-900">Pendirian Perusahaan</h3>
                        <p class="text-sm leading-snug text-gray-700">
                            Didirikan dengan fokus awal pada kepatuhan PPh Badan dan pelaporan SPT tahunan untuk sektor UMKM.
                        </p>
                    </div>
                </div>

                {{-- Event 2: Ekspansi Layanan --}}
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline" data-aos="fade-left">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-yellow-500 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-sm">2</h1>
                    </div>
                    <div class="order-1 bg-white rounded-xl shadow-lg w-5/12 px-6 py-4 border-t-4 border-yellow-500 transform hover:shadow-2xl transition duration-300">
                        <p class="mb-1 text-xs text-yellow-600 uppercase font-bold">Tahun 2018</p>
                        <h3 class="mb-3 font-bold text-2xl text-gray-900">Spesialisasi Audit & Sengketa</h3>
                        <p class="text-sm leading-snug text-gray-700">
                            Tim diperkuat dengan ahli bersertifikasi untuk menangani pemeriksaan, keberatan, dan sengketa pajak yang kompleks.
                        </p>
                    </div>
                </div>

                {{-- Event 3: Transformasi Digital --}}
                <div class="mb-8 flex justify-between items-center w-full right-timeline" data-aos="fade-right">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-main-color shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-sm">3</h1>
                    </div>
                    <div class="order-1 bg-white rounded-xl shadow-lg w-5/12 px-6 py-4 border-t-4 border-main-color transform hover:shadow-2xl transition duration-300">
                        <p class="mb-1 text-xs text-main-color uppercase font-bold">Tahun 2022</p>
                        <h3 class="mb-3 font-bold text-2xl text-gray-900">Peluncuran Digital Portal</h3>
                        <p class="text-sm leading-snug text-gray-700">
                            Mengintegrasikan layanan dan *knowledge base* secara *online* untuk memberikan akses cepat dan efisien kepada klien.
                        </p>
                    </div>
                </div>

                {{-- Event 4: Pengakuan Industri --}}
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline" data-aos="fade-left">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-yellow-500 shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-sm">4</h1>
                    </div>
                    <div class="order-1 bg-white rounded-xl shadow-lg w-5/12 px-6 py-4 border-t-4 border-yellow-500 transform hover:shadow-2xl transition duration-300">
                        <p class="mb-1 text-xs text-yellow-600 uppercase font-bold">Tahun 2025</p>
                        <h3 class="mb-3 font-bold text-2xl text-gray-900">Mencapai 500+ Klien</h3>
                        <p class="text-sm leading-snug text-gray-700">
                            Merayakan pencapaian 500+ klien aktif dan memperluas jaringan konsultasi ke skala nasional.
                        </p>
                    </div>
                </div>
                
                {{-- Style tambahan untuk Timeline --}}
                <style>
                    .wrap {
                        padding: 0;
                    }
                    .border {
                        border-left-width: 2px;
                    }
                    .right-timeline .order-1 {
                        text-align: left;
                    }
                    .left-timeline .order-1 {
                        text-align: right;
                    }
                </style>
            </div>
            
        </div>
    </section>

    {{-- 3. REVISI: VISI & MISI (Pembungkus Profesional & Elegan) --}}
    <section class="py-20 bg-main-color/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Pembungkus Profesional & Elegan --}}
            {{-- Mengganti shadow brutal dan menghapus efek blur/z-index dekoratif --}}
            <div class="relative p-8 lg:p-16 bg-white rounded-2xl shadow-xl border-t-8 border-yellow-500 transition duration-1000" data-aos="fade-up" data-aos-duration="1000">
                
                <h2 class="text-5xl font-extrabold text-gray-900 mb-12 text-center">
                    Fondasi Strategis Kami
                </h2>
                
                <div class="grid md:grid-cols-2 gap-10">
                    
                    {{-- VISI CARD (Gradient Elegan) --}}
                    <div class="p-10 rounded-xl shadow-lg bg-gradient-to-br from-main-color to-main-darker/90 text-white border-b-4 border-yellow-400 transform hover:scale-[1.01] transition duration-300">
                        <div class="flex items-start mb-6">
                            <svg class="w-10 h-10 mr-4 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.418a9.957 9.957 0 00-4.265-3.321m-2.181 0a9.957 9.957 0 00-4.265 3.321m0 0l-3.32 8.3-2.3 5.75a1 1 0 001.373 1.373l5.75-2.3 8.3-3.32a1 1 0 00.52-1.374l-4.5-9a1 1 0 00-1.246-.065z"></path></svg>
                            <div>
                                <h3 class="text-3xl font-extrabold tracking-tight">Visi Perusahaan</h3>
                                <p class="text-sm text-yellow-300 mt-1 uppercase font-semibold">Our Long-Term Ambition</p>
                            </div>
                        </div>
                        <p class="text-lg leading-relaxed font-light border-l-4 border-yellow-400 pl-4">
                            Menjadi konsultan pajak terdepan di Indonesia yang memberikan solusi pajak **inovatif, etis, dan berkelanjutan** untuk menjamin kepatuhan dan kesuksesan jangka panjang klien.
                        </p>
                    </div>

                    {{-- MISI CARD (Kontras Elegan) --}}
                    <div class="p-10 rounded-xl shadow-lg bg-gray-50 border-b-4 border-main-color transform hover:scale-[1.01] transition duration-300">
                         <div class="flex items-start mb-6">
                            <svg class="w-10 h-10 mr-4 text-main-color flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <div>
                                <h3 class="text-3xl font-extrabold tracking-tight text-gray-900">Misi Kami</h3>
                                <p class="text-sm text-gray-600 mt-1 uppercase font-semibold">How We Achieve It</p>
                            </div>
                        </div>
                        <ul class="list-none space-y-3 text-gray-800 text-lg">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 flex-shrink-0 text-yellow-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                **Proaktif & Personal:** Layanan konsultasi yang mendalam dan *tailor-made*.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 flex-shrink-0 text-yellow-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                **Kepatuhan Maksimal:** Memastikan pelaporan 100% akurat sesuai regulasi DJP terbaru.
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 flex-shrink-0 text-yellow-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                **Teknologi & Kompetensi:** Pengembangan tim dan integrasi teknologi perpajakan terkini.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. NILAI INTI (CORE VALUES) - TETAP --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-12 text-center" data-aos="fade-up">
                Nilai Inti (Core Values)
            </h2>
            
            <div class="grid md:grid-cols-3 gap-8 text-center">
                
                {{-- Value 1: Integritas --}}
                <div class="p-8 bg-main-color/5 rounded-xl shadow-lg border-b-4 border-main-color transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="200">
                    <svg class="h-12 w-12 text-main-color mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.418A9.957 9.957 0 0012 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10a9.957 9.957 0 00-1.782-5.582z"></path></svg>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Integritas</h3>
                    <p class="text-gray-700">Bertindak jujur dan transparan dalam setiap konsultasi dan pelaporan, menjaga kepercayaan klien sebagai aset utama.</p>
                </div>

                {{-- Value 2: Profesionalisme --}}
                <div class="p-8 bg-yellow-50 rounded-xl shadow-lg border-b-4 border-yellow-500 transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="300">
                    <svg class="h-12 w-12 text-yellow-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2v5a2 2 0 01-2 2H9a2 2 0 01-2-2V9a2 2 0 012-2h6zM7 10h10"></path></svg>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Profesionalisme</h3>
                    <p class="text-gray-700">Menyediakan layanan dengan standar tertinggi, didukung oleh keahlian dan sertifikasi pajak terkini.</p>
                </div>

                {{-- Value 3: Inovasi --}}
                <div class="p-8 bg-main-color/5 rounded-xl shadow-lg border-b-4 border-main-color transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="400">
                    <svg class="h-12 w-12 text-main-color mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l-4 4m-4-4l-4 4"></path></svg>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Inovasi</h3>
                    <p class="text-gray-700">Menerapkan teknologi dan strategi terbaru untuk perencanaan pajak yang efisien dan meminimalkan risiko.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. TIM KAMI - CTA DIHAPUS --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-12 text-center" data-aos="fade-up">
                Tim Konsultan Kami
            </h2>
            
            <div class="grid md:grid-cols-4 gap-8 text-center">
                
                {{-- Partner 1 --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border-b-4 border-main-color transform hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <img class="w-28 h-28 rounded-full mx-auto mb-4 object-cover border-4 border-main-color/30" src={{ asset('img/ceo1.jpg') }} alt="Partner 1">
                    <h4 class="font-bold text-xl text-main-darker">Ms. Audrey</h4>
                    <p class="text-sm text-yellow-600 font-semibold mb-3">Managing Partner</p>
                    <p class="text-xs text-gray-600">Ahli PPh Badan & Sengketa</p>
                </div>
                
                {{-- Partner 2 --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border-b-4 border-yellow-500 transform hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="300">
                    <img class="w-28 h-28 rounded-full mx-auto mb-4 object-cover border-4 border-yellow-500/30" src={{ asset('img/ceo2.jpg') }} alt="Partner 2">
                    <h4 class="font-bold text-xl text-main-darker">Ms. Jessica</h4>
                    <p class="text-sm text-main-color font-semibold mb-3">Partner Audit</p>
                    <p class="text-xs text-gray-600">Spesialis Keberatan & Banding</p>
                </div>
                
                {{-- Partner 3 --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border-b-4 border-main-color transform hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="400">
                    <img class="w-28 h-28 rounded-full mx-auto mb-4 object-cover border-4 border-main-color/30" src={{ asset('img/ceo3.webp') }} alt="Partner 3">
                    <h4 class="font-bold text-xl text-main-darker">Ms. Felicia</h4>
                    <p class="text-sm text-yellow-600 font-semibold mb-3">Tech Lead</p>
                    <p class="text-xs text-gray-600">Konsultasi E-Faktur & IT</p>
                </div>
                
                {{-- Partner 4 --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border-b-4 border-yellow-500 transform hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="500">
                    <img class="w-28 h-28 rounded-full mx-auto mb-4 object-cover border-4 border-yellow-500/30" src={{ asset('img/ceo4.webp') }} alt="Partner 4">
                    <h4 class="font-bold text-xl text-main-darker">Mr. Anwar</h4>
                    <p class="text-sm text-main-color font-semibold mb-3">Lead PPN</p>
                    <p class="text-xs text-gray-600">Perpajakan Internasional</p>
                </div>
            </div>

            {{-- CTA DIHAPUS (sesuai permintaan) --}}
        </div>
    </section>

    {{-- FOOTER CTA RINGAN DIHAPUS (sesuai permintaan) --}}
    
@endsection