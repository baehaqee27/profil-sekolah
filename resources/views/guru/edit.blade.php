{{-- filepath: resources/views/guru/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-lg">
    <h1 class="text-2xl font-bold mb-6">Edit Guru</h1>
    <form action="{{ route('admin.guru.update', $guru) }}" method="POST" class="bg-white p-6 rounded shadow dark:bg-gray-800 dark:text-white">
        @csrf
        @method('PUT')
        @include('guru._form')
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        <a href="{{ route('admin.guru.index') }}" class="ml-2 text-gray-600 hover:underline dark:text-white">Batal</a>
    </form>
</div>
@endsection