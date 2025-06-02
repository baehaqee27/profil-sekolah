{{-- filepath: resources/views/guru/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container my-6 mx-auto px-4 py-8 max-w-lg dark:bg-gray-800 dark:text-white">
    <h1 class="text-2xl font-bold mb-6">Detail guru</h1>
    <div class="bg-white p-6 rounded shadow dark:bg-gray-700 dark:text-white">
        <div class="mb-2"><strong>Nama:</strong> {{ $guru->nama }}</div>
        <div class="mb-2"><strong>NIS:</strong> {{ $guru->nis }}</div>
        <div class="mb-2"><strong>Kelas:</strong> {{ $guru->kelas }}</div>
        <div class="mb-2"><strong>Alamat:</strong> {{ $guru->alamat }}</div>
        <a href="{{ route('admin.guru.index') }}" class="mt-4 inline-block text-blue-600 hover:underline dark:text-amber-300">Kembali</a>
    </div>
</div>
@endsection