<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - RSHP UNAIR</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-amber-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center py-4 space-x-1">
                 <a href="{{ route('site.home') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Home
                </a>
                <a href="{{ route('site.layanan') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Layanan
                </a>
                <a href="{{ route('site.visimisi') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Visi & Misi
                </a>
                <a href="{{ route('site.about') }}" class="px-6 py-2 text-white font-semibold rounded-lg bg-amber-500 hover:bg-amber-600 transition-all duration-300 transform hover:scale-105">
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
                Tentang Kami
            </h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-5xl mx-auto">
            <!-- Hero Section -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden mb-8">
                <div class="bg-gradient-to-r from-blue-900 to-blue-800 p-8 text-center">
                    <h2 class="text-4xl font-bold text-white mb-4">Rumah Sakit Hewan Pendidikan</h2>
                    <h3 class="text-3xl font-semibold text-amber-400">Universitas Airlangga</h3>
                </div>
                
                <div class="p-10">
                    <!-- History Card -->
                    <div class="mb-8 bg-gradient-to-r from-blue-50 to-white p-8 rounded-xl border-l-4 border-blue-900">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 bg-blue-100 rounded-full p-4">
                                <svg class="w-10 h-10 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-blue-900 mb-3">Sejarah Kami</h3>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    Klinik Hewan Bahagia berdiri sejak 2010 dengan tujuan memberikan pelayanan kesehatan terbaik 
                                    bagi hewan peliharaan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Team Card -->
                    <div class="bg-gradient-to-r from-amber-50 to-white p-8 rounded-xl border-l-4 border-amber-500">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0 bg-amber-100 rounded-full p-4">
                                <svg class="w-10 h-10 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-blue-900 mb-3">Tim Profesional</h3>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    Kami memiliki tim dokter hewan profesional dan fasilitas modern untuk mendukung kesehatan hewan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Terpercaya</h3>
                    <p class="text-gray-600">Pengalaman lebih dari 10 tahun melayani hewan kesayangan Anda</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="bg-amber-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Modern</h3>
                    <p class="text-gray-600">Dilengkapi dengan peralatan medis terkini dan teknologi modern</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Peduli</h3>
                    <p class="text-gray-600">Penuh kasih sayang dan perhatian terhadap setiap hewan</p>
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