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

    {{-- Fasilitas --}}
    <section id="fasilitas" class="container mx-auto px-4 py-12">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Fasilitas</h2>
        <div class="grid md:grid-cols-4 gap-8 dark:text-gray-200">
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
</body>

</html>