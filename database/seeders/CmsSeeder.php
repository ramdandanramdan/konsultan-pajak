<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\TimelineItem;
use App\Models\HomeHighlight;
use App\Models\PageSection;

class CmsSeeder extends Seeder
{
    public function run(): void
    {
        // ===== SETTINGS =====
        $settings = [
            'site_name' => 'KONSULTAN PAJAK',
            'site_tagline' => 'Solusi Pajak Terpercaya',
            'footer_description' => 'Solusi pajak terpercaya untuk bisnis Anda. Kami membantu menciptakan kepatuhan & efisiensi finansial.',
            'contact_address' => 'Jl. Prof. Dr. Satrio No. 12, Kuningan, Setiabudi, Jakarta Selatan, 12940',
            'contact_email' => 'info@konsultanpajak.com',
            'contact_phone' => '+62 812-3456-7890',
            'whatsapp_number' => '6285890750820',
            'whatsapp_display' => '0858-9075-0820',
            'google_maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.275510659779!2d106.8228183147169!3d-6.223053895493054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4e99d8689%3A0xc3f6d71b8d6f5f9e!2sKuningan%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1634024479577!5m2!1sen!2sid',
            'social_facebook' => '#',
            'social_twitter' => '#',
            'social_instagram' => '#',
            'social_linkedin' => '#',
        ];
        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }

        // ===== TEAM MEMBERS =====
        $team = [
            ['name' => 'Ms. Audrey', 'position' => 'Managing Partner', 'specialty' => 'Ahli PPh Badan & Sengketa', 'photo' => 'img/ceo1.jpg', 'color' => 'main', 'sort_order' => 1],
            ['name' => 'Ms. Jessica', 'position' => 'Partner Audit', 'specialty' => 'Spesialis Keberatan & Banding', 'photo' => 'img/ceo2.jpg', 'color' => 'yellow', 'sort_order' => 2],
            ['name' => 'Ms. Felicia', 'position' => 'Tech Lead', 'specialty' => 'Konsultasi E-Faktur & IT', 'photo' => 'img/ceo3.webp', 'color' => 'main', 'sort_order' => 3],
            ['name' => 'Mr. Anwar', 'position' => 'Lead PPN', 'specialty' => 'Perpajakan Internasional', 'photo' => 'img/ceo4.webp', 'color' => 'yellow', 'sort_order' => 4],
        ];
        foreach ($team as $t) {
            TeamMember::create($t);
        }

        // ===== TIMELINE =====
        $timeline = [
            ['year' => 'Tahun 2015', 'title' => 'Pendirian Perusahaan', 'description' => 'Didirikan dengan fokus awal pada kepatuhan PPh Badan dan pelaporan SPT tahunan untuk sektor UMKM.', 'color' => 'main', 'sort_order' => 1],
            ['year' => 'Tahun 2018', 'title' => 'Spesialisasi Audit & Sengketa', 'description' => 'Tim diperkuat dengan ahli bersertifikasi untuk menangani pemeriksaan, keberatan, dan sengketa pajak yang kompleks.', 'color' => 'yellow', 'sort_order' => 2],
            ['year' => 'Tahun 2022', 'title' => 'Peluncuran Digital Portal', 'description' => 'Mengintegrasikan layanan dan knowledge base secara online untuk memberikan akses cepat dan efisien kepada klien.', 'color' => 'main', 'sort_order' => 3],
            ['year' => 'Tahun 2025', 'title' => 'Mencapai 500+ Klien', 'description' => 'Merayakan pencapaian 500+ klien aktif dan memperluas jaringan konsultasi ke skala nasional.', 'color' => 'yellow', 'sort_order' => 4],
        ];
        foreach ($timeline as $t) {
            TimelineItem::create($t);
        }

