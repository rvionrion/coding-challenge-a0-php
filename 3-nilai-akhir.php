<?php

/*
NILAI AKHIR

Buatkan program yang dapat menghitung Nilai Akhir dengan persamaan :

Nilai_Akhir = (0.25 * nilai_tugas) + (0.25 * nilai_UTS) + (0.5 * nilai_UAS)

Catatan :
  input: nilai_tugas, nilai_UTS, nilai_UAS
  output: Nilai_Akhir

*/

echo "Nilai Tugas : ";
$nilai_tugas = intval(fgets(STDIN));

echo "Nilai UTS : ";
$nilai_uts = intval(fgets(STDIN));

echo "Nilai UAS : ";
$nilai_uas = intval(fgets(STDIN));

$nilai_akhir = (0.25 * $nilai_tugas) + (0.25 * $nilai_uts) + (0.5 * $nilai_uas);

echo "Nilai Akhir = ".$nilai_akhir."\n";
