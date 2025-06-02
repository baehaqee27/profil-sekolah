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
</body>

</html>