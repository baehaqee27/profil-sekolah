{{-- filepath: resources/views/profile-sekolah.blade.php --}}
@extends('layouts.app')

@section('content')
{{-- Navbar --}}
<nav class="bg-white dark:bg-gray-900 shadow sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center px-4 py-3">
        <div class="flex items-center gap-2">
            <span class="font-extrabold text-blue-700 text-xl">SDN Contoh 01</span>
        </div>
        <div class="hidden md:flex gap-6">
            <a href="#beranda" class="hover:text-blue-600 font-semibold">Beranda</a>
            <a href="#tentang" class="hover:text-blue-600 font-semibold">Tentang Kami</a>
            <a href="#program" class="hover:text-blue-600 font-semibold">Program</a>
            <a href="#fasilitas" class="hover:text-blue-600 font-semibold">Fasilitas</a>
            <a href="#galeri" class="hover:text-blue-600 font-semibold">Galeri</a>
            <a href="#kontak" class="hover:text-blue-600 font-semibold">Kontak</a>
        </div>
        <button class="md:hidden text-2xl" @click="open = !open" x-data="{ open: false }">
            <svg x-show="!open" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <div x-show="open" class="absolute right-4 top-16 bg-white dark:bg-gray-900 shadow rounded p-4 flex flex-col gap-3 md:hidden">
                <a href="#beranda" class="hover:text-blue-600 font-semibold">Beranda</a>
                <a href="#tentang" class="hover:text-blue-600 font-semibold">Tentang Kami</a>
                <a href="#program" class="hover:text-blue-600 font-semibold">Program</a>
                <a href="#fasilitas" class="hover:text-blue-600 font-semibold">Fasilitas</a>
                <a href="#galeri" class="hover:text-blue-600 font-semibold">Galeri</a>
                <a href="#kontak" class="hover:text-blue-600 font-semibold">Kontak</a>
            </div>
        </button>
    </div>
</nav>

{{-- Hero Section --}}
<section id="beranda" class="relative bg-gradient-to-tr from-blue-500 to-green-400 py-16 flex flex-col md:flex-row items-center justify-between gap-8">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-10 px-4">
        <div class="flex-1 text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-lg">Selamat Datang di SDN Contoh 01</h1>
            <p class="text-lg md:text-xl text-blue-100 mb-6">Sekolah unggulan dengan lingkungan belajar inspiratif, fasilitas modern, dan tenaga pendidik profesional.</p>
            <a href="#kontak" class="inline-block bg-white text-blue-700 font-bold px-6 py-3 rounded-full shadow hover:bg-blue-50 transition">Daftar Sekarang</a>
        </div>
        <div class="flex-1 flex justify-center">
            <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=600&q=80" alt="Sekolah" class="rounded-xl shadow-lg w-full max-w-md object-cover">
        </div>
    </div>
</section>

{{-- Deskripsi Sekolah --}}
<section class="container mx-auto px-4 py-12 text-center">
    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-blue-700">Sekilas Tentang Sekolah</h2>
    <p class="text-gray-700 dark:text-gray-200 max-w-2xl mx-auto">
        SDN Contoh 01 berkomitmen membentuk generasi berkarakter, berprestasi, dan siap menghadapi tantangan global. Kami mengedepankan pendidikan berbasis teknologi, karakter, dan kreativitas.
    </p>
</section>

{{-- Tentang Kami --}}
<section id="tentang" class="container mx-auto px-4 py-12">
    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Tentang Kami</h2>
    <div class="grid md:grid-cols-2 gap-8">
        <div>
            <h3 class="font-semibold text-lg mb-2">Sejarah Sekolah</h3>
            <p class="text-gray-700 dark:text-gray-200 mb-4">Didirikan pada tahun 1980, SDN Contoh 01 telah menjadi pelopor pendidikan dasar di Kota Edukasi.</p>
            <h3 class="font-semibold text-lg mb-2">Visi & Misi</h3>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-200 mb-4">
                <li><b>Visi:</b> Menjadi sekolah dasar unggulan yang berkarakter dan berprestasi.</li>
                <li><b>Misi:</b> Menciptakan lingkungan belajar yang aman, nyaman, dan inovatif.</li>
            </ul>
            <h3 class="font-semibold text-lg mb-2">Struktur Organisasi</h3>
            <p class="text-gray-700 dark:text-gray-200 mb-4">Kepala Sekolah: Ibu Siti Aminah, S.Pd.<br>Wakil Kepala: Bapak Ahmad, S.Pd.<br>Staf & Guru: 25 orang</p>
        </div>
        <div>
            <h3 class="font-semibold text-lg mb-2">Guru & Staf</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-blue-50 dark:bg-blue-900 rounded-lg p-4 flex flex-col items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Guru" class="w-16 h-16 rounded-full mb-2">
                    <span class="font-semibold">Bapak Ahmad</span>
                    <span class="text-xs text-gray-500">Wali Kelas 6A</span>
                </div>
                <div class="bg-blue-50 dark:bg-blue-900 rounded-lg p-4 flex flex-col items-center">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Guru" class="w-16 h-16 rounded-full mb-2">
                    <span class="font-semibold">Ibu Siti</span>
                    <span class="text-xs text-gray-500">Kepala Sekolah</span>
                </div>
                {{-- Tambahkan profil guru/staf lain di sini --}}
            </div>
        </div>
    </div>
