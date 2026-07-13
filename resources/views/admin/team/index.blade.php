@extends('layouts.admin')
@section('title', 'Tim Konsultan')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Tim</h2>
        <a href="{{ route('admin.team.create') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition text-sm">+ Tambah Anggota</a>
    </div>

    @if($teamMembers->isEmpty())
        <p class="text-gray-500 text-sm">Belum ada anggota tim.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Foto</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jabatan</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Spesialisasi</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Urutan</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($teamMembers as $member)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        @if($member->photo)
                            <img src="{{ $member->photo }}" alt="{{ $member->name }}" class="w-10 h-10 rounded-full object-cover">
                        @else
                            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-sm font-bold">{{ substr($member->name, 0, 1) }}</div>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-sm font-medium text-gray-900">{{ $member->name }}</td>
                    <td class="px-4 py-3 text-sm text-gray-700">{{ $member->position }}</td>
                    <td class="px-4 py-3 text-sm text-gray-500">{{ $member->specialty ?: '-' }}</td>
                    <td class="px-4 py-3 text-sm text-gray-500">{{ $member->sort_order }}</td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $member->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $member->is_active ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-right text-sm space-x-2">
                        <a href="{{ route('admin.team.edit', $member) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                        <form action="{{ route('admin.team.destroy', $member) }}" method="POST" class="inline" onsubmit="return confirm('Hapus anggota tim ini?')">
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
