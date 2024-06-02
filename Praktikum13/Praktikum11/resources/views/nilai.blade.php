<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nilai = 90;
    ?>
    @if ($nilai >= 90);
        <h1>Nilai Anda A</h1>
    @endif
    <h1>Nilai Saya {{$nilai}}</h1>
</body>
</html>
