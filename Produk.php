<?php

class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }
}

$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Oda";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo $produk3->getLabel();