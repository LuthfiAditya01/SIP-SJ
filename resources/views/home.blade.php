<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Bidan</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <nav class="bg-[#FAD4D8] border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Flowbite Logo" />
                    <span class="self-center hidden lg:block text-2xl font-semibold whitespace-nowrap">Sistem informasi Posyandu Seputih Jaya</span>
                    <span class="self-center lg:hidden text-2xl font-semibold whitespace-nowrap">SIP SJ</span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
                    <div class="flex items-center">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </div>
                </button>
                </button>
                <div class="hidden w-full lg:block lg:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-[#FAD4D8] lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-[#FAD4D8] lg:dark:bg-gray-900">
                        <li>
                            <a href="{{route('home')}}" class="block py-2 px-3 hover:transition-all ease-linear duration-500 hover:bg-gray-100 rounded-full" aria-current="page">Home</a>
                        </li>
                        <li class="flex items-center px-3 hover:bg-gray-100 rounded-full transition-all ease-linear">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="inline-flex items-center justify-center py-2 px-3 text-gray-900 lg:p-0">
                                <span class="flex items-center">
                                    Lihat Data Balita
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#FAD4D8] divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700 hover:transition-all ease-in-out" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 1])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100">Lingkungan 1</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 2])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100">Lingkungan 2</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 3])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100">Lingkungan 3</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 4])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100">Lingkungan 4</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 5])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100">Lingkungan 5</a>
                                    </li>
    
                                </ul>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <a href="{{route('balita.new')}}" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 rounded-full hover:transition-all ease-linear transition-all">Tambah Balita Baru</a>
                        </li>
                        <li class="flex items-center hidden">
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li class="flex items-center hidden">
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 lg:dark:hover:text-blue-500 lg:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <h2 class="mx-8 mt-4 text-2xl lg:mx-24 font-PlusJakartaSans">Selamat Datang,</h2>
        <h1 class="mx-8 mt-2 text-4xl lg:mx-24 font-PlusJakartaSans font-bold">Bidan Darlina</h1>
    
        <div class="flex mx-4 mt-2 lg:mx-8 lg:mt-4 justify-evenly items-center flex-wrap font-PlusJakartaSans ">
            <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
                <div class="flex flex-row items-center">
                    <img src="{{asset('baby.png')}}" alt="" class="rounded-full w-20">
                    <h2 class="flex text-3xl font-medium ml-4">Balita Sehat</h2>
                </div>
                <h4 class="text-4xl ml-24 font-bold">{{$balitaSehat}} Balita</h4>
            </div>
    
            <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
                <div class="flex flex-row items-center">
                    <img src="{{asset('height.png')}}" alt="" class=" w-20">
                    <h2 class="flex text-3xl font-medium ml-4">Balita Perlu Perhatian</h2>
                </div>
                <h4 class="text-4xl ml-24 font-bold">{{($balitaStunting+$balitaPerluPerhatian)}} Balita</h4>
            </div>
    
            <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
                <div class="flex flex-row items-center">
                    <img src="{{asset('statistics.png')}}" alt="" class="rounded-full w-20">
                    <h2 class="flex text-3xl font-medium ml-4">Data yang Perlu Diverifikasi</h2>
                </div>
                <h4 class="text-4xl ml-24 font-bold">{{$balitaPerluDiverifikasi}} Balita</h4>
            </div>
        </div>
    
        {{-- Chart for Low-Medium Dimension (Phone) --}}
        <div class="mt-4 mx-5 mb-4 rounded-xl lg:hidden bg-[#FFEAA7]">
            <canvas id="myChart" width="600" height="400"></canvas>
        </div>
    
        {{-- Chart for Medium-High Dimension (Tablet, PC) --}}
        <div class="mt-10 lg:block hidden mx-28 bg-[#FFEAA7] p-5 rounded-xl">
            <canvas id="myChartDesktop" width="600" height="400"></canvas>
        </div>
    
    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Ambil context dari canvas
        const ctx = document.getElementById('myChart').getContext('2d');
        const ctxDesktop = document.getElementById('myChartDesktop').getContext('2d');
        
        const dataFromBackend = @json($formattedData);
    
        // Data untuk chart
        const data = {
            labels: dataFromBackend.lingkungan,
            datasets: [{
                label: 'Balita Yang Sehat',
                data: dataFromBackend.sehat,
                backgroundColor: 'rgb(255, 99, 132)',
            }, {
                label: 'Balita Yang Perlu Perhatian',
                data: dataFromBackend.kurang_sehat,
                backgroundColor: 'rgb(54, 162, 235)',
            }, {
                label: 'Balita dengan Status Stunting',
                data: dataFromBackend.stunting,
                backgroundColor: 'rgb(75, 192, 192)',
            },
        ]
        };
    
        // Konfigurasi chart
        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Contoh Stacked Bar Chart'
                    },
                },
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        };
    
        // Buat chart baru
        const myChart = new Chart(ctx, config);
        const myChartDesktop = new Chart(ctxDesktop, config);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
    
</body>

</html>