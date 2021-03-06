<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <div class="card-body">
            <div class="table-responsive">
                <center>
                    <h4>LAPORAN PESANAN BULANAN</h4>
                </center>
                <table class="table" border="1">
                    <thead>
                        <center>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal Pesanan</th>
                                <th class="text-center">Tanggal Masuk</th>
                                <th class="text-center">Nama Barang</th>
                                <th class="text-center">harga</th>
                                <th class="text-center">Stok</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </center>
                    </thead>
                    @php $no=1; @endphp
                    @foreach ($pesanan ?? '' as $data)
                        <tbody>
                            <center>
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->tanggal_pesan }}</td>
                                    <td>{{ $data->tanggal_masuk }}</td>
                                    <td>{{ $data->barang->nama_barang }}</td>
                                    <td>Rp. {{ number_format($data->barang->harga, 0, ',', '.') }}</td>
                                    <td>{{ number_format($data->stok, 0, ',', '.')}}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>Rp. {{ number_format($data->total, 0, ',', '.') }}</td>
                                </tr>
                            </center>
                        </tbody>
                    @endforeach
                    <tr>
                    <th colspan="9">Total Transaksi</th>
                    <td style="text-align: center">Rp. {{ number_format($totalMasukan->totalMasukan, 2) }}
                    </td>
                </tr>
                </table>
            </div>
        </div>
        <center>
            <script>
                window.print();
            </script>
        </center>
    </center>

</body>

</html>
