<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data {{$balita->nama_balita}}</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Nama Balita | NIK Balita:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{$balita->nama_balita}} | {{$balita->nik_balita}}</h2>
            </div> <br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Nama Orang Tua | NIK Orang Tua:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{$balita->nama_ortu}} | {{$balita->nik_ortu}}</h2>
            </div> <br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Jenis Kelamin:</h1>
                @if($balita->jenis_kelamin == 'L')
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">Laki-Laki</h2>
                @else
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">Perempuan</h2>
                @endif
            </div><br>
            <div>


                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Alamat:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{$balita->alamat}}</h2>
            </div><br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Lingkungan:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">Lingkungan {{$balita->lingkungan}}</h2>
            </div><br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Apakah Memiliki KIA:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{$balita->have_kia}}</h2>
            </div><br>
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Tanggal Pertama Kali Ditimbang:</h1>
                @if($timbanganPertama)
                    <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{ $timbanganPertama->tanggal_penimbangan->format('d F Y') }}</h2>
                @else
                    <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">Data tidak tersedia atau Bayi Belum Pernah DItimbang</h2>
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
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3">
                                    Tanggal Penimbangan
                                </th>
                                <th scope="col" class="py-3">
                                    Berat
                                </th>
                                <th scope="col" class="py-3">
                                    Tinggi
                                </th>
                                <th scope="col" class="py-3">
                                    Lingkar Kepala
                                </th>
                                <th scope="col" class="py-3">
                                    Lingkar Lengan
                                </th>
                                <th scope="col" class="py-3">
                                    Vaksin/Obat Cacing
                                </th>
                                <th scope="col" class="py-3">
                                    Imunisasi
                                </th>
                                <th scope="col" class="py-3 text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($perkembanganTotal as $data)
                                <tr class="bg-white border-b">
                                    <td class="py-4">
                                        {{ $data->tanggal_penimbangan->format('d F Y') }}
                                    </td>
                                    <td class="py-4">
                                        {{ $data->berat_balita }} kg
                                    </td>
                                    <td class="py-4">
                                        {{ $data->tinggi_balita }} cm
                                    </td>
                                    <td class="py-4">
                                        {{ $data->lingkar_kepala }} cm
                                    </td><td class="py-4">
                                        {{ $data->lingkar_lengan }} cm
                                    </td><td class="py-4">
                                        {{ $data->vaksin }}
                                    </td>
                                    <td class="py-4">
                                        {{ $data->imunisasi }}
                                    </td>
                                    <td class="py-4 flex justify-evenly">
                                        <a href="{{ route('perkembangan.edit', $data->id) }}" class=" p-2 hover:-translate-x-1 rounded-md bg-yellow-200 text-black hover:bg-white hover:text-black hover:outline-[#FAD4D8] hover:outline-double transition-all">Edit</a>
                                        {{-- Tombol Delete (pakai form) --}}
                                        <form action="{{ route('balita.destroy', $data->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button 
                                                type="submit" 
                                                class="p-2 rounded-md bg-red-500 text-white hover:text-black hover:bg-white hover:outline-[#FAD4D8] hover:outline-double transition-all hover:translate-x-1"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                            >
                                                Delete
                                            </button>
                                        </form>     
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
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3">
                                    Tanggal Penimbangan
                                </th>
                                <th scope="col" class="py-3">
                                    Berat
                                </th>
                                <th scope="col" class="py-3">
                                    Tinggi
                                </th>
                                <th scope="col" class="py-3">
                                    Lingkar Kepala
                                </th>
                                <th scope="col" class="py-3">
                                    Lingkar Lengan
                                </th>
                                <th scope="col" class="py-3">
                                    Vaksin/Obat Cacing
                                </th>
                                <th scope="col" class="py-3">
                                    Imunisasi
                                </th>
                                <th scope="col" class="py-3 text-center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($perkembangan as $data)
                                <tr class="bg-white border-b">
                                    <td class="py-4">
                                        {{ $data->tanggal_penimbangan->format('d F Y') }}
                                    </td>
                                    <td class="py-4">
                                        {{ $data->berat_balita }} kg
                                    </td>
                                    <td class="py-4">
                                        {{ $data->tinggi_balita }} cm
                                    </td>
                                    <td class="py-4">
                                        {{ $data->lingkar_kepala }} cm
                                    </td><td class="py-4">
                                        {{ $data->lingkar_lengan }} cm
                                    </td><td class="py-4">
                                        {{ $data->vaksin }}
                                    </td>
                                    <td class="py-4">
                                        {{ $data->imunisasi }}
                                    </td>
                                    <td class="py-4 flex justify-evenly">
                                        <a href="{{ route('perkembangan.edit', $data->id) }}" class=" p-2 hover:-translate-x-1 rounded-md bg-yellow-200 text-black hover:bg-white hover:text-black hover:outline-[#FAD4D8] hover:outline-double transition-all">Edit</a>
                                        {{-- Tombol Delete (pakai form) --}}
                                        <form action="{{ route('balita.destroy', $data->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button 
                                                type="submit" 
                                                class="p-2 rounded-md bg-red-500 text-white hover:text-black hover:bg-white hover:outline-[#FAD4D8] hover:outline-double transition-all hover:translate-x-1"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                            >
                                                Delete
                                            </button>
                                        </form>     
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