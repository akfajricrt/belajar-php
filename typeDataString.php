<?php


// single quote
echo 'Ahmad Khoirul fajri';
echo "\n";
//double quote
echo "Ahmad Khoirul fajri \n";

//menggunakan Enter \n Tab \t


echo "Ahmad \t Khoirul\t Fajri\n";

echo <<<FAJRI
selamat datang di type data string ini adalah 
pembelajaran menggunakan Enter 
dan menggunakan "heredoc"
FAJRI;


echo <<<'FAJRI'
selamat datang di type data string ini adalah 
pembelajaran menggunakan Enter 
dan menggunakan "nowdoc"
FAJRI;


?>