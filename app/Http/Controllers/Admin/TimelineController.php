<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TimelineItem;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        $timelineItems = TimelineItem::orderBy('sort_order')->get();
        return view('admin.timeline.index', compact('timelineItems'));
    }

    public function create()
    {
        return view('admin.timeline.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'color' => 'required|in:main,yellow',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        TimelineItem::create($validated);

        return redirect()->route('admin.timeline.index')->with('success', 'Timeline berhasil ditambahkan!');
    }

    public function edit(TimelineItem $timeline)
    {
        return view('admin.timeline.edit', compact('timeline'));
    }

    public function update(Request $request, TimelineItem $timeline)
    {
        $validated = $request->validate([
            'year' => 'required|string|max:50',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'color' => 'required|in:main,yellow',
            'sort_order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $timeline->update($validated);

        return redirect()->route('admin.timeline.index')->with('success', 'Timeline berhasil diperbarui!');
    }

    public function destroy(TimelineItem $timeline)
    {
        $timeline->delete();
        return redirect()->route('admin.timeline.index')->with('success', 'Timeline berhasil dihapus!');
    }
}
