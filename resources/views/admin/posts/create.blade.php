@extends('layouts.admin')
@section('title', 'Buat ' . ($type === 'KNOWLEDGE' ? 'Peraturan' : 'Berita') . ' Baru')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm max-w-3xl">
    <h2 class="text-lg font-bold text-gray-800 mb-4">Formulir Buat Konten Baru</h2>
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <input type="hidden" name="type" value="{{ $type }}">
        @include('admin.posts._form')
        <div class="flex justify-end mt-6 pt-4 border-t">
            <a href="{{ route('admin.posts.index', ['type' => strtolower($type)]) }}" class="px-4 py-2 text-gray-600 hover:text-gray-800 mr-2">Batal</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">Simpan</button>
        </div>
    </form>
</div>
@endsection
