<?php

//class
class Produk {
    //property
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
    
    //method
    public function getLabel()
    {
        return "$this->penerbit | $this->penulis";
    }
}

//object
$produk1 = new Produk("One Piece","Oda","Shonen Jump",30000);

class CetakInfoProduk {
    public function cetak(Produk $produk)
    {
        return $str = "{$produk->judul} | {$produk->getLabel()} | Rp.{$produk->harga}";
    }
}

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);