@extends('layouts.admin')
@section('title', 'Pengaturan Situs')

@section('content')
<form action="{{ route('admin.settings.update') }}" method="POST">
    @csrf
    @method('PUT')

    @foreach($groups as $groupName => $keys)
    <div class="bg-white p-6 rounded-xl shadow-sm mb-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b">{{ $groupName }}</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($keys as $key)
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ str_replace('_', ' ', ucfirst($key)) }}</label>
                @if(in_array($key, ['footer_description', 'google_maps_embed']))
                    <textarea name="settings[{{ $key }}]" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">{{ $settings[$key] ?? '' }}</textarea>
                @else
                    <input type="text" name="settings[{{ $key }}]" value="{{ $settings[$key] ?? '' }}" class="w-full border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                @endif
            </div>
            @endforeach
        </div>
    </div>
    @endforeach

    <div class="flex justify-end">
        <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">Simpan Semua Pengaturan</button>
    </div>
</form>
@endsection
