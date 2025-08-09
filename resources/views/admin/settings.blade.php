<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaturan - Admin Panel</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-[#FAD4D8] border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('admin.index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Logo Posyandu" />
                <span class="self-center hidden lg:block text-2xl font-semibold whitespace-nowrap">Admin Panel - SIP SJ</span>
                <span class="self-center lg:hidden text-2xl font-semibold whitespace-nowrap">Admin - SIP SJ</span>
            </a>
            
            <div class="flex items-center space-x-4">
                <span class="text-gray-700">{{auth()->user()->name}}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        <!-- Breadcrumb -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{route('admin.index')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Pengaturan</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Pengaturan Sistem</h1>
            <p class="text-gray-600">Kelola pengaturan dan konfigurasi sistem</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- System Information -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Sistem</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border rounded-lg p-4">
                            <h4 class="font-medium text-gray-700 mb-2">Versi Aplikasi</h4>
                            <p class="text-gray-600">SIP-SJ v1.0.0</p>
                        </div>
                        <div class="border rounded-lg p-4">
                            <h4 class="font-medium text-gray-700 mb-2">Framework</h4>
                            <p class="text-gray-600">Laravel 10.x</p>
                        </div>
                        <div class="border rounded-lg p-4">
                            <h4 class="font-medium text-gray-700 mb-2">Database</h4>
                            <p class="text-gray-600">MySQL</p>
                        </div>
                        <div class="border rounded-lg p-4">
                            <h4 class="font-medium text-gray-700 mb-2">Server</h4>
                            <p class="text-gray-600">Apache/Nginx</p>
                        </div>
                    </div>
                </div>

                <!-- Database Maintenance -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Pemeliharaan Database</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-4 border rounded-lg">
                            <div>
                                <h4 class="font-medium text-gray-700">Backup Database</h4>
                                <p class="text-sm text-gray-600">Buat backup database sistem</p>
                            </div>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">
                                Backup
                            </button>
                        </div>
                        <div class="flex justify-between items-center p-4 border rounded-lg">
                            <div>
                                <h4 class="font-medium text-gray-700">Optimasi Database</h4>
                                <p class="text-sm text-gray-600">Optimasi performa database</p>
                            </div>
                            <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition duration-300">
                                Optimasi
                            </button>
                        </div>
                        <div class="flex justify-between items-center p-4 border rounded-lg">
                            <div>
                                <h4 class="font-medium text-gray-700">Clear Cache</h4>
                                <p class="text-sm text-gray-600">Hapus cache aplikasi</p>
                            </div>
                            <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition duration-300">
                                Clear Cache
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Application Settings -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Pengaturan Aplikasi</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Posyandu</label>
                            <input type="text" value="Posyandu Seputih Jaya" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Posyandu</label>
                            <textarea rows="3" 
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                      placeholder="Alamat lengkap posyandu..."></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kontak</label>
                            <input type="text" placeholder="Nomor telepon atau email" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">
                            Simpan Pengaturan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Quick Actions & Statistics -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h3>
                    <div class="space-y-3">
                        <button class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition duration-300 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                            </svg>
                            Tambah Pengguna
                        </button>
                        <button class="w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-lg transition duration-300 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            Lihat Laporan
                        </button>
                        <button class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 rounded-lg transition duration-300 flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Kelola Data Balita
                        </button>
                    </div>
                </div>

                <!-- System Status -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Status Sistem</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Server Status</span>
                            <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">
                                Online
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Database</span>
                            <span class="px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">
                                Connected
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Last Backup</span>
                            <span class="text-sm text-gray-600">2 days ago</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Disk Usage</span>
                            <span class="text-sm text-gray-600">45%</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Logs -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Log Aktivitas Terbaru</h3>
                    <div class="space-y-3">
                        <div class="text-sm">
                            <p class="text-gray-800">User login</p>
                            <p class="text-gray-500 text-xs">Admin - 2 menit lalu</p>
                        </div>
                        <div class="text-sm">
                            <p class="text-gray-800">Data balita ditambahkan</p>
                            <p class="text-gray-500 text-xs">Kader Lingkungan 1 - 1 jam lalu</p>
                        </div>
                        <div class="text-sm">
                            <p class="text-gray-800">Laporan diunduh</p>
                            <p class="text-gray-500 text-xs">Bidan - 3 jam lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
