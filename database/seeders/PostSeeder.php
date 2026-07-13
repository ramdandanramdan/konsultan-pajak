<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            // === NEWS (5) ===
            [
                'type' => 'NEWS',
                'title' => 'Aturan Baru PPN Digital: Pemerintah Perluas Objek Pajak Ekonomi Digital 2026',
                'slug' => 'aturan-baru-ppn-digital-2026',
                'content' => '<p>Pemerintah Indonesia resmi menerbitkan regulasi baru terkait Pajak Pertambahan Nilai (PPN) untuk transaksi ekonomi digital yang berlaku mulai Januari 2026. Peraturan ini memperluas objek PPN terhadap layanan digital asing yang selama ini belum terkena pajak di Indonesia.</p>

<h3>Isi Utama Regulasi</h3>
<ul>
<li>Semua penyedia layanan digital asing wajib terdaftar sebagai Pengusaha Kena Pajak (PKP) di Indonesia</li>
<li>Tarif PPN digital ditetapkan sebesar 11% dari nilai transaksi</li>
<li>Mekanisme self-assessment diterapkan untuk pelaporan PPN digital</li>
<li>Batas pendapatan kena pajak digital diturunkan dari Rp600 juta menjadi Rp500 juta per tahun</li>
</ul>

<h3>Dampak untuk Bisnis</h3>
<p>Bagi perusahaan yang menggunakan layanan digital asing seperti cloud computing, streaming, dan marketplace internasional, terdapat tambahan biaya PPN yang perlu diperhitungkan dalam anggaran operasional. Konsultan pajak merekomendasikan untuk melakukan review kontrak dengan vendor digital asing.</p>

<p>Pengusaha diimbau untuk segera menyesuaikan sistem akuntansi guna mengakomodasi perubahan ini agar terhindar dari sanksi pajak.</p>',
                'author' => 'Admin',
                'is_published' => true,
                'created_at' => '2026-01-15 09:00:00',
            ],
            [
                'type' => 'NEWS',
                'title' => 'DJP Luncurkan Sistem e-Faktur 4.0: Fitur Barcode & Integrasi AI',
                'slug' => 'djp-luncurkan-e-faktur-4-0',
                'content' => '<p>Direktorat Jenderal Pajak (DJP) meluncurkan pembaruan besar pada sistem e-Faktur versi 4.0 yang mulai berlaku efektif Maret 2026. Pembaruan ini membawa perubahan signifikan dalam cara pengusaha melaporkan faktur pajak.</p>

<h3>Fitur Utama e-Faktur 4.0</h3>
<ul>
<li><strong>Barcode Verifikasi:</strong> Setiap faktur pajak kini memiliki barcode unik yang bisa diverifikasi secara real-time oleh pihak ketiga</li>
<li><strong>Integrasi AI Detection:</strong> Sistem kecerdasan buatan mendeteksi anomali dan potensi penyalahgunaan faktur pajak secara otomatis</li>
<li><strong>Dashboard Analytics:</strong> Pengusaha dapat melihat tren penggunaan faktur pajak dalam dashboard visual</li>
<li><strong>API Publik:</strong> Tersedia API untuk integrasi dengan sistem ERP dan accounting perusahaan</li>
</ul>

<h3>Jadwal Implementasi</h3>
<p>Maret 2026: Masa transisi (kedua sistem berjalan paralel)<br>September 2026: e-Faktur 4.0 menjadi satu-satunya sistem yang berlaku</p>

<p>Pengusaha diwajibkan untuk melakukan update sistem dan training tim akuntansi sebelum batas transisi berakhir.</p>',
                'author' => 'Admin',
                'is_published' => true,
                'created_at' => '2026-02-20 10:30:00',
            ],
            [
                'type' => 'NEWS',
                'title' => 'Insentif Pajak UMKM Diperpanjang hingga 2027: Tarif PPh Final 0,5%',
                'slug' => 'insentif-pajak-umkm-diperpanjang-2027',
                'content' => '<p>Pemerintah memutuskan untuk memperpanjang program insentif pajak bagi Usaha Mikro, Kecil, dan Menengah (UMKM) hingga akhir 2027. Keputusan ini tertuang dalam Peraturan Pemerintah (PP) yang diterbitkan Februari 2026.</p>

<h3>Detail Insentif</h3>
<ul>
<li>Tarif PPh Final diturunkan dari 0,5% menjadi 0,5% dari omzet (tidak berubah dari tahun sebelumnya)</li>
<li>Batas omzet yang berhak mendapat insentif dinaikkan dari Rp4,8 miliar menjadi Rp5 miliar per tahun</li>
<li>Perpanjangan berlaku untuk Tahun Pajak 2026 dan 2027</li>
<li>UMKM yang belum terdaftar dapat mendaftar secara online melalui DJP Online</li>
</ul>

<h3>Syarat dan Ketentuan</h3>
<p>UMKM harus memenuhi kriteria: memiliki NPWP aktif, omzet tidak melebihi Rp5 miliar, dan tidak merupakan anak perusahaan dari perusahaan besar. Bukti pembayaran PPh Final harus dilaporkan secara bulanan melalui SPT Masa PPh Final.</p>',
                'author' => 'Admin',
                'is_published' => true,
                'created_at' => '2026-03-10 08:15:00',
            ],
            [
                'type' => 'NEWS',
                'title' => 'Perubahan Tarif PPh 21: Pemotongan Gaji Karyawan Disesuaikan dengan UMR 2026',
                'slug' => 'perubahan-tarif-pph-21-umr-2026',
                'content' => '<p>Dengan ditetapkannya UMR 2026 di berbagai daerah, Direktorat Jenderal Pajak mengeluarkan panduan terbaru mengenai pemotongan Pajak Penghasilan Pasal 21 (PPh 21) atas penghasilan karyawan. Perubahan ini berlaku efektif mulai Maret 2026.</p>

<h3>Poin Penting</h3>
<ul>
<li>PTKP (Penghasilan Tidak Kena Pajak) tahun 2026 tetap Rp54 juta per tahun untuk karyawan tunggal</li>
<li>Tarif PPh 21 menggunakan metode pajak tanggungan (gross up) untuk gaji di atas PTKP</li>
<li>Pengusaha wajib menggunakan Aplikasi Pemotongan PPh 21 versi terbaru</li>
<li>Laporan SPT Masa PPh 21 harus diserahkan paling lambat tanggal 20 bulan berikutnya</li>
</ul>

<h3>Contoh Perhitungan</h3>
<p>Untuk gaji bulanan Rp10 juta (bruto):<br>Penghasilan Bruto Setahun: Rp120.000.000<br>Dikurangi PTKP: -Rp54.000.000<br>Penghasilan Kena Pajak: Rp66.000.000<br>PPh 21 terutang: Rp3.300.000 (tarif progresif)<br>PPh 21 per bulan: Rp275.000</p>',
                'author' => 'Admin',
                'is_published' => true,
                'created_at' => '2026-04-05 11:00:00',
            ],
            [
                'type' => 'NEWS',
                'title' => 'Tax Amnesty Jilid III: Pemerintah Buka Kembali Pengampunan Pajak untuk Deklarasi Aset Baru',
                'slug' => 'tax-amnesty-jilid-iii-2026',
                'content' => '<p>Pemerintah resmi membuka program Tax Amnesty Jilid III atau Pengampunan Pajak fase ketiga yang berlangsung dari April hingga September 2026. Program ini memberikan kesempatan kepada Wajib Pajak untuk melakukan deklarasi harta yang belum dilaporkan.</p>

<h3>Ketentuan Utama</h3>
<ul>
<li><strong>Tarif Tebusan:</strong> 3% untuk harta yang diinvestasikan dalam instrumen keuangan dalam negeri, 6% untuk harta yang tidak diinvestasikan</li>
<li><strong>Batas Deklarasi:</strong> Seluruh harta yang diperoleh hingga Desember 2025</li>
<li><strong>Periode:</strong> 1 April - 30 September 2026</li>
<li><strong>Syarat:</strong> Memiliki NPWP aktif dan telah melaporkan SPT Tahunan PPh 2024 dan 2025</li>
</ul>

<h3>Manfaat Mengikuti Program</h3>
<p>Wajib Pajak yang mengikuti program ini akan mendapatkan:<br>- Penghapusan sanksi administrasi pajak<br>- Penghapusan sanksi pidana pajak atas harta yang dideklarasikan<br>- Jaminan kerahasiaan data harta yang dideklarasikan</p>

<p>Konsultan pajak sangat menyarankan klien untuk memanfaatkan peluang ini sebelum batas waktu berakhir.</p>',
                'author' => 'Admin',
                'is_published' => true,
                'created_at' => '2026-05-12 14:30:00',
            ],

            // === KNOWLEDGE (5) ===
            [
                'type' => 'KNOWLEDGE',
                'title' => 'Panduan Lengkap PPh 24: Pajak Penghasilan untuk Wajib Pajak Luar Negeri',
                'slug' => 'panduan-lengkap-pph-24-wn',
                'content' => '<p>Pajak Penghasilan Pasal 24 (PPh 24) adalah pajak yang dikenakan atas penghasilan yang diterima atau diperoleh Wajib Pajak Luar Negeri (WPLN) dari Indonesia. Memahami ketentuan PPh 24 sangat penting bagi perusahaan yang memiliki transaksi dengan pihak asing.</p>

<h3>Jenis Penghasilan Kena PPh 24</h3>
<ul>
<li><strong>Dividen:</strong> Bagi hasil dari perusahaan Indonesia kepada pemegang saham asing</li><li><strong>Bunga:</strong> Imbalan atas pinjaman dari pihak asing</li>
<li><strong>Royalti:</strong> Imbalan atas penggunaan hak cipta, paten, atau hak kekayaan intelektual lainnya</li>
<li><strong>Jasa:</strong> Imbalan atas jasa teknis, konsultasi, atau jasa lainnya yang dilakukan di Indonesia</li>
<li><strong>Sewa:</strong> Imbalan atas penyewaan harta bergerak atau tidak bergerak</li>
</ul>

<h3>Tarif PPh 24</h3>
<p>Tarif PPh 24 umumnya mengikuti tarif yang berlaku dalam Undang-Undang Pajak Penghasilan. Namun, tarif dapat berkurang jika Indonesia memiliki Perjanjian Penghindaran Pajak Dua Kali (P3D2/ Tax Treaty) dengan negara asal WPLN.</p>

<h3>Contoh Perhitungan</h3>
<p>Dividen untuk pemegang saham asing: Rp1.000.000.000<br>PPh 24 (tarif umum 20%): Rp200.000.000<br>Jika ada P3D2 (tarif reduksi 10%): Rp100.000.000</p>',
                'author' => 'Admin',
                'regulation_number' => 'UU 7/2021',
                'regulation_type' => 'Undang-Undang',
                'regulation_location' => 'Nasional',
                'is_published' => true,
                'created_at' => '2026-01-10 08:00:00',
            ],
            [
                'type' => 'KNOWLEDGE',
                'title' => 'Cara Menghitung PPN Masukan dan Keluaran: panduan Praktis untuk Pengusaha',
                'slug' => 'cara-menghitung-ppn-masukan-keluaran',
                'content' => '<p>PPN (Pajak Pertambahan Nilai) merupakan pajak konsumsi yang dikenakan atas setiap transaksi barang dan jasa kena pajak. Pemahaman yang benar tentang PPN masukan dan keluaran sangat krusial bagi pengusaha untuk memastikan kepatuhan pelaporan.</p>

<h3>Konsep Dasar PPN</h3>
<ul>
<li><strong>PPN Keluaran:</strong> PPN yang terutang atas penjualan barang/jasa kena pajak (dibebankan kepada pembeli)</li>
<li><strong>PPN Masukan:</strong> PPN yang dibayarkan atas pembelian barang/jasa kena pajak (dapat dikreditkan)</li>
<li><strong>PPN Terutang:</strong> PPN Keluaran dikurangi PPN Masukan = jumlah yang harus disetor ke kas negara</li>
</ul>

<h3>Contoh Perhitungan</h3>
<p>PT Maju Jaya bulan Maret 2026:<br>- Penjualan barang kena pajak: Rp500.000.000<br>- PPN Keluaran (11%): Rp55.000.000<br>- Pembelian bahan baku: Rp200.000.000<br>- PPN Masukan: Rp22.000.000<br>- PPN Terutang: Rp55.000.000 - Rp22.000.000 = Rp33.000.000</p>

<h3>Yang Perlu Diperhatikan</h3>
<p>PPN Masukan hanya dapat dikreditkan jika:<br>1. Faktur Pajak memenuhi syarat formal<br>2. Barang/jasa digunakan untuk kegiatan usaha yang menghasilkan PPN Keluaran<br>3. Pengkreditan dilakukan dalam bulan yang sama dengan PPN Keluaran</p>',
                'author' => 'Admin',
                'regulation_number' => 'UU 8/1983',
                'regulation_type' => 'Undang-Undang PPN',
                'regulation_location' => 'Nasional',
                'is_published' => true,
                'created_at' => '2026-02-08 09:30:00',
            ],
            [
                'type' => 'KNOWLEDGE',
                'title' => 'Transfer Pricing: Panduan Dokumentasi dan Arm\'s Length Principle',
                'slug' => 'transfer-pricing-dokumentasi-panduan',
                'content' => '<p>Transfer Pricing atau penetapan harga transfer adalah salah satu aspek perpajakan internasional yang paling kompleks. Bagi perusahaan yang memiliki transaksi afiliasi lintas negara, kepatuhan terhadap aturan transfer pricing merupakan keharusan.</p>

<h3>Prinsip Arm\'s Length</h3>
<p>Prinsip panjang lengan (arm\'s length principle) mensyaratkan bahwa harga dalam transaksi antara pihak afiliasi harus sama dengan harga yang akan ditetapkan dalam transaksi antara pihak yang tidak berhubungan (independent parties) dalam kondisi yang sebanding.</p>

<h3>Dokumentasi Transfer Pricing</h3>
<ul>
<li><strong>Master File:</strong> Dokumen global yang menjelaskan struktur organisasi, bisnis, dan kebijakan transfer pricing perusahaan induk</li>
<li><strong>Local File:</strong> Dokumen lokal yang menjelaskan transaksi afiliasi spesifik perusahaan cabang Indonesia</li>
<li><strong>Country-by-Country Report (CbCR):</strong> Laporan distribusi pendapatan, pajak, dan aktivitas ekonomi per negara</li>
</ul>

<h3>Metode Transfer Pricing</h3>
<p>DJIP mengakui metode-metode berikut:<br>1. Comparable Uncontrolled Price (CUP)<br>2. Resale Price Method (RPM)<br>3. Cost Plus Method (CPM)<br>4. Transactional Net Margin Method (TNMM)<br>5. Profit Split Method (PSM)</p>

<p>Pemilihan metode harus didasarkan pada analisis fungsi, aset, dan risiko (FAR Analysis) dari transaksi yang bersangkutan.</p>',
                'author' => 'Admin',
                'regulation_number' => 'PMK 213/2016',
                'regulation_type' => 'Peraturan Menteri Keuangan',
                'regulation_location' => 'Nasional',
                'is_published' => true,
                'created_at' => '2026-03-15 10:00:00',
            ],
            [
                'type' => 'KNOWLEDGE',
                'title' => 'PPh 26 untuk Investasi Asing: Panduan Pemotongan Pajak Dividen ke Luar Negeri',
                'slug' => 'pph-26-investasi-asing-panduan',
                'content' => '<p>PPh 26 adalah pajak yang dipotong atas penghasilan yang dibayarkan kepada Wajib Pajak Luar Negeri (WPLN) dari Indonesia. Bagi perusahaan Indonesia yang memiliki investor asing, pemahaman PPh 26 sangat penting untuk memastikan pemotongan pajak yang benar.</p>

<h3>Penghasilan Kena PPh 26</h3>
<ul>
<li>Dividen dari perusahaan Indonesia kepada pemegang saham asing</li>
<li>Bunga yang dibayarkan ke pihak asing</li>
<li>Royalti yang dibayarkan ke pihak asing</li>
<li>Imbalan jasa teknis yang dibayarkan ke pihak asing</li>
<li>Penghasilan lainnya dari Indonesia yang diterima WPLN</li>
</ul>

<h3>Tarif dan P3D2</h3>
<p>Tarif PPh 26 umumnya 20% dari penghasilan bruto. Namun, tarif dapat berkurang jika Indonesia memiliki Perjanjian Penghindaran Pajak Dua Kali (P3D2) dengan negara asal WPLN. Contoh:</p>
<ul>
<li>Indonesia-Singapura: Tarif dividen reduksi menjadi 10%</li>
<li>Indonesia-Jepang: Tarif dividen reduksi menjadi 10%</li>
<li>Indonesia-Belanda: Tarif dividen reduksi menjadi 10%</li>
</ul>

<h3>Prosedur Pemotongan</h3>
<p>1. Verifikasi status WP luar negeri<br>2. Cek keberadaan P3D2 dengan negara asal<br>3. Hitung PPh 26 dengan tarif yang berlaku<br>4. Potong PPh 26 dari pembayaran<br>5. Sampaikan bukti potong ke WPLN<br>6. Laporkan dalam SPT Masa PPh 26</p>',
                'author' => 'Admin',
                'regulation_number' => 'UU 36/2008',
                'regulation_type' => 'Undang-Undang PPh',
                'regulation_location' => 'Nasional',
                'is_published' => true,
                'created_at' => '2026-04-20 13:00:00',
            ],
            [
                'type' => 'KNOWLEDGE',
                'title' => 'Restitusi Pajak: Panduan Proses Pengembalian Kelebihan Bayar Pajak',
                'slug' => 'restitusi-pajak-panduan-pengembalian',
                'content' => '<p>Restitusi pajak adalah proses pengembalian kelebihan pembayaran pajak yang dilakukan oleh Wajib Pajak kepada negara. Banyak pengusaha tidak menyadari bahwa mereka berhak atas pengembalian pajak yang telah dibayarkan secara berlebih.</p>

<h3>Jenis Restitusi</h3>
<ul>
<li><strong>Restitusi PPN:</strong> Pengembalian PPN masukan yang tidak dapat dikreditkan (overpaid VAT)</li>
<li><strong>Restitusi PPh:</strong> Pengembalian PPh yang terutang lebih setelah dilakukan koreksi SPT</li>
<li><strong>Restitusi atas Keberatan:</strong> Pengembalian pajak sebagai hasil dari surat keberatan yang dikabulkan</li>
</ul>

<h3>Proses Restitusi PPN</h3>
<p>1. Ajukan permohonan restitusi melalui SPT Masa PPN<br>2. Sertakan dokumen pendukung: faktur pajak, bukti pembayaran, rekening bank<br>3. DJP akan melakukan verifikasi (biasanya 3-6 bulan)<br>4. Jika disetujui, dana dikirim ke rekening Wajib Pajak<br>5. Jika ditolak, Wajib Pajak dapat mengajukan keberatan</p>

<h3>Tips Mempercepat Proses</h3>
<p>- Pastikan SPT Masa PPN filed tepat waktu<br>- Sertakan semua dokumen pendukung yang lengkap<br>- Gunakan e-Faktur untuk semua transaksi<br>- Kooperatif dalam memberikan jawaban atas pertanyaan DJP<br>- Gunakan jasa konsultan pajak untuk memastikan kelengkapan dokumen</p>

<p>Proses restitusi biasanya memakan waktu 3-6 bulan untuk PPN dan 6-12 bulan untuk PPh.</p>',
                'author' => 'Admin',
                'regulation_number' => 'PMK 39/2023',
                'regulation_type' => 'Peraturan Menteri Keuangan',
                'regulation_location' => 'Nasional',
                'is_published' => true,
                'created_at' => '2026-05-25 07:45:00',
            ],
        ];

        foreach ($articles as $article) {
            Post::create($article);
        }
    }
}