        // ===== HOME HIGHLIGHTS =====
        $highlights = [
            ['value' => '10+', 'label' => 'Tahun Pengalaman', 'icon' => 'clock', 'sort_order' => 1],
            ['value' => '500+', 'label' => 'Klien Terlayani', 'icon' => 'users', 'sort_order' => 2],
            ['value' => '99%', 'label' => 'Tingkat Kepatuhan', 'icon' => 'check', 'sort_order' => 3],
            ['value' => '100%', 'label' => 'Sertifikasi Legal', 'icon' => 'document', 'sort_order' => 4],
        ];
        foreach ($highlights as $h) {
            HomeHighlight::create($h);
        }

        // ===== PAGE SECTIONS: HOME =====
        $home = [
            'hero_badge' => 'Solusi Pajak Terdepan untuk Bisnis',
            'hero_title_1' => 'Mengubah Kepatuhan',
            'hero_title_2' => 'Menjadi Keunggulan.',
            'hero_description' => 'Fokus pada bisnis Anda, biarkan kami yang mengurus kerumitan perpajakan. Kami menjamin kepastian hukum dan efisiensi finansial.',
            'service_standar_title' => 'Standar Layanan yang Kami Jamin',
            'standar_1_title' => 'Integritas Penuh dan Kepatuhan',
            'standar_1_desc' => 'Kami menjamin proses yang etis, transparan, dan sesuai hukum yang berlaku untuk kepatuhan mutlak bisnis Anda.',
            'standar_2_title' => 'Respon dan Layanan Cepat',
            'standar_2_desc' => 'Respons terhadap regulasi dan pertanyaan klien diprioritaskan dalam 1x24 jam kerja.',
            'standar_3_title' => 'Jaminan Kerahasiaan Data',
            'standar_3_desc' => 'Semua informasi finansial dan perpajakan klien dijaga kerahasiaannya dengan sistem keamanan terbaik.',
            'pilar_title' => 'Fokus Pada Tiga Pilar Utama',
            'pilar_1_title' => 'Kepatuhan & Pelaporan Akurat',
            'pilar_1_desc' => 'Jaminan pelaporan SPT yang tepat waktu dan 100% akurat sesuai regulasi DJP terbaru.',
            'pilar_2_title' => 'Perencanaan Pajak Strategis',
            'pilar_2_desc' => 'Konsultasi proaktif untuk mengoptimalkan beban pajak dan meningkatkan efisiensi finansial bisnis.',
            'pilar_3_title' => 'Pendampingan Hukum & Audit',
            'pilar_3_desc' => 'Representasi dan pendampingan penuh saat pemeriksaan, keberatan, banding, hingga sengketa pajak.',
            'news_section_title' => 'Regulasi Terbaru & Berita',
            'news_section_subtitle' => 'Informasi perpajakan yang paling aktual, terkurasi, dan berdampak bagi bisnis Anda.',
            'knowledge_section_title' => 'Akses Knowledge Base (Edukasi Pajak)',
            'knowledge_section_subtitle' => 'Jelajahi panduan, kalkulator, dan studi kasus yang disusun oleh ahli.',
            'advantage_title' => 'Keunggulan Portal Kami Dibanding Yang Lain',
            'advantage_1_title' => 'One-Stop Solution Pajak',
            'advantage_1_desc' => 'Menggabungkan informasi regulasi, edukasi, dan layanan konsultasi profesional dalam satu platform.',
            'advantage_2_title' => 'Akses Eksklusif Tools Pajak',
            'advantage_2_desc' => 'Dilengkapi kalkulator PPh/PPN interaktif yang terintegrasi langsung dan up-to-date.',
            'advantage_3_title' => 'Jaringan Konsultan Tersertifikat',
            'advantage_3_desc' => 'Hanya didukung oleh konsultan pajak berlisensi dengan pengalaman lebih dari 10 tahun.',
        ];
        foreach ($home as $key => $value) {
            PageSection::set('home', $key, $value);
        }

