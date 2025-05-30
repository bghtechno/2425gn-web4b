<!DOCTYPE html>
<html>
<head>
    <title>Biodata Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .biodata {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .field {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 160px;
        }
    </style>
</head>
<body>

<?php
// Biodata dalam variabel PHP
$nama = "HANDIKA CAHYA WULANDARI";
$nim = "230631100041";
$tempat_lahir = "Pasuruan";
$tanggal_lahir = "20 Maret 2005";
$jenis_kelamin = "Perempuan";
$alamat = "Ds. Sendangrejo";
$agama = "Islam";
?>

<div class="biodata">
    <h2>Biodata Saya</h2>
    <div class="field"><span class="label">Nama:</span> <?= $nama; ?></div>
    <div class="field"><span class="label">NIM:</span> <?= $nim; ?></div>
    <div class="field"><span class="label">Tempat, Tanggal Lahir:</span> <?= $tempat_lahir . ", " . $tanggal_lahir; ?></div>
    <div class="field"><span class="label">Jenis Kelamin:</span> <?= $jenis_kelamin; ?></div>
    <div class="field"><span class="label">Alamat:</span> <?= $alamat; ?></div>
    <div class="field"><span class="label">Agama:</span> <?= $agama; ?></div>
</div>

</body>
</html>