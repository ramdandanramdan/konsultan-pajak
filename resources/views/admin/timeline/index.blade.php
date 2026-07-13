@extends('layouts.admin')
@section('title', 'Timeline Perusahaan')
@section('subtitle', 'Kelola timeline perjalanan perusahaan')

@section('content')
<div class="bg-white rounded-2xl border border-gray-100/80 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Timeline</h2>
        <a href="{{ route('admin.timeline.create') }}" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">+ Tambah Event</a>
    </div>

    @if($timelineItems->isEmpty())
        <div class="flex flex-col items-center justify-center py-16">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <p class="text-[13px] text-gray-400">Belum ada event timeline.</p>
        </div>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50/80">
                <tr>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Tahun</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Deskripsi</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Warna</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Urutan</th>
                    <th class="px-4 py-3.5 text-right text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($timelineItems as $item)
                <tr class="hover:bg-amber-50/30 transition-colors">
                    <td class="px-4 py-3.5 text-[13px] font-semibold text-gray-900">{{ $item->year }}</td>
                    <td class="px-4 py-3.5 text-[13px] font-medium text-gray-900">{{ $item->title }}</td>
                    <td class="px-4 py-3.5 text-[13px] text-gray-500 max-w-xs truncate">{{ Str::limit($item->description, 60) }}</td>
                    <td class="px-4 py-3.5">
                        <span class="inline-block w-3 h-3 rounded-full {{ $item->color === 'main' ? 'bg-amber-500' : 'bg-yellow-400' }}"></span>
                    </td>
                    <td class="px-4 py-3.5 text-[13px] text-gray-500">{{ $item->sort_order }}</td>
                    <td class="px-4 py-3.5 text-right text-[13px] space-x-2">
                        <a href="{{ route('admin.timeline.edit', $item) }}" class="inline-flex items-center px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-[13px] font-semibold rounded-xl transition-colors">Edit</a>
                        <form action="{{ route('admin.timeline.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-600 text-[13px] font-semibold rounded-xl transition-colors border border-red-100">Hapus</button>
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