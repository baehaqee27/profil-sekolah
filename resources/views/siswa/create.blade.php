{{-- filepath: resources/views/siswa/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-lg">
    <h1 class="text-2xl font-bold mb-6">Tambah Siswa</h1>
    <form action="{{ route('admin.siswa.store') }}" method="POST" class="bg-white p-6 rounded shadow dark:bg-gray-800 dark:text-white">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Nama</label>
            <input type="text" name="nama"
                value="{{ old('nama', $siswa->nama ?? '') }}"
                class="w-full border rounded px-3 py-2
                dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400"
                required>
            @error('nama') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">NIS</label>
            <input type="text" name="nis" value="{{ old('nis', $siswa->nis ?? '') }}" class="w-full border rounded px-3 py-2
            dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400" required>
            @error('nis') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Kelas</label>
            <input type="text" name="kelas" value="{{ old('kelas', $siswa->kelas ?? '') }}" class="w-full border rounded px-3 py-2
            dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400" required>
            @error('kelas') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat', $siswa->alamat ?? '') }}" class="w-full border rounded px-3 py-2
            dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400">
            @error('alamat') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('admin.siswa.index') }}" class="ml-2 text-gray-600 hover:underline dark:text-white">Batal</a>
    </form>
</div>
@endsection