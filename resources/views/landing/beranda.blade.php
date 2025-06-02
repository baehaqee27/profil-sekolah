{{-- filepath: resources/views/landing/beranda.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>SDN Contoh 01</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .animate-gradient {
            background: linear-gradient(270deg, #2563eb, #22d3ee, #22c55e, #2563eb);
            background-size: 600% 600%;
            animation: gradientMove 8s ease infinite;
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0% 50%
            }
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    @include('landing.navbar')

    {{-- Hero Section --}}
    <section class="py-24 animate-gradient" data-aos="fade-down" data-aos-duration="1200">
        <div class="container mx-auto max-w-5xl px-6 flex flex-col md:flex-row items-center gap-16">
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg animate__animated animate__fadeInDown">
                    Selamat Datang di <span class="text-yellow-300">SDN Contoh 01</span>
                </h1>
                <p class="text-2xl text-blue-100 mb-8 animate__animated animate__fadeInUp animate__delay-1s">
                    Sekolah unggulan dengan lingkungan belajar inspiratif, fasilitas modern, dan tenaga pendidik profesional.
                </p>
                <a href="{{ route('kontak') }}" class="inline-block bg-white text-blue-700 font-bold px-8 py-4 rounded-full shadow hover:bg-blue-50 transition animate__animated animate__pulse animate__infinite">Daftar Sekarang</a>
            </div>
            <div class="flex-1 flex justify-center">
                <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=600&q=80" alt="Sekolah" class="rounded-2xl shadow-2xl w-full max-w-md object-cover animate__animated animate__zoomIn">
            </div>
        </div>
    </section>

    {{-- Info Singkat --}}
    <section class="container mx-auto max-w-5xl px-6 py-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 text-center" data-aos="fade-up" data-aos-duration="1200">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 hover:scale-105 transition">
                <div class="text-4xl font-bold text-blue-600 mb-2">A</div>
                <div class="text-gray-700 dark:text-gray-200 text-lg">Akreditasi</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 hover:scale-105 transition">
                <div class="text-4xl font-bold text-green-600 mb-2">{{ $jumlahSiswa }}</div>
                <div class="text-gray-700 dark:text-gray-200 text-lg">Siswa Aktif</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 hover:scale-105 transition">
                <div class="text-4xl font-bold text-yellow-600 mb-2">{{ $jumlahGuru }}</div>
                <div class="text-gray-700 dark:text-gray-200 text-lg">Guru & Staf</div>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 hover:scale-105 transition">
                <div class="text-4xl font-bold text-pink-600 mb-2">20+</div>
                <div class="text-gray-700 dark:text-gray-200 text-lg">Prestasi Nasional</div>
            </div>
        </div>
    </section>

    {{-- Galeri Foto Sekolah --}}
    <section class="container mx-auto max-w-6xl px-6 py-20">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 text-blue-700 text-center" data-aos="fade-up" data-aos-duration="1200">Galeri Sekolah</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80"
                alt="Sekolah 1" class="rounded-2xl shadow-lg object-cover w-full h-64 hover:scale-105 transition duration-300">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=600&q=80"
                alt="Sekolah 2" class="rounded-2xl shadow-lg object-cover w-full h-64 hover:scale-105 transition duration-300">
            <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=600&q=80"
                alt="Sekolah 3" class="rounded-2xl shadow-lg object-cover w-full h-64 hover:scale-105 transition duration-300">
            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?auto=format&fit=crop&w=600&q=80"
                alt="Sekolah 4" class="rounded-2xl shadow-lg object-cover w-full h-64 hover:scale-105 transition duration-300">
        </div>
    </section>

    {{-- Visi Misi Singkat --}}
    <section class="container mx-auto max-w-4xl px-6 py-20">
        <div class="bg-blue-50 dark:bg-blue-900 rounded-2xl shadow-xl p-12 text-center" data-aos="fade-up" data-aos-duration="1200">
            <h3 class="text-2xl font-bold text-blue-700 mb-4">Visi</h3>
            <p class="text-gray-700 dark:text-gray-200 mb-6 text-lg">Menjadi sekolah dasar unggulan yang berkarakter dan berprestasi.</p>
            <h3 class="text-2xl font-bold text-blue-700 mb-4">Misi</h3>
            <ul class="list-disc list-inside text-justify text-gray-700 dark:text-gray-200 mx-auto max-w-xl text-lg space-y-2">
                <li>Menciptakan lingkungan belajar yang aman, nyaman, dan inovatif.</li>
                <li>Mengembangkan potensi siswa secara optimal.</li>
                <li>Mendorong prestasi akademik dan non-akademik.</li>
            </ul>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1200,
            easing: 'ease-in-out'
        });
    </script>
</body>

</html>