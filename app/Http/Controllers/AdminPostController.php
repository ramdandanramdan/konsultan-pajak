<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule; // Untuk validasi enum

class AdminPostController extends Controller
{
    /**
     * Tampilkan daftar konten (Knowledge atau News/Opini).
     */
    public function index(Request $request)
    {
        $type = strtoupper($request->query('type', 'knowledge'));
        
        $posts = Post::where('type', $type)
                     ->orderBy('created_at', 'desc')
                     ->paginate(15);

        return view('admin.posts.index', compact('posts', 'type'));
    }

    /**
     * Tampilkan formulir untuk membuat konten baru.
     */
    public function create(Request $request)
    {
        $type = strtoupper($request->query('type', 'knowledge'));
        return view('admin.posts.create', compact('type'));
    }

    /**
     * Simpan konten baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => ['required', Rule::in(['NEWS', 'KNOWLEDGE', 'OPINION'])],
            'content' => 'required|string',
            'regulation_number' => 'nullable|string|max:255',
            'regulation_type' => 'nullable|string|max:255',
            'regulation_location' => 'nullable|string|max:255',
            'is_published' => 'boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        $validated['author'] = auth()->user()->name;
        $validated['is_published'] = $request->has('is_published');
        
        Post::create($validated);

        return redirect()->route('admin.posts.index', ['type' => strtolower($validated['type'])])
                         ->with('success', 'Konten berhasil dibuat!');
    }

    // Metode show, edit, update, dan destroy akan diimplementasikan serupa.
    // ... (metode lainnya diabaikan untuk mempersingkat kode)

    /**
     * Tampilkan formulir untuk mengedit konten yang ada.
     */
    public function edit(Post $post)
    {
        $type = strtolower($post->type);
        return view('admin.posts.edit', compact('post', 'type'));
    }

    /**
     * Update konten di database.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'regulation_number' => 'nullable|string|max:255',
            'regulation_type' => 'nullable|string|max:255',
            'regulation_location' => 'nullable|string|max:255',
            'is_published' => 'boolean',
        ]);
        
        // Slug hanya diupdate jika judul berubah
        if ($post->title !== $validated['title']) {
             $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        }

        $validated['is_published'] = $request->has('is_published');
        
        $post->update($validated);

        return redirect()->route('admin.posts.index', ['type' => strtolower($post->type)])
                         ->with('success', 'Konten berhasil diperbarui!');
    }

    /**
     * Hapus konten dari database.
     */
    public function destroy(Post $post)
    {
        $type = strtolower($post->type);
        $post->delete();

        return redirect()->route('admin.posts.index', ['type' => $type])
                         ->with('success', 'Konten berhasil dihapus!');
    }
}