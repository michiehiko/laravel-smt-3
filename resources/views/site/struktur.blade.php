<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur - RSHP UNAIR</title>
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
                <a href="{{ route('site.about') }}" class="px-6 py-2 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Tentang Kami
                </a>
                <a href="{{ route('site.struktur') }}" class="px-6 py-2 text-white font-semibold rounded-lg bg-amber-500 hover:bg-amber-600 transition-all duration-300 transform hover:scale-105">
                    Struktur
                </a>
            </div>
        </div>
    </nav>

    <!-- Header Banner -->
    <div class="bg-gradient-to-r from-amber-400 via-amber-500 to-amber-400 shadow-xl">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-900 text-center">
                Struktur Organisasi
            </h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-5xl mx-auto">
            <!-- Organizational Chart -->
            <div class="mb-12">
                <!-- Director -->
                <div class="flex justify-center mb-8">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 w-80 border-t-4 border-blue-900 transform hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col items-center">
                            <div class="bg-blue-900 rounded-full w-24 h-24 flex items-center justify-center mb-4">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <span class="bg-blue-900 text-white px-4 py-2 rounded-full text-sm font-bold mb-3">DIREKTUR</span>
                            <h3 class="text-xl font-bold text-blue-900 text-center">Drh. Andi Setiawan, M.Vet</h3>
                        </div>
                    </div>
                </div>

                <!-- Connector Line -->
                <div class="flex justify-center mb-8">
                    <div class="w-0.5 h-12 bg-blue-900"></div>
                </div>

                <!-- Deputy Director & Head of Medical Services -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Deputy Director -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-amber-500 transform hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col items-center">
                            <div class="bg-amber-500 rounded-full w-20 h-20 flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="bg-amber-500 text-white px-4 py-2 rounded-full text-sm font-bold mb-3">WAKIL DIREKTUR</span>
                            <h3 class="text-lg font-bold text-blue-900 text-center">Drh. Siti Rahmawati</h3>
                        </div>
                    </div>

                    <!-- Head of Medical Services -->
                    <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-green-500 transform hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col items-center">
                            <div class="bg-green-500 rounded-full w-20 h-20 flex items-center justify-center mb-4">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <span class="bg-green-500 text-white px-4 py-2 rounded-full text-sm font-bold mb-3">KEPALA PELAYANAN MEDIS</span>
                            <h3 class="text-lg font-bold text-blue-900 text-center">Drh. Budi Santoso</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table View -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                <div class="bg-gradient-to-r from-blue-900 to-blue-800 p-6">
                    <h2 class="text-2xl font-bold text-white text-center">Daftar Struktur Organisasi</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-amber-400 to-amber-500">
                            <tr>
                                <th class="px-6 py-4 text-left text-blue-900 font-bold text-lg">Jabatan</th>
                                <th class="px-6 py-4 text-left text-blue-900 font-bold text-lg">Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-blue-50 transition-colors duration-200">
                                <td class="px-6 py-5 font-semibold text-blue-900">
                                    <div class="flex items-center space-x-3">
                                        <div class="bg-blue-100 rounded-full p-2">
                                            <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                            </svg>
                                        </div>
                                        <span>Direktur</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-gray-700 font-medium">Drh. Andi Setiawan, M.Vet</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-amber-50 transition-colors duration-200">
                                <td class="px-6 py-5 font-semibold text-blue-900">
                                    <div class="flex items-center space-x-3">
                                        <div class="bg-amber-100 rounded-full p-2">
                                            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                            </svg>
                                        </div>
                                        <span>Wakil Direktur</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-gray-700 font-medium">Drh. Siti Rahmawati</td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-5 font-semibold text-blue-900">
                                    <div class="flex items-center space-x-3">
                                        <div class="bg-green-100 rounded-full p-2">
                                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                        <span>Kepala Pelayanan Medis</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-gray-700 font-medium">Drh. Budi Santoso</td>
                            </tr>
                        </tbody>
                    </table>
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