<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Supplier</title>
</head>
<body>
    <h1>Form Supplier</h1>
    <form action="{{ route('store_supplier') }}" method="post">
        @csrf
        <label for="nama_supplier">Nama Supplier : </label> <br>
        <input type="text" id="nama_supplier" name="nama_supplier" required placeholder="Nama Supplier"> <br> <br>
        <label for="kontak_sales">Kontak Sales : </label> <br>
        <input type="text" name="kontak_sales" id="kontak_sales" required placeholder="Kontak Sales"> <br> <br>
        <label for="no_telepon">No Telepon : </label>  <br>
        <input type="text" name="no_telepon" id="no_telepon" required placeholder="No Telepon"> <br> <br>
        <label for="alamat_perusahaan">Alamat Perusahaan : </label> <br>
        <textarea name="alamat_perusahaan" id="alamat_perusahaan" cols="30" rows="10" required placeholder="Alamat"></textarea> <br><br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <a href="{{ route('index_supplier') }}"><- Kembali</a>
</body>
</html>