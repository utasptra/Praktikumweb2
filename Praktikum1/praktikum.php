<?php
// Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nama" => "Revaldi Eka Setiawan", "nim" => "0110223301", "rombel" => "TI04-2023", "uts" => 88, "uas" => 82, "tugas" => 85];
$nilai2 = ["id" => 2, "nama" => "Ade Purnamasari", "nim" => "0110223159", "rombel" => "TI05-2023", "uts" => 84, "uas" => 80, "tugas" => 90];
$nilai3 = ["id" => 3, "nama" => "Aditya Raihan", "nim" => "0110223145", "rombel" => "TI05-2023", "uts" => 95, "uas" => 84, "tugas" => 90];
$nilai4 = ["id" => 4, "nama" => "Noer Muhammad Ayub", "nim" => "0110223142", "rombel" => "TI08-2023", "uts" => 86, "uas" => 92, "tugas" => 80];

// Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai Siswa</title>
</head>

<!-- ... (previous HTML code) ... -->

<!-- ... (previous HTML code) ... -->

<!-- ... (previous HTML code) ... -->

<body>
    <div class="container">
    <h1 class="text-center">Daftar Nilai Siswa</h1>
        <table class="table">
            <thead class="thead-" style="background-color: blue; color: white;">
                <tr>
                    <th scope="col" style="color: yellow;">No</th>
                    <th scope="col" style="color: yellow;">Nama</th>
                    <th scope="col" style="color: yellow;">NIM</th>
                    <th scope="col" style="color: yellow;">Rombel</th>
                    <th scope="col" style="color: yellow;">UTS</th>
                    <th scope="col" style="color: yellow;">UAS</th>
                    <th scope="col" style="color: yellow;">Tugas</th>
                    <th scope="col" style="color: yellow;">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($kumpulan_nilai as $nilai): ?>

                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["id"]?></td>
                        <td><?= $nilai["nama"]?></td>
                        <td><?= $nilai["nim"]?></td>
                        <td><?= $nilai["rombel"]?></td>
                        <td><?= $nilai["uts"]?></td>
                        <td><?= $nilai["uas"]?></td>
                        <td><?= $nilai["tugas"]?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- ... (remaining HTML code) ... -->
</body>

</html>


</html>


</html>


</html>