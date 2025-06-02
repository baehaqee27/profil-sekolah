@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded shadow dark:bg-gray-800 dark:text-white">
            <h2 class="text-lg font-semibold mb-2">Jumlah Siswa</h2>
            <div class="text-3xl font-bold text-blue-700">
                {{ \App\Models\Siswa::count() }}
            </div>
            <a href="{{ route('admin.siswa.index') }}" class="text-blue-600 hover:underline">Lihat Data Siswa</a>
        </div>
        <div class="bg-white p-6 rounded shadow dark:bg-gray-800 dark:text-white">
            <h2 class="text-lg font-semibold mb-2">Jumlah Guru</h2>
            <div class="text-3xl font-bold text-green-700">
                {{ \App\Models\Guru::count() }}
            </div>
            <a href="{{ route('admin.guru.index') }}" class="text-green-600 hover:underline">Lihat Data Guru</a>
        </div>
    </div>
</div>
@endsection