<x-WebLayout title="Statistik">
    @section('custom_head')
        <style>
            .options {
                list-style: none;
                padding: 0;
                margin: 0;
                min-width: 200px;
            }

            .option {
                padding: 10px;
                background-color: #f0f0f0;
                border: 1px solid #ccc;
                cursor: pointer;
            }

            .chart-container {
                flex-grow: 1;
                height: 300px;
            }
        </style>
    @endsection
    <!--====== SLIDER PART START ======-->
    <li></li>
    <li></li>
    <!--====== SLIDER PART ENDS ======-->

    <!--====== PRODUCTS PART START ======-->

    <section id="services-part" class="pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>Statistik Kunjungan</h2>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pb-100">
                <ul class="options">
                    <li class="option" onclick="changeData('today')">Kunjungan Harian</li>
                    <li class="option" onclick="changeData('kemarin')">Kunjungan Bulanan</li>
                    <li class="option" onclick="changeData('instansi')">Kunjungan Harian Per-Instansi</li>
                    <li class="option" onclick="changeData('instansi2')">Kunjungan Bulanan Per-Instansi</li>
                </ul>
                <div class="chart-container">
                    <canvas id="line-chart"></canvas>
                </div>
            </div>
        </div>
    </section>

    @section('custom_js')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Data untuk grafik
            const dataSets = {
                today: [10, 15, 20, 25, 30, 35],
                kemarin: [5, 10, 15, 20, 25, 30],
                instansi: [20, 25, 30, 35, 40, 45],
                instansi2: [10, 25, 31, 35, 1, 45], //data berbeda berdasarkan pilihan
                // Kunjungan harian datanya adalah total kunjungan per hari
                //Kunjungan bulanan datanya adalah total kunjungan perbulan
                //kunjungan harian per instansi datanya adalah instansi per hari ini
                //kunjugan bulanan per instansi datanya adalah instansi dalam bulan ini
            };

            // Membuat grafik
            function createChart(data) {
                const ctx = document.getElementById('line-chart').getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5',
                            'Data 6'
                        ], //label berbeda berdasarkan pilihan
                        // Kunjungan harian labelnya adalah tanggal dalam 1 minggu
                        //Kunjungan bulanan labelnya adalah bulan dalam 2-3 bulan
                        //kunjungan harian per instansi labelnya adalah instansi
                        //kunjugan bulanan per instansi labelnya adalah instansi
                        datasets: [{
                            label: 'Data Grafik',
                            data: data,
                            borderColor: 'rgb(75, 192, 192)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderWidth: 2
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }

            // Fungsi untuk mengganti data grafik berdasarkan pilihan
            function changeData(option) {
                const data = dataSets[option];
                if (data) {
                    const chart = Chart.instances[0];
                    chart.data.datasets[0].data = data;
                    chart.update();
                }
            }

            // Memulai dengan data hari ini
            document.addEventListener('DOMContentLoaded', () => {
                createChart(dataSets.today);
            });
        </script>
    @endsection

    <!--====== SERVICES PART ENDS ======-->

</x-WebLayout>
