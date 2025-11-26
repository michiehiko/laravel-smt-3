<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - RSHP UNAIR</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-amber-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center py-4 space-x-1">
                <a href="{{ route('site.home') }}" class="px-6 py-2 text-white font-semibold rounded-lg bg-amber-500 hover:bg-amber-600 transition-all duration-300 transform hover:scale-105">
                    Home
                </a>
                <a href="{{ route('site.layanan') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
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
                </a>
                <a href="{{ route('login') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Login
                </a> 
            </div>
        </div>
    </nav>

    <!-- Header Banner -->
    <div class="bg-gradient-to-r from-amber-400 via-amber-500 to-amber-400 shadow-xl">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 text-center leading-tight">
                Selamat Datang di Rumah Sakit Hewan Pendidikan<br>
                <span class="text-2xl md:text-3xl">Universitas Airlangga</span>
            </h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto">
            <!-- Hero Image -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden mb-8 transform hover:scale-[1.02] transition-transform duration-300">
                <img src="https://rshp.unair.ac.id/wp-content/uploads/2024/06/UNIVERSITAS-AIRLANGGA-scaled.webp" 
                     alt="Logo RSHP" 
                     class="w-full h-auto">
            </div>

            <!-- Description Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 border-t-4 border-blue-900">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="w-12 h-12 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-blue-900 mb-4">Inovasi Pelayanan Digital</h2>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Rumah Sakit Hewan Pendidikan Universitas Airlangga berinovasi untuk selalu meningkatkan kualitas pelayanan, 
                            maka dari itu RSHP UNAIR mempunyai fitur pendaftaran online yang mempermudah untuk mendaftarkan hewan 
                            kesayangan anda.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Video Section -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6 text-center">Profil RSHP UNAIR</h2>
                <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                    <iframe 
                        class="w-full h-[400px] rounded-xl"
                        src="https://www.youtube.com/embed/rCfvZPECZvE" 
                        title="RSHP UNAIR"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
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