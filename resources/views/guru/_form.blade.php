{{-- filepath: resources/views/guru/_form.blade.php --}}
@csrf
<div class="mb-4">
    <label class="block mb-1 font-semibold">Nama</label>
    <input type="text" name="nama" value="{{ old('nama', $guru->nama ?? '') }}" class="w-full border rounded px-3 py-2
                dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400" required>
    @error('nama') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
</div>
<div class="mb-4">
    <label class="block mb-1 font-semibold">NIP</label>
    <input type="text" name="nip" value="{{ old('nip', $guru->nip ?? '') }}" class="w-full border rounded px-3 py-2
                dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400" required>
    @error('nip') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
</div>
<div class="mb-4">
    <label class="block mb-1 font-semibold">Mapel</label>
    <input type="text" name="mapel" value="{{ old('mapel', $guru->mapel ?? '') }}" class="w-full border rounded px-3 py-2
                dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400" required>
    @error('mapel') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
</div>
<div class="mb-4">
    <label class="block mb-1 font-semibold">Alamat</label>
    <input type="text" name="alamat" value="{{ old('alamat', $guru->alamat ?? '') }}" class="w-full border rounded px-3 py-2
                dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400">
    @error('alamat') <div class="text-red-600 text-sm">{{ $message }}</div> @enderror
</div>