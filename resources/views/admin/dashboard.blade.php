@extends('layouts.admin')
@section('title', 'Dashboard Admin')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
        <div class="flex items-center space-x-4">
            <div class="p-3 bg-blue-100 rounded-full text-blue-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5-1.253"/></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Knowledge Base</p>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['knowledge_count'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-yellow-500">
        <div class="flex items-center space-x-4">
            <div class="p-3 bg-yellow-100 rounded-full text-yellow-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7m3-4h4m1 0h1"/></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Berita & Opini</p>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['news_count'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
        <div class="flex items-center space-x-4">
            <div class="p-3 bg-green-100 rounded-full text-green-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M5 7h2m-2 3h2m-2 3h2M1 10h2"/></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Tim Konsultan</p>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['total_team'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-purple-500">
        <div class="flex items-center space-x-4">
            <div class="p-3 bg-purple-100 rounded-full text-purple-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500">Total User</p>
                <p class="text-2xl font-bold text-gray-900">{{ $stats['total_users'] }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded-xl shadow-sm">
        <h2 class="text-lg font-bold text-gray-800 mb-4">Aksi Cepat</h2>
        <div class="grid grid-cols-2 gap-3">
            <a href="{{ route('admin.page-sections.index', ['page' => 'home']) }}" class="p-3 bg-blue-50 text-blue-700 rounded-lg hover:bg-blue-100 transition text-sm font-semibold text-center">Edit Beranda</a>
            <a href="{{ route('admin.settings.index') }}" class="p-3 bg-gray-50 text-gray-700 rounded-lg hover:bg-gray-100 transition text-sm font-semibold text-center">Pengaturan Situs</a>
            <a href="{{ route('admin.team.index') }}" class="p-3 bg-green-50 text-green-700 rounded-lg hover:bg-green-100 transition text-sm font-semibold text-center">Kelola Tim</a>
            <a href="{{ route('admin.posts.create', ['type' => 'news']) }}" class="p-3 bg-yellow-50 text-yellow-700 rounded-lg hover:bg-yellow-100 transition text-sm font-semibold text-center">+ Berita Baru</a>
            <a href="{{ route('admin.posts.create', ['type' => 'knowledge']) }}" class="p-3 bg-purple-50 text-purple-700 rounded-lg hover:bg-purple-100 transition text-sm font-semibold text-center">+ Knowledge Baru</a>
            <a href="{{ route('home') }}" target="_blank" class="p-3 bg-red-50 text-red-700 rounded-lg hover:bg-red-100 transition text-sm font-semibold text-center">Lihat Website</a>
        </div>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-sm">
        <h2 class="text-lg font-bold text-gray-800 mb-4">Artikel Terbaru</h2>
        @if($stats['recent_posts']->isEmpty())
            <p class="text-gray-500 text-sm">Belum ada artikel.</p>
        @else
            <div class="space-y-3">
                @foreach($stats['recent_posts'] as $post)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <p class="text-sm font-semibold text-gray-800">{{ Str::limit($post->title, 40) }}</p>
                            <p class="text-xs text-gray-500">{{ $post->type }} &middot; {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $post->is_published ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $post->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
