@extends('layouts.app')

{{-- Menggunakan judul post untuk title halaman --}}
@section('title', $post->title)

@section('content')
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-6">
            <a href="{{ $post->type === 'NEWS' ? route('news') : route('knowledge') }}" 
               class="text-main-color hover:text-main-darker font-medium transition duration-200">
                &larr; Kembali ke Daftar {{ $post->type === 'NEWS' ? 'Berita' : 'Knowledge Base' }}
            </a>
        </div>
        
        <header class="pb-6 border-b border-gray-200">
            <span class="text-sm font-semibold uppercase text-main-color tracking-wider">
                {{ $post->type }} | {{ $post->category ?? 'Umum' }}
            </span>
            <h1 class="mt-2 text-4xl font-extrabold text-gray-900 leading-tight">
                {{ $post->title }}
            </h1>
            <p class="mt-3 text-gray-500 text-sm">
                Dipublikasikan pada: {{ $post->published_at->format('d F Y') }} oleh **{{ $post->author->name ?? 'Admin' }}**
            </p>
        </header>

        <article class="prose max-w-none mt-10">
            {{-- Gunakan {!! $post->content !!} untuk menampilkan konten HTML dari database --}}
            {!! $post->content !!} 
        </article>
        
        <footer class="mt-12 pt-6 border-t border-gray-200 flex justify-between items-center">
            <a href="{{ $post->type === 'NEWS' ? route('news') : route('knowledge') }}" 
               class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition duration-200">
                Lihat Artikel Lainnya
            </a>
            
            <button onclick="copyToClipboard('{{ route('post.show', $post->slug) }}')" 
                    class="px-4 py-2 bg-main-color text-white rounded-lg hover:bg-main-darker transition duration-200 flex items-center space-x-2 no-copy">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v4a1 1 0 001 1h4a1 1 0 001-1V7m0 0V4a2 2 0 00-2-2H9a2 2 0 00-2 2v3m0 0H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2h-3"></path></svg>
                <span>Bagikan Link</span>
            </button>
        </footer>

    </div>
</div>

<script>
    // Fungsi khusus untuk menyalin link post ini
    function copyToClipboard(url) {
        const tempInput = document.createElement('textarea');
        tempInput.value = url;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        
        // Panggil notifikasi dari layout utama
        showCopyNotification();
    }
</script>
@endsection