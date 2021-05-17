<?php

//class
class Produk {
    //property
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;
    
    public function __construct($judul ="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman = 0,$waktuMain = 0,$tipe = "tipe")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    //method
    public function getLabel()
    {
        return "$this->penerbit, $this->penulis";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }elseif($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak(Produk $produk)
    {
        return $str = "{$produk->judul} | {$produk->getLabel()}  (Rp.{$produk->harga})";
    }
}

//object
$produk1 = new Produk("One Piece","Oda","Shonen Jump",30000,100,0,"Komik");
$produk2 = new Produk("uncharted","Neil Druckman","Sony Computer",250000,0,50,"Game");

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo $produk1->getInfoLengkap();