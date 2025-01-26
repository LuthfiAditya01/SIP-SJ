@extends('layouts.app')
    

    <h2 class="mx-8 mt-4 text-2xl lg:mx-24 font-PlusJakartaSans">Selamat Datang,</h2>
    <h1 class="mx-8 mt-2 text-4xl lg:mx-24 font-PlusJakartaSans font-bold">Bidan Helisma</h1>

    <div class="flex mx-4 mt-2 lg:mx-8 lg:mt-4 flex-col lg:flex-row items-center font-PlusJakartaSans justify-evenly">
        <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
            <div class="flex flex-row items-center">
                <img src="{{asset('baby.png')}}" alt="" class="rounded-full w-20">
                <h2 class="flex text-3xl font-medium ml-4">Balita Sehat</h2>
            </div>
            <h4 class="text-4xl ml-24 font-bold">{{$balitaSehat}} Balita</h4>
        </div>

        <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
            <div class="flex flex-row items-center">
                <img src="{{asset('height.png')}}" alt="" class=" w-20">
                <h2 class="flex text-3xl font-medium ml-4">Balita Perlu Perhatian</h2>
            </div>
            <h4 class="text-4xl ml-24 font-bold">{{($balitaStunting+$balitaPerluPerhatian)}} Balita</h4>
        </div>

        <div class="bg-[#FFEAA7] mt-4 px-10 py-5 rounded-xl">
            <div class="flex flex-row items-center">
                <img src="{{asset('statistics.png')}}" alt="" class="rounded-full w-20">
                <h2 class="flex text-3xl font-medium ml-4">Data yang Perlu Diverifikasi</h2>
            </div>
            <h4 class="text-4xl ml-24 font-bold">{{$balitaPerluDiverifikasi}} Balita</h4>
        </div>
    </div>

    {{-- Chart for Low-Medium Dimension (Phone) --}}
    <div class="mt-4 mx-5 mb-4 rounded-xl lg:hidden bg-[#FFEAA7]">
        <canvas id="myChart" width="600" height="400"></canvas>
    </div>

    {{-- Chart for Medium-High Dimension (Tablet, PC) --}}
    <div class="mt-10 lg:block hidden mx-28 bg-[#FFEAA7] p-5 rounded-xl">
        <canvas id="myChartDesktop" width="600" height="400"></canvas>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil context dari canvas
    const ctx = document.getElementById('myChart').getContext('2d');
    const ctxDesktop = document.getElementById('myChartDesktop').getContext('2d');
    
    const dataFromBackend = @json($formattedData);

    // Data untuk chart
    const data = {
        labels: dataFromBackend.lingkungan,
        datasets: [{
            label: 'Balita Yang Sehat',
            data: dataFromBackend.sehat,
            backgroundColor: 'rgb(255, 99, 132)',
        }, {
            label: 'Balita Yang Perlu Perhatian',
            data: dataFromBackend.kurang_sehat,
            backgroundColor: 'rgb(54, 162, 235)',
        }, {
            label: 'Balita dengan Status Stunting',
            data: dataFromBackend.stunting,
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
