<?php
/*
GAJI KARYAWAN

Tugas :
Program untuk menghitung gaji karyawan

Display Input Program :
==========================
Nama Karyawan : __________
Golongan : __________
Jam Kerja : __________

Nama_Karyawan Total Gaji Rp. ***** Per Minggu
==========================

Ket:
  - Golongan A : 5000
  - Golongan B : 7000
  - Golongan C : 8000
  - Golongan D : 10000
  - Jam kerja * Golongan = Gaji Karyawan
*/

echo "Nama Karyawan : ";
$nama_karyawan = trim(fgets(STDIN));

echo "Golongan : ";
$golongan = trim(fgets(STDIN));

echo "Jam Kerja : ";
$jam_kerja = intval(fgets(STDIN));

$gaji_golongan = 0;

switch($golongan) {
  case "A":
    $gaji_golongan = 5000;
    break;
  case "B":
    $gaji_golongan = 7000;
    break;
  case "C":
    $gaji_golongan = 8000;
    break;
  case "D":
    $gaji_golongan = 10000;
    break;
}

$total_gaji = $gaji_golongan * $jam_kerja;

echo "\n";
echo ($nama_karyawan." Total Gaji Rp ".$total_gaji." Per Minggu\n");
