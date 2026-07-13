@extends('layouts.admin')
@section('title', 'Konten Halaman - ' . ($pageConfig['label'] ?? ''))
@section('subtitle', 'Kelola konten section halaman')

@section('content')
<div class="mb-6">
    <div class="flex flex-wrap gap-2">
        @foreach(['home' => 'Beranda', 'profile' => 'Profil', 'services' => 'Layanan', 'contact' => 'Kontak'] as $slug => $label)
            <a href="{{ route('admin.page-sections.index', ['page' => $slug]) }}"
               class="px-4 py-2 rounded-xl text-[13px] font-semibold transition-colors {{ $current === $slug ? 'bg-amber-500 text-white shadow-lg shadow-amber-500/20' : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-100/80' }}">
                {{ $label }}
            </a>
        @endforeach
    </div>
</div>

<form action="{{ route('admin.page-sections.update') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="page" value="{{ $current }}">

    <div class="bg-white rounded-2xl border border-gray-100/80 p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-100">{{ $pageConfig['label'] }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($pageConfig['sections'] as $key => $config)
            <div>
                <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">{{ $config['label'] }}</label>
                @if($config['type'] === 'textarea')
                    <textarea name="sections[{{ $key }}]" rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">{{ $sections[$key] ?? '' }}</textarea>
                @else
                    <input type="text" name="sections[{{ $key }}]" value="{{ $sections[$key] ?? '' }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
                @endif
            </div>
            @endforeach
        </div>
        <div class="flex justify-end mt-6 pt-4 border-t border-gray-100">
            <button type="submit" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">Simpan Konten</button>
        </div>
    </div>
</form>
@endsection