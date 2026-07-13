@extends('layouts.admin')
@section('title', 'Dashboard')
@section('subtitle', 'Ringkasan data dan aktivitas CMS')

@section('content')
@php
    $greeting = '';
    $hour = now()->hour;
    if ($hour < 12) $greeting = 'Selamat Pagi';
    else if ($hour < 17) $greeting = 'Selamat Siang';
    else $greeting = 'Selamat Malam';
@endphp

{{-- WELCOME HERO --}}
<div class="kp-welcome rounded-2xl p-6 sm:p-8 mb-6 text-white relative z-10 overflow-hidden">
    <div class="relative z-10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <p class="text-amber-400/80 text-[12px] font-semibold uppercase tracking-[0.2em] mb-1">{{ $greeting }}, {{ $user->name ?? 'Admin' }}</p>
            <h2 class="text-xl sm:text-2xl font-extrabold leading-tight mb-1">Dashboard Konsultan Pajak</h2>
            <p class="text-gray-400 text-[13px]">Berikut ringkasan data konten dan aktivitas website Anda hari ini.</p>
        </div>
        <div class="flex gap-2 flex-shrink-0">
            <a href="{{ route('admin.posts.create', ['type' => 'news']) }}" class="px-4 py-2 bg-amber-500/90 hover:bg-amber-500 text-[12px] font-bold rounded-lg transition-colors shadow-lg shadow-amber-500/20">
                + Berita Baru
            </a>
            <a href="{{ route('home') }}" target="_blank" class="px-4 py-2 bg-white/10 hover:bg-white/15 text-[12px] font-semibold rounded-lg transition-colors border border-white/10">
                Lihat Website
            </a>
        </div>
    </div>
    <div class="mesh-blob-1"></div>
    <div class="mesh-blob-2"></div>
</div>

