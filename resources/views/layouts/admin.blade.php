@php
    use Illuminate\Support\Facades\Auth;
    $currentRoute = request()->route()->getName() ?? '';
    $user = Auth::user();
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
                    colors: {
                        brand: {
                            50: '#eef2ff', 100: '#e0e7ff', 200: '#c7d2fe', 300: '#a5b4fc',
                            400: '#818cf8', 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca',
                            800: '#3730a3', 900: '#312e81', 950: '#1e1b4b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        * { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(99,102,241,0.3); border-radius: 3px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(99,102,241,0.5); }

        .sidebar-gradient {
            background: linear-gradient(180deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
        }
        .sidebar-item-active {
            background: linear-gradient(135deg, rgba(99,102,241,0.2) 0%, rgba(139,92,246,0.15) 100%);
            box-shadow: 0 0 20px rgba(99,102,241,0.15), inset 0 1px 0 rgba(255,255,255,0.05);
        }
        .sidebar-item-active .nav-icon {
            color: #818cf8;
            filter: drop-shadow(0 0 6px rgba(129,140,248,0.5));
        }
        .nav-link {
            transition: all 0.2s cubic-bezier(0.4,0,0.2,1);
        }
        .nav-link:hover {
            background: rgba(255,255,255,0.05);
            transform: translateX(2px);
        }
        .nav-link:hover .nav-icon {
            color: #c7d2fe;
        }
        .logo-glow {
            text-shadow: 0 0 20px rgba(129,140,248,0.4);
        }
        .topbar-gradient {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(99,102,241,0.1);
        }
        .stat-card {
            transition: all 0.3s cubic-bezier(0.4,0,0.2,1);
        }
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px -8px rgba(0,0,0,0.15);
        }
        .chart-card {
            transition: all 0.3s ease;
        }
        .chart-card:hover {
            box-shadow: 0 8px 24px -6px rgba(0,0,0,0.1);
        }
        .sidebar-collapse .sidebar-text { display: none; }
        .sidebar-collapse .sidebar-section-title { display: none; }
        .sidebar-collapse .sidebar-label { display: none; }
        .sidebar-collapse .sidebar-footer-text { display: none; }
        .sidebar-collapse { width: 72px; min-width: 72px; }
        .sidebar-collapse .sidebar-logo-text { display: none; }
        .sidebar-expand { width: 256px; min-width: 256px; }
        .sidebar-collapse .nav-link { justify-content: center; padding-left: 0; padding-right: 0; }
        .sidebar-collapse .nav-link .nav-icon { margin-right: 0; }
        .sidebar-collapse .sidebar-header { justify-content: center; padding-left: 0; padding-right: 0; }
        .sidebar-collapse .user-card-info { display: none; }
        .sidebar-collapse .user-card { justify-content: center; }
        .sidebar-collapse .sidebar-footer-links a span { display: none; }
        .sidebar-collapse .sidebar-footer-links a { justify-content: center; }
        @media (max-width: 1023px) {
            .sidebar-collapse, .sidebar-expand { width: 256px; min-width: 256px; }
            .sidebar-collapse .sidebar-text, .sidebar-collapse .sidebar-section-title,
            .sidebar-collapse .sidebar-label, .sidebar-collapse .sidebar-footer-text,
            .sidebar-collapse .sidebar-logo-text, .sidebar-collapse .user-card-info { display: block; }
            .sidebar-collapse .nav-link { justify-content: flex-start; padding-left: 12px; padding-right: 12px; }
            .sidebar-collapse .nav-link .nav-icon { margin-right: 12px; }
            .sidebar-collapse .sidebar-header { justify-content: space-between; padding-left: 16px; padding-right: 16px; }
            .sidebar-collapse .user-card { justify-content: flex-start; }
            .sidebar-collapse .sidebar-footer-links a span { display: inline; }
            .sidebar-collapse .sidebar-footer-links a { justify-content: flex-start; }
        }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen">

<div x-data="{ sidebarOpen: false, sidebarCollapsed: localStorage.getItem('sidebarCollapsed') === 'true' }"
     x-init="$watch('sidebarCollapsed', val => localStorage.setItem('sidebarCollapsed', val))"
     class="flex min-h-screen">

    {{-- MOBILE OVERLAY --}}
    <div x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false" class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm lg:hidden"></div>

    {{-- SIDEBAR --}}
    <aside x-show="sidebarOpen || true" x-cloak
           :class="sidebarCollapsed && !sidebarOpen ? 'sidebar-collapse' : 'sidebar-expand'"
           :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
           class="fixed inset-y-0 left-0 z-50 sidebar-gradient text-white transform transition-all duration-300 ease-in-out lg:static lg:z-auto flex flex-col overflow-hidden">

        {{-- SIDEBAR HEADER --}}
        <div class="sidebar-header flex items-center justify-between h-16 px-4 flex-shrink-0 border-b border-white/5">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-2">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-brand-400 to-violet-500 flex items-center justify-center flex-shrink-0 shadow-lg shadow-brand-500/30">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <span class="sidebar-logo-text text-lg font-extrabold tracking-tight logo-glow">
                    KP<span class="text-brand-400">Admin</span>
                </span>
            </a>
            <button @click="sidebarCollapsed = !sidebarCollapsed" class="hidden lg:flex text-gray-400 hover:text-white p-1 rounded-md hover:bg-white/10 transition-colors" title="Toggle sidebar">
                <svg class="w-4 h-4 transition-transform" :class="sidebarCollapsed ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/></svg>
            </button>
            <button @click="sidebarOpen = false" class="lg:hidden text-gray-400 hover:text-white p-1 rounded-md hover:bg-white/10 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- SIDEBAR NAV --}}
        <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
            <p class="sidebar-section-title px-3 py-2 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Menu Utama</p>

            <a href="{{ route('admin.dashboard') }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ $currentRoute === 'admin.dashboard' ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span class="sidebar-text">Dashboard</span>
            </a>

            <p class="sidebar-section-title px-3 pt-5 pb-2 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Konten</p>

            <a href="{{ route('admin.settings.index') }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ Str::startsWith($currentRoute, 'admin.settings') ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span class="sidebar-text">Pengaturan Situs</span>
            </a>

            <a href="{{ route('admin.page-sections.index') }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ Str::startsWith($currentRoute, 'admin.page-sections') ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                <span class="sidebar-text">Konten Halaman</span>
            </a>

            <a href="{{ route('admin.team.index') }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ Str::startsWith($currentRoute, 'admin.team') ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2M1 10h2"/></svg>
                <span class="sidebar-text">Tim Konsultan</span>
            </a>

            <a href="{{ route('admin.timeline.index') }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ Str::startsWith($currentRoute, 'admin.timeline') ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="sidebar-text">Timeline</span>
            </a>

            <a href="{{ route('admin.highlights.index') }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ Str::startsWith($currentRoute, 'admin.highlights') ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <span class="sidebar-text">Statistik Highlights</span>
            </a>

            <p class="sidebar-section-title px-3 pt-5 pb-2 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Artikel</p>

            <a href="{{ route('admin.posts.index', ['type' => 'knowledge']) }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ Str::startsWith($currentRoute, 'admin.posts') && request('type') === 'knowledge' ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5-1.253"/></svg>
                <span class="sidebar-text">Knowledge Base</span>
            </a>

            <a href="{{ route('admin.posts.index', ['type' => 'news']) }}"
               class="nav-link flex items-center px-3 py-2.5 text-sm font-medium rounded-xl
                      {{ Str::startsWith($currentRoute, 'admin.posts') && request('type') === 'news' ? 'sidebar-item-active text-white' : 'text-gray-400 hover:text-white' }}">
                <svg class="nav-icon w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7m3-4h4m1 0h1m-1 4h-4"/></svg>
                <span class="sidebar-text">Berita & Opini</span>
            </a>
        </nav>

        {{-- SIDEBAR FOOTER --}}
        <div class="flex-shrink-0 p-3 border-t border-white/5">
            <div class="sidebar-footer-links space-y-1">
                <a href="{{ route('home') }}" target="_blank"
                   class="flex items-center px-3 py-2 text-sm font-medium text-gray-400 rounded-xl hover:bg-white/5 hover:text-white transition-colors">
                    <svg class="w-5 h-5 flex-shrink-0 mx-auto lg:mx-0 lg:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    <span class="sidebar-text sidebar-footer-text">Lihat Website</span>
                </a>
            </div>
            <div class="user-card flex items-center px-3 py-2.5 mt-2 rounded-xl bg-white/5">
                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-brand-400 to-violet-500 flex items-center justify-center flex-shrink-0 text-white text-xs font-bold shadow-lg shadow-brand-500/20">
                    {{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}
                </div>
                <div class="user-card-info ml-3 flex-1 min-w-0">
                    <p class="text-sm font-semibold text-white truncate">{{ $user->name ?? 'Admin' }}</p>
                    <p class="text-[10px] text-brand-400 font-medium uppercase tracking-wider">Administrator</p>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="user-card-info">
                    @csrf
                    <button type="submit" class="text-gray-400 hover:text-red-400 transition-colors p-1" title="Keluar">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    {{-- MAIN CONTENT --}}
    <div class="flex-1 flex flex-col min-h-screen min-w-0">

        {{-- TOPBAR --}}
        <header class="topbar-gradient sticky top-0 z-30 flex items-center h-16 px-4 sm:px-6 lg:px-8">
            <button @click="sidebarOpen = true" class="lg:hidden text-gray-500 hover:text-gray-700 mr-3 p-1 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <button @click="sidebarCollapsed = !sidebarCollapsed" class="hidden lg:flex text-gray-400 hover:text-gray-600 mr-4 p-1.5 rounded-lg hover:bg-gray-100 transition-colors" title="Toggle sidebar">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <div>
                <h1 class="text-lg font-bold text-gray-800">@yield('title', 'Dashboard')</h1>
                <p class="text-xs text-gray-400 hidden sm:block">@yield('subtitle', '')</p>
            </div>

            <div class="ml-auto flex items-center space-x-2 sm:space-x-3">
                {{-- SEARCH --}}
                <div class="hidden md:flex items-center bg-gray-100 rounded-xl px-3 py-2">
                    <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" placeholder="Cari..." class="bg-transparent border-none outline-none text-sm text-gray-600 w-32 lg:w-48 placeholder-gray-400">
                </div>

                {{-- NOTIFICATION BELL --}}
                <button class="relative p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-xl transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white"></span>
                </button>

                {{-- USER DROPDOWN --}}
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center space-x-2 p-1.5 rounded-xl hover:bg-gray-100 transition-colors">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-brand-400 to-violet-500 flex items-center justify-center text-white text-xs font-bold shadow-sm">
                            {{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}
                        </div>
                        <svg class="w-4 h-4 text-gray-400 hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100 py-1 z-50">
                        <div class="px-4 py-2 border-b border-gray-100">
                            <p class="text-sm font-semibold text-gray-800">{{ $user->name ?? 'Admin' }}</p>
                            <p class="text-xs text-gray-400">{{ $user->email ?? '' }}</p>
                        </div>
                        <a href="{{ route('home') }}" target="_blank" class="flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Lihat Website
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full flex items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        {{-- PAGE CONTENT --}}
        <main class="flex-1 p-4 sm:p-6 lg:p-8">
            @if(session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl flex items-center shadow-sm">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm font-medium">{{ session('success') }}</span>
                    <button @click="show = false" class="ml-auto text-emerald-400 hover:text-emerald-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            @endif
            @if(session('error'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-2xl flex items-center shadow-sm">
                    <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span class="text-sm font-medium">{{ session('error') }}</span>
                    <button @click="show = false" class="ml-auto text-red-400 hover:text-red-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            @endif
            @yield('content')
        </main>

        {{-- FOOTER --}}
        <footer class="px-4 sm:px-6 lg:px-8 py-4 border-t border-gray-200/60">
            <p class="text-xs text-gray-400 text-center">&copy; {{ date('Y') }} Konsultan Pajak Admin Panel</p>
        </footer>
    </div>
</div>

@stack('scripts')
</body>
</html>
