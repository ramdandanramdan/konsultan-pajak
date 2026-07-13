<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\TimelineItem;
use App\Models\HomeHighlight;
use App\Models\PageSection;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $twelveMonthsAgo = Carbon::now()->subMonths(11)->startOfMonth();

        $stats = [
            'total_posts' => Post::count(),
            'published_posts' => Post::where('is_published', true)->count(),
            'draft_posts' => Post::where('is_published', false)->count(),
            'knowledge_count' => Post::where('type', 'KNOWLEDGE')->count(),
            'news_count' => Post::where('type', 'NEWS')->count() + Post::where('type', 'OPINION')->count(),
            'total_team' => TeamMember::count(),
            'total_timeline' => TimelineItem::count(),
            'total_highlights' => HomeHighlight::count(),
            'total_sections' => PageSection::count(),
            'total_users' => \App\Models\User::count(),
            'recent_posts' => Post::latest()->take(5)->get(),

            'posts_by_month' => Post::where('created_at', '>=', $twelveMonthsAgo)
                ->selectRaw('MONTH(created_at) as month, YEAR(created_at) as year, COUNT(*) as total')
                ->groupBy('year', 'month')
                ->orderBy('year', 'asc')
                ->orderBy('month', 'asc')
                ->get(),

            'posts_by_type' => Post::selectRaw('type, COUNT(*) as total')
                ->groupBy('type')
                ->get(),

            'team_by_position' => TeamMember::selectRaw('position, COUNT(*) as total')
                ->groupBy('position')
                ->get(),

            'sections_by_page' => PageSection::selectRaw('page_slug, COUNT(*) as total')
                ->groupBy('page_slug')
                ->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
