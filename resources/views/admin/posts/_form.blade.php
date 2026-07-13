@php $post = $post ?? null; @endphp
<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Judul *</label>
        <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Isi Konten *</label>
        <textarea name="content" rows="10" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">{{ old('content', $post->content ?? '') }}</textarea>
    </div>
    @if($type === 'KNOWLEDGE')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nomor Peraturan</label>
            <input type="text" name="regulation_number" value="{{ old('regulation_number', $post->regulation_number ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="UU 11/2025">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Peraturan</label>
            <input type="text" name="regulation_type" value="{{ old('regulation_type', $post->regulation_type ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="Undang-Undang">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Wilayah Berlaku</label>
            <input type="text" name="regulation_location" value="{{ old('regulation_location', $post->regulation_location ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="Nasional">
        </div>
    </div>
    @endif
    <div class="flex items-center">
        <input type="hidden" name="is_published" value="0">
        <input type="checkbox" name="is_published" value="1" {{ ($post->is_published ?? false) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
        <label class="ml-2 text-sm text-gray-700">Publikasikan</label>
    </div>
</div>
