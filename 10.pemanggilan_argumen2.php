<?php
function salam($waktu,$nama){
    echo "<p>Selamat $waktu, $nama</p>";
}
$event  ="belajar PHP";
$user = "Andi";

salam($event,$user);
?>