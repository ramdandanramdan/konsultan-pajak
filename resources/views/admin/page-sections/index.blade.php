@extends('layouts.admin')
@section('title', 'Konten Halaman - ' . ($pageConfig['label'] ?? ''))

@section('content')
<div class="mb-6">
    <div class="flex flex-wrap gap-2">
        @foreach(['home' => 'Beranda', 'profile' => 'Profil', 'services' => 'Layanan', 'contact' => 'Kontak'] as $slug => $label)
            <a href="{{ route('admin.page-sections.index', ['page' => $slug]) }}"
               class="px-4 py-2 rounded-lg text-sm font-semibold transition {{ $current === $slug ? 'bg-blue-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-100 border' }}">
                {{ $label }}
            </a>
        @endforeach
    </div>
</div>

<form action="{{ route('admin.page-sections.update') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="page" value="{{ $current }}">

    <div class="bg-white p-6 rounded-xl shadow-sm">
        <h3 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b">{{ $pageConfig['label'] }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($pageConfig['sections'] as $key => $config)
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ $config['label'] }}</label>
                @if($config['type'] === 'textarea')
                    <textarea name="sections[{{ $key }}]" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">{{ $sections[$key] ?? '' }}</textarea>
                @else
                    <input type="text" name="sections[{{ $key }}]" value="{{ $sections[$key] ?? '' }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                @endif
            </div>
            @endforeach
        </div>
        <div class="flex justify-end mt-6 pt-4 border-t">
            <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">Simpan Konten</button>
        </div>
    </div>
</form>
@endsection
