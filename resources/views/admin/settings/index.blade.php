@extends('layouts.admin')
@section('title', 'Pengaturan Situs')
@section('subtitle', 'Kelola pengaturan global situs')

@section('content')
<form action="{{ route('admin.settings.update') }}" method="POST">
    @csrf
    @method('PUT')

    @foreach($groups as $groupName => $keys)
    <div class="bg-white rounded-2xl border border-gray-100/80 p-6 mb-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-100">{{ $groupName }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($keys as $key)
            <div>
                <label class="block text-[12px] font-semibold text-gray-500 uppercase tracking-wider mb-1.5">{{ str_replace('_', ' ', ucfirst($key)) }}</label>
                @if(in_array($key, ['footer_description', 'google_maps_embed']))
                    <textarea name="settings[{{ $key }}]" rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">{{ $settings[$key] ?? '' }}</textarea>
                @else
                    <input type="text" name="settings[{{ $key }}]" value="{{ $settings[$key] ?? '' }}" class="w-full border border-gray-200 rounded-xl px-4 py-2.5 text-[13px] text-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-500/30 focus:border-amber-400 transition-colors bg-gray-50/50">
                @endif
            </div>
            @endforeach
        </div>
    </div>
    @endforeach

    <div class="flex justify-end">
        <button type="submit" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">Simpan Semua Pengaturan</button>
    </div>
</form>
@endsection