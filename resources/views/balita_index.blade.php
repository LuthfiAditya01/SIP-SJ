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

    <h1 class="md:text-4xl text-2xl font-PlusJakartaSans font-semibold mt-6 mx-6 md:mx-20">Lingkungan 1</h1>

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
    </div>
    
</body>
</html>