@php $post = $post ?? null; @endphp
<div class="space-y-5">
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Judul *</label>
        <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
    </div>
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Isi Konten *</label>
        <textarea name="content" rows="10" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">{{ old('content', $post->content ?? '') }}</textarea>
    </div>
    @if($type === 'KNOWLEDGE')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Nomor Peraturan</label>
            <input type="text" name="regulation_number" value="{{ old('regulation_number', $post->regulation_number ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50" placeholder="UU 11/2025">
        </div>
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Jenis Peraturan</label>
            <input type="text" name="regulation_type" value="{{ old('regulation_type', $post->regulation_type ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50" placeholder="Undang-Undang">
        </div>
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Wilayah Berlaku</label>
            <input type="text" name="regulation_location" value="{{ old('regulation_location', $post->regulation_location ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50" placeholder="Nasional">
        </div>
    </div>
    @endif
    <div class="flex items-center">
        <input type="hidden" name="is_published" value="0">
        <input type="checkbox" name="is_published" value="1" {{ ($post->is_published ?? false) ? 'checked' : '' }} class="rounded border-gray-300 text-amber-500 focus:ring-amber-500/30">
        <label class="ml-2 text-[13px] text-gray-700">Publikasikan</label>
    </div>
</div>
