<?php

//class
abstract class Produk {
    //visibility = public,protected, private
    //property
    private  $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;
    
    public function __construct($judul ="judul",$penulis="penulis",$penerbit="penerbit",$harga=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    //method
    // setter & getter
    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getLabel()
    {
        return "$this->penerbit, $this->penulis";
    }

    abstract public function getInfoProduk();

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul ="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlHalaman = 0)
    {
        //overiding
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        //overiding
        $str = "Komik : ".$this->getInfo()." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul ="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain = 0)
    {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : ". $this->getInfo(). " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

//instansiasi object
$produk1 = new Komik("One Piece","Oda","Shonen Jump",30000,100);
$produk2 = new Game("uncharted","Neil Druckman","Sony Computer",250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();