        // ===== PAGE SECTIONS: PROFILE =====
        $profile = [
            'hero_title' => 'Profil Perusahaan Kami',
            'hero_subtitle' => 'Mengenal lebih dekat visi, misi, nilai inti, dan tim profesional yang menggerakkan solusi perpajakan terdepan.',
            'history_badge' => 'Landasan Etika dan Profesionalisme',
            'history_title' => 'Sejarah & Filosofi Kami',
            'history_description' => 'Kami adalah konsultan yang lahir dari kebutuhan akan kepastian hukum dan efisiensi finansial di tengah dinamika regulasi perpajakan Indonesia. Sejak berdiri, kami berpegang pada filosofi "Kepatuhan adalah Strategi Terbaik".',
            'history_quote' => 'Membangun kepercayaan klien melalui integritas dan solusi yang teruji.',
            'history_year_label' => 'Didirikan 2015',
            'vision_title' => 'Visi Perusahaan',
            'vision_content' => 'Menjadi konsultan pajak terdepan di Indonesia yang memberikan solusi pajak inovatif, etis, dan berkelanjutan untuk menjamin kepatuhan dan kesuksesan jangka panjang klien.',
            'mission_title' => 'Misi Kami',
            'mission_1' => 'Proaktif & Personal: Layanan konsultasi yang mendalam dan tailor-made.',
            'mission_2' => 'Kepatuhan Maksimal: Memastikan pelaporan 100% akurat sesuai regulasi DJP terbaru.',
            'mission_3' => 'Teknologi & Kompetensi: Pengembangan tim dan integrasi teknologi perpajakan terkini.',
            'values_title' => 'Nilai Inti (Core Values)',
            'value_1_title' => 'Integritas',
            'value_1_desc' => 'Bertindak jujur dan transparan dalam setiap konsultasi dan pelaporan, menjaga kepercayaan klien sebagai aset utama.',
            'value_2_title' => 'Profesionalisme',
            'value_2_desc' => 'Menyediakan layanan dengan standar tertinggi, didukung oleh keahlian dan sertifikasi pajak terkini.',
            'value_3_title' => 'Inovasi',
            'value_3_desc' => 'Menerapkan teknologi dan strategi terbaru untuk perencanaan pajak yang efisien dan meminimalkan risiko.',
            'team_title' => 'Tim Konsultan Kami',
        ];
        foreach ($profile as $key => $value) {
            PageSection::set('profile', $key, $value);
        }

