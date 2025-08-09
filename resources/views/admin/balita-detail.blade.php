<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Balita - Admin Panel</title>
    <link rel="shortcut icon" href="{{asset('Posyandu_Logo.png')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <a href="{{route('admin.balita')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Data Balita</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Detail {{$balita->nama_balita}}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Detail Balita</h1>
                <p class="text-gray-600">Informasi lengkap dan riwayat perkembangan</p>
            </div>
            <a href="{{route('admin.balita')}}" 
               class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                Kembali
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Informasi Balita -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gray-300 rounded-full mx-auto mb-4 flex items-center justify-center">
                            @if($balita->jenis_kelamin == 'L')
                                <svg class="w-12 h-12 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            @else
                                <svg class="w-12 h-12 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            @endif
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">{{$balita->nama_balita}}</h2>
                        <p class="text-gray-600">{{$balita->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan'}}</p>
                    </div>

                    <div class="space-y-4">
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">NIK Balita</p>
                            <p class="text-gray-900">{{$balita->nik_balita}}</p>
                        </div>
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">Nama Orang Tua</p>
                            <p class="text-gray-900">{{$balita->nama_ortu}}</p>
                        </div>
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">NIK Orang Tua</p>
                            <p class="text-gray-900">{{$balita->nik_ortu}}</p>
                        </div>
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">Tanggal Lahir</p>
                            <p class="text-gray-900">{{date('d M Y', strtotime($balita->tanggal_lahir))}}</p>
                        </div>
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">Umur</p>
                            <p class="text-gray-900" id="umur"></p>
                        </div>
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">Lingkungan</p>
                            <p class="text-gray-900">Lingkungan {{$balita->lingkungan}}</p>
                        </div>
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">Alamat</p>
                            <p class="text-gray-900">{{$balita->alamat}}</p>
                        </div>
                        <div class="border-b pb-2">
                            <p class="text-sm font-medium text-gray-500">Memiliki KIA</p>
                            <p class="text-gray-900">{{$balita->have_kia}}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Status Stunting</p>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                @if($balita->is_stunting == 'Sehat') bg-green-100 text-green-800
                                @elseif($balita->is_stunting == 'Perlu Perhatian') bg-yellow-100 text-yellow-800
                                @elseif($balita->is_stunting == 'Stunting') bg-red-100 text-red-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{$balita->is_stunting}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Perkembangan -->
            <div class="lg:col-span-2">
                <!-- Chart Perkembangan -->
                @if($perkembangan->count() > 0)
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Grafik Perkembangan</h3>
                    <canvas id="perkembanganChart"></canvas>
                </div>
                @endif

                <!-- Tabel Perkembangan -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="px-6 py-4 border-b">
                        <h3 class="text-lg font-semibold text-gray-800">Riwayat Perkembangan</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Tanggal</th>
                                    <th scope="col" class="px-6 py-3">Berat (kg)</th>
                                    <th scope="col" class="px-6 py-3">Tinggi (cm)</th>
                                    <th scope="col" class="px-6 py-3">Lingkar Kepala (cm)</th>
                                    <th scope="col" class="px-6 py-3">Lingkar Lengan (cm)</th>
                                    <th scope="col" class="px-6 py-3">Vaksin</th>
                                    <th scope="col" class="px-6 py-3">Imunisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($perkembangan as $data)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 font-medium text-gray-900">
                                        {{date('d M Y', strtotime($data->tanggal_penimbangan))}}
                                    </td>
                                    <td class="px-6 py-4">{{$data->berat_balita}}</td>
                                    <td class="px-6 py-4">{{$data->tinggi_balita}}</td>
                                    <td class="px-6 py-4">{{$data->lingkar_kepala}}</td>
                                    <td class="px-6 py-4">{{$data->lingkar_lengan}}</td>
                                    <td class="px-6 py-4">{{$data->vaksin}}</td>
                                    <td class="px-6 py-4">{{$data->imunisasi}}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                                        Belum ada data perkembangan
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Calculate age
        function calculateAge(birthDate) {
            const today = new Date();
            const birth = new Date(birthDate);
            let age = today.getFullYear() - birth.getFullYear();
            const monthDiff = today.getMonth() - birth.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birth.getDate())) {
                age--;
            }
            
            const totalMonths = (today.getFullYear() - birth.getFullYear()) * 12 + (today.getMonth() - birth.getMonth());
            const months = totalMonths % 12;
            
            if (age > 0) {
                return `${age} tahun ${months} bulan`;
            } else {
                return `${totalMonths} bulan`;
            }
        }

        // Set age
        document.getElementById('umur').textContent = calculateAge('{{$balita->tanggal_lahir}}');

        // Chart for development data
        @if($perkembangan->count() > 0)
        const perkembanganData = @json($perkembangan->reverse()->values());
        
        const ctx = document.getElementById('perkembanganChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: perkembanganData.map(item => {
                    return new Date(item.tanggal_penimbangan).toLocaleDateString('id-ID', {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric'
                    });
                }),
                datasets: [
                    {
                        label: 'Berat Badan (kg)',
                        data: perkembanganData.map(item => item.berat_balita),
                        borderColor: 'rgba(34, 197, 94, 1)',
                        backgroundColor: 'rgba(34, 197, 94, 0.1)',
                        yAxisID: 'y'
                    },
                    {
                        label: 'Tinggi Badan (cm)',
                        data: perkembanganData.map(item => item.tinggi_balita),
                        borderColor: 'rgba(59, 130, 246, 1)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        yAxisID: 'y1'
                    }
                ]
            },
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Tanggal Penimbangan'
                        }
                    },
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                        title: {
                            display: true,
                            text: 'Berat Badan (kg)'
                        }
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        title: {
                            display: true,
                            text: 'Tinggi Badan (cm)'
                        },
                        grid: {
                            drawOnChartArea: false,
                        },
                    }
                }
            }
        });
        @endif
    </script>
</body>
</html>
