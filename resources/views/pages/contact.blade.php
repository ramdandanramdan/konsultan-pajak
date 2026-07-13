@extends('layouts.app')

@section('title', 'Hubungi Konsultan Pajak Profesional | Jakarta Selatan')

@php
    use App\Models\PageSection;
    $contact = PageSection::getAll('contact');
@endphp

@section('content')
    {{-- CUSTOM CSS UNTUK GRADIENT, WARNA, DAN ANIMASI BACKGROUND --}}
    <style>
        /* Definisi Warna Profesional: Biru Tua & Hijau Emerald/Teal */
        
        /* Biru Tua (Main Color - Tax Blue): Profesionalisme */
        .tax-blue { color: #1E3A8A; } 
        .bg-tax-blue { background-color: #1E3A8A; }
        .border-tax-blue { border-color: #1E3A8A; }
        
        /* Hijau Emerald/Teal (Accent Color - Tax Accent): Kontras & Elegan */
        .tax-accent { color: #10b981; } /* Lebih tenang dari Lime */
        .bg-tax-accent { background-color: #10b981; }
        .border-tax-accent { border-color: #10b981; }
        
        /* CTA Gradient: Kombinasi Biru dan Hijau yang Matang */
        .cta-gradient { 
            background-image: linear-gradient(135deg, #065f46 0%, #10b981 100%); /* Teal Matang */
            color: #ffffff; /* Teks putih untuk kontras tinggi */
        } 
        .cta-gradient:hover { background-image: linear-gradient(135deg, #10b981 0%, #065f46 100%); }

        /* 1. ANIMASI UNLIMITED: Latar Belakang Gelembung Dinamis */
        .animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .animated-background .bubble {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(30, 58, 138, 0.1); /* Tax Blue sangat transparan */
            animation: animate 25s linear infinite;
            bottom: -150px;
            border-radius: 50%;
        }
        /* Penempatan dan waktu animasi gelembung tetap sama */
        .animated-background .bubble:nth-child(1) { left: 25%; width: 80px; height: 80px; animation-delay: 0s; }
        .animated-background .bubble:nth-child(2) { left: 10%; width: 20px; height: 20px; animation-delay: 2s; animation-duration: 12s; }
        .animated-background .bubble:nth-child(3) { left: 70%; width: 40px; height: 40px; animation-delay: 4s; animation-duration: 20s; }
        .animated-background .bubble:nth-child(4) { left: 40%; width: 60px; height: 60px; animation-delay: 0s; animation-duration: 18s; }
        .animated-background .bubble:nth-child(5) { left: 65%; width: 20px; height: 20px; animation-delay: 0s; }
        .animated-background .bubble:nth-child(6) { left: 75%; width: 110px; height: 110px; animation-delay: 3s; animation-duration: 35s; }
        .animated-background .bubble:nth-child(7) { left: 35%; width: 150px; height: 150px; animation-delay: 7s; }
        .animated-background .bubble:nth-child(8) { left: 50%; width: 25px; height: 25px; animation-delay: 15s; animation-duration: 45s; }

        @keyframes animate {
            0% { transform: translateY(0) rotate(0deg); opacity: 1; }
            100% { transform: translateY(-1000px) rotate(720deg); opacity: 0; }
        }

        /* Styling tambahan untuk profesionalisme */
        .content-card {
            z-index: 10;
            position: relative;
            backdrop-filter: blur(5px); 
            background-color: rgba(255, 255, 255, 0.98); /* Sedikit opacity lebih tinggi */
        }
    </style>

    {{-- HERO/MAIN CONTACT SECTION --}}
    <div class="relative min-h-screen pt-24 pb-20 overflow-hidden">
        
        {{-- UNLIMITED ANIMATION BACKGROUND (TIDAK NORAK) --}}
        <div class="animated-background">
            <ul class="bubbles">
                <li class="bubble"></li>
                <li class="bubble"></li>
                <li class="bubble"></li>
                <li class="bubble"></li>
                <li class="bubble"></li>
                <li class="bubble"></li>
                <li class="bubble"></li>
                <li class="bubble"></li>
            </ul>
        </div>

        {{-- CONTENT WRAPPER --}}
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 content-card rounded-xl shadow-2xl p-6 lg:p-10">
            
            <header class="text-center mb-10">
                <h1 class="text-5xl lg:text-5xl font-extrabold tax-blue mb-2 leading-tight">
                    {{ $contact['hero_title'] ?? 'Sistem Konsultasi Cepat (3 Langkah)' }}
                </h1>
                <p class="text-xl text-gray-600 max-w-xl mx-auto">
                    {{ $contact['hero_subtitle'] ?? 'Hubungi tim kami di Jakarta Selatan sekarang.' }}
                </p>
            </header>

            <div class="grid lg:grid-cols-2 gap-8">
                
                {{-- KOLOM KIRI (INFO SANGAT SIMPLE) --}}
                <div class="space-y-6 lg:order-2">
                    
                    {{-- Blok 1: WhatsApp (TRICK MARKETING) --}}
                    <div class="p-5 bg-tax-accent/10 rounded-lg border-l-4 border-tax-accent shadow-lg hover:shadow-xl transition duration-300">
                        <h3 class="text-2xl font-bold text-gray-900 flex items-center mb-1">
                            <span class="text-3xl mr-3 tax-accent">🚀</span> {{ $contact['whatsapp_title'] ?? 'Respon Instan (Prioritas)' }}
                        </h3>
                        <p class="text-lg font-extrabold text-tax-accent">{{ $settings['whatsapp_display'] ?? '0858-9075-0820' }}</p>
                        <p class="text-sm text-gray-500 mt-1">{{ $contact['whatsapp_note'] ?? 'Gunakan WhatsApp untuk balasan tercepat.' }}</p>
                    </div>

                    {{-- Blok 2: Alamat & Peta --}}
                    <div class="p-5 bg-gray-50 rounded-lg border-l-4 border-tax-blue shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 flex items-center mb-1">
                            <span class="text-3xl mr-3 tax-blue">📍</span> Kantor Pusat Jakarta Selatan
                        </h3>
                        <p class="text-md text-gray-700 font-medium">{{ $settings['contact_address'] ?? 'Jl. Prof. Dr. Satrio No. 12, Kuningan, Setiabudi, Jakarta Selatan, 12940' }}</p>
                        <div class="mt-4 w-full h-40 bg-gray-200 rounded-lg overflow-hidden border border-gray-300">
                            <iframe 
                                src="{{ $settings['google_maps_embed'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.275510659779!2d106.8228183147169!3d-6.223053895493054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4e99d8689%3A0xc3f6d71b8d6f5f9e!2sKuningan%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1634024479577!5m2!1sen!2sid' }}"
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy"
                                title="Kantor Konsultan Pajak Jakarta Selatan">
                            </iframe>
                        </div>
                    </div>
                </div>

                {{-- KOLOM KANAN (FORMULIR SANGAT SIMPLE) --}}
                <div class="lg:order-1">
                    
                    {{-- TRICK MARKETING: SCARCITY/FOMO ALERT --}}
                    <div class="p-3 mb-4 rounded-lg bg-red-100 border border-red-500 shadow-inner text-center">
                         <p class="text-md font-extrabold text-red-700">
                            {{ $contact['scarcity_text'] ?? 'PENTING: Amankan Slot Konsultasi GRATIS Anda SEKARANG!' }}
                        </p>
                    </div>

                    {{-- FORM WHATSAPP (3 FIELD SAJA) --}}
                    <form id="whatsapp-form" class="space-y-4 p-6 bg-white rounded-xl shadow-2xl border-t-4 border-tax-blue">
                        <h4 class="text-2xl font-bold text-gray-800 mb-3">1. Data Kontak</h4>
                        
                        {{-- FIELD 1: Nama --}}
                        <input type="text" id="input_nama" placeholder="Nama Lengkap Anda" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-tax-blue focus:border-tax-blue transition duration-200" required>
                        
                        {{-- FIELD 2: WhatsApp (Paling Penting) --}}
                        <input type="tel" id="input_telepon" placeholder="Nomor WhatsApp Aktif (Wajib)" 
                               class="w-full p-3 border border-gray-300 rounded-lg focus:ring-tax-blue focus:border-tax-blue transition duration-200" required>
                        
                        <h4 class="text-2xl font-bold text-gray-800 pt-3 mb-3 border-t">2. Kebutuhan</h4>
                        
                        {{-- FIELD 3: Pesan Singkat --}}
                        <textarea id="input_pesan" placeholder="Jelaskan kebutuhan Anda secara singkat (Contoh: Butuh review PPN bulan ini)" 
                                  rows="3" 
                                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-tax-blue focus:border-tax-blue transition duration-200" required></textarea>
                        
                        {{-- FINAL CTA: Keren, Cepat, dan Profesional --}}
                        <button type="submit" class="w-full cta-gradient font-extrabold text-lg rounded-lg py-3 shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-[1.005] text-white">
                            💬 KONSULTASI INSTAN VIA WHATSAPP
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    {{-- JAVASCRIPT UNTUK WHATSAPP REDIRECTION --}}
    <script>
        document.getElementById('whatsapp-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Ambil data dari input
            var nama = document.getElementById('input_nama').value;
            var telepon = document.getElementById('input_telepon').value;
            var pesan = document.getElementById('input_pesan').value;
            
            // Nomor WhatsApp tujuan
            var waNumber = '{{ $settings["whatsapp_number"] ?? "6285890750820" }}'; 

            // TRICK MARKETING: Pesan yang telah diformat
            var waMessage = `Halo Tim Konsultan Pajak,\n\nSaya *${nama}* (${telepon}) ingin Konsultasi GRATIS. \n\n*Pesan Singkat:*\n${pesan}\n\nMohon direspon secepatnya. Terima kasih.`;
            
            var encodedMessage = encodeURIComponent(waMessage);
            var waLink = `https://wa.me/${waNumber}?text=${encodedMessage}`;

            window.open(waLink, '_blank');
        });
    </script>
@endsection