@php $highlight = $highlight ?? null; @endphp
<div class="space-y-4">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nilai (Contoh: 10+) *</label>
            <input type="text" name="value" value="{{ old('value', $highlight->value ?? '') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Label (Contoh: Tahun Pengalaman) *</label>
            <input type="text" name="label" value="{{ old('label', $highlight->label ?? '') }}" required class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Icon *</label>
            <select name="icon" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                <option value="clock" {{ ($highlight->icon ?? 'clock') === 'clock' ? 'selected' : '' }}>Jam (Clock)</option>
                <option value="users" {{ ($highlight->icon ?? '') === 'users' ? 'selected' : '' }}>Orang (Users)</option>
                <option value="check" {{ ($highlight->icon ?? '') === 'check' ? 'selected' : '' }}>Centang (Check)</option>
                <option value="document" {{ ($highlight->icon ?? '') === 'document' ? 'selected' : '' }}>Dokumen</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Urutan *</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $highlight->sort_order ?? 0) }}" required min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
        </div>
    </div>
    <div class="flex items-center">
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" value="1" {{ ($highlight->is_active ?? true) ? 'checked' : '' }} class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
        <label class="ml-2 text-sm text-gray-700">Aktif</label>
    </div>
</div>
