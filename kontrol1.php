<?php 
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;

$nilaiTertinggi1 = 92;
$nilaiTerendah1 = 70;

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= $nilaiTertinggi1 || $nilai <= $nilaiTerendah1) {
        continue;
    } else {
        $totalNilai += $nilai;
    }
}

$rataRata = $totalNilai / 6;
echo "Total Nilai: $totalNilai <br>";
echo "Rata-rata Nilai: $rataRata <br>";
?>