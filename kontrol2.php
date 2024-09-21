<?php 
$hargaProduk = 120_000;
$hargaDiskon = 0;
$hargaSetelahDiskon = 0;

if ($hargaProduk > 100_000) {
    $hargaDiskon = $hargaProduk * 0.2;
    $hargaSetelahDiskon = $hargaProduk - $hargaDiskon;
} 

echo "Harga Produk : Rp. $hargaProduk <br>";
echo "Diskon : 20% <br>";
echo "Harga Setelah Diskon : Rp. $hargaSetelahDiskon <br>";
?>