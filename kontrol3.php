<?php 
$totalSkor = [350, 500, 400, 600];
$hadiahTambahan = [false, false, false, false];

for ($i=0; $i < count($totalSkor); $i++) { 
    if ($totalSkor[$i] >= 500) {
        $hadiahTambahan[$i] = true;
    }
}

for ($i=0; $i < count($hadiahTambahan); $i++) { 
    echo "Total skor pemain ". ($i + 1) ." adalah $totalSkor[$i]<br>";
    echo "Hadiah tambahan? " . ($hadiahTambahan[$i] ? "Ya" : "Tidak") . "<br><br>";
}
?>