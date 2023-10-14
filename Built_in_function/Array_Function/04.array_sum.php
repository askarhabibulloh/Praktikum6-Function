<?php
$nilai = array(98,59,42,65,87);
echo array_sum($nilai);
echo "<br>";
$nilai = array(9.8,5.9,4.2);
echo array_sum($nilai);
echo "<br>";
$nilai = array("anton"=>82,"rudi"=>81,"rini"=>95);
$nilai_rata = array_sum($nilai)/count($nilai);
echo "Nilai rata rata siswa : $nilai_rata";
?>