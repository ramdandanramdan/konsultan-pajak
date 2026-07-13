@extends('layouts.admin')
@section('title', 'Statistik Highlights')
@section('subtitle', 'Kelola statistik trust bar')

@section('content')
<div class="bg-white rounded-2xl border border-gray-100/80 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Highlights (Trust Bar)</h2>
        <a href="{{ route('admin.highlights.create') }}" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">+ Tambah Highlight</a>
    </div>

    @if($highlights->isEmpty())
        <div class="flex flex-col items-center justify-center py-16">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
            <p class="text-[13px] text-gray-400">Belum ada highlight.</p>
        </div>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($highlights as $h)
        <div class="p-4 bg-white rounded-2xl border border-gray-100/80 relative">
            <div class="absolute top-3 right-3 flex items-center space-x-1">
                <a href="{{ route('admin.highlights.edit', $h) }}" class="inline-flex items-center px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-[13px] font-semibold rounded-xl transition-colors">Edit</a>
                <form action="{{ route('admin.highlights.destroy', $h) }}" method="POST" onsubmit="return confirm('Hapus?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-600 text-[13px] font-semibold rounded-xl transition-colors border border-red-100">Hapus</button>
                </form>
            </div>
            <p class="text-2xl font-extrabold text-amber-500">{{ $h->value }}</p>
            <p class="text-[13px] text-gray-600 mt-1">{{ $h->label }}</p>
            <p class="text-[12px] text-gray-400 mt-2">Icon: {{ $h->icon }} | Urutan: {{ $h->sort_order }}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection