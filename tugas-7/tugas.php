<?php
$saldoAwal = 1000000;
$bunga = $saldoAwal * 0.0025;
$bulan = 11; 
$saldoAkhir = $saldoAwal;
for ($x = 1; $x <= $bulan ; $x++){
    $saldoAkhir = $saldoAwal - $bunga;
    $saldoAwal = $saldoAkhir;  
}
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir. ",-";
?>