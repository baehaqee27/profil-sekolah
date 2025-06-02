<nav class="bg-white dark:bg-gray-900 shadow sticky top-0 z-50" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center px-4 py-3">
        <span class="font-extrabold text-blue-700 text-xl">SDN Contoh 01</span>
        <div class="hidden md:flex gap-6 dark:text-white">
            <a href="{{ route('beranda') }}" class="hover:text-blue-600 font-semibold">Beranda</a>
            <a href="{{ route('tentang') }}" class="hover:text-blue-600 font-semibold">Tentang Kami</a>
            <a href="{{ route('program') }}" class="hover:text-blue-600 font-semibold">Program</a>
            <a href="{{ route('fasilitas') }}" class="hover:text-blue-600 font-semibold">Fasilitas</a>
            <a href="{{ route('galeri') }}" class="hover:text-blue-600 font-semibold">Galeri</a>
            <a href="{{ route('kontak') }}" class="hover:text-blue-600 font-semibold">Kontak</a>
        </div>
        <!-- Hamburger -->
        <button @click="open = !open" class="md:hidden text-2xl focus:outline-none dark:text-gray-500 hover:text-gray-700 transition duration-150">
            <svg x-show="!open" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div x-show="open" @click.away="open = false" class="md:hidden px-4 pb-4">
        <div class="flex flex-col gap-3 bg-white dark:bg-gray-900 dark:text-gray-200 rounded shadow mt-2 p-4">
            <a href="{{ route('beranda') }}" class="hover:text-blue-600 font-semibold">Beranda</a>
            <a href="{{ route('tentang') }}" class="hover:text-blue-600 font-semibold">Tentang Kami</a>
            <a href="{{ route('program') }}" class="hover:text-blue-600 font-semibold">Program</a>
            <a href="{{ route('fasilitas') }}" class="hover:text-blue-600 font-semibold">Fasilitas</a>
            <a href="{{ route('galeri') }}" class="hover:text-blue-600 font-semibold">Galeri</a>
            <a href="{{ route('kontak') }}" class="hover:text-blue-600 font-semibold">Kontak</a>
        </div>
    </div>
</nav>