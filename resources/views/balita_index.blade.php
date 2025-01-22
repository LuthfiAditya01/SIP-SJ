<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Balita</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <nav class="bg-[#FAD4D8] border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
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
                            <a href="{{route('home')}}" class="block px-4 py-2 hover:transition-all ease-in-out hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" aria-current="page">Home</a>
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

    <h1 class="md:text-4xl text-2xl font-PlusJakartaSans font-semibold mt-6 mx-6 md:mx-20">Lingkungan 1</h1>

    <div class="flex mx-4 mt-2 md:mx-8 md:mt-4 flex-col md:flex-row md:flex-wrap items-start font-PlusJakartaSans justify-evenly">
        @foreach ($balita as $data)
            @if($data->jenis_kelamin == 'L')
                <a href="#">
                    <div class="bg-[#AAE1F4] mt-4 px-10 py-5 rounded-xl">
                        <div class="flex flex-row items-center">
                            <img src="{{asset('boy_vector.png')}}" alt="" class="rounded-full w-20">
                            <h2 class="md:text-3xl text-2xl font-bold text-wrap ml-4">{{$data->nama_balita}}/{{$data->nama_ortu}}</h2>
                        </div>
                        <h4 class="md:text-4xl text-xl ml-24">{{$data->tanggal_lahir}}</h4>
                    </div>
                </a>
        
            
            @else
                <a href="#">
                    <div class="bg-[#FAE1E3] mt-4 px-10 py-5 rounded-xl">
                        <div class="flex flex-row items-center">
                            <img src="{{asset('girl_vector.png')}}" alt="" class="rounded-full w-20">
                            <h2 class="flex md:text-3xl text-2xl ml-4 text-wrap font-bold">{{$data->nama_balita}}/{{$data->nama_ortu}}</h2>
                        </div>
                        <h4 class="md:text-4xl text-xl ml-24">{{$data->tanggal_lahir}}</h4>
                    </div>
                </a>
            
            @endif
        @endforeach
    </div>
    
</body>
</html>