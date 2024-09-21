<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Operator Aritmatika $a dan $b<br><br>";
echo "Penjumlahan $a + $b = $hasilTambah<br>";
echo "Pengurangan $a - $b = $hasilKurang<br>";
echo "Perkalian $a x $b = $hasilKali<br>";
echo "Pembagian $a : $b = $hasilBagi<br>";
echo "Modulus  $a modulus $b = $sisaBagi<br>";
echo "Perpangkatan $a pangkat $b =$pangkat<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Operator Perbandingan $a dan $b<br><br>";
echo "Sama dengan $a == $b = " . ($hasilSama ? "True" : "False") . "<br>";
echo "Tidak sama dengan $a != $b"  . ($hasilTidakSama ? "True" : "False") . "<br>";
echo "Lebih kecil dari $a < $b"  . ($hasilLebihKecil ? "True" : "False") . "<br>";
echo "Lebih besar dari $a > $b"  . ($hasilLebihBesar ? "True" : "False") . "<br>";
echo "Lebih kecil sama dengan $a"  . ($hasilLebihKecilSama ? "True" : "False") . "<br>";
echo "Lebih besar sama dengan $a >= $b"  . ($hasilLebihBesarSama ? "True" : "False") ."<br><br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Operator Logika $a dan $b<br><br>";
echo "$a AND $b = " . ($hasilAnd ? "True" : "False") . "<br>";
echo "$a OR $b = " . ($hasilOr ? "True" : "False") . "<br>";
echo "NOT $a = " . ($hasilNotA ? "True" : "False") . "<br>";
echo "NOT $b = " . ($hasilNotB ? "True" : "False") . "<br><br>";


echo "Operator Penugasan $a dan $b<br><br>";
echo "$a += $b = " . ($a += $b) ."<br>";
echo "$a -= $b = " .($a -= $b) . "<br>";
echo "$a *= $b = " .($a *= $b) . "<br>";
echo "$a /= $b = " .($a /= $b) . "<br>";
echo "$a %= $b = " .($a %= $b) . "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Operator Identitas $a dan $b<br><br>";
echo "$a === $b = " . ($hasilIdentik ? "True" : "False") . "<br>";
echo "$a !== $b = " . ($hasilTidakIdentik ? "True" : "False") . "<br>";
?>