<x-app-layout>
    <!-- Hero Section -->
    <section class="text-center my-16 px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-blue-400 mb-4" data-aos="fade-up">
            Let's get started with Kanaeru
        </h1>
        <p class="text-lg text-gray-400 max-w-xl mx-auto mb-6" data-aos="fade-up" data-aos-delay="100">
            Selamat datang di dashboard pribadi kamu. Jelajahi project, lihat profil, dan hubungi aku dengan mudah di sini.
        </p>
        <a href="{{ route('projects') }}"
           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-md"
           data-aos="zoom-in" data-aos-delay="200">
            Explore Projects
        </a>
    </section>

    <!-- Informasi Grid -->
    <section class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto px-6 mb-16">
        <!-- Tentang Aku -->
        <a href="{{ route('about') }}"
           class="relative group bg-gray-800 hover:bg-gray-700 transform transition-all duration-500 ease-out rounded-xl p-6 flex flex-col items-center text-center shadow-md"
           data-aos="zoom-in-up" data-aos-delay="300">
            <div class="absolute -inset-0.5 bg-blue-500 opacity-0 group-hover:opacity-10 blur-xl rounded-xl transition duration-500"></div>
            <img src="https://img.icons8.com/ios-filled/50/60a5fa/about.png" class="w-10 h-10 mb-3 z-10" alt="About Icon">
            <h2 class="text-xl font-semibold text-blue-300 mb-2 z-10">Tentang Aku</h2>
            <p class="text-gray-400 text-sm z-10">
                Ini adalah halaman tempat aku menyimpan dan menampilkan project pribadi sekaligus belajar Laravel.
            </p>
        </a>

        <!-- Hubungi Aku -->
        <a href="{{ route('contact') }}"
           class="relative group bg-gray-800 hover:bg-gray-700 transform transition-all duration-500 ease-out rounded-xl p-6 flex flex-col items-center text-center shadow-md"
           data-aos="zoom-in-up" data-aos-delay="500">
            <div class="absolute -inset-0.5 bg-blue-500 opacity-0 group-hover:opacity-10 blur-xl rounded-xl transition duration-500"></div>
            <img src="https://img.icons8.com/ios-filled/50/60a5fa/secured-letter.png" class="w-10 h-10 mb-3 z-10" alt="Contact Icon">
            <h2 class="text-xl font-semibold text-blue-300 mb-2 z-10">Hubungi Aku</h2>
            <p class="text-gray-400 text-sm z-10">
                Kamu bisa menemukan aku di Instagram, Telegram, TikTok, dan GitHub untuk informasi lebih lanjut.
            </p>
        </a>
    </section>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 120,
            easing: 'ease-in-out',
            duration: 600,
        });
    </script>
</x-app-layout>
