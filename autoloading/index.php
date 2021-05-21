<?php

require_once 'App/init.php';

//instansiasi object
$produk1 = new Komik("One Piece","Oda","Shonen Jump",30000,100);
$produk2 = new Game("uncharted","Neil Druckman","Sony Computer",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();