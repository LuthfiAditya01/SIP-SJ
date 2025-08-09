<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Balita - Admin Panel</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-[#FAD4D8] border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('admin.index')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('Posyandu_Logo.png') }}" class="h-10" alt="Logo Posyandu" />
                <span class="self-center hidden lg:block text-2xl font-semibold whitespace-nowrap">Admin Panel - SIP SJ</span>
                <span class="self-center lg:hidden text-2xl font-semibold whitespace-nowrap">Admin - SIP SJ</span>
            </a>
            
            <div class="flex items-center space-x-4">
                <span class="text-gray-700">{{auth()->user()->name}}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        <!-- Breadcrumb -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{route('admin.index')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Data Balita</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Data Balita</h1>
                <p class="text-gray-600">Kelola seluruh data balita dari semua lingkungan</p>
            </div>
        </div>

        <!-- Filter & Search -->
        <div class="bg-white rounded-lg shadow-lg p-4 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filter Lingkungan</label>
                    <select id="filterLingkungan" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="">Semua Lingkungan</option>
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{$i}}">Lingkungan {{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filter Status</label>
                    <select id="filterStatus" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="">Semua Status</option>
                        <option value="Sehat">Sehat</option>
                        <option value="Perlu Perhatian">Perlu Perhatian</option>
                        <option value="Stunting">Stunting</option>
                        <option value="Perlu Diverifikasi">Perlu Diverifikasi</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filter Jenis Kelamin</label>
                    <select id="filterGender" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <option value="">Semua</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Cari Nama</label>
                    <input type="text" id="searchName" placeholder="Nama balita..." 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100">
                        <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Sehat</p>
                        <p class="text-2xl font-semibold text-gray-900">{{$balita->where('is_stunting', 'Sehat')->count()}}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100">
                        <svg class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Perlu Perhatian</p>
                        <p class="text-2xl font-semibold text-gray-900">{{$balita->where('is_stunting', 'Perlu Perhatian')->count()}}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100">
                        <svg class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Stunting</p>
                        <p class="text-2xl font-semibold text-gray-900">{{$balita->where('is_stunting', 'Stunting')->count()}}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-gray-100">
                        <svg class="h-8 w-8 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Perlu Verifikasi</p>
                        <p class="text-2xl font-semibold text-gray-900">{{$balita->where('is_stunting', 'Perlu Diverifikasi')->count()}}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Balita Table -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nama Balita</th>
                            <th scope="col" class="px-6 py-3">Nama Orang Tua</th>
                            <th scope="col" class="px-6 py-3">Lingkungan</th>
                            <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                            <th scope="col" class="px-6 py-3">Tanggal Lahir</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="balitaTable">
                        @forelse($balita as $data)
                        <tr class="bg-white border-b hover:bg-gray-50 balita-row" 
                            data-lingkungan="{{$data->lingkungan}}" 
                            data-status="{{$data->is_stunting}}" 
                            data-gender="{{$data->jenis_kelamin}}"
                            data-name="{{strtolower($data->nama_balita)}}">
                            <td class="px-6 py-4 font-medium text-gray-900">
                                {{ $data->nama_balita }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->nama_ortu }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Lingkungan {{ $data->lingkungan }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                {{ $data->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ date('d M Y', strtotime($data->tanggal_lahir)) }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                    @if($data->is_stunting == 'Sehat') bg-green-100 text-green-800
                                    @elseif($data->is_stunting == 'Perlu Perhatian') bg-yellow-100 text-yellow-800
                                    @elseif($data->is_stunting == 'Stunting') bg-red-100 text-red-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ $data->is_stunting }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('admin.balita-detail', $data->id)}}" 
                                   class="text-blue-600 hover:text-blue-800 font-medium">
                                    Detail
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                                Belum ada data balita
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Filter functionality
        function filterTable() {
            const lingkungan = document.getElementById('filterLingkungan').value;
            const status = document.getElementById('filterStatus').value;
            const gender = document.getElementById('filterGender').value;
            const searchName = document.getElementById('searchName').value.toLowerCase();
            
            const rows = document.querySelectorAll('.balita-row');
            
            rows.forEach(row => {
                const rowLingkungan = row.getAttribute('data-lingkungan');
                const rowStatus = row.getAttribute('data-status');
                const rowGender = row.getAttribute('data-gender');
                const rowName = row.getAttribute('data-name');
                
                let show = true;
                
                if (lingkungan && rowLingkungan !== lingkungan) show = false;
                if (status && rowStatus !== status) show = false;
                if (gender && rowGender !== gender) show = false;
                if (searchName && !rowName.includes(searchName)) show = false;
                
                row.style.display = show ? '' : 'none';
            });
        }

        // Add event listeners
        document.getElementById('filterLingkungan').addEventListener('change', filterTable);
        document.getElementById('filterStatus').addEventListener('change', filterTable);
        document.getElementById('filterGender').addEventListener('change', filterTable);
        document.getElementById('searchName').addEventListener('input', filterTable);
    </script>
</body>
</html>
