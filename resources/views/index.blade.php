<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>
    @foreach ($siswas as $siswa)
    <ol>
        <li>Nis: {{$siswa['nis']}}</li>
        <li>Nama: {{$siswa['nama']}}</li>
        <li>Rombel: {{$siswa['rombel']}}</li>
    </ol>
    @endforeach
</body>
</html>