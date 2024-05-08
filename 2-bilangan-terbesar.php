<?php

/*
BILANGAN TERBESAR

Susunlan program untuk menginput empat buah bilangan bulat. Kemudian mencetak salah satu bilangan yang nilainya terbesar.

Contoh Tampilan Program :

Bilangan ke-1 : 4
Bilangan ke-2 : 10
Bilangan ke-3 : 5
Bilangan ke-3 : 16
Bilangan terbesar adalah 16
*/

echo "Bilangan ke-1 : ";
$bilangan_1 = intval(fgets(STDIN));

echo "Bilangan ke-2 : ";
$bilangan_2 = intval(fgets(STDIN));

echo "Bilangan ke-3 : ";
$bilangan_3 = intval(fgets(STDIN));

echo "Bilangan ke-4 : ";
$bilangan_4 = intval(fgets(STDIN));

$bilangan_terbesar = $bilangan_1;

if($bilangan_2 > $bilangan_terbesar) {
  $bilangan_terbesar = $bilangan_2;
}

if($bilangan_3 > $bilangan_terbesar) {
  $bilangan_terbesar = $bilangan_3;
}

if($bilangan_4 > $bilangan_terbesar) {
  $bilangan_terbesar = $bilangan_4;
}

echo "Bilangan terbesar adalah ".$bilangan_terbesar."\n";
