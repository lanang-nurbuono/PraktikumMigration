<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Jurusan</title>
</head>
<body>
    <h1>Detail Jurusan</h1>
    <p><strong>Kode:</strong> {{ $jurusan->kode }}</p>
    <p><strong>Nama:</strong> {{ $jurusan->nama }}</p>
    <p><strong>Waktu Pembuatan:</strong> {{ $jurusan->created_at }}</p>
    <a href="{{ url('/jurusan') }}">Kembali</a>
</body>
</html>