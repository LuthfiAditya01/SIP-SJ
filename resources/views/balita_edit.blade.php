<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah data {{$balita->nama_balita}}</title>
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

    <div class="left-0 mx-16 md:mx-24 lg:mx-48">
        <div class="flex mt-4">
            <a href="{{ url()->previous() }}" class="bg-[#D9D9D9] hover:bg-[#f8bdc3] hover:translate-x-1 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali
                </div>
            </a>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div style="font-family: Arial, sans-serif; border: 1px solid #ccc; border-radius: 10px;" class="items-center w-4/5 mt-5 p-5">
            <div>
                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Nama Anak / Nama Orang Tua:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">{{$dataBalita->nama_balita}} / {{$dataBalita->nama_ortu}}</h2>
            </div> <br>
            <div>

                <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Alamat:</h1>
                <h2 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl font-bold">Lingkungan {{$dataBalita->lingkungan}}</h2>
            </div><br>
            <form action="{{ route('balita.update', $balita->id) }}" method="POST">
                @csrf

                @method('PUT')
                {{-- <input type="text" name="id" value="{{$id_balita}}" required class="hidden"> --}}
                <input type="text" name="id_balita" value="{{$balita->id_balita}}" required class="hidden">
                {{-- <input type="text" name="nama_balita" value="{{$balita->nama_balita}}" required class="hidden">
                <input type="text" name="nama_ortu" value="{{$balita->nama_ortu}}" required class="hidden">
                <input type="date" name="tanggal_lahir" value={{$balita->tanggal_lahir}} required class="hidden">
                <select name="lingkungan" required class="hidden">
                    <option value="1" {{ $balita->lingkungan == 1 ? 'selected' : '' }}>Lingkungan 1</option>
                    <option value="2" {{ $balita->lingkungan == 2 ? 'selected' : '' }}>Lingkungan 2</option>
                    <option value="3" {{ $balita->lingkungan == 3 ? 'selected' : '' }}>Lingkungan 3</option>
                    <option value="4" {{ $balita->lingkungan == 4 ? 'selected' : '' }}>Lingkungan 4</option>
                    <option value="5" {{ $balita->lingkungan == 5 ? 'selected' : '' }}>Lingkungan 5</option>
                </select>
                <select name="jenis_kelamin" required class="hidden">
                    <option value="L" {{$balita->jenis_kelamin == 'L' ? 'selected' : ''}}>Laki-laki</option>
                    <option value="P" {{$balita->jenis_kelamin == 'P' ? 'selected' : ''}}>Perempuan</option>
                </select>
                --}}

                {{-- <select name="is_stunting" required class="hidden">
                    <option value="Stunting" {{ $balita->is_stunting == 'Stunting' ? 'selected' : '' }}>Stunting</option>
                    <option value="Perlu Perhatian" {{ $balita->is_stunting == 'Perlu Perhatian' ? 'selected' : '' }}>Perlu Perhatian</option>
                    <option value="Sehat" {{ $balita->is_stunting == 'Sehat' ? 'selected' : '' }}>Sehat</option>
                    <option value="Perlu Diverifikasi" {{ $balita->is_stunting == 'Perlu Diverifikasi' ? 'selected' : '' }}>Perlu Diverifikasi</option>
                </select> --}}
                <div>
                    <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Tanggal Penimbangan :</h1>
                    <div class="flex items-center">
                        <input value="{{$balita->tanggal_penimbangan->format('Y-m-d')}}" type="date" name="tanggal_penimbangan" required class="mt-2 p-2 border rounded-lg w-auto focus:outline-[#f8bdc3] focus:translate-x-2 transition duration-300 ease-in-out">
                        @error('tanggal_penimbangan')
                            <span class="text-red-500 text-s">{{ $message }}</span>
                        @enderror


                    </div>
                </div><br>
                <div>
                    <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Berat Badan:</h1>
                    <div class="flex items-center">
                        <input value="{{$balita->berat_balita}}" type="number" step="0.1" name="berat_balita" class="mt-2 p-2 border rounded-lg w-24 focus:outline-[#f8bdc3] focus:translate-x-1 transition duration-300 ease-in-out" required>

                        <span class="ml-2 text-xl">kg</span>
                        @error('berat_balita')
                            <span class="text-red-500 text-s">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <br>
                <div>
                    <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Tinggi Badan:</h1>
                    <div class="flex items-center">
                        <input value="{{$balita->tinggi_balita}}" type="number" step="0.1" name="tinggi_balita" class="mt-2 p-2 border rounded-lg w-24 focus:outline-[#f8bdc3] focus:translate-x-1 transition duration-300 ease-in-out" required>

                        <span class="ml-2 text-xl">cm</span>
                        @error('tinggi_balita')
                            <span class="text-red-500 text-s">{{ $message }}</span>
                        @enderror
                    </div>
                </div> <br>
                <div>
                    <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Lingkar Kepala:</h1>
                    <div class="flex items-center">
                        <input value="{{$balita->lingkar_kepala}}" type="number" step="0.1" name="lingkar_kepala" class="mt-2 p-2 border rounded-lg w-24 focus:outline-[#f8bdc3] focus:translate-x-1 transition duration-300 ease-in-out" required>
                        <span class="ml-2 text-xl">cm</span>
                        @error('lingkar_kepala')
                            <span class="text-red-500 text-s">{{ $message }}</span>
                        @enderror
                    </div>
                </div> <br>


                <div>
                    <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Lingkar Lengan:</h1>
                    <div class="flex items-center">
                        <input value="{{$balita->lingkar_lengan}}" type="number" step="0.1" name="lingkar_lengan" class="mt-2 p-2 border rounded-lg w-24 focus:outline-[#f8bdc3] focus:translate-x-1 transition duration-300 ease-in-out" required>
                        <span class="ml-2 text-xl">cm</span>
                        @error('lingkar_lengan')
                            <span class="text-red-500 text-s">{{ $message }}</span>
                        @enderror
                    </div>
                </div> <br>

                <label for="vaksin" class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Vaksin/Obat Cacing:</label><br>
                <select name="vaksin" id="vaksin" required class="mt-2 p-2 border rounded-lg w-auto focus:outline-[#f8bdc3] focus:translate-x-2 transition duration-300 ease-in-out">
                    <option value="Tidak Diberikan" {{ $balita->vaksin == 'Tidak Diberikan' ? 'selected' : '' }}>Tidak Diberikan</option>
                    <option value="Vitamin A" {{ $balita->vaksin == 'Vitamin A' ? 'selected' : '' }}>Vitamin A</option>
                    <option value="Obat Cacing" {{ $balita->vaksin == 'Obat Cacing' ? 'selected' : '' }}>Obat Cacing</option>
                </select> <br><br>

                @error('vaksin')
                            <span class="text-red-500 text-s">{{ $message }}</span>
                @enderror

                <div>
                    <h1 class="font-PlusJakartaSans laptopMid:text-4xl text-2xl">Imunisasi:</h1>
                    <div class="flex items-center">
                        <input value="{{$balita->imunisasi}}" type="text" name="imunisasi" required class="mt-2 p-2 border rounded-lg w-auto focus:outline-[#f8bdc3] focus:translate-x-2 transition duration-300 ease-in-out">
                        @error('imunisasi')
                            <span class="text-red-500 text-s">{{ $message }}</span>
                        @enderror

                    </div><br>
                </div>

                <button type="submit" class="hover:bg-[#55A4C0] bg-[#FAD4D8] hover:translate-x-1 text-gray-600 hover:text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>