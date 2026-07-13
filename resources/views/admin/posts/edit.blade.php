<x-app-layout>
    <x-slot name="header">
        Buat {{ $type == 'KNOWLEDGE' ? 'Peraturan' : 'Berita' }} Baru
    </x-slot>

    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg">
        
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4 rounded smooth-transition" role="alert">
                <p class="font-bold">Gagal menyimpan konten. Periksa error di bawah:</p>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.posts.update', $post) }}">
           @method('PUT') 
            
            <input type="hidden" name="type" value="{{ $type }}">

            <div class="mb-5">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Konten</label>
                <input id="title" type="text" name="title" value="{{ old('title') }}" required autofocus
                       class="w-full p-3 border border-gray-300 rounded-lg focus:border-main-color focus:ring-main-color smooth-transition" 
                       placeholder="Contoh: Peraturan Menteri Keuangan No. 123/PMK.03/2025">
            </div>

            <div class="mb-5">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Isi Konten (HTML/Text)</label>
                <textarea id="content" name="content" rows="10" required
                          class="w-full p-3 border border-gray-300 rounded-lg focus:border-main-color focus:ring-main-color smooth-transition" 
                          placeholder="Masukkan isi lengkap konten di sini...">{{ old('content') }}</textarea>
                </div>

            @if ($type == 'KNOWLEDGE')
                <h3 class="text-lg font-semibold text-main-color mt-8 mb-4 border-t pt-4">Data Metadata Peraturan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="mb-5">
                        <label for="regulation_number" class="block text-sm font-medium text-gray-700 mb-1">Nomor Aturan</label>
                        <input id="regulation_number" type="text" name="regulation_number" value="{{ old('regulation_number') }}"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:border-main-color focus:ring-main-color smooth-transition">
                    </div>
                    <div class="mb-5">
                        <label for="regulation_type" class="block text-sm font-medium text-gray-700 mb-1">Jenis Aturan (PMK, UU, PP)</label>
                        <input id="regulation_type" type="text" name="regulation_type" value="{{ old('regulation_type') }}"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:border-main-color focus:ring-main-color smooth-transition">
                    </div>
                    <div class="mb-5">
                        <label for="regulation_location" class="block text-sm font-medium text-gray-700 mb-1">Lokasi Berlaku</label>
                        <input id="regulation_location" type="text" name="regulation_location" value="{{ old('regulation_location') }}"
                               class="w-full p-3 border border-gray-300 rounded-lg focus:border-main-color focus:ring-main-color smooth-transition">
                    </div>
                </div>
            @endif

            <div class="mt-6 mb-8 flex items-center">
                <input id="is_published" type="checkbox" name="is_published" value="1" 
                       {{ old('is_published') ? 'checked' : '' }}
                       class="rounded border-gray-300 text-main-color shadow-sm focus:ring-main-color">
                <label for="is_published" class="ml-2 text-sm font-medium text-gray-700">Publikasikan Konten Sekarang</label>
            </div>

            <div class="mt-8">
                <button type="submit" class="w-full px-4 py-3 bg-main-color text-white font-semibold rounded-lg shadow-xl hover:bg-main-darker smooth-transition transform hover:scale-[1.005]">
                    Simpan Konten
                </button>
            </div>
        </form>
    </div>
</x-app-layout>