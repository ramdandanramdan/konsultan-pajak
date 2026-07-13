@extends('layouts.admin')
@section('title', 'Edit Anggota Tim')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-sm max-w-2xl">
    <h2 class="text-lg font-bold text-gray-800 mb-4">Form Edit: {{ $team->name }}</h2>
    <form action="{{ route('admin.team.update', $team) }}" method="POST">
        @csrf @method('PUT')
        @include('admin.team._form', ['member' => $team])
        <div class="flex justify-end mt-6 pt-4 border-t">
            <a href="{{ route('admin.team.index') }}" class="px-4 py-2 text-gray-600 hover:text-gray-800 mr-2">Batal</a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">Update</button>
        </div>
    </form>
</div>
@endsection
