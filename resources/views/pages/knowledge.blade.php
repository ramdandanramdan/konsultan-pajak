@extends('layouts.app')

@section('title', 'Knowledge Base')

@section('content')
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4 text-center">
            KNOWLEDGE BASE & MATERI EDUKASI PAJAK
        </h1>
        <p class="text-xl text-gray-600 mb-12 text-center border-b pb-4">
            Akses panduan, alat bantu gratis, dan FAQ untuk memecahkan masalah pajak Anda.
        </p>

        <div class="max-w-3xl mx-auto mb-10">
            <input type="text" placeholder="Cari topik (e.g., PPh 21, SPT Badan, e-Faktur)" class="w-full p-4 border-2 border-main-color rounded-xl focus:ring-main-color focus:border-main-color transition duration-200 shadow-md">
        </div>

        <div class="grid lg:grid-cols-4 gap-6 mb-12">
            <div class="p-4 bg-white rounded-lg shadow-md border-t-4 border-blue-400 text-center">
                <h3 class="font-bold text-xl text-main-color">PPh Badan</h3>
                <p class="text-sm text-gray-600">Panduan lengkap penghasilan perusahaan.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md border-t-4 border-blue-400 text-center">
                <h3 class="font-bold text-xl text-main-color">PPN & Faktur</h3>
                <p class="text-sm text-gray-600">E-Faktur, PPN Masukan & Keluaran.</p>
            </div>
            <div class="p-4 bg-white rounded-lg shadow-md border-t-4 border-blue-400 text-center">
                <h3 class="font-bold text-xl text-main-color">PPh 21</h3>
                <p class="text-sm text-gray-600">Perhitungan pajak karyawan.</p>
            </div>
             <div class="p-4 bg-yellow-100 rounded-lg shadow-lg border-t-4 border-yellow-500 text-center cursor-pointer hover:bg-yellow-200 transition duration-300" onclick="alert('Fitur Indikator Risiko Audit akan dibuka di sini!');">
                <h3 class="font-bold text-xl text-red-600">⭐ FREE TOOL</h3>
                <p class="text-sm text-gray-800">Cek Risiko Audit Pajak Anda.</p>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-l-4 border-main-color">
                <h3 class="text-2xl font-bold text-gray-900 hover:text-main-color smooth-transition">
                    <a href="#">Panduan Langkah Demi Langkah Mengisi SPT Tahunan Badan</a>
                </h3>
                <span class="text-sm text-gray-500">Kategori: PPh Badan</span>
                <p class="text-gray-700 mt-2">
                    Dokumen yang harus disiapkan, formulir yang digunakan, dan tips agar pelaporan disetujui tanpa kendala.
                </p>
                <div class="mt-4"><a href="#" class="text-main-color font-medium hover:underline">Baca Materi Lengkap &rarr;</a></div>
            </div>
             <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-l-4 border-main-color">
                <h3 class="text-2xl font-bold text-gray-900 hover:text-main-color smooth-transition">
                    <a href="#">Perbedaan PPN dan PPNBM (Pajak Penjualan atas Barang Mewah)</a>
                </h3>
                <span class="text-sm text-gray-500">Kategori: PPN & Pajak Lain</span>
                <p class="text-gray-700 mt-2">
                    Penjelasan komprehensif tentang objek, tarif, dan subjek PPN serta PPNBM yang sering membingungkan.
                </p>
                 <div class="mt-4"><a href="#" class="text-main-color font-medium hover:underline">Baca Materi Lengkap &rarr;</a></div>
            </div>
             <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border-l-4 border-main-color">
                <h3 class="text-2xl font-bold text-gray-900 hover:text-main-color smooth-transition">
                    <a href="#">FAQ: Tanya Jawab Seputar Bukti Potong PPh 21</a>
                </h3>
                <span class="text-sm text-gray-500">Kategori: PPh 21</span>
                <p class="text-gray-700 mt-2">
                    Kumpulan pertanyaan yang sering diajukan mengenai form 1721-A1 dan implikasinya pada karyawan.
                </p>
                 <div class="mt-4"><a href="#" class="text-main-color font-medium hover:underline">Baca Materi Lengkap &rarr;</a></div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="#" class="px-6 py-3 border border-main-color text-main-color font-medium rounded-lg hover:bg-main-color hover:text-white transition duration-300">
                Muat Lebih Banyak Artikel
            </a>
        </div>
    </div>
</div>
@endsection