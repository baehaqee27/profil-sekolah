{{-- filepath: resources/views/landing/beranda.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SDN Contoh 01</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    @include('landing.navbar')

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
</body>

</html>