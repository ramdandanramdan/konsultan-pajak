@php $member = $member ?? null; @endphp
<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap *</label>
        <input type="text" name="name" value="{{ old('name', $member->name ?? '') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Jabatan *</label>
        <input type="text" name="position" value="{{ old('position', $member->position ?? '') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Spesialisasi</label>
        <input type="text" name="specialty" value="{{ old('specialty', $member->specialty ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">URL Foto</label>
        <input type="text" name="photo" value="{{ old('photo', $member->photo ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="https://...">
        <p class="text-xs text-gray-500 mt-1">Masukkan URL gambar atau path file</p>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Warna Aksen *</label>
            <select name="color" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                <option value="main" {{ ($member->color ?? 'main') === 'main' ? 'selected' : '' }}>Biru (Main)</option>
                <option value="yellow" {{ ($member->color ?? '') === 'yellow' ? 'selected' : '' }}>Kuning (Yellow)</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Urutan *</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $member->sort_order ?? 0) }}" required min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
        </div>
    </div>
    <div class="flex items-center">
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" value="1" {{ ($member->is_active ?? true) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
        <label class="ml-2 text-sm text-gray-700">Aktif</label>
    </div>
</div>
