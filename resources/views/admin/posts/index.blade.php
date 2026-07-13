@extends('layouts.admin')
@section('title', 'Manajemen ' . ($type === 'KNOWLEDGE' ? 'Peraturan (Knowledge Base)' : 'Berita & Opini'))
@section('subtitle', 'Kelola artikel ' . ($type === 'KNOWLEDGE' ? 'knowledge base' : 'berita & opini'))

@section('content')
<div class="bg-white rounded-2xl border border-gray-100/80 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Konten</h2>
        <a href="{{ route('admin.posts.create', ['type' => strtolower($type)]) }}" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">+ Tambah Baru</a>
    </div>

    @if($posts->isEmpty())
        <div class="flex flex-col items-center justify-center py-16">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            </div>
            <p class="text-[13px] text-gray-400">Belum ada konten.</p>
        </div>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50/80">
                <tr>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-4 py-3.5 text-left text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th class="px-4 py-3.5 text-right text-[12px] font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($posts as $post)
                <tr class="hover:bg-amber-50/30 transition-colors">
                    <td class="px-4 py-3.5 text-[13px] font-medium text-gray-900 max-w-xs truncate">{{ $post->title }}</td>
                    <td class="px-4 py-3.5">
                        <span class="kp-badge {{ $post->is_published ? 'bg-emerald-50 text-emerald-600' : 'bg-red-50 text-red-500' }}">
                            {{ $post->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </td>
                    <td class="px-4 py-3.5 text-[13px] text-gray-500">{{ $post->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-3.5 text-right text-[13px] space-x-2">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="inline-flex items-center px-3 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-[13px] font-semibold rounded-xl transition-colors">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline" onsubmit="return confirm('Hapus konten ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-red-50 hover:bg-red-100 text-red-600 text-[13px] font-semibold rounded-xl transition-colors border border-red-100">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $posts->links() }}</div>
    @endif
</div>
@endsection