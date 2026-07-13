@php $member = $member ?? null; @endphp
<div class="space-y-5">
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Nama Lengkap *</label>
        <input type="text" name="name" value="{{ old('name', $member->name ?? '') }}" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
    </div>
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Jabatan *</label>
        <input type="text" name="position" value="{{ old('position', $member->position ?? '') }}" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
    </div>
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Spesialisasi</label>
        <input type="text" name="specialty" value="{{ old('specialty', $member->specialty ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
    </div>
    <div>
        <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">URL Foto</label>
        <input type="text" name="photo" value="{{ old('photo', $member->photo ?? '') }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50" placeholder="https://...">
        <p class="text-[12px] text-gray-400 mt-1.5">Masukkan URL gambar atau path file</p>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Warna Aksen *</label>
            <select name="color" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
                <option value="main" {{ ($member->color ?? 'main') === 'main' ? 'selected' : '' }}>Biru (Main)</option>
                <option value="yellow" {{ ($member->color ?? '') === 'yellow' ? 'selected' : '' }}>Kuning (Yellow)</option>
            </select>
        </div>
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Urutan *</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $member->sort_order ?? 0) }}" required min="0" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
        </div>
    </div>
    <div class="flex items-center">
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" value="1" {{ ($member->is_active ?? true) ? 'checked' : '' }} class="rounded border-gray-300 text-amber-500 focus:ring-amber-500/30">
        <label class="ml-2 text-[13px] text-gray-700">Aktif</label>
    </div>
</div>
