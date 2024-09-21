<?php
$totalKursi = 40;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;

$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Restoran<br>";
echo "Total kursi : $totalKursi<br>";
echo "Kursi ditempati : $kursiDitempati<br>";
echo "Kursi kosong : $kursiKosong<br>";
echo "Persentase kursi kosong : $persentaseKursiKosong%<br>";


?>