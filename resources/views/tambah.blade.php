<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>tambah</title>
</head>
<body>
    <form action="{{ route('post.tambah') }}" method="POST">
        @csrf   
        <input type="text" name="nama" id="nama" placeholder="nama">
        <br>
        <input type="text" name="nim" id="nim" placeholder="NIM">
        <br>
        <input type="text" name="kelas" id="kelas" placeholder="kelas">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>