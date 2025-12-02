<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Resepsionis</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-teal-50 to-emerald-50 min-h-screen">
    <nav class="bg-gradient-to-r from-teal-800 via-emerald-700 to-teal-800 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="bg-emerald-400 rounded-full p-2">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <span class="font-bold text-xl text-white">Front Desk System</span>
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
        <div class="bg-gradient-to-r from-teal-500 via-emerald-500 to-teal-500 rounded-2xl shadow-2xl p-8 mb-8">
            <div class="flex items-center gap-4">
                <div class="bg-white rounded-full p-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#0f766e" class="bi bi-headset" viewBox="0 0 16 16">
                        <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-4xl font-bold text-white mb-2">Halo, Resepsionis!</h1>
                    <p class="text-teal-50 text-lg">Kelola pendaftaran pasien dan jadwal temu dokter dengan efisien.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-teal-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-teal-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-sm font-semibold">Owners</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">1,240</h3>
                <p class="text-gray-600 text-sm">Pemilik Terdaftar</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-emerald-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-emerald-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-sm font-semibold">Pets</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">1,892</h3>
                <p class="text-gray-600 text-sm">Hewan Terdaftar</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-cyan-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-cyan-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-sm font-semibold">Appointments</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">28</h3>
                <p class="text-gray-600 text-sm">Booking Hari Ini</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border-t-4 border-indigo-500">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-indigo-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-semibold">Doctors</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">5</h3>
                <p class="text-gray-600 text-sm">Dokter Jaga</p>
            </div>
        </div>

        <h2 class="text-3xl font-bold text-teal-900 mb-6 flex items-center gap-3">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
            Menu Layanan
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-8">
            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-teal-700">
                <div class="text-center">
                    <div class="bg-teal-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-teal-900 mb-3">Data Klien & Hewan</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Registrasi pemilik baru, tambah data hewan peliharaan, dan perbarui informasi kontak.</p>
                    <a href="#" class="inline-block bg-teal-700 hover:bg-teal-800 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Pasien
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Registrasi Member Baru</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Update Data Hewan</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Cetak Kartu Member</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-cyan-600">
                <div class="text-center">
                    <div class="bg-cyan-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-teal-900 mb-3">Jadwal & Temu Dokter</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Atur jadwal temu, booking konsultasi, dan manajemen antrian pasien (Check-in).</p>
                    <a href="#" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Kelola Jadwal 
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Booking Jadwal</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Check-in Antrian</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-5 h-5 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Pembatalan/Reschedule</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-2xl p-6">
                <h2 class="text-2xl font-bold text-teal-900 mb-6 flex items-center gap-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Aktivitas Resepsionis
                </h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
                        <div class="bg-teal-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Pasien Baru Terdaftar</h3>
                            <p class="text-sm text-gray-600">Pemilik: Bpk. Kurniawan, Hewan: Kucing "Miko"</p>
                            <p class="text-xs text-gray-400 mt-1">5 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
                        <div class="bg-cyan-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-cyan-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Booking Via Telepon</h3>
                            <p class="text-sm text-gray-600">Jadwal Dr. Sarah jam 14:00 (Ibu Linda)</p>
                            <p class="text-xs text-gray-400 mt-1">30 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-indigo-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-indigo-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Check-in Berhasil</h3>
                            <p class="text-sm text-gray-600">Antrian No. 5 masuk ke Poli Umum</p>
                            <p class="text-xs text-gray-400 mt-1">1 jam yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-2xl p-6">
                <h2 class="text-2xl font-bold text-teal-900 mb-6 flex items-center gap-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Status Sistem
                </h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                        <div class="flex items-center gap-3">
                            <div class="bg-emerald-100 p-2 rounded-full">
                                <svg class="w-6 h-6 text-emerald-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Sistem Antrian</h3>
                                <p class="text-sm text-gray-600">Berjalan Normal</p>
                            </div>
                        </div>
                        <span class="text-sm font-semibold text-emerald-600 bg-emerald-100 px-3 py-1 rounded-full">Active</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-emerald-50 rounded-xl border-l-4 border-emerald-500">
                        <div class="flex items-center gap-3">
                            <div class="bg-emerald-100 p-2 rounded-full">
                                <svg class="w-6 h-6 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Printer Struk</h3>
                                <p class="text-sm text-gray-600">Siap mencetak</p>
                            </div>
                        </div>
                        <span class="text-sm font-semibold text-emerald-600 bg-emerald-100 px-3 py-1 rounded-full">Ready</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 max-w-7xl mx-auto">
            <div class="bg-gradient-to-r from-teal-50 to-emerald-50 border-l-4 border-teal-700 rounded-xl p-6 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="bg-teal-100 p-3 rounded-full">
                        <svg class="w-8 h-8 text-teal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-teal-900 mb-2 text-xl">Standard Service</h3>
                        <p class="text-gray-700 leading-relaxed">Selalu lakukan verifikasi data pemilik sebelum mendaftarkan antrian. Pastikan nomor handphone aktif untuk notifikasi jadwal dokter.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-teal-900 text-white py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg">&copy; 2025 RSHP Universitas Airlangga. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>