</section>

{{-- Program --}}
<section id="program" class="container mx-auto px-4 py-12">
    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Program</h2>
    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h3 class="font-semibold text-lg mb-2">Program Akademik</h3>
            <p class="text-gray-700 dark:text-gray-200">Kurikulum Merdeka, pembelajaran tematik, dan penilaian berbasis kompetensi.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h3 class="font-semibold text-lg mb-2">Kurikulum</h3>
            <p class="text-gray-700 dark:text-gray-200">Mengadopsi kurikulum nasional terbaru dengan integrasi teknologi dan karakter.</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h3 class="font-semibold text-lg mb-2">Ekstrakurikuler</h3>
            <p class="text-gray-700 dark:text-gray-200">Pramuka, olahraga, seni, sains club, dan berbagai kegiatan pengembangan diri lainnya.</p>
        </div>
    </div>
</section>

{{-- Fasilitas --}}
<section id="fasilitas" class="container mx-auto px-4 py-12">
    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Fasilitas</h2>
    <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 flex flex-col items-center">
            <svg class="w-10 h-10 mb-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect width="20" height="12" x="2" y="6" rx="2" />
            </svg>
            <span class="font-semibold">Ruang Kelas Nyaman</span>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 flex flex-col items-center">
            <svg class="w-10 h-10 mb-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect width="20" height="12" x="2" y="6" rx="2" />
                <path d="M8 6v12M16 6v12" />
            </svg>
            <span class="font-semibold">Laboratorium</span>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 flex flex-col items-center">
            <svg class="w-10 h-10 mb-2 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect width="20" height="12" x="2" y="6" rx="2" />
                <path d="M12 6v12" />
            </svg>
            <span class="font-semibold">Perpustakaan</span>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 flex flex-col items-center">
            <svg class="w-10 h-10 mb-2 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <path d="M8 16l4-4 4 4" />
            </svg>
            <span class="font-semibold">Lapangan & Kantin</span>
        </div>
    </div>
</section>

{{-- Galeri --}}
<section id="galeri" class="container mx-auto px-4 py-12">
    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Galeri</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Kegiatan" class="rounded-lg shadow object-cover w-full h-48">
        <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=400&q=80" alt="Fasilitas" class="rounded-lg shadow object-cover w-full h-48">
        <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=400&q=80" alt="Ekstrakurikuler" class="rounded-lg shadow object-cover w-full h-48">
        {{-- Tambahkan gambar/video lain sesuai kebutuhan --}}
    </div>
</section>

{{-- Kontak --}}
<section id="kontak" class="container mx-auto px-4 py-12">
    <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Kontak</h2>
    <div class="grid md:grid-cols-2 gap-8">
        <div>
            <div class="mb-3 flex items-center text-gray-700 dark:text-gray-200">
                <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0l-4.243 4.243M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Jl. Pendidikan No. 123, Kota Edukasi
            </div>
            <div class="mb-3 flex items-center text-gray-700 dark:text-gray-200">
                <svg class="w-6 h-6 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8" />
                </svg>
                (021) 123-4567
            </div>
            <div class="mb-3 flex items-center text-gray-700 dark:text-gray-200">
                <svg class="w-6 h-6 mr-2 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 01-8 0V8a4 4 0 018 0v4z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16v2m0 0h.01M12 18a2 2 0 100-4 2 2 0 000 4z" />
                </svg>
                info@sdncontoh01.sch.id
            </div>
        </div>
        <form class="bg-white dark:bg-gray-800 rounded-lg shadow p-6 flex flex-col gap-4">
            <input type="text" placeholder="Nama" class="border rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600" required>
            <input type="email" placeholder="Email" class="border rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600" required>
            <textarea placeholder="Pesan" class="border rounded px-3 py-2 dark:bg-gray-700 dark:text-white dark:border-gray-600" rows="4" required></textarea>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kirim Pesan</button>
        </form>
    </div>
</section>
@endsection