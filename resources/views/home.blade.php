<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | {{auth()->user()->role}}</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <nav class="bg-[#FAD4D8] border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{route('dashboard')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Logo Posyandu" />
                    <span class="self-center hidden lg:block text-2xl font-semibold whitespace-nowrap">Sistem informasi Posyandu Seputih Jaya</span>
                    <span class="self-center lg:hidden text-2xl font-semibold whitespace-nowrap">SIP SJ</span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden items-center w-full lg:block lg:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-[#FAD4D8] lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-[#FAD4D8]">
                        <li class="flex items-center px-3 hover:bg-gray-100 rounded-full transition-all ease-linear">
                            <a href="{{route('dashboard')}}" class="block py-2 px-3 hover:transition-all ease-linear duration-500 hover:bg-gray-100 rounded-full" aria-current="page">Home</a>
                        </li>
                        <li class="flex items-center px-3 hover:bg-gray-100 rounded-full transition-all ease-linear">
                            @if(auth()->user()->role == 'bidan')
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="inline-flex items-center justify-center py-2 px-3 text-gray-900 lg:p-0">
                                <span class="flex items-center">
                                    Lihat Data Balita
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </span>
                            </button>
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#FAD4D8] divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                    @for($i = 1; $i <= 5; $i++)
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => $i])}}" class="block px-4 py-2 hover:bg-gray-100">Lingkungan {{$i}}</a>
                                    </li>
                                    @endfor
                                </ul>
                            </div>
                            @elseif(auth()->user()->role == 'kader')
                                <a href="{{route('balita.index', ['lingkungan' => $lingkungan])}}" class="inline-flex items-center justify-center py-2 px-3 text-gray-900 lg:p-0">
                                    <span class="flex items-center">
                                        Lihat Data Balita
                                    </span>
                                </a>
                            @endif
                        </li>
                        <li class="flex items-center">
                            <a href="{{route('balita.new')}}" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 rounded-full transition-all ease-linear">Tambah Balita Baru</a>
                        </li>
                        <li class="flex items-center px-3 hover:bg-gray-100 rounded-full transition-all ease-linear">
                            <form method="POST" action="{{ route('logout') }}" class="block py-2 px-3">
                                @csrf
                                <button type="submit" class="text-gray-900 hover:bg-gray-100 rounded-full px-3 py-2 w-full text-left">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mx-auto px-4">
        <h2 class="text-2xl mt-4 font-PlusJakartaSans">Selamat Datang,</h2>
        <h1 class="text-4xl mt-2 font-PlusJakartaSans font-bold">{{auth()->user()->role}} {{auth()->user()->name}}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
            <div class="bg-[#FFEAA7] p-6 rounded-xl">
                <div class="flex items-center">
                    <img src="{{asset('baby.png')}}" alt="Balita Sehat" class="w-20 h-20 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-2xl font-medium">Balita Sehat</h2>
                        <p class="text-3xl font-bold">{{$balitaSehat}} Balita</p>
                    </div>
                </div>
            </div>

            <div class="bg-[#FFEAA7] p-6 rounded-xl">
                <div class="flex items-center">
                    <img src="{{asset('height.png')}}" alt="Perlu Perhatian" class="w-20 h-20">
                    <div class="ml-4">
                        <h2 class="text-2xl font-medium">Perlu Perhatian</h2>
                        <p class="text-3xl font-bold">{{($balitaStunting+$balitaPerluPerhatian)}} Balita</p>
                    </div>
                </div>
            </div>

            <div class="bg-[#FFEAA7] p-6 rounded-xl">
                <div class="flex items-center">
                    <img src="{{asset('statistics.png')}}" alt="Perlu Verifikasi" class="w-20 h-20 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-2xl font-medium">Perlu Verifikasi</h2>
                        <p class="text-3xl font-bold">{{$balitaPerluDiverifikasi}} Balita</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-[#FFEAA7] p-6 rounded-xl">
            <canvas id="statsChart"></canvas>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const data = @json($formattedData);
        const ctx = document.getElementById('statsChart').getContext('2d');
        
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.lingkungan,
                datasets: [{
                    label: 'Balita Sehat',
                    data: data.sehat,
                    backgroundColor: 'rgb(255, 99, 132)',
                }, {
                    label: 'Perlu Perhatian',
                    data: data.kurang_sehat,
                    backgroundColor: 'rgb(54, 162, 235)',
                }, {
                    label: 'Status Stunting',
                    data: data.stunting,
                    backgroundColor: 'rgb(75, 192, 192)',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Statistik Balita per Lingkungan'
                    }
                },
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
</body>
</html>