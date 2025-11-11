<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - RSHP UNAIR</title>
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
                <a href="{{ route('site.layanan') }}" class="px-6 py-2 text-white font-semibold rounded-lg bg-amber-500 hover:bg-amber-600 transition-all duration-300 transform hover:scale-105">
                    Layanan
                </a>
                <a href="{{ route('site.visimisi') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
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
                Layanan Kami
            </h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-blue-900 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 rounded-full p-4">
                            <svg class="w-8 h-8 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Pemeriksaan Kesehatan Hewan</h3>
                            <p class="text-gray-600">Pemeriksaan menyeluruh untuk memastikan kesehatan optimal hewan peliharaan Anda</p>
                        </div>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-amber-500 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-amber-100 rounded-full p-4">
                            <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Vaksinasi dan Sterilisasi</h3>
                            <p class="text-gray-600">Program vaksinasi lengkap dan prosedur sterilisasi yang aman</p>
                        </div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-green-500 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-green-100 rounded-full p-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Perawatan Gigi Hewan</h3>
                            <p class="text-gray-600">Perawatan dan pembersihan gigi profesional untuk kesehatan mulut hewan</p>
                        </div>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="bg-white rounded-2xl shadow-xl p-8 border-l-4 border-purple-500 transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-purple-100 rounded-full p-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Penitipan dan Grooming</h3>
                            <p class="text-gray-600">Layanan penitipan dan grooming berkualitas dengan fasilitas modern</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-12 bg-gradient-to-r from-blue-900 to-blue-800 rounded-2xl shadow-2xl p-10 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">Butuh Konsultasi?</h2>
                <p class="text-xl mb-6">Tim profesional kami siap membantu kesehatan hewan peliharaan Anda</p>
                <button class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-lg transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Hubungi Kami
                </button>
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