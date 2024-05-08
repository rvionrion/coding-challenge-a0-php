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

// Perulangan dan Fungsi Max

$bilangan = array();

for($i = 0; $i < 4; $i++) {
  echo "Bilangan ke-".($i+1)." : ";
  array_push($bilangan, intval(fgets(STDIN)));
}

$bilangan_terbesar = max($bilangan);

echo "Bilangan terbesar adalah ".$bilangan_terbesar."\n";
