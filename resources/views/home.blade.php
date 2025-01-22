<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    <title>Dashboard | Bidan</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <nav class="bg-[#FAD4D8] border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{'home'}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Flowbite Logo" />
                    <span class="self-center hidden md:block text-2xl font-semibold whitespace-nowrap dark:text-white">Sistem informasi Posyandu Seputih Jaya</span>
                    <span class="self-center md:hidden text-2xl font-semibold whitespace-nowrap dark:text-white">SIP SJ</span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-[#FAD4D8] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-[#FAD4D8] dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{'home'}}" class="block px-4 py-2 hover:transition-all ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Lihat Data Balita<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#FAD4D8] divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400 hover:transition-all ease-in-out" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:transition-all ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:transition-all ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:transition-all ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 3</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:transition-all ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 4</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index')}}" class="block px-4 py-2 hover:transition-all ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 5</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <h2 class="mx-8 mt-4 text-2xl font-PlusJakartaSans">Selamat Datang,</h2>
    <h1 class="mx-8 mt-2 text-4xl font-PlusJakartaSans font-bold">Bidan Helisma</h1>

    <div class="flex mx-4 mt-2 md:mx-8 md:mt-4 flex-col md:flex-row items-center font-PlusJakartaSans justify-evenly">
        <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
            <div class="flex flex-row items-center">
                <img src="{{asset('baby.png')}}" alt="" class="rounded-full w-20">
                <h2 class="flex text-3xl font-medium ml-4">Jumlah Balita Sehat</h2>
            </div>
            <h4 class="text-4xl ml-24 font-bold">36 Balita</h4>
        </div>

        <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
            <div class="flex flex-row items-center">
                <img src="{{asset('baby_sick.png')}}" alt="" class="rounded-full w-20">
                <h2 class="flex text-3xl font-medium ml-4">Jumlah Balita Kurang Sehat</h2>
            </div>
            <h4 class="text-4xl ml-24 font-bold">6 Balita</h4>
        </div>

        <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
            <div class="flex flex-row items-center">
                <img src="{{asset('height.png')}}" alt="" class=" w-20">
                <h2 class="flex text-3xl font-medium ml-4">Jumlah Kasus Stunting</h2>
            </div>
            <h4 class="text-4xl ml-24 font-bold">2 Balita</h4>
        </div>
    </div>

    {{-- Chart for Low-Medium Dimension (Phone) --}}
    <div class="mt-4 mx-5 mb-4 rounded-xl md:hidden bg-[#FFEAA7]">
        <canvas id="myChart" width="600" height="400"></canvas>
    </div>

    {{-- Chart for Medium-High Dimension (Tablet, PC) --}}
    <div class="mt-10 md:block hidden mx-28 bg-[#FFEAA7] p-5 rounded-xl">
        <canvas id="myChartDesktop" width="600" height="400"></canvas>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil context dari canvas
    const ctx = document.getElementById('myChart').getContext('2d');
    const ctxDesktop = document.getElementById('myChartDesktop').getContext('2d')

    // Data untuk chart
    const data = {
        labels: ['Lingkungan 1', 'Lingkungan 2', 'Lingkungan 3', 'Lingkungan 4', 'Lingkungan 5'],
        datasets: [{
            label: 'Balita Yang Sehat',
            data: [10, 20, 30, 40, 45],
            backgroundColor: 'rgb(255, 99, 132)',
        }, {
            label: 'Balita Yang Kurang Sehat',
            data: [15, 25, 35, 45, 35],
            backgroundColor: 'rgb(54, 162, 235)',
        }, {
            label: 'Balita dengan Status Stunting',
            data: [20, 30, 40, 50, 25],
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
</html>
