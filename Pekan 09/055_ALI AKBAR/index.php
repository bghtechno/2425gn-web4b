<?php
date_default_timezone_set("Asia/Jakarta"); // Set zona waktu

echo "<h2>Informasi Waktu</h2>";
echo "<p>Tanggal hari ini: " . date('d-m-Y') . "</p>";
echo "<p>Waktu sekarang: " . date('H:i:s') . "</p>";
echo "<p>Hari: " . date('l') . "</p>";
echo "<p>Zona Waktu: " . date_default_timezone_get() . "</p>";

// Tambahan: Salam otomatis berdasarkan waktu
$jam = date('H');

if ($jam >= 5 && $jam < 12) {
    $salam = "Selamat pagi!";
} elseif ($jam >= 12 && $jam < 15) {
    $salam = "Selamat siang!";
} elseif ($jam >= 15 && $jam < 18) {
    $salam = "Selamat sore!";
} else {
    $salam = "Selamat malam!";
}

echo "<p>$salam</p>";
?>
