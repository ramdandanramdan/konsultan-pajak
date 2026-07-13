@extends('layouts.app')
@section('title', 'Profil Perusahaan')

@php
    use App\Models\PageSection;
    use App\Models\TeamMember;
    use App\Models\TimelineItem;
    $profile = PageSection::getAll('profile');
    $teamMembers = TeamMember::active()->get();
    $timelineItems = TimelineItem::active()->get();
@endphp

@section('content')

    <section class="bg-main-color/5 pt-24 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4" data-aos="fade-up">{{ $profile['hero_title'] ?? 'Profil Perusahaan Kami' }}</h1>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">{{ $profile['hero_subtitle'] ?? '' }}</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                <div class="lg:col-span-7 relative" data-aos="fade-right" data-aos-delay="100">
                    <div class="p-6 bg-gray-50 rounded-2xl shadow-2xl border-b-8 border-yellow-500 transform transition duration-500 hover:shadow-3xl">
                        <img class="w-full h-80 object-cover rounded-xl shadow-xl" src="{{ asset($settings['profile_image'] ?? 'img/scbd.jpeg') }}" alt="Kantor">
                        <div class="absolute bottom-4 right-10 bg-white p-3 rounded-lg shadow-xl border-t-2 border-main-color transform rotate-2">
                             <p class="text-sm font-bold text-main-color">{{ $profile['history_year_label'] ?? 'Didirikan 2015' }}</p>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 mt-12 lg:mt-0" data-aos="fade-left" data-aos-delay="300">
                    <span class="text-sm font-semibold tracking-wider text-yellow-600 uppercase border-b-2 border-yellow-500/50 pb-1">{{ $profile['history_badge'] ?? '' }}</span>
                    <h2 class="mt-3 text-4xl font-extrabold text-gray-900 sm:text-5xl leading-tight">{{ $profile['history_title'] ?? '' }}</h2>
                    <p class="mt-4 text-lg text-gray-700">{{ $profile['history_description'] ?? '' }}</p>
                    <p class="mt-4 text-xl font-bold text-main-color italic border-l-4 border-main-color pl-3">{{ $profile['history_quote'] ?? '' }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-16 text-center" data-aos="fade-up">Perjalanan Konsultasi Pajak Kami</h2>
            <div class="relative wrap overflow-hidden p-10 h-full">
                <div class="border-2-2 absolute border-opacity-20 border-main-color h-full border" style="left: 50%;"></div>
                @foreach($timelineItems as $idx => $item)
                <div class="mb-8 flex justify-between {{ $idx % 2 === 1 ? 'flex-row-reverse' : '' }} items-center w-full" data-aos="{{ $idx % 2 === 0 ? 'fade-right' : 'fade-left' }}">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 {{ $item->color === 'main' ? 'bg-main-color' : 'bg-yellow-500' }} shadow-xl w-8 h-8 rounded-full">
                        <h1 class="mx-auto text-white font-semibold text-sm">{{ $idx + 1 }}</h1>
                    </div>
                    <div class="order-1 bg-white rounded-xl shadow-lg w-5/12 px-6 py-4 border-t-4 {{ $item->color === 'main' ? 'border-main-color' : 'border-yellow-500' }} transform hover:shadow-2xl transition duration-300">
                        <p class="mb-1 text-xs {{ $item->color === 'main' ? 'text-main-color' : 'text-yellow-600' }} uppercase font-bold">{{ $item->year }}</p>
                        <h3 class="mb-3 font-bold text-2xl text-gray-900">{{ $item->title }}</h3>
                        <p class="text-sm leading-snug text-gray-700">{{ $item->description }}</p>
                    </div>
                </div>
                @endforeach
                <style>.wrap{padding:0;}.border{border-left-width:2px;}</style>
            </div>
        </div>
    </section>

    <section class="py-20 bg-main-color/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative p-8 lg:p-16 bg-white rounded-2xl shadow-xl border-t-8 border-yellow-500 transition duration-1000" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-5xl font-extrabold text-gray-900 mb-12 text-center">Fondasi Strategis Kami</h2>
                <div class="grid md:grid-cols-2 gap-10">
                    <div class="p-10 rounded-xl shadow-lg bg-gradient-to-br from-main-color to-main-darker/90 text-white border-b-4 border-yellow-400 transform hover:scale-[1.01] transition duration-300">
                        <div class="flex items-start mb-6">
                            <svg class="w-10 h-10 mr-4 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.418a9.957 9.957 0 00-4.265-3.321m-2.181 0a9.957 9.957 0 00-4.265 3.321m0 0l-3.32 8.3-2.3 5.75a1 1 0 001.373 1.373l5.75-2.3 8.3-3.32a1 1 0 00.52-1.374l-4.5-9a1 1 0 00-1.246-.065z"></path></svg>
                            <div>
                                <h3 class="text-3xl font-extrabold tracking-tight">{{ $profile['vision_title'] ?? 'Visi Perusahaan' }}</h3>
                                <p class="text-sm text-yellow-300 mt-1 uppercase font-semibold">Our Long-Term Ambition</p>
                            </div>
                        </div>
                        <p class="text-lg leading-relaxed font-light border-l-4 border-yellow-400 pl-4">{{ $profile['vision_content'] ?? '' }}</p>
                    </div>
                    <div class="p-10 rounded-xl shadow-lg bg-gray-50 border-b-4 border-main-color transform hover:scale-[1.01] transition duration-300">
                         <div class="flex items-start mb-6">
                            <svg class="w-10 h-10 mr-4 text-main-color flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <div>
                                <h3 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ $profile['mission_title'] ?? 'Misi Kami' }}</h3>
                                <p class="text-sm text-gray-600 mt-1 uppercase font-semibold">How We Achieve It</p>
                            </div>
                        </div>
                        <ul class="list-none space-y-3 text-gray-800 text-lg">
                            @for($i = 1; $i <= 3; $i++)
                            <li class="flex items-start">
                                <svg class="w-6 h-6 flex-shrink-0 text-yellow-500 mt-1 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                {{ $profile["mission_{$i}"] ?? '' }}
                            </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-12 text-center" data-aos="fade-up">{{ $profile['values_title'] ?? 'Nilai Inti (Core Values)' }}</h2>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                @php
                $values = [
                    ['title' => $profile['value_1_title'] ?? 'Integritas', 'desc' => $profile['value_1_desc'] ?? '', 'color' => 'main', 'bg' => 'bg-main-color/5', 'border' => 'border-main-color'],
                    ['title' => $profile['value_2_title'] ?? 'Profesionalisme', 'desc' => $profile['value_2_desc'] ?? '', 'color' => 'yellow', 'bg' => 'bg-yellow-50', 'border' => 'border-yellow-500'],
                    ['title' => $profile['value_3_title'] ?? 'Inovasi', 'desc' => $profile['value_3_desc'] ?? '', 'color' => 'main', 'bg' => 'bg-main-color/5', 'border' => 'border-main-color'],
                ];
                @endphp
                @foreach($values as $v)
                <div class="p-8 {{ $v['bg'] }} rounded-xl shadow-lg border-b-4 {{ $v['border'] }} transform hover:-translate-y-1 transition duration-300" data-aos="zoom-in" data-aos-delay="{{ ($loop->index + 2) * 100 }}">
                    <svg class="h-12 w-12 text-{{ $v['color'] === 'main' ? 'main-color' : 'yellow-500' }} mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $loop->index === 0 ? 'M9 12l2 2 4-4m5.618-4.418A9.957 9.957 0 0012 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10a9.957 9.957 0 00-1.782-5.582z' : ($loop->index === 1 ? 'M15 7a2 2 0 012 2v5a2 2 0 01-2 2H9a2 2 0 01-2-2V9a2 2 0 012-2h6zM7 10h10' : 'M10 20l4-16m4 4l-4 4m-4-4l-4 4') }}"></path></svg>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $v['title'] }}</h3>
                    <p class="text-gray-700">{{ $v['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl mb-12 text-center" data-aos="fade-up">{{ $profile['team_title'] ?? 'Tim Konsultan Kami' }}</h2>
            <div class="grid md:grid-cols-4 gap-8 text-center">
                @foreach($teamMembers as $member)
                <div class="bg-white p-6 rounded-xl shadow-lg border-b-4 border-{{ $member->color === 'main' ? 'main-color' : 'yellow-500' }} transform hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="{{ ($loop->index + 2) * 100 }}">
                    @if($member->photo)
                        <img class="w-28 h-28 rounded-full mx-auto mb-4 object-cover border-4 border-{{ $member->color === 'main' ? 'main-color' : 'yellow-500' }}/30" src="{{ asset($member->photo) }}" alt="{{ $member->name }}">
                    @else
                        <div class="w-28 h-28 rounded-full mx-auto mb-4 bg-gray-200 flex items-center justify-center border-4 border-{{ $member->color === 'main' ? 'main-color' : 'yellow-500' }}/30">
                            <span class="text-3xl font-bold text-gray-500">{{ substr($member->name, 0, 1) }}</span>
                        </div>
                    @endif
                    <h4 class="font-bold text-xl text-main-darker">{{ $member->name }}</h4>
                    <p class="text-sm {{ $member->color === 'main' ? 'text-main-color' : 'text-yellow-600' }} font-semibold mb-3">{{ $member->position }}</p>
                    <p class="text-xs text-gray-600">{{ $member->specialty }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
