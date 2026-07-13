<?php

namespace App\Http\Controllers;

use App\Models\Post; // Import model Post
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Menampilkan daftar Peraturan (KNOWLEDGE BASE).
     */
    public function indexKnowledge(Request $request)
    {
        // Ambil data dari database yang tipenya 'KNOWLEDGE'
        // dan lakukan paginasi (misal 10 per halaman)
        $knowledgeItems = Post::where('type', 'KNOWLEDGE')
                              ->where('is_published', true) // Hanya yang sudah dipublikasikan
                              ->orderBy('created_at', 'desc')
                              ->paginate(10);
        
        // Data dummy untuk filter (akan menjadi dinamis di masa depan)
        $regulationTypes = [
            'Undang-Undang', 
            'Peraturan Pemerintah', 
            'Peraturan Menteri Keuangan', 
            'Surat Edaran DJP'
        ];

        return view('knowledge.index', compact('knowledgeItems', 'regulationTypes'));
    }

    /**
     * Menampilkan daftar Berita (NEWS).
     */
    public function indexNews(Request $request)
    {
        // Implementasi NEWS akan mirip dengan Knowledge, namun filternya berbeda
        $newsItems = Post::where('type', 'NEWS')
                         ->where('is_published', true)
                         ->orderBy('created_at', 'desc')
                         ->paginate(10);
                         
        return view('news.index', compact('newsItems'));
    }

    /**
     * Menampilkan detail dari suatu postingan (Berita/Peraturan).
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        
        return view('knowledge.show', compact('post'));
    }
}