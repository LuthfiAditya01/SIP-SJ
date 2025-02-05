<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Balita | Lingkungan {{$lingkungan}}</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>

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

    <h1 class="md:text-4xl text-2xl font-PlusJakartaSans font-semibold mt-6 mx-6 md:mx-20">Lingkungan {{$lingkungan}}</h1><br>

    @if($balita->isEmpty())
        <div class="flex justify-center items-center bg-[#FAD4D8] mx-4 md:mx-28 pb-4">
            <h1 class="md:text-4xl text-2xl font-PlusJakartaSans font-semibold mt-6 mx-6 md:mx-20">Data Balita Kosong</h1>
        </div>  
    @else


    <div class="flex mx-4 mt-2 md:mx-8 md:mt-4 justify-around items-center flex-wrap font-PlusJakartaSans">
        @foreach ($balita as $data)
            @if($data->jenis_kelamin == 'L')

                <a href="{{route('balita.detail', ['id_balita' => $data->id])}}">
                    <div class="bg-[#AAE1F4] mt-4 px-10 py-5 rounded-xl">
                        <div class="flex flex-row items-center">
                            <img src="{{asset('boy_vector.png')}}" alt="" class="rounded-full w-20">
                            <h2 class="md:text-3xl text-2xl font-bold text-wrap ml-4">{{$data->nama_balita}}/{{$data->nama_ortu}}</h2>
                        </div>
                        <h4 class="md:text-4xl text-xl ml-24">{{$data->tanggal_lahir}}</h4>
                    </div>
                </a>
            @elseif($data->jenis_kelamin == 'P')
                @if($data && $data->id)
                    <a href="{{route('balita.detail', ['id_balita' => $data->id])}}">
                        <div class="bg-[#FAE1E3] mt-4 px-10 py-5 rounded-xl">
                            <div class="flex flex-row items-center">
                                <img src="{{ asset('girl_vector.png') }}" alt="Foto Balita Perempuan" class="rounded-full w-20">
                                <h2 class="flex md:text-3xl text-2xl ml-4 text-wrap font-bold">{{ $data->nama_balita }}/{{ $data->nama_ortu }}</h2>
                            </div>
                            <h4 class="md:text-4xl text-xl ml-24">{{ $data->tanggal_lahir }}</h4>
                        </div>
                    </a>
                @endif
            @endif
        @endforeach
    @endif
    </div>
    
</body>
</html>