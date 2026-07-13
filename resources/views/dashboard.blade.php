<x-app-layout>
    <x-slot name="header">
        Dashboard Utama
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-green-500 hover:shadow-xl smooth-transition transform hover:scale-[1.01]">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-green-100 rounded-full text-green-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Peraturan</p>
                    <p class="text-2xl font-bold text-gray-900">{{ App\Models\Post::where('type', 'KNOWLEDGE')->count() }}</p> 
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-yellow-500 hover:shadow-xl smooth-transition transform hover:scale-[1.01]">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-yellow-100 rounded-full text-yellow-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v10m-3 4H7m3-4h4m1 0h1m-1 4h-4m2-4v4"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Berita & Opini</p>
                    <p class="text-2xl font-bold text-gray-900">{{ App\Models\Post::where('type', 'NEWS')->count() + App\Models\Post::where('type', 'OPINION')->count() }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-red-500 hover:shadow-xl smooth-transition transform hover:scale-[1.01]">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-red-100 rounded-full text-red-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Draft</p>
                    <p class="text-2xl font-bold text-gray-900">{{ App\Models\Post::where('is_published', false)->count() }}</p>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-main-color hover:shadow-xl smooth-transition transform hover:scale-[1.01]">
            <div class="flex items-center space-x-4">
                <div class="p-3 bg-blue-100 rounded-full text-main-color">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total User</p>
                    <p class="text-2xl font-bold text-gray-900">{{ App\Models\User::count() }}</p>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-white p-6 rounded-xl shadow-lg">
        <h2 class="text-xl font-bold text-main-color mb-4">Aktivitas Terkini</h2>
        <p class="text-gray-600">Selamat! Anda berhasil mengaktifkan Dashboard Admin. Saatnya mengelola konten Anda melalui sidebar di sebelah kiri.</p>
        
        <div class="mt-6 p-4 bg-gray-50 border border-dashed border-gray-300 rounded-lg">
            <h3 class="font-semibold text-gray-700 mb-2">Aksi Cepat:</h3>
            <div class="flex space-x-4">
                <a href="{{ route('admin.posts.create', ['type' => 'knowledge']) }}" class="text-white bg-main-color px-4 py-2 rounded-lg hover:bg-main-darker smooth-transition">
                    + Peraturan Baru
                </a>
                <a href="{{ route('admin.posts.create', ['type' => 'news']) }}" class="text-white bg-yellow-600 px-4 py-2 rounded-lg hover:bg-yellow-700 smooth-transition">
                    + Berita Baru
                </a>
                <a href="{{ route('knowledge') }}" target="_blank" class="text-main-color border border-main-color px-4 py-2 rounded-lg hover:bg-main-color hover:text-white smooth-transition">
                    Lihat Website Public
                </a>
            </div>
        </div>
    </div>
</x-app-layout>