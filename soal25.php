<?php 
$nilaiUjianMatematika = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;

foreach ($nilaiUjianMatematika as $nilai) {
    $totalNilai += $nilai[1];
}

$nilaiRataRata = $totalNilai / count($nilaiUjianMatematika);

echo "Nilai rata-rata ujian matematika $nilaiRataRata<br>";

echo "Daftar siswa yang mendapat nilai lebih dari rata-rata<br>";
foreach ($nilaiUjianMatematika as $nilai) {
    if ($nilai[1] > $nilaiRataRata) {
        echo "Nama: " . $nilai[0] . ", Nilai: " . $nilai[1] . "<br>";
    }
}
?>