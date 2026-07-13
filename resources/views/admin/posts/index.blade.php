@extends('layouts.admin')
@section('title', 'Manajemen ' . ($type === 'KNOWLEDGE' ? 'Peraturan (Knowledge Base)' : 'Berita & Opini'))

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-lg font-bold text-gray-800">Daftar Konten</h2>
        <a href="{{ route('admin.posts.create', ['type' => strtolower($type)]) }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition text-sm">+ Tambah Baru</a>
    </div>

    @if($posts->isEmpty())
        <p class="text-gray-500 text-sm">Belum ada konten.</p>
    @else
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($posts as $post)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm font-medium text-gray-900 max-w-xs truncate">{{ $post->title }}</td>
                    <td class="px-4 py-3">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $post->is_published ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                            {{ $post->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm text-gray-500">{{ $post->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-3 text-right text-sm space-x-2">
                        <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline" onsubmit="return confirm('Hapus konten ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
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
