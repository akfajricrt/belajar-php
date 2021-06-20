<?php
// pastikan include dan require di letakan di atas karna php membaca dari atas ke bawah
/* ada 4 function jika kita ingin mengambil data di luar file 
menggunakan require , include, require_once, include_once

dan kegunaakn include_once bisa mengurangi eror saat pemanggilan 2 funsi yang sama 
dan jika kita menggunakan include_once atau require_once pada declarasi funsi yang pertama akan di baca namun yang kedua
tidak di baca karna functionnya ada 2
*/
require_once "Lib/MyFunction.php";
require_once "Lib/MyFunction.php";

sayHello("Ahmad","fajri");