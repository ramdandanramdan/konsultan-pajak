<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use Illuminate\Http\Request;

class PageSectionController extends Controller
{
    private $pages = [
        'home' => [
            'label' => 'Beranda (Home)',
            'sections' => [
                'hero_badge' => ['label' => 'Hero Badge Text', 'type' => 'text'],
                'hero_title_1' => ['label' => 'Hero Judul Baris 1', 'type' => 'text'],
                'hero_title_2' => ['label' => 'Hero Judul Baris 2 (Highlight)', 'type' => 'text'],
                'hero_description' => ['label' => 'Hero Deskripsi', 'type' => 'textarea'],
                'service_standar_title' => ['label' => 'Standar Layanan Judul', 'type' => 'text'],
                'standar_1_title' => ['label' => 'Standar 1 Judul', 'type' => 'text'],
                'standar_1_desc' => ['label' => 'Standar 1 Deskripsi', 'type' => 'textarea'],
                'standar_2_title' => ['label' => 'Standar 2 Judul', 'type' => 'text'],
                'standar_2_desc' => ['label' => 'Standar 2 Deskripsi', 'type' => 'textarea'],
                'standar_3_title' => ['label' => 'Standar 3 Judul', 'type' => 'text'],
                'standar_3_desc' => ['label' => 'Standar 3 Deskripsi', 'type' => 'textarea'],
                'pilar_title' => ['label' => 'Tiga Pilar Judul', 'type' => 'text'],
                'pilar_1_title' => ['label' => 'Pilar 1 Judul', 'type' => 'text'],
                'pilar_1_desc' => ['label' => 'Pilar 1 Deskripsi', 'type' => 'textarea'],
                'pilar_2_title' => ['label' => 'Pilar 2 Judul', 'type' => 'text'],
                'pilar_2_desc' => ['label' => 'Pilar 2 Deskripsi', 'type' => 'textarea'],
                'pilar_3_title' => ['label' => 'Pilar 3 Judul', 'type' => 'text'],
                'pilar_3_desc' => ['label' => 'Pilar 3 Deskripsi', 'type' => 'textarea'],
                'news_section_title' => ['label' => 'Berita Section Judul', 'type' => 'text'],
                'news_section_subtitle' => ['label' => 'Berita Section Sub Judul', 'type' => 'textarea'],
                'knowledge_section_title' => ['label' => 'Knowledge Section Judul', 'type' => 'text'],
                'knowledge_section_subtitle' => ['label' => 'Knowledge Section Sub Judul', 'type' => 'textarea'],
                'advantage_title' => ['label' => 'Keunggulan Judul', 'type' => 'text'],
                'advantage_1_title' => ['label' => 'Keunggulan 1 Judul', 'type' => 'text'],
                'advantage_1_desc' => ['label' => 'Keunggulan 1 Deskripsi', 'type' => 'textarea'],
                'advantage_2_title' => ['label' => 'Keunggulan 2 Judul', 'type' => 'text'],
                'advantage_2_desc' => ['label' => 'Keunggulan 2 Deskripsi', 'type' => 'textarea'],
                'advantage_3_title' => ['label' => 'Keunggulan 3 Judul', 'type' => 'text'],
                'advantage_3_desc' => ['label' => 'Keunggulan 3 Deskripsi', 'type' => 'textarea'],
            ],
        ],
        'profile' => [
            'label' => 'Profil Perusahaan',
            'sections' => [
                'hero_title' => ['label' => 'Hero Judul', 'type' => 'text'],
                'hero_subtitle' => ['label' => 'Hero Sub Judul', 'type' => 'textarea'],
                'history_badge' => ['label' => 'Sejarah Badge', 'type' => 'text'],
                'history_title' => ['label' => 'Sejarah Judul', 'type' => 'text'],
                'history_description' => ['label' => 'Sejarah Deskripsi', 'type' => 'textarea'],
                'history_quote' => ['label' => 'Sejarah Kutipan', 'type' => 'text'],
                'history_year_label' => ['label' => 'Label Tahun Didirikan', 'type' => 'text'],
                'vision_title' => ['label' => 'Visi Judul', 'type' => 'text'],
                'vision_content' => ['label' => 'Visi Isi', 'type' => 'textarea'],
                'mission_title' => ['label' => 'Misi Judul', 'type' => 'text'],
                'mission_1' => ['label' => 'Misi Poin 1', 'type' => 'textarea'],
                'mission_2' => ['label' => 'Misi Poin 2', 'type' => 'textarea'],
                'mission_3' => ['label' => 'Misi Poin 3', 'type' => 'textarea'],
                'values_title' => ['label' => 'Core Values Judul', 'type' => 'text'],
                'value_1_title' => ['label' => 'Value 1 Judul', 'type' => 'text'],
                'value_1_desc' => ['label' => 'Value 1 Deskripsi', 'type' => 'textarea'],
                'value_2_title' => ['label' => 'Value 2 Judul', 'type' => 'text'],
                'value_2_desc' => ['label' => 'Value 2 Deskripsi', 'type' => 'textarea'],
                'value_3_title' => ['label' => 'Value 3 Judul', 'type' => 'text'],
                'value_3_desc' => ['label' => 'Value 3 Deskripsi', 'type' => 'textarea'],
                'team_title' => ['label' => 'Tim Judul', 'type' => 'text'],
            ],
        ],
        'services' => [
            'label' => 'Layanan Kami',
            'sections' => [
                'hero_title' => ['label' => 'Hero Judul', 'type' => 'text'],
                'hero_subtitle' => ['label' => 'Hero Sub Judul', 'type' => 'textarea'],
                'method_badge' => ['label' => 'Metodologi Badge', 'type' => 'text'],
                'method_title' => ['label' => 'Metodologi Judul', 'type' => 'text'],
                'method_description' => ['label' => 'Metodologi Deskripsi', 'type' => 'textarea'],
                'method_quote' => ['label' => 'Metodologi Kutipan', 'type' => 'text'],
                'method_1_title' => ['label' => 'Analisis 1 Judul', 'type' => 'text'],
                'method_1_desc' => ['label' => 'Analisis 1 Deskripsi', 'type' => 'textarea'],
                'method_2_title' => ['label' => 'Analisis 2 Judul', 'type' => 'text'],
                'method_2_desc' => ['label' => 'Analisis 2 Deskripsi', 'type' => 'textarea'],
                'method_3_title' => ['label' => 'Analisis 3 Judul', 'type' => 'text'],
                'method_3_desc' => ['label' => 'Analisis 3 Deskripsi', 'type' => 'textarea'],
                'pillar_title' => ['label' => 'Tiga Pilar Judul', 'type' => 'text'],
                'pillar_1_name' => ['label' => 'Pilar 1 Nama', 'type' => 'text'],
                'pillar_1_problem' => ['label' => 'Pilar 1 Fokus Masalah', 'type' => 'text'],
                'pillar_1_items' => ['label' => 'Pilar 1 Item (satu per baris)', 'type' => 'textarea'],
                'pillar_2_name' => ['label' => 'Pilar 2 Nama', 'type' => 'text'],
                'pillar_2_problem' => ['label' => 'Pilar 2 Fokus Masalah', 'type' => 'text'],
                'pillar_2_items' => ['label' => 'Pilar 2 Item (satu per baris)', 'type' => 'textarea'],
                'pillar_3_name' => ['label' => 'Pilar 3 Nama', 'type' => 'text'],
                'pillar_3_problem' => ['label' => 'Pilar 3 Fokus Masalah', 'type' => 'text'],
                'pillar_3_items' => ['label' => 'Pilar 3 Item (satu per baris)', 'type' => 'textarea'],
                'tp_badge' => ['label' => 'Transfer Pricing Badge', 'type' => 'text'],
                'tp_title' => ['label' => 'Transfer Pricing Judul', 'type' => 'text'],
                'tp_description' => ['label' => 'Transfer Pricing Deskripsi', 'type' => 'textarea'],
                'tp_items' => ['label' => 'Transfer Pricing Items (satu per baris)', 'type' => 'textarea'],
                'workshop_badge' => ['label' => 'Workshop Badge', 'type' => 'text'],
                'workshop_title' => ['label' => 'Workshop Judul', 'type' => 'text'],
                'workshop_description' => ['label' => 'Workshop Deskripsi', 'type' => 'textarea'],
                'workshop_items' => ['label' => 'Workshop Items (satu per baris)', 'type' => 'textarea'],
                'free_tools_title' => ['label' => 'Tools Gratis Judul', 'type' => 'text'],
                'free_tools_subtitle' => ['label' => 'Tools Gratis Sub Judul', 'type' => 'textarea'],
            ],
        ],
        'contact' => [
            'label' => 'Hubungi Kami',
            'sections' => [
                'hero_title' => ['label' => 'Hero Judul', 'type' => 'text'],
                'hero_subtitle' => ['label' => 'Hero Sub Judul', 'type' => 'textarea'],
                'scarcity_text' => ['label' => 'Scarcity Alert Text', 'type' => 'text'],
                'whatsapp_title' => ['label' => 'WhatsApp Judul', 'type' => 'text'],
                'whatsapp_note' => ['label' => 'WhatsApp Catatan', 'type' => 'text'],
            ],
        ],
    ];

    public function index()
    {
        $current = request('page', 'home');
        $sections = PageSection::getAll($current);
        $pageConfig = $this->pages[$current] ?? $this->pages['home'];

        return view('admin.page-sections.index', compact('sections', 'current', 'pageConfig'));
    }

    public function update(Request $request)
    {
        $page = $request->input('page', 'home');
        $validated = $request->validate([
            'sections' => 'required|array',
        ]);

        foreach ($validated['sections'] as $key => $value) {
            PageSection::set($page, $key, $value);
        }

        return redirect()->route('admin.page-sections.index', ['page' => $page])->with('success', 'Konten halaman berhasil diperbarui!');
    }
}
