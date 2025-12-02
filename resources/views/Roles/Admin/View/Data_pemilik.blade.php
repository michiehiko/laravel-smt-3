<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemilik Hewan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-amber-50 min-h-screen flex flex-col">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="bg-amber-500 rounded-full p-2">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <span class="font-bold text-xl text-white">Menu Pemilik Hewan</span>
        </div>

        <div class="flex items-center gap-4">
            <span class="text-blue-100">Halo, 
                <span class="font-semibold text-white">{{ Auth::user()->nama ?? 'Admin' }}</span>
            </span>
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
    </div>
</nav>

<main class="flex-grow container mx-auto px-4 py-12">

    <div class="mb-8">
        <div class="bg-gradient-to-r from-amber-400 via-amber-500 to-amber-400 rounded-t-2xl shadow-xl p-6">
            <h2 class="text-3xl font-bold text-blue-900 flex items-center gap-3">
                <div class="bg-white rounded-full p-3">
                    <svg class="w-8 h-8 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <span>Data Pemilik Hewan</span>
            </h2>
            <p class="text-blue-800 mt-2 ml-14">Data pemilik hewan yang terdaftar di RSHP</p>
        </div>
    </div>

    <!-- Tombol Tambah -->
    <div class="mb-6">
        {{-- <a href="{{ route('pemilik.create') }}" --}}
            class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Tambah Pemilik</span>
        </a>
    </div>

    <!-- Tabel -->
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-blue-900 to-blue-800 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left font-bold text-lg w-20">No</th>
                        <th class="px-6 py-4 text-left font-bold text-lg">Nama Pemilik</th>
                        <th class="px-6 py-4 text-left font-bold text-lg">No WA</th>
                        <th class="px-6 py-4 text-left font-bold text-lg">Alamat</th>
                        <th class="px-6 py-4 text-left font-bold text-lg">Email</th>
                        <th class="px-6 py-4 text-center font-bold text-lg">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @forelse($datapemilik as $i => $p)
                    <tr class="hover:bg-blue-50 transition-colors duration-200">
                        <td class="px-6 py-5 font-semibold text-blue-900">{{ $i + 1 }}</td>
                        <td class="px-6 py-5 font-medium text-gray-800">{{ $p->user->nama }}</td>
                        <td class="px-6 py-5 text-gray-700">
                            <span class="inline-flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                {{ $p->no_wa }}
                            </span>
                        </td>
                        <td class="px-6 py-5 text-gray-700">{{ $p->alamat }}</td>
                        <td class="px-6 py-5 text-gray-700">
                            <span class="inline-flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                {{ $p->user->email }}
                            </span>
                        </td>

                        <td class="px-6 py-5 text-center">
                            <div class="flex items-center justify-center gap-2">

                                {{-- Edit --}}
                                {{-- <a href="{{ route('pemilik.edit', $p->idpemilik) }}" --}}
                                    class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold px-4 py-2 rounded-lg shadow transition-all duration-300 transform hover:scale-105">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                </a>

                                {{-- Delete --}}
                                {{-- <form action="{{ route('pemilik.destroy', $p->idpemilik) }}" method="POST" --}}
                                    onsubmit="return confirm('Hapus pemilik {{ $p->user->nama }}?')"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-lg shadow transition-all duration-300 transform hover:scale-105">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Hapus
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <div class="bg-gray-100 rounded-full p-8 mb-4">
                                    <svg class="w-20 h-20 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                </div>
                                <p class="text-xl font-bold text-gray-700 mb-2">Belum ada data pemilik</p>
                                <p class="text-gray-500">Silahkan tambahkan pemilik baru</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="mt-8">
        <a href="{{ route('data_master') }}"
            class="inline-flex items-center gap-2 bg-blue-900 hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Kembali ke Data Master</span>
        </a>
    </div>

</main>

<footer class="bg-blue-900 text-white py-6 mt-auto">
    <div class="container mx-auto px-4 text-center">
        <p class="text-lg">&copy; 2025 RSHP Universitas Airlangga. All rights reserved.</p>
    </div>
</footer>

</body>
</html>