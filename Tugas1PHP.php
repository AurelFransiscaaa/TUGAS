<?php
// Tentang Saya
$tentang = "Saya merupakan mahasiswi semester 6 Prodi Sistem Informasi. Saya berkuliah di Universitas Nusantara PGRI Kediri yang bertempat di Kediri , Jawa Timur. Sekarang saya sedang mengikuti Program MBKM Studi Independen untuk mempelajari dan menambah pemahaman mengenai bahasa pemrograman HTML, CSS, SQL, PHP dan saya baru - baru ini saya sudah mempelajari JavaScript dan GITHUB.";

// Informasi Pribadi
$nama = "Aurel Fransisca Kusuma Wardhani";
$ttl = "Kediri, 3 Juni 2003";
$jk = "Perempuan";
$alamat = "Jl. Veteran Kediri, Jawa Timur";
$agama = "Islam";

// Contact Pribadi
$gmail = "aurelfransisca03@gmail.com";
$nohp = "0857 - 3146 - 1875";
$github = '<a href="https://github.com/AurelFransiscaaa" target="_blank">AurelFransiscaaa</a>';
$instagram = '<a href="https://www.instagram.com/aurelfransiscaaa_/" target="_blank">@aurelfransiscaaa_</a>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Welcome to My Profile</h1>

    <p class="tentang" align="justify"><img src="gb1.jpeg" width="3%" align="left" hspace="15">
        <?= $tentang ?></p>

    <fieldset>
        <legend>
            <font>Informasi Pribadi</font>
        </legend>
        <p>Nama : <?= $nama ?> </p>
        <p>Tempat Tanggal Lahir : <?= $ttl ?> </p>
        <p>Jenis Kelamin : <?= $jk ?> </p>
        <p>Alamat : <?= $alamat ?> </p>
        <p>Agama : <?= $agama ?> </p>
    </fieldset>
    <fieldset>
        <legend>
            <font>Contact Pribadi</font>
        </legend>
        <p>Gmail : <?= $gmail ?> </p>
        <p>No Hp : <?= $nohp ?> </p>
        <p>GitHub : <?= $github ?> </p>
        <p>Instagram : <?= $instagram ?></p>
    </fieldset>
</body>

</html>