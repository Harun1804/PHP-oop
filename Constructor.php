<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;
    
    public function __construct($judul ="judul",$penulis="penulis",$penerbit="penerbit",$harga=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel()
    {
        return "$this->judul,$this->penulis";
    }
}

$produk3 = new Produk("One Piece","Oda","Shonen Jump",30000);

echo "Komik : ".$produk3->getLabel();