<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perawat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-50 to-rose-50 min-h-screen">
    <nav class="bg-gradient-to-r from-pink-700 via-rose-600 to-pink-700 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="bg-rose-400 rounded-full p-2">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <span class="font-bold text-xl text-white">Dashboard Perawat</span>
            </div>

            <!-- Logout -->
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="px-4 py-2 bg-yellow-600 hover:bg-red-700 text-white rounded-lg shadow-md transition">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-12">
        <div class="bg-gradient-to-r from-pink-400 via-rose-400 to-pink-400 rounded-2xl shadow-2xl p-8 mb-8">
            <div class="flex items-center gap-4">
                <div class="bg-white rounded-full p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ec4899" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-white mb-2">Selamat Datang, Ners {{ Auth::user()->nama }}!</h1>
                    <p class="text-pink-50 text-lg">Kelola data pasien dan rekam medis dengan mudah melalui dashboard ini.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-pink-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-pink-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-pink-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-sm font-semibold">Patients</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">24</h3>
                <p class="text-gray-600 text-sm">Pasien Hari Ini</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-rose-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-rose-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-rose-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div class="bg-rose-100 text-rose-700 px-3 py-1 rounded-full text-sm font-semibold">Medical Records</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">1,523</h3>
                <p class="text-gray-600 text-sm">Total Rekam Medis</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-fuchsia-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-fuchsia-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-fuchsia-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div class="bg-fuchsia-100 text-fuchsia-700 px-3 py-1 rounded-full text-sm font-semibold">Profile</div>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-1">Pagi</h3>
                <p class="text-gray-600 text-sm">Jadwal Shift</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-purple-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-purple-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <div class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">Actions</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">18</h3>
                <p class="text-gray-600 text-sm">Tindakan Selesai</p>
            </div>
        </div>

        <h2 class="text-3xl font-bold text-pink-900 mb-6 flex items-center gap-3">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
            Menu Utama
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-8">
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-pink-700">
                <div class="text-center">
                    <div class="bg-pink-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-pink-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-pink-900 mb-3">Pasien & Rekam Medis</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Lihat daftar pasien, kelola (CRUD) data rekam medis, dan lihat detail riwayat.</p>
                    <a href="#" class="inline-block bg-pink-700 hover:bg-pink-800 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Rekam Medis
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-rose-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>View Data Pasien</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-rose-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>CRUD Rekam Medis</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-rose-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>View Detail Riwayat</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-rose-500">
                <div class="text-center">
                    <div class="bg-rose-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-pink-900 mb-3">Profil Saya</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Lihat informasi profil akun perawat, jadwal jaga, dan pengaturan akun.</p>
                    <a href="#" class="inline-block bg-rose-500 hover:bg-rose-600 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Lihat Profil
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-rose-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>View Profil Diri</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-rose-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Jadwal Shift</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-rose-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Pengaturan Akun</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-2xl p-6">
                <h2 class="text-2xl font-bold text-pink-900 mb-6 flex items-center gap-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Aktivitas Terbaru
                </h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
                        <div class="bg-pink-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-pink-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Rekam Medis Diupdate</h3>
                            <p class="text-sm text-gray-600">Pasien "Ny. Ani" - Tanda Vital</p>
                            <p class="text-xs text-gray-400 mt-1">15 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
                        <div class="bg-rose-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-rose-700" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Tindakan Selesai</h3>
                            <p class="text-sm text-gray-600">Injeksi IV untuk Tn. Budi</p>
                            <p class="text-xs text-gray-400 mt-1">1 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-purple-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Login Berhasil</h3>
                            <p class="text-sm text-gray-600">Sesi shift pagi dimulai</p>
                            <p class="text-xs text-gray-400 mt-1">4 jam yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-6">
                <h2 class="text-2xl font-bold text-pink-900 mb-6 flex items-center gap-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Status Sistem
                </h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-rose-50 rounded-xl border-l-4 border-rose-500">
                        <div class="flex items-center gap-3">
                            <div class="bg-rose-100 p-2 rounded-full">
                                <svg class="w-6 h-6 text-rose-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">SIMRS</h3>
                                <p class="text-sm text-gray-600">Terkoneksi ke Server</p>
                            </div>
                        </div>
                        <span class="text-sm font-semibold text-rose-600 bg-rose-100 px-3 py-1 rounded-full">Online</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-rose-50 rounded-xl border-l-4 border-rose-500">
                        <div class="flex items-center gap-3">
                            <div class="bg-rose-100 p-2 rounded-full">
                                <svg class="w-6 h-6 text-rose-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Akses Data</h3>
                                <p class="text-sm text-gray-600">Enkripsi End-to-End</p>
                            </div>
                        </div>
                        <span class="text-sm font-semibold text-rose-600 bg-rose-100 px-3 py-1 rounded-full">Secure</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 max-w-7xl mx-auto">
            <div class="bg-gradient-to-r from-pink-50 to-rose-50 border-l-4 border-pink-700 rounded-xl p-6 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="bg-pink-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-pink-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-pink-900 mb-2 text-xl">Pengingat Shift</h3>
                        <p class="text-gray-700 leading-relaxed">Jangan lupa untuk melakukan verifikasi identitas pasien sebelum tindakan medis. Pastikan seluruh input rekam medis (SOAP) telah tersimpan sebelum logout.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-pink-900 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg">&copy; 2025 RSHP Universitas Airlangga. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>