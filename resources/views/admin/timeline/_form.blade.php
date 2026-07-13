@php $item = $item ?? null; @endphp
<div class="space-y-5">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Tahun *</label>
            <input type="text" name="year" value="{{ old('year', $item->year ?? '') }}" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50" placeholder="Contoh: Tahun 2020">
        </div>
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Urutan *</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}" required min="0" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
        </div>
    </div>
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Judul Event *</label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
    </div>
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Deskripsi *</label>
        <textarea name="description" rows="3" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">{{ old('description', $item->description ?? '') }}</textarea>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Warna *</label>
            <select name="color" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
                <option value="main" {{ ($item->color ?? 'main') === 'main' ? 'selected' : '' }}>Biru (Main)</option>
                <option value="yellow" {{ ($item->color ?? '') === 'yellow' ? 'selected' : '' }}>Kuning (Yellow)</option>
            </select>
        </div>
        <div class="flex items-end">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" value="1" {{ ($item->is_active ?? true) ? 'checked' : '' }} class="rounded border-gray-300 text-amber-500 focus:ring-amber-500/30">
            <label class="ml-2 text-[13px] text-gray-700">Aktif</label>
        </div>
    </div>
</div>
