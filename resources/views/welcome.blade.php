@extends('layouts.app')

@section('title', 'Beranda')

@php
    use App\Models\PageSection;
    use App\Models\HomeHighlight;
    use App\Models\Post;
    
    $home = PageSection::getAll('home');
    $highlights = HomeHighlight::active()->get();
    $latestNews = Post::where('type', 'NEWS')->where('is_published', true)->latest()->take(3)->get();
@endphp

@section('content')

    <section id="beranda" class="relative bg-gradient-to-br from-white to-gray-50 pt-20 pb-20 sm:pt-24 sm:pb-28 overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-main-color opacity-5 rounded-full filter blur-3xl -z-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
                <div class="lg:col-span-5 lg:text-left">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1" data-aos="fade-right" data-aos-delay="100">
                        {{ $home['hero_badge'] ?? 'Solusi Pajak Terdepan untuk Bisnis' }}
                    </span>
                    <h1 class="mt-4 text-5xl tracking-tight font-extrabold text-gray-900 sm:text-6xl md:text-6xl leading-tight" data-aos="fade-right" data-aos-delay="300">
                        <span class="block">{{ $home['hero_title_1'] ?? 'Mengubah Kepatuhan' }}</span>
                        <span class="block text-main-color">{{ $home['hero_title_2'] ?? 'Menjadi Keunggulan.' }}</span>
                    </h1>
                    <p class="mt-6 text-lg text-gray-700 max-w-xl" data-aos="fade-right" data-aos-delay="500">
                        {{ $home['hero_description'] ?? 'Fokus pada bisnis Anda, biarkan kami yang mengurus kerumitan perpajakan.' }}
                    </p>
                    <div class="mt-8" data-aos="fade-up" data-aos-delay="600">
                        <form action="{{ route('search') }}" method="GET" class="flex max-w-lg shadow-xl rounded-full overflow-hidden border-2 border-main-color/20 bg-white">
                            <input type="search" name="query" placeholder="Cari regulasi atau artikel pajak..." class="w-full px-6 py-3 text-gray-800 border-none focus:ring-0 focus:outline-none placeholder-gray-500" required>
                            <button type="submit" class="px-5 py-3 bg-main-color text-white hover:bg-main-darker smooth-transition flex items-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </button>
                        </form>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4" data-aos="zoom-in" data-aos-delay="700">
                        <a href="{{ route('services') }}" class="w-full sm:w-auto px-8 py-3 border border-transparent text-base font-bold rounded-full text-gray-900 bg-yellow-400 hover:bg-yellow-500 shadow-xl smooth-transition transform hover:scale-[1.02] flex items-center justify-center">
                            Lihat Semua Layanan &nbsp; <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="w-full sm:w-auto px-6 py-3 border border-main-color/50 text-base font-medium rounded-full text-main-color bg-white hover:bg-main-color/10 shadow-md smooth-transition flex items-center justify-center">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
                <div class="mt-16 lg:mt-0 lg:col-span-7" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1200">
                    <img class="w-full max-w-3xl mx-auto rounded-xl shadow-2xl border-4 border-main-color/20 transform transition duration-500 hover:scale-[1.01]" src="{{ asset('img/pp.png') }}" alt="Ilustrasi Tim Konsultan Pajak Profesional">
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">
                {{ $home['service_standar_title'] ?? 'Standar Layanan yang Kami Jamin' }}
            </h2>
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                <div class="lg:order-2 space-y-8" data-aos="fade-left" data-aos-delay="100">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="flex items-start space-x-4">
                        <svg class="w-8 h-8 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $i === 1 ? 'M9 12l2 2 4-4m5.618-4.418A9.957 9.957 0 0012 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10a9.957 9.957 0 00-1.782-5.582z' : ($i === 2 ? 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' : 'M15 7a2 2 0 012 2v5a2 2 0 01-2 2H9a2 2 0 01-2-2V9a2 2 0 012-2h6zM7 10h10') }}"></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">{{ $home["standar_{$i}_title"] ?? '' }}</h3>
                            <p class="text-lg text-gray-700 mt-1">{{ $home["standar_{$i}_desc"] ?? '' }}</p>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="" data-aos="fade-right">
                    <img class="w-full max-w-md mx-auto" src="{{ asset('img/pic1.png') }}" alt="Ilustrasi Standar Layanan">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="sr-only">Statistik Kepercayaan</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($highlights as $idx => $h)
                <div class="p-6 bg-white rounded-xl text-center shadow-lg border-b-4 border-main-color hover:shadow-2xl smooth-transition" data-aos="zoom-in" data-aos-delay="{{ ($idx + 1) * 100 }}">
                    @if($h->icon === 'clock')
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    @elseif($h->icon === 'users')
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2M1 10h2"></path></svg>
                    @elseif($h->icon === 'check')
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.418A9.957 9.957 0 0012 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10a9.957 9.957 0 00-1.782-5.582z"></path></svg>
                    @else
                    <svg class="h-10 w-10 text-main-color mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    @endif
                    <p class="text-3xl font-extrabold text-main-darker">{{ $h->value }}</p>
                    <p class="text-sm uppercase tracking-wider text-gray-700 mt-1 font-semibold">{{ $h->label }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 sm:py-28 bg-main-color/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">
                {{ $home['pilar_title'] ?? 'Fokus Pada Tiga Pilar Utama' }}
            </h2>
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                <div class="/20" data-aos="fade-right">
                    <img class="w-full max-w-md mx-auto" src="{{ asset('img/2.png') }}" alt="Ilustrasi Checklist">
                </div>
                <div class="mt-12 lg:mt-0 space-y-8" data-aos="fade-left" data-aos-delay="100">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-main-color mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">{{ $home["pilar_{$i}_title"] ?? '' }}</h3>
                            <p class="text-lg text-gray-700 mt-1">{{ $home["pilar_{$i}_desc"] ?? '' }}</p>
                        </div>
                    </div>
                    @endfor
                    <div class="pt-4">
                        <a href="{{ route('services') }}" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-bold rounded-full text-white bg-main-color hover:bg-main-darker shadow-lg smooth-transition">
                            Pelajari Detail Layanan Kami &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="p-8 lg:p-12 bg-white rounded-2xl shadow-2xl border-t-8 border-yellow-500 transform hover:shadow-3xl transition duration-500" data-aos="fade-up">
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4 text-center">
                    {{ $home['news_section_title'] ?? 'Regulasi Terbaru & Berita' }}
                </h2>
                <p class="text-xl text-gray-700 text-center mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ $home['news_section_subtitle'] ?? 'Informasi perpajakan yang paling aktual.' }}
                </p>
                <div class="grid md:grid-cols-3 gap-8">
                    @forelse($latestNews as $news)
                    <a href="{{ route('news') }}" class="block bg-gray-50 rounded-xl shadow-lg border-b-4 border-main-color overflow-hidden transform hover:scale-[1.01] hover:shadow-xl transition duration-300 group">
                        <div class="p-6">
                            <span class="text-xs font-semibold text-yellow-600 uppercase tracking-wider mb-2 block">{{ $news->regulation_type ?: $news->type }} | {{ $news->created_at->format('d M Y') }}</span>
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-main-color smooth-transition line-clamp-2">{{ $news->title }}</h3>
                            <p class="text-gray-700 text-sm mt-3 line-clamp-3">{!! Str::limit(strip_tags($news->content), 120) !!}</p>
                        </div>
                    </a>
                    @empty
                    <div class="col-span-3 text-center text-gray-500 py-8">Belum ada berita terbaru.</div>
                    @endforelse
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
            <div class="p-8 lg:p-12 bg-gray-50 rounded-2xl shadow-2xl border-t-8 border-main-color transform hover:shadow-3xl transition duration-500" data-aos="fade-up">
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-4 text-center">
                    {{ $home['knowledge_section_title'] ?? 'Akses Knowledge Base' }}
                </h2>
                <p class="text-xl text-gray-700 text-center mb-12" data-aos="fade-up" data-aos-delay="100">
                    {{ $home['knowledge_section_subtitle'] ?? 'Jelajahi panduan, kalkulator, dan studi kasus.' }}
                </p>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @php
                    $kbCategories = [
                        ['icon' => 'calculator', 'title' => 'Kalkulator Pajak', 'desc' => 'Hitung PPN, PPh 21/23 secara otomatis dan akurat.', 'color' => 'yellow'],
                        ['icon' => 'book', 'title' => 'Studi Kasus Bisnis', 'desc' => 'Pelajari keberhasilan dan tantangan perpajakan dari berbagai industri.', 'color' => 'main'],
                        ['icon' => 'pencil', 'title' => 'Glosarium Pajak A-Z', 'desc' => 'Definisi istilah pajak dan akuntansi dari yang paling dasar hingga kompleks.', 'color' => 'yellow'],
                        ['icon' => 'video', 'title' => 'Video Tutorial', 'desc' => 'Instruksi visual langkah demi langkah untuk pelaporan dan administrasi pajak.', 'color' => 'main'],
                    ];
                    @endphp
                    @foreach($kbCategories as $cat)
                    <a href="{{ route('knowledge') }}" class="block p-6 bg-white rounded-xl shadow-lg border-b-4 border-{{ $cat['color'] === 'main' ? 'main-color' : 'yellow-500' }} hover:shadow-xl transition duration-300 group transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="{{ ($loop->index + 3) * 100 }}">
                        <div class="text-4xl mb-4 text-{{ $cat['color'] === 'main' ? 'main-color' : 'yellow-500' }}">
                            @if($cat['icon'] === 'calculator')&#128202;@elseif($cat['icon'] === 'book')&#128218;@elseif($cat['icon'] === 'pencil')&#9998;@else&#127909;@endif
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-{{ $cat['color'] === 'main' ? 'main-darker' : 'yellow-600' }}">{{ $cat['title'] }}</h3>
                        <p class="text-sm text-gray-700 mt-2">{{ $cat['desc'] }}</p>
                    </a>
                    @endforeach
                </div>
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
                {{ $home['advantage_title'] ?? 'Keunggulan Portal Kami' }}
            </h2>
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                <div class="space-y-8" data-aos="fade-right" data-aos-delay="100">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="flex items-start space-x-4">
                        <svg class="w-7 h-7 flex-shrink-0 text-yellow-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">{{ $home["advantage_{$i}_title"] ?? '' }}</h3>
                            <p class="text-lg text-gray-700 mt-1">{{ $home["advantage_{$i}_desc"] ?? '' }}</p>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="/20" data-aos="fade-right">
                    <img class="w-full max-w-md mx-auto" src="{{ asset('img/6.png') }}" alt="Ilustrasi Keunggulan">
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
