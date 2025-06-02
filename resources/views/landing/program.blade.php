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

    {{-- Program --}}
    <section id="program" class="container mx-auto px-4 py-12">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Program</h2>
        <div class="grid md:grid-cols-3 gap-8 dark:text-gray-200">
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
</body>

</html>