<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($data as $x)
    NIM: {{ $x->NIM }}<br>
    Nama: {{ $x->nama }}<br>
    Kelas: {{ $x->kelas }}<br>
    <br>  
@endforeach
</table>
</body>
</html>