{{-- STATS ROW --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    @php
        $statCards = [
            ['value' => $stats['knowledge_count'], 'label' => 'Knowledge', 'color' => 'indigo', 'gradient' => 'from-indigo-500 to-indigo-600', 'bg-light' => 'bg-indigo-50', 'text-color' => 'text-indigo-600', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5-1.253"/>'],
            ['value' => $stats['news_count'], 'label' => 'Berita', 'color' => 'amber', 'gradient' => 'from-amber-400 to-orange-500', 'bg-light' => 'bg-amber-50', 'text-color' => 'text-amber-600', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7m3-4h4m1 0h1m-1 4h-4"/>'],
            ['value' => $stats['total_team'], 'label' => 'Tim', 'color' => 'emerald', 'gradient' => 'from-emerald-400 to-teal-500', 'bg-light' => 'bg-emerald-50', 'text-color' => 'text-emerald-600', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2"/>'],
            ['value' => $stats['total_sections'], 'label' => 'Sections', 'color' => 'cyan', 'gradient' => 'from-cyan-400 to-blue-500', 'bg-light' => 'bg-cyan-50', 'text-color' => 'text-cyan-600', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>'],
        ];
    @endphp
    @foreach($statCards as $sc)
    <div class="kp-stat-card bg-white rounded-2xl p-4 sm:p-5">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-9 h-9 rounded-xl bg-gradient-to-br {{ $sc['gradient'] }} flex items-center justify-center shadow-lg flex-shrink-0"
                 style="box-shadow: 0 8px 16px -4px rgba(0,0,0,0.15);">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $sc['icon'] !!}</svg>
            </div>
            <span class="text-[11px] font-semibold text-gray-400 uppercase tracking-wider">{{ $sc['label'] }}</span>
        </div>
        <p class="text-2xl sm:text-3xl font-extrabold text-gray-900 leading-none">{{ $sc['value'] }}</p>
    </div>
    @endforeach
</div>

{{-- MAIN GRID: Chart Left + Activity Right --}}
<div class="grid grid-cols-1 lg:grid-cols-5 gap-5 mb-6">

    {{-- CHARTS COLUMN (3/5) --}}
    <div class="lg:col-span-3 space-y-5">
        {{-- LINE CHART --}}
        <div class="kp-chart-card bg-white rounded-2xl p-5 border border-gray-100/80">
            <div class="flex items-center justify-between mb-5">
                <div>
                    <h3 class="text-[14px] font-bold text-gray-800">Publikasi per Bulan</h3>
                    <p class="text-[11px] text-gray-400 mt-0.5">Tren 12 bulan terakhir</p>
                </div>
                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
            </div>
            <div style="height: 200px;"><canvas id="chart-line"></canvas></div>
        </div>

        {{-- BOTTOM ROW: Doughnut + Horizontal Bar --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div class="kp-chart-card bg-white rounded-2xl p-5 border border-gray-100/80">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-[14px] font-bold text-gray-800">Distribusi Konten</h3>
                </div>
                <div class="flex items-center justify-center" style="height: 180px;">
                    <canvas id="chart-doughnut" style="max-height:170px;"></canvas>
                </div>
            </div>
            <div class="kp-chart-card bg-white rounded-2xl p-5 border border-gray-100/80">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-[14px] font-bold text-gray-800">Section per Halaman</h3>
                </div>
                <div style="height: 180px;"><canvas id="chart-hbar"></canvas></div>
            </div>
        </div>
    </div>

    {{-- ACTIVITY COLUMN (2/5) --}}
    <div class="lg:col-span-2 space-y-5">
        {{-- TEAM BAR --}}
        <div class="kp-chart-card bg-white rounded-2xl p-5 border border-gray-100/80">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-[14px] font-bold text-gray-800">Tim per Posisi</h3>
            </div>
            <div style="height: 160px;"><canvas id="chart-team"></canvas></div>
        </div>

        {{-- RECENT ACTIVITY --}}
        <div class="bg-white rounded-2xl p-5 border border-gray-100/80 flex-1">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-[14px] font-bold text-gray-800">Aktivitas Terbaru</h3>
                <span class="kp-badge bg-gray-100 text-gray-500">{{ $stats['total_posts'] }} total</span>
            </div>
            @if($stats['recent_posts']->isEmpty())
                <div class="text-center py-8">
                    <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3">
                        <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <p class="text-gray-400 text-[13px]">Belum ada artikel</p>
                </div>
            @else
                <div class="space-y-2">
                    @foreach($stats['recent_posts'] as $post)
                        <div class="flex items-center gap-3 p-2.5 rounded-xl hover:bg-gray-50 transition-colors group">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0
                                {{ $post->type === 'KNOWLEDGE' ? 'bg-indigo-50 text-indigo-500' : ($post->type === 'NEWS' ? 'bg-amber-50 text-amber-500' : 'bg-rose-50 text-rose-500') }}">
                                @if($post->type === 'KNOWLEDGE')
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5-1.253"/></svg>
                                @elseif($post->type === 'NEWS')
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7"/></svg>
                                @else
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                                @endif
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-[13px] font-semibold text-gray-700 truncate group-hover:text-indigo-600 transition-colors">{{ Str::limit($post->title, 40) }}</p>
                                <p class="text-[10px] text-gray-400 mt-0.5">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                            <span class="kp-badge flex-shrink-0 {{ $post->is_published ? 'bg-emerald-50 text-emerald-600' : 'bg-red-50 text-red-500' }}">
                                {{ $post->is_published ? 'Pub' : 'Draft' }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

{{-- QUICK ACTIONS --}}
<div class="bg-white rounded-2xl p-5 border border-gray-100/80">
    <h3 class="text-[14px] font-bold text-gray-800 mb-4">Aksi Cepat</h3>
    <div class="flex flex-wrap gap-2.5">
        @php
            $actions = [
                ['url' => route('admin.page-sections.index', ['page' => 'home']), 'label' => 'Edit Beranda', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/>', 'colors' => 'bg-indigo-50 text-indigo-600 hover:bg-indigo-100 border-indigo-100'],
                ['url' => route('admin.settings.index'), 'label' => 'Pengaturan', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>', 'colors' => 'bg-gray-50 text-gray-600 hover:bg-gray-100 border-gray-100'],
                ['url' => route('admin.team.index'), 'label' => 'Kelola Tim', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2"/>', 'colors' => 'bg-emerald-50 text-emerald-600 hover:bg-emerald-100 border-emerald-100'],
                ['url' => route('admin.posts.create', ['type' => 'news']), 'label' => '+ Berita', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>', 'colors' => 'bg-amber-50 text-amber-600 hover:bg-amber-100 border-amber-100'],
                ['url' => route('admin.posts.create', ['type' => 'knowledge']), 'label' => '+ Knowledge', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>', 'colors' => 'bg-rose-50 text-rose-600 hover:bg-rose-100 border-rose-100'],
                ['url' => route('home'), 'label' => 'Lihat Website', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>', 'colors' => 'bg-cyan-50 text-cyan-600 hover:bg-cyan-100 border-cyan-100', 'target' => '_blank'],
            ];
        @endphp
        @foreach($actions as $a)
            <a href="{{ $a['url'] }}" @if(isset($a['target'])) target="{{ $a['target'] }}" @endif
               class="kp-action-link inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-[12px] font-semibold border {{ $a['colors'] }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $a['icon'] !!}</svg>
                {{ $a['label'] }}
            </a>
        @endforeach
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const monthNames = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
    const baseOpts = { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } };
    const tooltipStyle = { backgroundColor: '#0c1222', titleFont: { size: 11, family: 'Plus Jakarta Sans' }, bodyFont: { size: 11, family: 'Plus Jakarta Sans' }, padding: 10, cornerRadius: 8, displayColors: false };

    // LINE
    const md = @json($stats['posts_by_month']);
    const dm = {}; md.forEach(d => { dm[d.month] = d.total; });
    const ld = monthNames.map((_, i) => dm[i + 1] || 0);
    new Chart(document.getElementById('chart-line'), {
        type: 'line',
        data: {
            labels: monthNames,
            datasets: [{
                data: ld, borderColor: '#6366f1', backgroundColor: 'rgba(99,102,241,0.06)',
                borderWidth: 2.5, pointRadius: 3, pointHoverRadius: 5, tension: 0.4, fill: true,
                pointBackgroundColor: '#fff', pointBorderColor: '#6366f1', pointBorderWidth: 2,
            }]
        },
        options: { ...baseOpts, scales: { x: { grid: { display: false }, ticks: { font: { size: 10 } } }, y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 10 }, stepSize: 1 } } }, plugins: { ...baseOpts.plugins, tooltip: tooltipStyle } }
    });

    // DOUGHNUT
    const td = @json($stats['posts_by_type']);
    new Chart(document.getElementById('chart-doughnut'), {
        type: 'doughnut',
        data: { labels: td.map(d => d.type), datasets: [{ data: td.map(d => d.total), backgroundColor: ['#6366f1','#f59e0b','#f43f5e','#06b6d4'], borderWidth: 0, hoverOffset: 4 }] },
        options: { ...baseOpts, cutout: '68%', plugins: { legend: { display: true, position: 'bottom', labels: { padding: 12, usePointStyle: true, pointStyle: 'circle', font: { size: 10 } } }, tooltip: tooltipStyle } }
    });

    // HORIZONTAL BAR
    const sd = @json($stats['sections_by_page']);
    new Chart(document.getElementById('chart-hbar'), {
        type: 'bar',
        data: { labels: sd.map(d => d.page_slug.charAt(0).toUpperCase() + d.page_slug.slice(1)), datasets: [{ data: sd.map(d => d.total), backgroundColor: ['#06b6d4','#8b5cf6','#10b981','#f59e0b'], borderRadius: 4, borderSkipped: false, barThickness: 16 }] },
        options: { ...baseOpts, indexAxis: 'y', scales: { x: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 10 }, stepSize: 5 } }, y: { grid: { display: false }, ticks: { font: { size: 10 } } } }, plugins: { ...baseOpts.plugins, tooltip: tooltipStyle } }
    });

    // TEAM BAR
    const tmd = @json($stats['team_by_position']);
    new Chart(document.getElementById('chart-team'), {
        type: 'bar',
        data: { labels: tmd.map(d => d.position), datasets: [{ data: tmd.map(d => d.total), backgroundColor: ['#f0a500','#6366f1','#06b6d4','#10b981'], borderRadius: 6, borderSkipped: false, barThickness: 22 }] },
        options: { ...baseOpts, scales: { x: { grid: { display: false }, ticks: { font: { size: 9 }, maxRotation: 45 } }, y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 10 }, stepSize: 1 } } }, plugins: { ...baseOpts.plugins, tooltip: tooltipStyle } }
    });
});
</script>
@endpush
