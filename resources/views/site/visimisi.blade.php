<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi & Misi - RSHP UNAIR</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-amber-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center py-4 space-x-1">
                <a href="{{ route('site.home')}}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Home
                </a>
                <a href="{{ route('site.layanan') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Layanan
                </a>
                <a href="{{ route('site.visimisi') }}" class="px-6 py-2 text-white font-semibold rounded-lg bg-amber-500 hover:bg-amber-600 transition-all duration-300 transform hover:scale-105">
                    Visi & Misi
                </a>
                <a href="{{ route('site.about') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Tentang Kami
                </a>
                <a href="{{ route('site.struktur') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Struktur
                </a>
            </div>
        </div>
    </nav>

    <!-- Header Banner -->
    <div class="bg-gradient-to-r from-amber-400 via-amber-500 to-amber-400 shadow-xl">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 text-center">
                Visi & Misi
            </h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-5xl mx-auto">
            <!-- Visi Section -->
            <div class="bg-white rounded-2xl shadow-2xl p-10 mb-8 border-t-4 border-blue-900 transform hover:scale-[1.02] transition-all duration-300">
                <div class="flex items-center justify-center mb-6">
                    <div class="bg-blue-100 rounded-full p-6">
                        <svg class="w-16 h-16 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-4xl font-bold text-blue-900 mb-6 text-center">Visi</h2>
                <p class="text-xl text-gray-700 leading-relaxed text-center italic">
                    "Menjadi klinik hewan terdepan yang mengutamakan kesejahteraan dan kesehatan hewan peliharaan."
                </p>
            </div>

            <!-- Misi Section -->
            <div class="bg-white rounded-2xl shadow-2xl p-10 border-t-4 border-amber-500">
                <div class="flex items-center justify-center mb-6">
                    <div class="bg-amber-100 rounded-full p-6">
                        <svg class="w-16 h-16 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-4xl font-bold text-blue-900 mb-8 text-center">Misi</h2>
                
                <div class="space-y-6">
                    <!-- Misi 1 -->
                    <div class="flex items-start space-x-4 bg-gradient-to-r from-blue-50 to-white p-6 rounded-xl border-l-4 border-blue-500 transform hover:scale-105 transition-all duration-300">
                        <div class="flex-shrink-0 bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg">
                            1
                        </div>
                        <p class="text-lg text-gray-700 pt-1">
                            Memberikan pelayanan medis berkualitas tinggi.
                        </p>
                    </div>

                    <!-- Misi 2 -->
                    <div class="flex items-start space-x-4 bg-gradient-to-r from-amber-50 to-white p-6 rounded-xl border-l-4 border-amber-500 transform hover:scale-105 transition-all duration-300">
                        <div class="flex-shrink-0 bg-amber-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg">
                            2
                        </div>
                        <p class="text-lg text-gray-700 pt-1">
                            Mengedukasi masyarakat tentang perawatan hewan.
                        </p>
                    </div>

                    <!-- Misi 3 -->
                    <div class="flex items-start space-x-4 bg-gradient-to-r from-green-50 to-white p-6 rounded-xl border-l-4 border-green-500 transform hover:scale-105 transition-all duration-300">
                        <div class="flex-shrink-0 bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg">
                            3
                        </div>
                        <p class="text-lg text-gray-700 pt-1">
                            Menciptakan lingkungan yang ramah dan nyaman bagi hewan serta pemiliknya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg">&copy; 2024 RSHP Universitas Airlangga. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>