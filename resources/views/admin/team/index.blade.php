@extends('layouts.admin')
@section('title', 'Tim Konsultan')
@section('subtitle', 'Kelola data anggota tim konsultan')

@section('content')
<div class="bg-white rounded-2xl border border-gray-100/80 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Tim</h2>
        <a href="{{ route('admin.team.create') }}" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">+ Tambah Anggota</a>
    </div>

    @if($teamMembers->isEmpty())
        <div class="flex flex-col items-center justify-center py-16">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            </div>
            <p class="text-[13px] text-gray-400">Belum ada anggota tim.</p>
        </div>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50/80">
                <tr>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Foto</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Nama</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Jabatan</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Spesialisasi</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Urutan</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-4 py-3.5 text-right text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($teamMembers as $member)
                <tr class="hover:bg-amber-50/30 transition-colors">
                    <td class="px-4 py-3.5">
                        @if($member->photo)
                            <img src="{{ $member->photo }}" alt="{{ $member->name }}" class="w-10 h-10 rounded-full object-cover">
                        @else
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center text-white text-sm font-bold">{{ substr($member->name, 0, 1) }}</div>
                        @endif
                    </td>
                    <td class="px-4 py-3.5 text-[13px] font-medium text-gray-900">{{ $member->name }}</td>
                    <td class="px-4 py-3.5 text-[13px] text-gray-700">{{ $member->position }}</td>
                    <td class="px-4 py-3.5 text-[13px] text-gray-500">{{ $member->specialty ?: '-' }}</td>
                    <td class="px-4 py-3.5 text-[13px] text-gray-500">{{ $member->sort_order }}</td>
                    <td class="px-4 py-3.5">
                        <span class="kp-badge {{ $member->is_active ? 'bg-emerald-50 text-emerald-600' : 'bg-gray-100 text-gray-500' }}">
                            {{ $member->is_active ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    </td>
                    <td class="px-4 py-3.5 text-right text-[13px] space-x-2">
                        <a href="{{ route('admin.team.edit', $member) }}" class="inline-flex items-center px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-[13px] font-semibold rounded-xl transition-colors">Edit</a>
                        <form action="{{ route('admin.team.destroy', $member) }}" method="POST" class="inline" onsubmit="return confirm('Hapus anggota tim ini?')">
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