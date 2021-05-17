<?php

//class
class Produk {
    //property
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;
    
    public function __construct($judul ="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman = 0,$waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    
    //method
    public function getLabel()
    {
        return "$this->penerbit, $this->penulis";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    // public $jmlHalaman;

    public function getInfoKomik()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    // public $waktuMain;

    public function getInfoGame()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})  ~ {$this->waktuMain} Jam.";
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
$produk1 = new Komik("One Piece","Oda","Shonen Jump",30000,100,0);
$produk2 = new Game("uncharted","Neil Druckman","Sony Computer",250000,0,50);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();