@extends('layouts.admin')
@section('title', 'Dashboard')
@section('subtitle', 'Ringkasan data dan aktivitas CMS Anda')

@section('content')
{{-- STATS CARDS --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
    {{-- Knowledge --}}
    <div class="stat-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-indigo-100 to-violet-50 rounded-bl-[3rem] -mr-6 -mt-6 opacity-60"></div>
        <div class="relative">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-indigo-500/25">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5-1.253"/></svg>
                </div>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">{{ $stats['knowledge_count'] }}</p>
            <p class="text-sm text-gray-500 mt-0.5">Knowledge Base</p>
        </div>
    </div>

    {{-- News --}}
    <div class="stat-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-amber-100 to-orange-50 rounded-bl-[3rem] -mr-6 -mt-6 opacity-60"></div>
        <div class="relative">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center shadow-lg shadow-amber-500/25">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7m3-4h4m1 0h1"/></svg>
                </div>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">{{ $stats['news_count'] }}</p>
            <p class="text-sm text-gray-500 mt-0.5">Berita & Opini</p>
        </div>
    </div>

    {{-- Team --}}
    <div class="stat-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-emerald-100 to-teal-50 rounded-bl-[3rem] -mr-6 -mt-6 opacity-60"></div>
        <div class="relative">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center shadow-lg shadow-emerald-500/25">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2M1 10h2"/></svg>
                </div>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">{{ $stats['total_team'] }}</p>
            <p class="text-sm text-gray-500 mt-0.5">Tim Konsultan</p>
        </div>
    </div>

    {{-- Users --}}
    <div class="stat-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-rose-100 to-pink-50 rounded-bl-[3rem] -mr-6 -mt-6 opacity-60"></div>
        <div class="relative">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-rose-500 to-pink-500 flex items-center justify-center shadow-lg shadow-rose-500/25">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </div>
            </div>
            <p class="text-2xl font-extrabold text-gray-900">{{ $stats['total_users'] }}</p>
            <p class="text-sm text-gray-500 mt-0.5">Total User</p>
        </div>
    </div>
</div>

{{-- CHARTS GRID --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mb-8">
    {{-- Line Chart: Posts per Month --}}
    <div class="chart-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-sm font-bold text-gray-800">Publikasi per Bulan</h3>
                <p class="text-xs text-gray-400 mt-0.5">12 bulan terakhir</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
        </div>
        <div style="height: 220px;">
            <canvas id="postsLineChart"></canvas>
        </div>
    </div>

    {{-- Doughnut: Content Distribution --}}
    <div class="chart-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-sm font-bold text-gray-800">Distribusi Konten</h3>
                <p class="text-xs text-gray-400 mt-0.5">Berdasarkan tipe artikel</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-violet-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
            </div>
        </div>
        <div class="flex items-center justify-center" style="height: 220px;">
            <canvas id="contentDoughnutChart" style="max-height: 200px;"></canvas>
        </div>
    </div>

    {{-- Bar Chart: Team by Position --}}
    <div class="chart-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-sm font-bold text-gray-800">Tim per Posisi</h3>
                <p class="text-xs text-gray-400 mt-0.5">Distribusi anggota tim</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
        </div>
        <div style="height: 220px;">
            <canvas id="teamBarChart"></canvas>
        </div>
    </div>

    {{-- Horizontal Bar: Sections per Page --}}
    <div class="chart-card bg-white rounded-2xl p-5 border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-sm font-bold text-gray-800">Section per Halaman</h3>
                <p class="text-xs text-gray-400 mt-0.5">Jumlah konten per halaman</p>
            </div>
            <div class="w-8 h-8 rounded-lg bg-cyan-50 flex items-center justify-center">
                <svg class="w-4 h-4 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
            </div>
        </div>
        <div style="height: 220px;">
            <canvas id="sectionsBarChart"></canvas>
        </div>
    </div>
</div>

{{-- BOTTOM ROW: Quick Actions + Recent --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
    {{-- Quick Actions --}}
    <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm">
        <h3 class="text-sm font-bold text-gray-800 mb-4">Aksi Cepat</h3>
        <div class="grid grid-cols-2 gap-3">
            <a href="{{ route('admin.page-sections.index', ['page' => 'home']) }}" class="group p-3 rounded-xl bg-gradient-to-br from-indigo-50 to-violet-50 hover:from-indigo-100 hover:to-violet-100 border border-indigo-100 transition-all text-center">
                <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition-transform shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3"/></svg>
                </div>
                <p class="text-xs font-semibold text-indigo-700">Edit Beranda</p>
            </a>
            <a href="{{ route('admin.settings.index') }}" class="group p-3 rounded-xl bg-gradient-to-br from-gray-50 to-slate-50 hover:from-gray-100 hover:to-slate-100 border border-gray-100 transition-all text-center">
                <div class="w-8 h-8 rounded-lg bg-gray-500 flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition-transform shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <p class="text-xs font-semibold text-gray-700">Pengaturan</p>
            </a>
            <a href="{{ route('admin.team.index') }}" class="group p-3 rounded-xl bg-gradient-to-br from-emerald-50 to-teal-50 hover:from-emerald-100 hover:to-teal-100 border border-emerald-100 transition-all text-center">
                <div class="w-8 h-8 rounded-lg bg-emerald-500 flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition-transform shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2"/></svg>
                </div>
                <p class="text-xs font-semibold text-emerald-700">Kelola Tim</p>
            </a>
            <a href="{{ route('admin.posts.create', ['type' => 'news']) }}" class="group p-3 rounded-xl bg-gradient-to-br from-amber-50 to-orange-50 hover:from-amber-100 hover:to-orange-100 border border-amber-100 transition-all text-center">
                <div class="w-8 h-8 rounded-lg bg-amber-500 flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition-transform shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                </div>
                <p class="text-xs font-semibold text-amber-700">+ Berita</p>
            </a>
            <a href="{{ route('admin.posts.create', ['type' => 'knowledge']) }}" class="group p-3 rounded-xl bg-gradient-to-br from-rose-50 to-pink-50 hover:from-rose-100 hover:to-pink-100 border border-rose-100 transition-all text-center">
                <div class="w-8 h-8 rounded-lg bg-rose-500 flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition-transform shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                </div>
                <p class="text-xs font-semibold text-rose-700">+ Knowledge</p>
            </a>
            <a href="{{ route('home') }}" target="_blank" class="group p-3 rounded-xl bg-gradient-to-br from-cyan-50 to-sky-50 hover:from-cyan-100 hover:to-sky-100 border border-cyan-100 transition-all text-center">
                <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center mx-auto mb-2 group-hover:scale-110 transition-transform shadow-sm">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </div>
                <p class="text-xs font-semibold text-cyan-700">Lihat Website</p>
            </a>
        </div>
    </div>

    {{-- Recent Activity --}}
    <div class="lg:col-span-2 bg-white rounded-2xl p-5 border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-bold text-gray-800">Aktivitas Terbaru</h3>
            <span class="text-xs text-gray-400">{{ $stats['total_posts'] }} total artikel</span>
        </div>
        @if($stats['recent_posts']->isEmpty())
            <div class="text-center py-8">
                <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <p class="text-gray-400 text-sm">Belum ada artikel.</p>
            </div>
        @else
            <div class="space-y-3">
                @foreach($stats['recent_posts'] as $i => $post)
                    <div class="flex items-center p-3 rounded-xl hover:bg-gray-50 transition-colors group">
                        <div class="w-9 h-9 rounded-lg flex items-center justify-center flex-shrink-0 mr-3
                            {{ $post->type === 'KNOWLEDGE' ? 'bg-indigo-100 text-indigo-600' : ($post->type === 'NEWS' ? 'bg-amber-100 text-amber-600' : 'bg-rose-100 text-rose-600') }}">
                            @if($post->type === 'KNOWLEDGE')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5-1.253"/></svg>
                            @elseif($post->type === 'NEWS')
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7"/></svg>
                            @else
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-800 truncate group-hover:text-indigo-600 transition-colors">{{ Str::limit($post->title, 50) }}</p>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $post->type }} &middot; {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        <span class="px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full flex-shrink-0 ml-3
                            {{ $post->is_published ? 'bg-emerald-100 text-emerald-700' : 'bg-red-100 text-red-600' }}">
                            {{ $post->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const chartColors = {
        indigo: { bg: 'rgba(99,102,241,0.1)', border: '#6366f1', fill: 'rgba(99,102,241,0.08)' },
        violet: { bg: 'rgba(139,92,246,0.1)', border: '#8b5cf6', fill: 'rgba(139,92,246,0.08)' },
        cyan: { bg: 'rgba(6,182,212,0.1)', border: '#06b6d4', fill: 'rgba(6,182,212,0.08)' },
        emerald: { bg: 'rgba(16,185,129,0.1)', border: '#10b981', fill: 'rgba(16,185,129,0.08)' },
        amber: { bg: 'rgba(245,158,11,0.1)', border: '#f59e0b', fill: 'rgba(245,158,11,0.08)' },
        rose: { bg: 'rgba(244,63,94,0.1)', border: '#f43f5e', fill: 'rgba(244,63,94,0.08)' },
    };

    const monthNames = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];
    const defaultOpts = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
    };

    // === LINE CHART: Posts per Month ===
    const monthlyData = @json($stats['posts_by_month']);
    const labels = monthNames;
    const dataMap = {};
    monthlyData.forEach(d => { dataMap[d.month] = d.total; });
    const lineData = labels.map((_, i) => dataMap[i + 1] || 0);

    new Chart(document.getElementById('postsLineChart'), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Artikel',
                data: lineData,
                borderColor: chartColors.indigo.border,
                backgroundColor: chartColors.indigo.fill,
                borderWidth: 2.5,
                pointBackgroundColor: '#fff',
                pointBorderColor: chartColors.indigo.border,
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
                tension: 0.4,
                fill: true,
            }]
        },
        options: {
            ...defaultOpts,
            scales: {
                x: { grid: { display: false }, ticks: { font: { size: 11 } } },
                y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 11 }, stepSize: 1 } },
            },
            plugins: {
                ...defaultOpts.plugins,
                tooltip: { backgroundColor: '#1e1b4b', titleFont: { size: 12 }, bodyFont: { size: 11 }, padding: 10, cornerRadius: 8 },
            },
        }
    });

    // === DOUGHNUT: Content Distribution ===
    const typeData = @json($stats['posts_by_type']);
    const typeLabels = typeData.map(d => d.type);
    const typeValues = typeData.map(d => d.total);
    const typeColors = ['#6366f1', '#f59e0b', '#f43f5e', '#06b6d4'];

    new Chart(document.getElementById('contentDoughnutChart'), {
        type: 'doughnut',
        data: {
            labels: typeLabels,
            datasets: [{
                data: typeValues,
                backgroundColor: typeColors.slice(0, typeLabels.length),
                borderWidth: 0,
                hoverOffset: 6,
            }]
        },
        options: {
            ...defaultOpts,
            cutout: '65%',
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: { padding: 16, usePointStyle: true, pointStyle: 'circle', font: { size: 11 } },
                },
                tooltip: { backgroundColor: '#1e1b4b', titleFont: { size: 12 }, bodyFont: { size: 11 }, padding: 10, cornerRadius: 8 },
            },
        }
    });

    // === BAR CHART: Team by Position ===
    const teamData = @json($stats['team_by_position']);
    const teamLabels = teamData.map(d => d.position);
    const teamValues = teamData.map(d => d.total);

    new Chart(document.getElementById('teamBarChart'), {
        type: 'bar',
        data: {
            labels: teamLabels,
            datasets: [{
                label: 'Anggota',
                data: teamValues,
                backgroundColor: ['#6366f1', '#8b5cf6', '#06b6d4', '#10b981', '#f59e0b', '#f43f5e'],
                borderRadius: 8,
                borderSkipped: false,
                barThickness: 28,
            }]
        },
        options: {
            ...defaultOpts,
            scales: {
                x: { grid: { display: false }, ticks: { font: { size: 10 }, maxRotation: 45 } },
                y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 11 }, stepSize: 1 } },
            },
            plugins: {
                ...defaultOpts.plugins,
                tooltip: { backgroundColor: '#1e1b4b', titleFont: { size: 12 }, bodyFont: { size: 11 }, padding: 10, cornerRadius: 8 },
            },
        }
    });

    // === HORIZONTAL BAR: Sections per Page ===
    const sectionData = @json($stats['sections_by_page']);
    const sectionLabels = sectionData.map(d => d.page_slug.charAt(0).toUpperCase() + d.page_slug.slice(1));
    const sectionValues = sectionData.map(d => d.total);

    new Chart(document.getElementById('sectionsBarChart'), {
        type: 'bar',
        data: {
            labels: sectionLabels,
            datasets: [{
                label: 'Section',
                data: sectionValues,
                backgroundColor: ['#06b6d4', '#8b5cf6', '#10b981', '#f59e0b', '#f43f5e'],
                borderRadius: 6,
                borderSkipped: false,
                barThickness: 20,
            }]
        },
        options: {
            ...defaultOpts,
            indexAxis: 'y',
            scales: {
                x: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.04)' }, ticks: { font: { size: 11 }, stepSize: 5 } },
                y: { grid: { display: false }, ticks: { font: { size: 11 } } },
            },
            plugins: {
                ...defaultOpts.plugins,
                tooltip: { backgroundColor: '#1e1b4b', titleFont: { size: 12 }, bodyFont: { size: 11 }, padding: 10, cornerRadius: 8 },
            },
        }
    });
});
</script>
@endpush
