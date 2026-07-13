@extends('layouts.app')

@section('title', 'Berita Pajak Terbaru')

@section('content')
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4 text-center">
            NEWS & PERATURAN PAJAK TERBARU
        </h1>
        <p class="text-xl text-gray-600 mb-12 text-center border-b pb-4">
            Ikuti perkembangan regulasi pajak dan tips penting dari tim ahli kami.
        </p>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <span class="text-sm text-main-color font-semibold">20 Oktober 2025</span>
                <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">
                    Perubahan Terbaru Tarif PPN di Tahun Fiskal 2026
                </h3>
                <p class="text-gray-600 mb-4 line-clamp-3">
                    Pemerintah merilis peraturan baru mengenai penyesuaian tarif PPN yang akan berlaku efektif...
                </p>
                <a href="#" class="text-sm text-main-color hover:underline font-medium">Baca Selengkapnya &rarr;</a>
            </div>

             <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <span class="text-sm text-main-color font-semibold">15 Oktober 2025</span>
                <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">
                    Panduan Lengkap Pelaporan SPT Badan Secara Online
                </h3>
                <p class="text-gray-600 mb-4 line-clamp-3">
                    Kesalahan umum yang sering terjadi saat mengisi formulir SPT Badan dan cara menghindarinya...
                </p>
                <a href="#" class="text-sm text-main-color hover:underline font-medium">Baca Selengkapnya &rarr;</a>
            </div>

             <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <span class="text-sm text-main-color font-semibold">10 Oktober 2025</span>
                <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">
                    Dampak Perpajakan Mata Uang Kripto di Indonesia
                </h3>
                <p class="text-gray-600 mb-4 line-clamp-3">
                    Analisis mendalam mengenai perlakuan PPN dan PPh atas aset digital dan transaksi kripto...
                </p>
                <a href="#" class="text-sm text-main-color hover:underline font-medium">Baca Selengkapnya &rarr;</a>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <span class="text-sm text-main-color font-semibold">5 Oktober 2025</span>
                <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">
                    Kemudahan Pengurusan NPWP untuk Pelaku UMKM
                </h3>
                <p class="text-gray-600 mb-4 line-clamp-3">
                    Langkah-langkah cepat dan persyaratan minimal bagi UMKM untuk mendapatkan Nomor Pokok Wajib Pajak...
                </p>
                <a href="#" class="text-sm text-main-color hover:underline font-medium">Baca Selengkapnya &rarr;</a>
            </div>

             <div class="bg-gray-50 p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <span class="text-sm text-main-color font-semibold">1 Oktober 2025</span>
                <h3 class="text-xl font-bold text-gray-900 mt-2 mb-3">
                    Panduan Perhitungan Pajak Penghasilan Pegawai Baru
                </h3>
                <p class="text-gray-600 mb-4 line-clamp-3">
                    Cara menghitung PPh 21 untuk pegawai yang baru mulai bekerja di tengah tahun berjalan...
                </p>
                <a href="#" class="text-sm text-main-color hover:underline font-medium">Baca Selengkapnya &rarr;</a>
            </div>
        </div>

        <div class="flex justify-center mt-12 space-x-2">
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-500 hover:bg-gray-100">&laquo; Previous</a>
            <a href="#" class="px-4 py-2 border rounded-lg bg-main-color text-white">1</a>
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100">2</a>
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100">3</a>
            <a href="#" class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100">Next &raquo;</a>
        </div>
    </div>
</div>
@endsection