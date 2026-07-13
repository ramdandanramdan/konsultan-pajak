@php $item = $item ?? null; @endphp
<div class="space-y-4">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tahun *</label>
            <input type="text" name="year" value="{{ old('year', $item->year ?? '') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="Contoh: Tahun 2020">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Urutan *</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}" required min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
        </div>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Judul Event *</label>
        <input type="text" name="title" value="{{ old('title', $item->title ?? '') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi *</label>
        <textarea name="description" rows="3" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">{{ old('description', $item->description ?? '') }}</textarea>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Warna *</label>
            <select name="color" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                <option value="main" {{ ($item->color ?? 'main') === 'main' ? 'selected' : '' }}>Biru (Main)</option>
                <option value="yellow" {{ ($item->color ?? '') === 'yellow' ? 'selected' : '' }}>Kuning (Yellow)</option>
            </select>
        </div>
        <div class="flex items-end">
            <input type="hidden" name="is_active" value="0">
            <input type="checkbox" name="is_active" value="1" {{ ($item->is_active ?? true) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
            <label class="ml-2 text-sm text-gray-700">Aktif</label>
        </div>
    </div>
</div>