        // ===== PAGE SECTIONS: SERVICES =====
        $services = [
            'hero_title' => 'Solusi Perpajakan Komprehensif',
            'hero_subtitle' => 'Layanan kami dirancang untuk lebih dari sekadar kepatuhan. Kami membantu Anda merencanakan, mengoptimalkan, dan melindungi masa depan finansial Anda.',
            'method_badge' => 'Keunggulan Sistem Kami',
            'method_title' => 'Mengapa Metodologi Kami Berbeda?',
            'method_description' => 'Kami tidak hanya mengisi formulir. Kami mengintegrasikan kepatuhan (compliance) dengan perencanaan strategis (planning) menggunakan sistem internal yang canggih. Ini adalah pendekatan holistik yang meminimalkan risiko dan memaksimalkan efisiensi pajak Anda.',
            'method_quote' => 'Kami mengubah beban kepatuhan menjadi keunggulan kompetitif bagi bisnis Anda.',
            'method_1_title' => 'Analisis Berlapis (Multi-Layer Review)',
            'method_1_desc' => 'Setiap transaksi ditinjau oleh tim spesialis yang berbeda—kepatuhan, audit, dan legal—untuk memitigasi celah risiko dari berbagai sudut pandang.',
            'method_2_title' => 'Solusi Berbasis Data (Data-Driven Insight)',
            'method_2_desc' => 'Keputusan perencanaan pajak didukung oleh data finansial historis dan proyeksi masa depan, memastikan strategi Anda akurat dan optimal.',
            'method_3_title' => 'Transparansi Proses (Clear Accountability)',
            'method_3_desc' => 'Klien memiliki akses real-time ke status pekerjaan, jadwal pelaporan, dan dokumen, memastikan tidak ada kejutan di kemudian hari.',
            'pillar_title' => 'Tiga Pilar Utama Layanan Kami',
            'pillar_1_name' => 'Compliance Shield',
            'pillar_1_problem' => 'Menghindari denda, sanksi, dan risiko audit yang tidak perlu.',
            'pillar_1_items' => "Bantuan Penyusunan PPh Badan/Pribadi.\nPelaporan SPT Masa & Tahunan Akurat.\nVerifikasi Transaksi dan Bukti Potong.",
            'pillar_2_name' => 'Financial Optimization',
            'pillar_2_problem' => 'Pembayaran pajak yang terlalu tinggi dan perencanaan yang tidak efisien.',
            'pillar_2_items' => "Perencanaan Pajak Jangka Pendek & Panjang.\nReview Struktur Bisnis untuk Efisiensi.\nAnalisis Dampak Pajak Transaksi Besar.",
            'pillar_3_name' => 'Dispute Resolution',
            'pillar_3_problem' => 'Klien yang sudah menerima surat pemeriksaan atau keberatan dari otoritas.',
            'pillar_3_items' => "Pendampingan Audit (Pemeriksaan) Pajak.\nPengajuan Keberatan dan Banding Resmi.\nNegosiasi dan Restitusi Kelebihan Bayar.",
            'tp_badge' => 'Layanan Khusus Korporat',
            'tp_title' => 'Pajak Internasional & Transfer Pricing (TP)',
            'tp_description' => 'Bagi perusahaan dengan transaksi afiliasi lintas negara, kepatuhan Transfer Pricing adalah kritis. Kami memastikan dokumentasi TP Anda sesuai dengan standar OECD dan regulasi domestik.',
            'tp_items' => "Penyusunan Dokumen Master File & Local File.\nAnalisis Kesebandingan (Benchmark Study).\nKonsultasi Tax Treaty dan Permanent Establishment.",
            'workshop_badge' => 'Penguatan Internal',
            'workshop_title' => 'Edukasi & Workshop Pajak In-House',
            'workshop_description' => 'Investasi terbaik adalah pada tim internal Anda. Kami menyediakan program pelatihan khusus, disesuaikan dengan industri dan masalah pajak spesifik perusahaan Anda.',
            'workshop_items' => "Pelatihan Kepatuhan PPN dan PPh terbaru.\nSimulasi Audit dan Pemeriksaan.\nWorkshop Pembuatan Laporan Keuangan Fiskal.",
            'free_tools_title' => 'Pengetahuan dan Alat Eksklusif, Gratis untuk Anda',
            'free_tools_subtitle' => 'Jangan Ambil Risiko, Dapatkan Pengetahuan. Kami percaya edukasi adalah garis pertahanan pertama Anda. Akses nilai tambah kami di bawah ini.',
        ];
        foreach ($services as $key => $value) {
            PageSection::set('services', $key, $value);
        }

        // ===== PAGE SECTIONS: CONTACT =====
        $contact = [
            'hero_title' => 'Sistem Konsultasi Cepat (3 Langkah)',
            'hero_subtitle' => 'Hubungi tim kami di Jakarta Selatan sekarang. Kami menjamin kerahasiaan dan respons profesional.',
            'scarcity_text' => 'PENTING: Amankan Slot Konsultasi GRATIS Anda SEKARANG!',
            'whatsapp_title' => 'Respon Instan (Prioritas)',
            'whatsapp_note' => 'Gunakan WhatsApp untuk balasan tercepat (5 Menit).',
        ];
        foreach ($contact as $key => $value) {
            PageSection::set('contact', $key, $value);
        }
    }
}
