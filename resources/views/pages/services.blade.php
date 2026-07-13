@extends('layouts.app')
@section('title', 'Layanan Kami')

@php
    use App\Models\PageSection;
    $services = PageSection::getAll('services');
@endphp

@section('content')

    <section class="bg-main-color/5 pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4" data-aos="fade-up">{{ $services['hero_title'] ?? 'Solusi Perpajakan Komprehensif' }}</h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">{{ $services['hero_subtitle'] ?? '' }}</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-start">
                <div class="lg:col-span-6" data-aos="fade-right">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1">{{ $services['method_badge'] ?? '' }}</span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">{{ $services['method_title'] ?? '' }}</h2>
                    <p class="mt-4 text-lg text-gray-700">{{ $services['method_description'] ?? '' }}</p>
                    <div class="mt-8 p-6 rounded-xl bg-main-color/10 border-l-4 border-main-color">
                        <p class="text-xl font-bold text-main-color italic">{{ $services['method_quote'] ?? '' }}</p>
                    </div>
                </div>
                <div class="lg:col-span-6 mt-12 lg:mt-0 space-y-8">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="flex items-start p-4 rounded-xl shadow-md bg-gray-50 border-t-2 border-yellow-500" data-aos="fade-left" data-aos-delay="{{ $i * 100 }}">
                        <span class="text-2xl mr-4 text-yellow-600 font-extrabold flex-shrink-0">{{ $i }}.</span>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">{{ $services["method_{$i}_title"] ?? '' }}</h3>
                            <p class="text-gray-700 mt-1">{{ $services["method_{$i}_desc"] ?? '' }}</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">{{ $services['pillar_title'] ?? 'Tiga Pilar Utama Layanan Kami' }}</h2>
            <div class="grid md:grid-cols-3 gap-10">
                @php
                $pillarColors = ['main', 'yellow', 'main'];
                $pillarEmoji = ['&#128737;', '&#128161;', '&#9878;'];
                @endphp
                @for($i = 1; $i <= 3; $i++)
                @php $color = $pillarColors[$i-1]; @endphp
                <div class="p-8 bg-white rounded-2xl shadow-2xl border-b-8 border-{{ $color === 'main' ? 'main-color' : 'yellow-500' }} transform hover:translate-y-[-5px] transition duration-500" data-aos="zoom-in-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-3xl font-extrabold text-{{ $color === 'main' ? 'main-color' : 'yellow-600' }}">{{ $services["pillar_{$i}_name"] ?? '' }}</h3>
                        <span class="text-4xl">{!! $pillarEmoji[$i-1] !!}</span>
                    </div>
                    <p class="text-sm font-semibold text-gray-500 mb-2 uppercase">Fokus Masalah:</p>
                    <p class="text-lg text-gray-800 font-medium">{{ $services["pillar_{$i}_problem"] ?? '' }}</p>
                    <ul class="list-none space-y-2 text-gray-700 mt-4">
                        @foreach(explode("\n", $services["pillar_{$i}_items"] ?? '') as $item)
                            @if(trim($item))
                            <li class="flex items-start"><span class="text-{{ $color === 'main' ? 'main-color' : 'yellow-500' }} mr-2">&#10003;</span> {{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <button class="w-full mt-4 py-3 border border-transparent text-white font-bold rounded-full bg-{{ $color === 'main' ? 'main-color' : 'yellow-500' }} hover:bg-{{ $color === 'main' ? 'main-darker' : 'yellow-600' }} transition duration-300">
                        Jelajahi Solusi
                    </button>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 relative order-1 lg:order-1" data-aos="fade-right">
                    <div class="p-6 bg-yellow-50 rounded-2xl shadow-2xl border-b-8 border-main-color">
                        <img class="w-full h-80 object-cover rounded-xl shadow-xl" src="{{ asset($settings['services_tp_image'] ?? 'img/pajaklintas.webp') }}" alt="Pajak Lintas Batas">
                        <div class="absolute bottom-4 right-10 bg-white p-3 rounded-lg shadow-xl border-t-2 border-yellow-500 transform rotate-2">
                             <p class="text-sm font-bold text-yellow-600">Pajak Lintas Batas</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 mt-12 lg:mt-0 order-2 lg:order-2" data-aos="fade-left">
                    <span class="text-sm font-semibold tracking-wider text-main-color uppercase border-b-2 border-main-color/50 pb-1">{{ $services['tp_badge'] ?? '' }}</span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">{{ $services['tp_title'] ?? '' }}</h2>
                    <p class="mt-4 text-lg text-gray-700">{{ $services['tp_description'] ?? '' }}</p>
                    <ul class="list-none space-y-3 text-gray-800 mt-4 border-l-4 border-yellow-500 pl-4">
                        @foreach(explode("\n", $services['tp_items'] ?? '') as $item)
                            @if(trim($item))
                            <li class="flex items-start"><span class="text-yellow-500 mr-2">&#10003;</span> {{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-full text-white bg-yellow-500 hover:bg-yellow-600 shadow-lg smooth-transition">
                        Eksplorasi Solusi Pajak Global &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                <div class="lg:col-span-6" data-aos="fade-right">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1">{{ $services['workshop_badge'] ?? '' }}</span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">{{ $services['workshop_title'] ?? '' }}</h2>
                    <p class="mt-4 text-lg text-gray-700">{{ $services['workshop_description'] ?? '' }}</p>
                    <ul class="list-none space-y-3 text-gray-800 mt-4 border-l-4 border-main-color pl-4">
                        @foreach(explode("\n", $services['workshop_items'] ?? '') as $item)
                            @if(trim($item))
                            <li class="flex items-start"><span class="text-main-color mr-2">&#10003;</span> {{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-full text-white bg-main-color hover:bg-main-darker shadow-lg smooth-transition">
                        Ajukan Jadwal Workshop &rarr;
                    </a>
                </div>
                <div class="lg:col-span-6 relative mt-12 lg:mt-0" data-aos="fade-left">
                    <div class="p-6 bg-main-color/10 rounded-2xl shadow-2xl border-b-8 border-yellow-500">
                        <img class="w-full h-80 object-cover rounded-xl shadow-xl" src="{{ asset($settings['services_workshop_image'] ?? 'img/workshop.webp') }}" alt="Workshop">
                        <div class="absolute bottom-4 left-10 bg-white p-3 rounded-lg shadow-xl border-t-2 border-main-color transform -rotate-2">
                             <p class="text-sm font-bold text-main-color">Upgrade Tim Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-6" data-aos="fade-up">{{ $services['free_tools_title'] ?? 'Pengetahuan dan Alat Eksklusif, Gratis untuk Anda' }}</h2>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="100">{{ $services['free_tools_subtitle'] ?? '' }}</p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-8 rounded-xl shadow-xl bg-main-color/5 border-t-4 border-yellow-500 flex flex-col h-full" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-4xl mb-4 text-yellow-600">&#128240;</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">NEWS (Regulasi Terbaru)</h3>
                    <p class="text-gray-700 flex-grow">Tim analis kami menyaring update peraturan pajak mingguan agar Anda selalu selangkah di depan.</p>
                    <a href="{{ route('news') }}" class="mt-4 text-sm font-bold text-main-color hover:text-main-darker underline">Lihat Ringkasan Minggu Ini &rarr;</a>
                </div>
                <div class="p-8 rounded-xl shadow-xl bg-main-color/5 border-t-4 border-main-color flex flex-col h-full" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-4xl mb-4 text-main-color">&#128218;</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">KNOWLEDGE BASE</h3>
                    <p class="text-gray-700 flex-grow">Akses ratusan panduan dan artikel mendalam untuk kejelasan di tengah kerumitan perpajakan.</p>
                    <a href="{{ route('knowledge') }}" class="mt-4 text-sm font-bold text-yellow-600 hover:text-yellow-700 underline">Akses Panduan Pajak &rarr;</a>
                </div>
                <div class="p-8 rounded-xl shadow-xl bg-main-color/5 border-t-4 border-yellow-500 flex flex-col h-full" data-aos="zoom-in" data-aos-delay="400">
                    <div class="text-4xl mb-4 text-yellow-600">&#128736;</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">TOOLS (Alat Digital)</h3>
                    <p class="text-gray-700 flex-grow">Gunakan kalkulator dan kuesioner otomatis kami untuk penilaian risiko cepat dan gratis.</p>
                    <a href="{{ route('knowledge') }}" class="mt-4 text-sm font-bold text-main-color hover:text-main-darker underline">Gunakan Alat Gratis &rarr;</a>
                </div>
            </div>
        </div>
    </section>

@endsection
