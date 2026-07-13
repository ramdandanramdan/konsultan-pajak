@extends('layouts.admin')
@section('title', 'Edit Anggota Tim')
@section('subtitle', 'Formulir edit anggota tim')

@section('content')
<div class="bg-white rounded-2xl border border-gray-100/80 p-6 max-w-2xl">
    <h2 class="text-lg font-bold text-gray-800 mb-4">Form Edit: {{ $team->name }}</h2>
    <form action="{{ route('admin.team.update', $team) }}" method="POST">
        @csrf @method('PUT')
        @include('admin.team._form', ['member' => $team])
        <div class="flex justify-end mt-6 pt-4 border-t border-gray-100">
            <a href="{{ route('admin.team.index') }}" class="px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 text-[13px] font-semibold rounded-xl transition-colors mr-2">Batal</a>
            <button type="submit" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white text-[13px] font-bold rounded-xl transition-colors shadow-lg shadow-amber-500/20">Update</button>
        </div>
    </form>
</div>
@endsection