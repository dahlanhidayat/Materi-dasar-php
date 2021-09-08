<?php

$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
    echo "selamat anda lulus" . PHP_EOL;
    
} else {
    echo "Maaf, Anda tidak lulus". PHP_EOL;
}



$nilai = 70;
$absen = 90;

if ($nilai >= 80 && $absen >= 80){
    echo "Nilai Anda A". PHP_EOL;
}elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B". PHP_EOL;
}elseif ($nilai >= 60 && $absen >= 60){
    echo "Nilai Anda C". PHP_EOL;;
}elseif ($nilai >= 50 && $absen >= 50){
    echo "Nilai Anda D". PHP_EOL;
}else {
    echo "Nilai Anda E" . PHP_EOL;
}


if ($nilai >= 80 && $absen >= 80):
    echo "Nilai Anda A". PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B". PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C". PHP_EOL;;
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D". PHP_EOL;
else :
    echo "Nilai Anda E". PHP_EOL;
endif;

$mangga = 5000;
$anggur = 5000;

if ($mangga >= 50000 && $anggur >= 50000) {
    echo "dahlan mendapatkan 5kg mangga dan 5kg anggur" . PHP_EOL;
}elseif ($mangga >= 40000 && $anggur >= 40000) {
    echo "dahlan mendaptkan 4kg manggandan 4kg anggur" . PHP_EOL;
}elseif ($mangga >= 30000 && $anggur >= 30000) {
    echo "dahlan mendaptkan 3kg manggandan 3kg anggur" . PHP_EOL;
}elseif ($mangga >= 20000 && $anggur >= 20000) {
    echo "dahlan mendaptkan 2kg manggandan 2kg anggur" . PHP_EOL;
}elseif ($mangga >= 10000 && $anggur >= 10000) {
    echo "dahlan mendaptkan 1kg mangga dan 1kg anggur" . PHP_EOL;
}else {
    echo "dahlan tidak dapat membeli mangga dan anggur" . PHP_EOL;
}