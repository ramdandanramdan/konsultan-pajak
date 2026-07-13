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
    <title>Konsultan Pajak - @yield('title', 'Dashboard')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    @stack('head')
    <style>
        :root {
            --kp-navy: #0c1222;
            --kp-navy-light: #131b2e;
            --kp-surface: #1a2332;
            --kp-border: rgba(255,255,255,0.06);
            --kp-amber: #f0a500;
            --kp-amber-dim: rgba(240,165,0,0.12);
            --kp-text: #e2e8f0;
            --kp-text-dim: #64748b;
            --kp-body-bg: #f1f3f8;
        }
        * { font-family: 'Plus Jakarta Sans', system-ui, sans-serif; }
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(240,165,0,0.25); border-radius: 10px; }

        .kp-sidebar {
            background: var(--kp-navy);
            position: relative;
        }
        .kp-sidebar::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.03) 1px, transparent 0);
            background-size: 24px 24px;
            pointer-events: none;
        }
        .kp-sidebar::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 1px; height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(240,165,0,0.15), transparent);
        }

        .kp-nav-item {
            position: relative;
            transition: all 0.2s ease;
        }
        .kp-nav-item:hover {
            background: rgba(255,255,255,0.04);
        }
        .kp-nav-item:hover .kp-nav-icon { color: var(--kp-amber); }
        .kp-nav-active {
            background: rgba(240,165,0,0.08) !important;
        }
        .kp-nav-active::before {
            content: '';
            position: absolute;
            left: 0; top: 50%;
            transform: translateY(-50%);
            width: 3px; height: 60%;
            background: var(--kp-amber);
            border-radius: 0 4px 4px 0;
            box-shadow: 0 0 12px rgba(240,165,0,0.4);
        }
        .kp-nav-active .kp-nav-icon { color: var(--kp-amber); }
        .kp-nav-active .kp-nav-label { color: #fff; }

        .kp-topbar {
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(0,0,0,0.06);
        }

        .kp-welcome {
            background: linear-gradient(135deg, var(--kp-navy) 0%, #1a2744 40%, #1e3050 70%, var(--kp-navy) 100%);
            position: relative;
            overflow: hidden;
        }
        .kp-welcome::before {
            content: '';
            position: absolute;
            top: -40%; right: -10%;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(240,165,0,0.12) 0%, transparent 70%);
            border-radius: 50%;
        }
        .kp-welcome::after {
            content: '';
            position: absolute;
            bottom: -30%; left: 10%;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(59,130,246,0.08) 0%, transparent 70%);
            border-radius: 50%;
        }

        .kp-stat-card {
            transition: all 0.25s ease;
            border: 1px solid rgba(0,0,0,0.04);
        }
        .kp-stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px -12px rgba(0,0,0,0.12);
        }

        .kp-chart-card {
            transition: all 0.25s ease;
        }
        .kp-chart-card:hover {
            box-shadow: 0 12px 32px -8px rgba(0,0,0,0.08);
        }

        .kp-badge {
            display: inline-flex;
            align-items: center;
            padding: 2px 8px;
            border-radius: 9999px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .kp-action-link {
            transition: all 0.2s ease;
            border: 1px solid rgba(0,0,0,0.06);
        }
        .kp-action-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px -6px rgba(0,0,0,0.1);
        }

        /* Sidebar collapse */
        .kp-collapsed .kp-collapse-text { display: none; }
        .kp-collapsed .kp-collapse-section { display: none; }
        .kp-collapsed .kp-collapse-footer { display: none; }
        .kp-collapsed .kp-collapse-logo { display: none; }
        .kp-collapsed { width: 68px; min-width: 68px; }
        .kp-collapsed .kp-nav-item { justify-content: center; padding-left: 0; padding-right: 0; }
        .kp-collapsed .kp-nav-icon { margin-right: 0; }
        .kp-collapsed .kp-sidebar-head { justify-content: center; padding-left: 0; padding-right: 0; }
        .kp-collapsed .kp-user-info { display: none; }
        .kp-collapsed .kp-user-card { justify-content: center; }
        .kp-collapsed .kp-footer-link span { display: none; }
        .kp-collapsed .kp-footer-link { justify-content: center; }
        .kp-expanded { width: 256px; min-width: 256px; }

        @media (max-width: 1023px) {
            .kp-collapsed, .kp-expanded { width: 256px; min-width: 256px; }
            .kp-collapsed .kp-collapse-text, .kp-collapsed .kp-collapse-section,
            .kp-collapsed .kp-collapse-footer, .kp-collapsed .kp-collapse-logo,
            .kp-collapsed .kp-user-info { display: block; }
            .kp-collapsed .kp-nav-item { justify-content: flex-start; padding-left: 12px; padding-right: 12px; }
            .kp-collapsed .kp-nav-icon { margin-right: 12px; }
            .kp-collapsed .kp-sidebar-head { justify-content: space-between; padding-left: 16px; padding-right: 16px; }
            .kp-collapsed .kp-user-card { justify-content: flex-start; }
            .kp-collapsed .kp-footer-link span { display: inline; }
            .kp-collapsed .kp-footer-link { justify-content: flex-start; }
        }

        .mesh-blob-1 {
            position: absolute; width: 200px; height: 200px; border-radius: 50%;
            background: radial-gradient(circle, rgba(99,102,241,0.15), transparent 70%);
            top: -60px; right: -40px; animation: float 8s ease-in-out infinite;
        }
        .mesh-blob-2 {
            position: absolute; width: 150px; height: 150px; border-radius: 50%;
            background: radial-gradient(circle, rgba(240,165,0,0.1), transparent 70%);
            bottom: -40px; left: 20%; animation: float 10s ease-in-out infinite reverse;
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(10px, -10px); }
        }
    </style>
