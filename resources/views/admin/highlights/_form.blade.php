@php $highlight = $highlight ?? null; @endphp
<div class="space-y-5">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Nilai (Contoh: 10+) *</label>
            <input type="text" name="value" value="{{ old('value', $highlight->value ?? '') }}" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
        </div>
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Label (Contoh: Tahun Pengalaman) *</label>
            <input type="text" name="label" value="{{ old('label', $highlight->label ?? '') }}" required class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Icon *</label>
            <select name="icon" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
                <option value="clock" {{ ($highlight->icon ?? 'clock') === 'clock' ? 'selected' : '' }}>Jam (Clock)</option>
                <option value="users" {{ ($highlight->icon ?? '') === 'users' ? 'selected' : '' }}>Orang (Users)</option>
                <option value="check" {{ ($highlight->icon ?? '') === 'check' ? 'selected' : '' }}>Centang (Check)</option>
                <option value="document" {{ ($highlight->icon ?? '') === 'document' ? 'selected' : '' }}>Dokumen</option>
            </select>
        </div>
        <div>
            <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Urutan *</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $highlight->sort_order ?? 0) }}" required min="0" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
        </div>
    </div>
    <div class="flex items-center">
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" value="1" {{ ($highlight->is_active ?? true) ? 'checked' : '' }} class="rounded border-gray-300 text-amber-500 focus:ring-amber-500/30">
        <label class="ml-2 text-[13px] text-gray-700">Aktif</label>
    </div>
</div>
