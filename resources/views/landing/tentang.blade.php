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

    {{-- Tentang Kami --}}
    <section id="tentang" class="container mx-auto px-4 py-12">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-700">Tentang Kami</h2>
        <div class="grid md:grid-cols-2 gap-8 dark:text-gray-200">
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
</body>

</html>