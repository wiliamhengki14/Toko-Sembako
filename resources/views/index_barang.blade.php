<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <hr>
    <a href="{{ route('create_barang') }}">Tambah Barang +</a>
    <br>
    @foreach ($barangs as $barang)
        <p>Nama Barang : {{ $barang->nama_barang }}</p>
        <p>Kategori : {{ $barang->kategori }}</p>
        <p>Harga Jual : Rp{{ number_format($barang->harga_jual, 2, ',', '.') }}</p>
        <br>
        <form action="{{ route('show_barang', $barang) }}" method="get">
            @csrf
            <button type="submit">Detail Barang</button>
        </form>
        <hr>
    @endforeach
</body>
</html>