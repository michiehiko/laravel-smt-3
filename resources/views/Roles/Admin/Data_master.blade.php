<!DOCTYPE html>
< lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Master</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-amber-50 min-h-screen">
    <!-- Navigasi -->
    <nav class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <!-- Brand / Nama -->
            <div class="flex items-center gap-4">
                <a href="{{ route('roles.admin.dashboard') }}" class="inline-flex items-center gap-2 bg-blue-800 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Home
                </a>
                <div class="h-6 w-px bg-blue-700"></div>
                <div class="flex items-center gap-3">
                    <div class="bg-amber-500 rounded-full p-2">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                        </svg>
                    </div>
                    <span class="font-bold text-xl text-white">Data Master</span>
                </div>
            </div>
            
            <!-- User Info & Logout -->
            <div class="flex items-center gap-4">
                <span class="text-blue-100">Halo, <span class="font-semibold text-white">Admin</span></span>
                <a href="../Views/Logout.php" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Welcome Section -->
        <div class="bg-gradient-to-r from-amber-400 via-amber-500 to-amber-400 rounded-2xl shadow-2xl p-8 mb-8">
            <div class="flex items-center gap-4">
                <div class="bg-white rounded-full p-4">
                    <svg class="w-12 h-12 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-blue-900 mb-2">Data Master</h1>
                    <p class="text-blue-800 text-lg">Kelola seluruh data master sistem informasi klinik hewan dengan mudah dan terintegrasi.</p>
                </div>
            </div>
        </div>

        <!-- Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 max-w-7xl mx-auto">
            <!-- Menu 1: Data User -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-blue-900">
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Data User</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola data pengguna sistem dan informasi akun.</p>
                    <a href="{{ route('roles.admin.views.data_user') }}" class="inline-block bg-blue-900 hover:bg-blue-800 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Data User
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Jadwal praktik</span>
                    </div>
                </div>
            </div>

            <!-- Menu 7: Data Hewan -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-indigo-600">
                <div class="text-center">
                    <div class="bg-indigo-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Data Hewan</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola database hewan peliharaan terdaftar.</p>
                    <a href="{{ route('roles.admin.views.data_hewan') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Data Hewan
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Profil hewan lengkap</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Riwayat kesehatan</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Data pemilik terkait</span>
                    </div>
                </div>
            </div>

            <!-- Menu 8: Data Kategori -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-pink-600">
                <div class="text-center">
                    <div class="bg-pink-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-pink-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Data Kategori</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola kategori untuk klasifikasi data sistem.</p>
                    <a href="{{ route('roles.admin.views.data_kategori') }}" class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Kategori
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Kategori sistem</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Klasifikasi data</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Master kategori</span>
                    </div>
                </div>
            </div>

            <!-- Menu 9: Kategori Klinis -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-cyan-600">
                <div class="text-center">
                    <div class="bg-cyan-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Kategori Klinis</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola kategori pemeriksaan dan diagnosis klinis.</p>
                    <a href="{{ route('roles.admin.views.data_kategori_klinis') }}" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Kategori Klinis
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Kategori diagnosis</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Klasifikasi medis</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Standar pemeriksaan</span>
                    </div>
                </div>
            </div>

            <!-- Menu 10: Kode Tindakan Terapi -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-lime-600">
                <div class="text-center">
                    <div class="bg-lime-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-lime-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Kode Tindakan Terapi</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola kode dan jenis tindakan terapi medis.</p>
                    <a href="{{ route('roles.admin.views.data_kode_tindakan') }}" class="inline-block bg-lime-600 hover:bg-lime-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Kode Tindakan
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Kode tindakan standar</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Jenis terapi</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Database prosedur</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Info -->
        <div class="mt-8 max-w-7xl mx-auto">
            <div class="bg-gradient-to-r from-blue-50 to-amber-50 border-l-4 border-blue-900 rounded-xl p-6 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="bg-blue-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-blue-900 mb-2 text-xl">Tips Pengelolaan Data Master</h3>
                        <p class="text-gray-700 leading-relaxed">Pastikan data master selalu terupdate dan akurat. Lakukan verifikasi berkala untuk menjaga integritas database. Gunakan fitur pencarian untuk menemukan data dengan cepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
            <!-- Menu 2: Manajemen Role -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-green-600">
                <div class="text-center">
                    <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Manajemen Role</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola role dan hak akses pengguna sistem.</p>
                    <a href="{{ route('roles.admin.views.data_role') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Role
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Pengaturan role</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Hak akses user</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Permission management</span>
                    </div>
                </div>
            </div>

            <!-- Menu 3: Ras Hewan -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-purple-600">
                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-purple-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Ras Hewan</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola data ras hewan peliharaan yang terdaftar.</p>
                    <a href="{{ route('roles.admin.views.ras_hewan') }}" class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Ras Hewan
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Daftar ras lengkap</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Karakteristik ras</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Database terintegrasi</span>
                    </div>
                </div>
            </div>

            <!-- Menu 4: Jenis Hewan -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-orange-600">
                <div class="text-center">
                    <div class="bg-orange-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-orange-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Jenis Hewan</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola kategori jenis hewan (kucing, anjing, dll).</p>
                    <a href="{{ route('roles.admin.views.jenis_hewan') }}" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Jenis Hewan
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Kategori jenis hewan</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Klasifikasi lengkap</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Master data jenis</span>
                    </div>
                </div>
            </div>

            <!-- Menu 5: Data Pemilik -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-red-600">
                <div class="text-center">
                    <div class="bg-red-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Data Pemilik</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola informasi pemilik hewan peliharaan.</p>
                    <a href="{{ route('roles.admin.views.data_pemilik') }}" class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Data Pemilik
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Profil pemilik</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Kontak & alamat</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Riwayat kepemilikan</span>
                    </div>
                </div>
            </div>

            <!-- Menu 6: Data Dokter -->
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-teal-600">
                <div class="text-center">
                    <div class="bg-teal-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-blue-900 mb-3">Data Dokter</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Kelola informasi dokter hewan dan spesialisasi.</p>
                    <a href="{{ route('roles.admin.views.data_dokter') }}" class="inline-block bg-teal-600 hover:bg-teal-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Data Dokter
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Profil dokter</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Spesialisasi & keahlian</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Jadwal praktek</span>
                    </div>
                </div>
            </div>
    </div>
</body>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg">&copy; 2025 RSHP Universitas Airlangga. All rights reserved.</p>
        </div>
    </footer>
</body>
