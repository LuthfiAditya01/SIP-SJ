<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data {{$balita->nama_balita}}</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="bg-[#FAD4D8] border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Flowbite Logo" />
                    <span class="self-center hidden lg:block text-2xl font-semibold whitespace-nowrap dark:text-white">Sistem informasi Posyandu Seputih Jaya</span>
                    <span class="self-center lg:hidden text-2xl font-semibold whitespace-nowrap dark:text-white">SIP SJ</span>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                    <div class="flex items-center">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </div>
                </button>
                </button>
                <div class="hidden w-full lg:block lg:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-[#FAD4D8] lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-[#FAD4D8] dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{route('home')}}" class="block py-2 px-3 hover:transition-all ease-linear duration-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-full" aria-current="page">Home</a>
                        </li>
                        <li class="flex items-center px-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-full transition-all ease-linear">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="inline-flex items-center justify-center py-2 px-3 text-gray-900 lg:p-0">
                                <span class="flex items-center">
                                    Lihat Data Balita
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#FAD4D8] divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400 hover:transition-all ease-in-out" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 1])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 1</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 2])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 2</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 3])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 3</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 4])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 4</a>
                                    </li>
                                    <li>
                                        <a href="{{route('balita.index', ['lingkungan' => 5])}}" class="block px-4 py-2 hover:transition-all ease-linear duration-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lingkungan 5</a>
                                    </li>
    
                                </ul>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <a href="{{route('balita.new')}}" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 dark:hover:text-white rounded-full hover:transition-all ease-linear dark:text-white transition-all">Tambah Balita Baru</a>
                        </li>
                        <li class="flex items-center hidden">
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li class="flex items-center hidden">
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="flex justify-between mx-16">
        <div class="flex justify-center mt-4">
            <a href="{{ url()->previous() }}" class="bg-[#D9D9D9] hover:bg-[#f8bdc3] hover:translate-x-1 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out place-items-center">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali
                </div>
            </a>
        </div>
        <div class="flex justify-center mt-4">
            <a href="{{route('balita.add', ['id_balita' => $id_balita])}}" class="hover:bg-[#55A4C0] bg-[#FAD4D8] hover:translate-x-1 text-gray-600 hover:text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Data
                </div>
            </a>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div style="font-family: Arial, sans-serif; border: 1px solid #ccc; border-radius: 10px;" class="items-center w-4/5 mt-5 p-5">
            <div>
                <h1 style="color: #333;" class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Nama Anak / Nama Orang Tua:</h1>
                <h2 style="color: #555;" class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{$balita->nama_balita}} / {{$balita->nama_ortu}}</h2>
            </div> <br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Alamat:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">Lingkungan {{$balita->lingkungan}}</h2>
            </div><br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Tanggal Pertama Kali Ditimbang:</h1>
                @if($timbanganPertama)
                    <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{ $timbanganPertama->tanggal_penimbangan->format('d F Y') }}</h2>
                @else
                    <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">Data tidak tersedia</h2>
                @endif
            </div><br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Tanggal Lahir / Umur Balita:</h1>
                <h2 id="umurBalita" class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{$balita->tanggal_lahir}} / </h2>
            </div><br>
            @if(empty($perkembangan))
            <h1>Maaf, Belum ada data perkembangan Balita yang tercatat</h1>
            @else
            <button onclick="togglePerkembangan()" id="toggleButton" class="p-3 rounded-md bg-[#FAD4D8] hover:bg-white hover:outline-[#FAD4D8] hover:outline-double transition-all hover:translate-x-1">Tampilkan Perkembangan Total</button><br><br>
            <div id="PerkembanganTotal" class="hidden">
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Lihat Perkembangan Total</h1>
                <div class="overflow-x-auto mt-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Penimbangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Berat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tinggi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perkembanganTotal as $data)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $data->tanggal_penimbangan->format('d F Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->berat_balita }} kg
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->tinggi_balita }} cm
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="Perkembangan5Bulan" class="">
                <div>
                    <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Perkembangan 5 Bulan Terakhir:</h1>
                </div>
                <div class="overflow-x-auto mt-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Tanggal Penimbangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Berat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tinggi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perkembangan as $data)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $data->tanggal_penimbangan->format('d F Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->berat_balita }} kg
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $data->tinggi_balita }} cm
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
    <script>
        function togglePerkembangan() {
            const perkembanganTotal = document.getElementById('PerkembanganTotal');
            const perkembangan5Bulan = document.getElementById('Perkembangan5Bulan');
            const button = document.getElementById('toggleButton');

            if (perkembanganTotal.style.display === 'block') {
                perkembanganTotal.style.display = 'none';
                perkembangan5Bulan.style.display = 'block';
                button.textContent = 'Tampilkan Perkembangan Total';
            } else {
                perkembanganTotal.style.display = 'block';
                perkembangan5Bulan.style.display = 'none';
                button.textContent = 'Tampilkan Perkembangan 5 Bulan';
            }
        }
        // Fungsi untuk menghitung umur dari tanggal lahir
        function hitungUmur(tanggalLahir) {
            // Konversi string tanggal lahir ke objek Date
            const tglLahir = new Date(tanggalLahir);
            const sekarang = new Date();
            
            // Hitung selisih tahun
            let tahun = sekarang.getFullYear() - tglLahir.getFullYear();
            let bulan = sekarang.getMonth() - tglLahir.getMonth();
            
            // Sesuaikan jika bulan lahir belum tercapai di tahun ini
            if (bulan < 0 || (bulan === 0 && sekarang.getDate() < tglLahir.getDate())) {
                tahun--;
                bulan = 12 + bulan;
            }
            
            // Format string hasil
            let hasil = '';
            if (tahun > 0) {
                hasil += tahun + ' tahun ';
            }
            if (bulan > 0) {
                hasil += bulan + ' bulan';
            }
            
            return hasil.trim();
        }

        // Ambil tanggal lahir dari data balita
        const tanggalLahir = "{{$balita->tanggal_lahir}}";
        
        // Update elemen yang menampilkan umur
        document.addEventListener('DOMContentLoaded', function() {
            const umurElement = document.getElementById('umurBalita');
            const umur = hitungUmur(tanggalLahir);
            umurElement.textContent = `${tanggalLahir} / ${umur}`;
        });
    </script>
</body>
</html>