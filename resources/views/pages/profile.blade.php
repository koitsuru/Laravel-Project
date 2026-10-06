<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

    <nav>
        <a href="/">Beranda</a> |
        <a href="/about">About</a> |
        <a href="/profile">Profile</a>
    </nav>

    <h1>Profile Mahasiswa</h1>

    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Kelas: {{ $kelas }}</p>
    <p>Program Studi: {{ $prodi }}</p>

    @if ($status == 'Aktif')
        <p>Mahasiswa Aktif</p>
    @else
        <p>Mahasiswa Tidak Aktif</p>
    @endif

</body>
</html>