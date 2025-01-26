<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{$pageName}}</title> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">

</head>
<body>
    <div id="app">
        <header>
            <nav class="bg-[#FAD4D8] border-gray-200 dark:bg-gray-900 dark:border-gray-700">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Flowbite Logo" />
                        <span class="self-center hidden lg:block text-2xl font-semibold whitespace-nowrap dark:text-white">Sistem informasi Posyandu Seputih Jaya</span>
                        <span class="self-center lg:hidden text-2xl font-semibold whitespace-nowrap dark:text-white">SIP SJ</span>
                    </a>
                    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden w-full lg:block lg:w-auto" id="navbar-dropdown">
                        <ul class="flex flex-col font-medium p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-[#FAD4D8] lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-[#FAD4D8] dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="{{route('home')}}" class="block py-2 px-3 hover:transition-all ease-linear duration-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white rounded-full" aria-current="page">Home</a>
                            </li>
                            <li class="flex items-center">
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="inline-flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">
                                    Lihat Data Balita
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
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
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Services</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Pricing</a>
                            </li>
                            <li class="flex items-center">
                                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-white lg:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent">Contact</a>
                            </li>
                            @guest
                                @if (Route::has('login'))
                                    <li class="flex items-center">
                                        <a href="{{ route('login') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="flex items-center">
                                        <a href="{{ route('register') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="flex items-center">
                                    <button id="userDropdown" data-dropdown-toggle="userDropdownMenu" class="inline-flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">
                                        {{ Auth::user()->name }}
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="userDropdownMenu" class="z-10 hidden font-normal bg-[#FAD4D8] divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2 text-sm text-gray-700">
                                            <li>
                                                <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
