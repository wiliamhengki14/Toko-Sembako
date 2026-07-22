<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supplier</title>
</head>
<body>
    <h1>Data Supplier</h1>
    <hr>
    <a href="{{ route('create_supplier') }}">Tambah Data Supplier +</a>
    @foreach ($suppliers as $supplier)
        <p>Nama Supplier : {{ $supplier->nama_supplier }}</p>
        <p>Kontak Sales : {{ $supplier->kontak_sales }}</p>
        <p>No telepon : {{ $supplier->no_telepon }}</p>
        <p>Alamat Perusahaan : {{ $supplier->alamat_perusahaan }}</p>
        <hr>
    @endforeach
</body>
</html>