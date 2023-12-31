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
            <div class="row pb-100 pt-100">
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
            today: {!! json_encode($countsByDate) !!},
            kemarin: {!! json_encode($countsByMonth) !!},
            instansi: {!! json_encode($agencyVisitors->pluck('total_visitors')) !!},
            instansi2: {!! json_encode($agencyVisitorsThisMonth->pluck('total_visitors')) !!},
            // Data lainnya...
        };

        // Nama label untuk setiap dataset
        const labelSets = {
            today: {!! json_encode($lastWeekLabels) !!},
            kemarin: {!! json_encode($lastMonthLabels) !!},
            instansi: {!! json_encode($agencyVisitors->pluck('agency_name')) !!},
            instansi2: {!! json_encode($agencyVisitorsThisMonth->pluck('agency_name')) !!},
            // Label lainnya...
        };

        // Membuat grafik
        function createChart(data, labels) {
            const ctx = document.getElementById('line-chart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Data Kunjungan',
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
            const labels = labelSets[option];
            if (data && labels) {
                const chart = Chart.instances[0];
                chart.data.datasets[0].data = data;
                chart.data.labels = labels; // Mengganti label
                chart.update();
            }
        }

        // Memulai dengan data hari ini
        document.addEventListener('DOMContentLoaded', () => {
            createChart(dataSets.today, {!! json_encode($lastWeekLabels) !!});
        });

        </script>
    @endsection

    <!--====== SERVICES PART ENDS ======-->

</x-WebLayout>
