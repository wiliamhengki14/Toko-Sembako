<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Form Tambah Barang</h1>
    <form action="{{ route('store_barang') }}" method="post">
        @csrf
        <label for="nama_barang">Nama Barang : </label> <br>
        <input type="text" name="nama_barang" id="nama_barang" required placeholder="Nama Barang"> <br><br>
        <label for="kategori">Kategori : </label> <br> 
        <input type="text" name="kategori" id="kategori" required placeholder="Kategori"> <br> <br>
        <label for="stok">Stok : </label>  <br>
        <input type="number" name="stok" id="stok" required placeholder="Stok"> <br> <br>
        <label for="harga_beli">Harga Beli : </label> <br>
        <input type="number" name="harga_beli" id="harga_beli" required placeholder="Harga Beli"> <br> <br>
        <label for="harga_jual">Harga Jual : </label> <br>
        <input type="number" name="harga_jual" id="harga_jual" required placeholder="Harga jual"> <br> <br>
        <label for="expired_date">Tanggal Expire : </label> <br>
        <input type="date" name="expired_date" id="expired_date" required> <br> <br>
        <label for="id_supplier">Supplier : </label>
        <select name="id_supplier" id="id_supplier">
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
            @endforeach
        </select> <br> <br>
        <button type="submit">Tambah +</button>
    </form>
</body>
</html>