<?php
function tambahkurang($satu,$dua){
    $hasil[]=$satu+$dua;
    $hasil[]=$satu-$dua;
    return $hasil;
}
$a=tambahkurang(100,30);
echo"100 tambah 30 = ".$a[0];
echo "<br>";
echo"100 kurang 30 = ".$a[1];
?>