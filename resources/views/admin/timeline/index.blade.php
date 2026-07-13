@extends('layouts.admin')
@section('title', 'Timeline Perusahaan')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Timeline</h2>
        <a href="{{ route('admin.timeline.create') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition text-sm">+ Tambah Event</a>
    </div>

    @if($timelineItems->isEmpty())
        <p class="text-gray-500 text-sm">Belum ada event timeline.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tahun</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Warna</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Urutan</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($timelineItems as $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm font-semibold text-gray-900">{{ $item->year }}</td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $item->title }}</td>
                    <td class="px-4 py-3 text-sm text-gray-500 max-w-xs truncate">{{ Str::limit($item->description, 60) }}</td>
                    <td class="px-4 py-3">
                        <span class="inline-block w-3 h-3 rounded-full {{ $item->color === 'main' ? 'bg-blue-600' : 'bg-yellow-500' }}"></span>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-500">{{ $item->sort_order }}</td>
                    <td class="px-4 py-3 text-right text-sm space-x-2">
                        <a href="{{ route('admin.timeline.edit', $item) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                        <form action="{{ route('admin.timeline.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
