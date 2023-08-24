<html>

<head>
    <title>Data Booking Instansi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
</head>

<body>
    <center>
        <h5>Laporan Data Booking {{ \Carbon\Carbon::now()->translatedFormat('F') }}
            {{ \Carbon\Carbon::now()->translatedFormat('Y') }}</h5>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">No</th>
                <th class="min-w-250px">Nama</th>
                <th class="min-w-250px">Whatsapp</th>
                <th class="min-w-250px">Status</th>
                <th class="text-end min-w-70px">Total Waktu</th>
            </tr>
        </thead>
        <tbody class="fw-semibold text-gray-600">
            @foreach ($bookings as $item)
                <tr>
                    <!--end::Checkbox-->
                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->whatsapp }}
                    </td>
                    <td>
                        @if ($item->status == 0)
                            <span>Belum
                                Diproses</span>
                        @elseif ($item->status == 1)
                            <span>Sedang
                                Diproses</span>
                        @else
                            <span>Selesai</span>
                        @endif
                    </td>
                    <td>
                        {{ $item->duration }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
