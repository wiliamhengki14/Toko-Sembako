<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{ $barang->nama_barang }}</title>
</head>
<body>
    <h1>Form Edit Barang</h1>
    <hr>
    <form action="{{ route('update_barang', $barang) }}" method="post">
        @csrf
        @method('patch')
        <label for="nama_barang">Nama Barang : </label> <br>
        <input type="text" name="nama_barang" id="nama_barang" required value="{{ $barang->nama_barang }}"> <br><br>
        <label for="kategori">Kategori : </label> <br> 
        <input type="text" name="kategori" id="kategori" required value="{{ $barang->kategori }}"> <br> <br>
        <label for="stok">Stok : </label>  <br>
        <input type="number" name="stok" id="stok" required value="{{ $barang->stok }}"> <br> <br>
        <label for="harga_beli">Harga Beli : </label> <br>
        <input type="number" name="harga_beli" id="harga_beli" required value="{{ $barang->harga_beli }}"> <br> <br>
        <label for="harga_jual">Harga Jual : </label> <br>
        <input type="number" name="harga_jual" id="harga_jual" required value="{{ $barang->harga_jual }}"> <br> <br>
        <label for="expired_date">Tanggal Expire : </label> <br>
        <input type="date" name="expired_date" id="expired_date" required value="{{ $barang->expired_date }}"> <br> <br>
        <label for="id_supplier">Supplier : </label>
        <select name="id_supplier" id="id_supplier">
            <option value="{{ $barang->id_supplier }}">{{ $barang->supplier->nama_supplier }}</option>
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
            @endforeach
        </select> <br> <br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="{{ route('index_barang') }}">Kembali</a>
</body>
</html>