</head>
<body class="bg-[#f1f3f8] min-h-screen">

<div x-data="{ sidebarOpen: false, sidebarCollapsed: localStorage.getItem('kpSidebar') === 'true' }"
     x-init="$watch('sidebarCollapsed', val => localStorage.setItem('kpSidebar', val))"
     class="flex min-h-screen">

    {{-- MOBILE OVERLAY --}}
    <div x-show="sidebarOpen" @click="sidebarOpen = false"
         x-transition:enter="transition-opacity ease-out duration-300"
         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in duration-200"
         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-40 bg-black/60 backdrop-blur-sm lg:hidden"></div>

    {{-- SIDEBAR --}}
    <aside x-cloak
           :class="sidebarCollapsed && !sidebarOpen ? 'kp-collapsed' : 'kp-expanded'"
           :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
           class="kp-sidebar fixed inset-y-0 left-0 z-50 text-[var(--kp-text)] transform transition-all duration-300 ease-in-out lg:static lg:z-auto flex flex-col overflow-hidden">

        {{-- LOGO --}}
        <div class="kp-sidebar-head flex items-center justify-between h-[68px] px-4 flex-shrink-0 relative z-10">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center flex-shrink-0 shadow-lg shadow-amber-500/20">
                    <span class="text-[11px] font-extrabold text-white tracking-tighter">KP</span>
                </div>
                <div class="kp-collapse-logo">
                    <p class="text-[13px] font-extrabold text-white leading-tight tracking-tight">Konsultan Pajak</p>
                    <p class="text-[9px] font-semibold text-amber-400/70 uppercase tracking-[0.15em]">{{ $user->name ?? 'Admin' }}</p>
                </div>
            </a>
            <button @click="sidebarCollapsed = !sidebarCollapsed"
                    class="hidden lg:flex text-gray-500 hover:text-white p-1.5 rounded-lg hover:bg-white/5 transition-colors"
                    title="Toggle sidebar">
                <svg class="w-4 h-4 transition-transform duration-300" :class="sidebarCollapsed ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
                </svg>
            </button>
            <button @click="sidebarOpen = false" class="lg:hidden text-gray-500 hover:text-white p-1 rounded-lg hover:bg-white/5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- NAV --}}
        <nav class="flex-1 overflow-y-auto py-3 px-3 space-y-0.5 relative z-10">
            <p class="kp-collapse-section px-3 pt-2 pb-2.5 text-[9px] font-bold text-gray-600 uppercase tracking-[0.2em]">Menu</p>

            @php
                $navItems = [
                    ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>'],
                    ['route' => 'admin.settings.index', 'label' => 'Pengaturan Situs', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'],
                ];
            @endphp

            @foreach($navItems as $item)
            <a href="{{ route($item['route']) }}"
               class="kp-nav-item flex items-center px-3 py-2.5 rounded-xl text-[13px] font-medium
                      {{ $currentRoute === $item['route'] ? 'kp-nav-active' : 'text-gray-400' }}">
                <svg class="kp-nav-icon w-[18px] h-[18px] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $item['icon'] !!}</svg>
                <span class="kp-nav-label kp-collapse-text">{{ $item['label'] }}</span>
            </a>
            @endforeach

            <p class="kp-collapse-section px-3 pt-5 pb-2.5 text-[9px] font-bold text-gray-600 uppercase tracking-[0.2em]">Konten</p>

            @php
                $contentItems = [
                    ['route' => 'admin.page-sections.index', 'check' => 'admin.page-sections', 'label' => 'Konten Halaman', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>'],
                    ['route' => 'admin.team.index', 'check' => 'admin.team', 'label' => 'Tim Konsultan', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2M1 10h2"/>'],
                    ['route' => 'admin.timeline.index', 'check' => 'admin.timeline', 'label' => 'Timeline', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
                    ['route' => 'admin.highlights.index', 'check' => 'admin.highlights', 'label' => 'Highlights', 'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>'],
                ];
            @endphp

            @foreach($contentItems as $item)
            <a href="{{ route($item['route']) }}"
               class="kp-nav-item flex items-center px-3 py-2.5 rounded-xl text-[13px] font-medium
                      {{ Str::startsWith($currentRoute, $item['check']) ? 'kp-nav-active' : 'text-gray-400' }}">
                <svg class="kp-nav-icon w-[18px] h-[18px] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $item['icon'] !!}</svg>
                <span class="kp-nav-label kp-collapse-text">{{ $item['label'] }}</span>
            </a>
            @endforeach

            <p class="kp-collapse-section px-3 pt-5 pb-2.5 text-[9px] font-bold text-gray-600 uppercase tracking-[0.2em]">Artikel</p>

            <a href="{{ route('admin.posts.index', ['type' => 'knowledge']) }}"
               class="kp-nav-item flex items-center px-3 py-2.5 rounded-xl text-[13px] font-medium
                      {{ Str::startsWith($currentRoute, 'admin.posts') && request('type') === 'knowledge' ? 'kp-nav-active' : 'text-gray-400' }}">
                <svg class="kp-nav-icon w-[18px] h-[18px] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5-1.253"/></svg>
                <span class="kp-nav-label kp-collapse-text">Knowledge Base</span>
            </a>

            <a href="{{ route('admin.posts.index', ['type' => 'news']) }}"
               class="kp-nav-item flex items-center px-3 py-2.5 rounded-xl text-[13px] font-medium
                      {{ Str::startsWith($currentRoute, 'admin.posts') && request('type') === 'news' ? 'kp-nav-active' : 'text-gray-400' }}">
                <svg class="kp-nav-icon w-[18px] h-[18px] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7m3-4h4m1 0h1m-1 4h-4"/></svg>
                <span class="kp-nav-label kp-collapse-text">Berita & Opini</span>
            </a>
        </nav>

        {{-- FOOTER --}}
        <div class="flex-shrink-0 p-3 border-t border-white/5 relative z-10">
            <a href="{{ route('home') }}" target="_blank"
               class="kp-footer-link flex items-center px-3 py-2 text-[13px] font-medium text-gray-500 rounded-xl hover:bg-white/5 hover:text-gray-300 transition-colors mb-2">
                <svg class="w-[18px] h-[18px] flex-shrink-0 mx-auto lg:mx-0 lg:mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                <span class="kp-collapse-text kp-collapse-footer">Lihat Website</span>
            </a>
            <div class="kp-user-card flex items-center px-3 py-2.5 rounded-xl bg-white/[0.03] border border-white/5">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center flex-shrink-0 text-white text-[11px] font-bold shadow-md shadow-amber-500/20">
                    {{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}
                </div>
                <div class="kp-user-info ml-3 flex-1 min-w-0">
                    <p class="text-[13px] font-semibold text-white truncate leading-tight">{{ $user->name ?? 'Admin' }}</p>
                    <p class="text-[9px] text-amber-400/60 font-semibold uppercase tracking-[0.15em]">Admin</p>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="kp-user-info">
                    @csrf
                    <button type="submit" class="text-gray-500 hover:text-red-400 transition-colors p-1" title="Keluar">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    {{-- MAIN --}}
    <div class="flex-1 flex flex-col min-h-screen min-w-0">

        {{-- TOPBAR --}}
        <header class="kp-topbar sticky top-0 z-30 flex items-center h-[60px] px-4 sm:px-6 lg:px-8">
            <button @click="sidebarOpen = true" class="lg:hidden text-gray-500 hover:text-gray-700 mr-3 p-1.5 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <button @click="sidebarCollapsed = !sidebarCollapsed" class="hidden lg:flex text-gray-400 hover:text-gray-600 mr-4 p-1.5 rounded-lg hover:bg-gray-100 transition-colors" title="Toggle sidebar">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <div>
                <h1 class="text-[15px] font-bold text-gray-800 leading-tight">@yield('title', 'Dashboard')</h1>
                @hasSection('subtitle')
                    <p class="text-[11px] text-gray-400 font-medium">@yield('subtitle')</p>
                @endif
            </div>

            <div class="ml-auto flex items-center gap-2">
                <div class="hidden md:flex items-center bg-gray-100 rounded-lg px-3 py-1.5 gap-2">
                    <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" placeholder="Cari..." class="bg-transparent border-none outline-none text-[13px] text-gray-600 w-36 lg:w-48 placeholder-gray-400">
                </div>

                <button class="relative p-2 text-gray-400 hover:text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                    <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-amber-500 rounded-full ring-2 ring-white"></span>
                </button>

                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="flex items-center gap-2 p-1 rounded-lg hover:bg-gray-100 transition-colors">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white text-[11px] font-bold shadow-sm">
                            {{ strtoupper(substr($user->name ?? 'A', 0, 1)) }}
                        </div>
                    </button>
                    <div x-show="open" @click.away="open = false"
                         x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-52 bg-white rounded-xl shadow-xl border border-gray-100 py-1 z-50">
                        <div class="px-3.5 py-2 border-b border-gray-100">
                            <p class="text-[13px] font-semibold text-gray-800">{{ $user->name ?? 'Admin' }}</p>
                            <p class="text-[11px] text-gray-400">{{ $user->email ?? '' }}</p>
                        </div>
                        <a href="{{ route('home') }}" target="_blank" class="flex items-center px-3.5 py-2 text-[13px] text-gray-600 hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Lihat Website
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full flex items-center px-3.5 py-2 text-[13px] text-red-600 hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                Keluar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        {{-- CONTENT --}}
        <main class="flex-1 p-4 sm:p-5 lg:p-6">
            @if(session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
                     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     class="mb-5 px-4 py-3 bg-emerald-50 border border-emerald-200/80 text-emerald-700 rounded-xl flex items-center gap-3">
                    <div class="w-6 h-6 rounded-full bg-emerald-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-3.5 h-3.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <span class="text-[13px] font-medium flex-1">{{ session('success') }}</span>
                    <button @click="show = false" class="text-emerald-400 hover:text-emerald-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            @endif
            @if(session('error'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
                     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                     class="mb-5 px-4 py-3 bg-red-50 border border-red-200/80 text-red-700 rounded-xl flex items-center gap-3">
                    <div class="w-6 h-6 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
                        <svg class="w-3.5 h-3.5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                    </div>
                    <span class="text-[13px] font-medium flex-1">{{ session('error') }}</span>
                    <button @click="show = false" class="text-red-400 hover:text-red-600"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            @endif
            @yield('content')
        </main>

        <footer class="px-4 sm:px-6 lg:px-8 py-3 border-t border-gray-200/50">
            <p class="text-[11px] text-gray-400 text-center">&copy; {{ date('Y') }} Konsultan Pajak &middot; {{ $user->name ?? 'Admin' }}</p>
        </footer>
    </div>
</div>

@stack('scripts')
</body>
</html>
