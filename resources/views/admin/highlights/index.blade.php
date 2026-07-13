@extends('layouts.admin')
@section('title', 'Statistik Highlights')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Highlights (Trust Bar)</h2>
        <a href="{{ route('admin.highlights.create') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition text-sm">+ Tambah Highlight</a>
    </div>

    @if($highlights->isEmpty())
        <p class="text-gray-500 text-sm">Belum ada highlight.</p>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($highlights as $h)
        <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 relative">
            <div class="absolute top-2 right-2 flex space-x-1">
                <a href="{{ route('admin.highlights.edit', $h) }}" class="text-blue-600 hover:text-blue-800 text-xs font-semibold">Edit</a>
                <form action="{{ route('admin.highlights.destroy', $h) }}" method="POST" onsubmit="return confirm('Hapus?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800 text-xs font-semibold">Hapus</button>
                </form>
            </div>
            <p class="text-2xl font-extrabold text-blue-900">{{ $h->value }}</p>
            <p class="text-sm text-gray-600 mt-1">{{ $h->label }}</p>
            <p class="text-xs text-gray-400 mt-2">Icon: {{ $h->icon }} | Urutan: {{ $h->sort_order }}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection
