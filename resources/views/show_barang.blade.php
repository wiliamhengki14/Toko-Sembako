<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $barang->nama_barang }}</title>
</head>
<body>
    <h1>Spesifikasi Barang {{ $barang->nama_barang }}</h1>
    <hr>
    <p>Nama Barang : {{ $barang->nama_barang }}</p>
    <p>Kategori : {{ $barang->kategori }}</p>
    <p>Stok : {{ $barang->stok }}</p>
    <p>Harga Beli : {{ $barang->harga_beli }}</p>
    <p>Harga Jual : {{ $barang->harga_jual }}</p>
    <p>Tanggal Expire : {{ $barang->expired_date }}</p>
    <p>Supplier : {{ $barang->supplier->nama_supplier }}</p>
    <form action="{{ route('edit_barang', $barang) }}" method="get">
        @csrf
        <button type="submit">Edit Barang</button>
    </form>
    <br>
    <form action="{{ route('delete_barang', $barang) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Yakin?')">Hapus barang</button>
    </form>
    <br>
    <a href="{{ route('index_barang') }}">Kembali</a>
</body>
</html>