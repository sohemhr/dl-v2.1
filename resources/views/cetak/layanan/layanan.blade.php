<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 20px;
        }
        h1 {
        text-align: center;
        color: #333;
        }
        table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        }
        th, td {
        border: 1px solid #333;
        padding: 10px;
        text-align: left;
        }
        th {
        background-color: #f2f2f2;
        font-weight: bold;
        }
        tr:nth-child(even) {
        background-color: #f9f9f9;
        }
        .left{
        text-align: left;
        }
        @media print {
            a[href]:after {
                content: none !important;
            }
        @page {
            size: A4 landscape;
            margin: 3mm;
        }
        @page :footer {
        display: none
        }
    
        @page :header {
            display: none
        }
        body {
            margin: 0;
        }
        table {
            font-size: 12px;
        }
        }
    </style>
    </head>
    <body>
    <h1>Daftar Layanan</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Layanan</th>
                <th>Kode JL</th>
                <th>Jenis Layanan</th>
                <th>Harga (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($layanan as $item)
            <tr class="border">
                <td>{{ $no++ }}</td>
                <td>{{ $item->layanan_nama }}</td>
                @php
                    $getJnsLyn = DB::table('jenis')->where('jenis_layanan_kode', $item->layanan_kode)->orderBy('jenis_kode', 'ASC')->get();
                @endphp                
                <td>
                    @foreach ($getJnsLyn as $kode)
                        {{ $kode->jenis_kode }} <hr>
                    @endforeach
                </td>
                <td>
                    @foreach ($getJnsLyn as $jns)
                        {{ $jns->jenis_nama }} <hr>
                    @endforeach
                </td>
                <td class="left">
                    @foreach ($getJnsLyn as $harga)
                        {{ Number::format($harga->jenis_final) }} <hr>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        // Otomatis membuka jendela cetak saat halaman dimuat
        window.onload = function() {
        window.print();
        };
    </script>
</body>
</html>