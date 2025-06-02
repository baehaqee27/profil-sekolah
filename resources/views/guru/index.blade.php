{{-- filepath: resources/views/siswa/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Guru</h1>
        <a href="{{ route('admin.guru.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Guru</a>
    </div>
    @if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif
    {{-- Drag & Drop Import Excel/CSV --}}
    <form
        action="{{ route('admin.guru.import') }}"
        method="POST"
        enctype="multipart/form-data"
        x-data="{
        isDragging: false,
        fileName: '',
        handleDrop(e) {
            this.isDragging = false;
            const files = e.dataTransfer.files;
            if (files.length) {
                this.$refs.file.files = files;
                this.fileName = files[0].name;
            }
        }
    }"
        @dragover.prevent="isDragging = true"
        @dragleave.prevent="isDragging = false"
        @drop.prevent="handleDrop($event)"
        class="mb-4 flex flex-col items-center gap-2">
        @csrf
        <label
            :class="isDragging ? 'border-blue-500 bg-blue-50' : 'border-gray-300 bg-white'"
            class="w-full flex flex-col items-center px-4 py-8 border-2 border-dashed rounded cursor-pointer transition-colors duration-200 text-gray-600 dark:bg-gray-800 dark:border-gray-600">
            <svg class="w-8 h-8 mb-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16v-4a4 4 0 014-4 4 4 0 014 4v4m-4 4v-4m0 0V4m0 8h.01"></path>
            </svg>
            <span class="mb-2">Seret file Excel/CSV ke sini atau klik untuk memilih</span>
            <input
                x-ref="file"
                type="file"
                name="file"
                accept=".xlsx,.xls,.csv"
                class="hidden"
                @change="fileName = $event.target.files[0]?.name"
                required>
            <span x-text="fileName" class="mt-2 text-sm text-blue-600"></span>
        </label>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 mt-2">Import Excel/CSV</button>
    </form>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border rounded shadow dark:bg-gray-800 dark:text-white">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">No.</th>
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">NIP</th>
                    <th class="px-4 py-2 border">Mapel</th>
                    <th class="px-4 py-2 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($gurus as $guru)
                <tr>
                    <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 border">{{ $guru->nama }}</td>
                    <td class="px-4 py-2 border">{{ $guru->nip }}</td>
                    <td class="px-4 py-2 border">{{ $guru->mapel }}</td>
                    <td class="px-4 py-2 border flex gap-2">
                        <a href="{{ route('admin.guru.show', $guru) }}" class="text-blue-600 hover:underline">Detail</a>
                        <a href="{{ route('admin.guru.edit', $guru) }}" class="text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('admin.guru.destroy', $guru) }}" method="POST" onsubmit="return confirm('Yakin hapus?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 border text-center">Belum ada data guru.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection