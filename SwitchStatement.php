<?php

$nilai = "B";

switch ($nilai) {
  case 'A':
    echo "Selamat Anda Lulus Dengan Baik" . PHP_EOL;
    break;
  case 'B':
  case 'C':
    echo "Selamat Anda Lulus" . PHP_EOL;
    break;
  
  default:
  echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
    break;
}