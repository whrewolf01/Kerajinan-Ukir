<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Sepatu</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #3b3f4d;
            color: #fff:
        }
        center{
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <center>Laporan Data Kerajinan Ukir</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NO.</th>
                <th>ID Produk/th> 
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>harga</th>
                <th>Stok</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $no => $trs)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ $trs -> id_produk }}</td>
                <td>{{ $trs -> nama_produk }}</td>
                <td>{{ $trs -> deskripsi }}</td>
                <td>{{ $trs -> harga }}</td>
                <td>{{ $trs -> stok }}</td>
                <td>{{ $trs -> kategori }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>