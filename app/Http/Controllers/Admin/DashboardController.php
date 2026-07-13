<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\TimelineItem;
use App\Models\HomeHighlight;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::where('is_published', true)->count(),
            'knowledge_count' => Post::where('type', 'KNOWLEDGE')->count(),
            'news_count' => Post::where('type', 'NEWS')->count() + Post::where('type', 'OPINION')->count(),
            'total_team' => TeamMember::count(),
            'total_timeline' => TimelineItem::count(),
            'total_highlights' => HomeHighlight::count(),
            'total_users' => \App\Models\User::count(),
            'recent_posts' => Post::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
