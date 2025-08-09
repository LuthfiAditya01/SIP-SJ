<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Posyandu Seputih Jaya</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-[#FAD4D8]">
    <header>
        <nav class="bg-[#FAD4D8] border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Logo Posyandu" />
                    <span class="self-center hidden lg:block text-2xl font-semibold whitespace-nowrap">Sistem informasi Posyandu Seputih Jaya</span>
                    <span class="self-center lg:hidden text-2xl font-semibold whitespace-nowrap">SIP SJ</span>
                </a>
                <div class="flex items-center space-x-3 md:space-x-6">
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('admin.index') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Admin Panel</a>
                            @else
                            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Dashboard</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="max-w-7xl mx-auto">
            <!-- Hero Section -->
            <div class="text-center py-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Selamat Datang di Posyandu Seputih Jaya
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Sistem Informasi Pemantauan Kesehatan Balita
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <!-- Feature 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-12 h-12 bg-[#FAD4D8] rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Pemantauan Kesehatan</h3>
                    <p class="text-gray-600">
                        Pantau pertumbuhan dan perkembangan balita secara teratur dan terstruktur.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-12 h-12 bg-[#FAD4D8] rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Data Terintegrasi</h3>
                    <p class="text-gray-600">
                        Akses data kesehatan balita dari berbagai lingkungan dalam satu sistem.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-12 h-12 bg-[#FAD4D8] rounded-full flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Analisis Kesehatan</h3>
                    <p class="text-gray-600">
                        Lihat statistik dan analisis kesehatan balita untuk pengambilan keputusan yang lebih baik.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white mt-12 py-8">
        <div class="container mx-auto px-4">
            <div class="text-center text-gray-600">
                <p>&copy; {{ date('Y') }} Posyandu Seputih Jaya. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
</body>

</html>
