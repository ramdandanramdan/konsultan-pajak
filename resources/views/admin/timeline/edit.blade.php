@extends('layouts.admin')
@section('title', 'Edit Timeline')
@section('subtitle', 'Formulir edit event timeline')

@section('content')
<div class="bg-white rounded-2xl border border-gray-100/80 p-6 max-w-2xl">
    <h2 class="text-lg font-bold text-gray-800 mb-4">Form Edit: {{ $timeline->title }}</h2>
    <form action="{{ route('admin.timeline.update', $timeline) }}" method="POST">
        @csrf @method('PUT')
        @include('admin.timeline._form', ['item' => $timeline])
        <div class="flex justify-end mt-6 pt-4 border-t border-gray-100">
            <a href="{{ route('admin.timeline.index') }}" class="px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-[13px] font-semibold rounded-xl transition-colors mr-2">Batal</a>
            <button type="submit" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">Update</button>
        </div>
    </form>
</div>
@endsection