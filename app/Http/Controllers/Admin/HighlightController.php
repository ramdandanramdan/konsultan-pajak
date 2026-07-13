<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeHighlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index()
    {
        $highlights = HomeHighlight::orderBy('sort_order')->get();
        return view('admin.highlights.index', compact('highlights'));
    }

    public function create()
    {
        return view('admin.highlights.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'value' => 'required|string|max:50',
            'label' => 'required|string|max:255',
            'icon' => 'required|in:clock,users,check,document',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        HomeHighlight::create($validated);

        return redirect()->route('admin.highlights.index')->with('success', 'Highlight berhasil ditambahkan!');
    }

    public function edit(HomeHighlight $highlight)
    {
        return view('admin.highlights.edit', compact('highlight'));
    }

    public function update(Request $request, HomeHighlight $highlight)
    {
        $validated = $request->validate([
            'value' => 'required|string|max:50',
            'label' => 'required|string|max:255',
            'icon' => 'required|in:clock,users,check,document',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $highlight->update($validated);

        return redirect()->route('admin.highlights.index')->with('success', 'Highlight berhasil diperbarui!');
    }

    public function destroy(HomeHighlight $highlight)
    {
        $highlight->delete();
        return redirect()->route('admin.highlights.index')->with('success', 'Highlight berhasil dihapus!');
    }
}
