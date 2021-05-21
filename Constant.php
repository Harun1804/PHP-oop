<?php

define('NAMA','Lala'); // hanya bisa digunakan diluar class

class Coba {
    const NGARAN = 'Lili'; // bisa digunakan di dalam class
}

echo NAMA;
echo "<br>";
echo Coba::NGARAN;