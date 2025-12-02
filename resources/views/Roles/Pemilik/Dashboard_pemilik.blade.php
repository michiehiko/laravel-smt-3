<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pemilik</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-rose-50 to-red-50 min-h-screen font-sans text-rose-950">
    <nav class="bg-gradient-to-r from-rose-950 via-red-900 to-rose-950 shadow-xl sticky top-0 z-50 border-b border-rose-800">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="bg-white/10 rounded-lg p-2 backdrop-blur-sm border border-white/20">
                    <svg class="w-6 h-6 text-rose-100" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <span class="font-bold text-xl text-rose-50 tracking-wide">Pet Owner Portal</span>
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

    <div class="container mx-auto px-4 py-10">
        <div class="bg-gradient-to-r from-rose-900 to-red-900 rounded-2xl shadow-2xl p-8 mb-8 text-white relative overflow-hidden">
            <div class="absolute top-0 right-0 -mr-10 -mt-10 w-40 h-40 rounded-full bg-white/10 blur-2xl"></div>
            
            <div class="flex items-center gap-6 relative z-10">
                <div class="bg-white/10 p-4 rounded-full border border-white/20 backdrop-blur-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-heart" viewBox="0 0 16 16">
                        <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold mb-2">Selamat Datang, Kak Budi.</h1>
                    <p class="text-rose-200 text-lg">Pantau kesehatan anabul dengan mudah dan nyaman.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-rose-900 hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-rose-100 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-rose-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z" />
                        </svg>
                    </div>
                    <div class="text-rose-900 text-xs font-bold uppercase tracking-wide">Hewan Saya</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">3</h3>
                <p class="text-gray-500 text-sm">Terdaftar</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-red-800 hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-red-100 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-red-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="text-red-800 text-xs font-bold uppercase tracking-wide">Jadwal</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">1</h3>
                <p class="text-gray-500 text-sm">Temu Dokter (Besok)</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-rose-700 hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-rose-100 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-rose-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div class="text-rose-700 text-xs font-bold uppercase tracking-wide">Rekam Medis</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">14</h3>
                <p class="text-gray-500 text-sm">Total Riwayat</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6 border-t-4 border-red-700 hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <div class="flex items-center justify-between mb-4">
                    <div class="bg-red-100 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </div>
                    <div class="text-red-700 text-xs font-bold uppercase tracking-wide">Notifikasi</div>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-1">2</h3>
                <p class="text-gray-500 text-sm">Pesan Baru</p>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-rose-950 mb-6 flex items-center gap-3">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
            Menu Layanan
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-rose-900 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-center">
                    <div class="bg-rose-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 border border-rose-200">
                        <svg class="w-10 h-10 text-rose-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-rose-950 mb-3">Profil & Hewan Saya</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Lihat profil Anda, data hewan peliharaan, dan riwayat rekam medis mereka.</p>
                    <a href="#" class="inline-block bg-rose-900 hover:bg-rose-950 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Lihat Data Hewan
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-700 mb-2">
                        <svg class="w-5 h-5 text-rose-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Edit Profil Pemilik</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-700 mb-2">
                        <svg class="w-5 h-5 text-rose-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>View Rekam Medis</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-700">
                        <svg class="w-5 h-5 text-rose-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Kartu Vaksin Digital</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-red-800 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="text-center">
                    <div class="bg-red-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 border border-red-200">
                        <svg class="w-10 h-10 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-rose-950 mb-3">Jadwal Temu Dokter</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">Buat janji temu baru, lihat jadwal kontrol mendatang, atau cek riwayat kunjungan.</p>
                    <a href="#" class="inline-block bg-red-900 hover:bg-red-950 text-white font-semibold px-8 py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Lihat Jadwal
                    </a>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-sm text-gray-700 mb-2">
                        <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Booking Appointment</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-700 mb-2">
                        <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Jadwal Kontrol</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm text-gray-700">
                        <svg class="w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Reschedule Janji</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-xl p-6 border-l-4 border-rose-900">
                <h2 class="text-2xl font-bold text-rose-950 mb-6 flex items-center gap-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Aktivitas Terbaru
                </h2>
                <div class="space-y-4">
                    <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
                        <div class="bg-rose-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-rose-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Booking Dikonfirmasi</h3>
                            <p class="text-sm text-gray-600">Dr. Sarah - Besok, 10:00 WIB</p>
                            <p class="text-xs text-gray-400 mt-1">1 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 pb-4 border-b border-gray-100">
                        <div class="bg-red-100 p-2 rounded-full">
                            <svg class="w-6 h-6 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Rekam Medis Diupdate</h3>
                            <p class="text-sm text-gray-600">Hasil Lab "Miko" sudah keluar</p>
                            <p class="text-xs text-gray-400 mt-1">Kemarin</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="bg-rose-50 p-2 rounded-full">
                            <svg class="w-6 h-6 text-rose-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800">Pengingat Vaksin</h3>
                            <p class="text-sm text-gray-600">Jadwal vaksin rabies bulan depan</p>
                            <p class="text-xs text-gray-400 mt-1">2 hari yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-6 border-l-4 border-red-900">
                <h2 class="text-2xl font-bold text-rose-950 mb-6 flex items-center gap-2">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Info Klinik
                </h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-rose-50 rounded-xl border border-rose-100">
                        <div class="flex items-center gap-3">
                            <div class="bg-white p-2 rounded-full shadow-sm">
                                <svg class="w-6 h-6 text-rose-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Jam Operasional</h3>
                                <p class="text-sm text-gray-600">Senin - Sabtu (08:00 - 20:00)</p>
                            </div>
                        </div>
                        <span class="text-sm font-semibold text-rose-900 bg-rose-200 px-3 py-1 rounded-full">Buka</span>
                    </div>
                    <div class="flex items-center justify-between p-4 bg-red-50 rounded-xl border border-red-100">
                        <div class="flex items-center gap-3">
                            <div class="bg-white p-2 rounded-full shadow-sm">
                                <svg class="w-6 h-6 text-red-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Layanan Darurat</h3>
                                <p class="text-sm text-gray-600">UGD Hewan 24 Jam</p>
                            </div>
                        </div>
                        <span class="text-sm font-semibold text-white bg-red-700 px-3 py-1 rounded-full shadow">Siaga</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 max-w-7xl mx-auto">
            <div class="bg-gradient-to-r from-rose-100 to-red-100 border-l-4 border-rose-950 rounded-xl p-6 shadow-lg">
                <div class="flex items-start gap-4">
                    <div class="bg-rose-900 p-3 rounded-full text-white shadow-lg">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-rose-950 mb-2 text-xl">Tips Hari Ini</h3>
                        <p class="text-rose-900 leading-relaxed font-medium">Jangan lupa untuk memberikan air minum yang cukup bagi hewan peliharaan Anda, terutama di cuaca panas ini. Cek jadwal vaksinasi secara berkala di menu profil.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-rose-950 text-white py-6 mt-12 border-t border-rose-900">
        <div class="container mx-auto px-4 text-center">
            <p class="text-lg opacity-80">&copy; 2025 RSHP Universitas Airlangga. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>