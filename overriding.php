<?php
// Constructor methode ini adalah methode khusus yang akan dijalankan otomatis setiap kita membuat instand dari setiap class
// Bagian Method dan Propery

class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Yang ingin dicetak: Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 hal.
        $str = " {$this->judul} | {$this->getLabel()} {Rp. {$this->harga}}";
        return $str;
    }
}


class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

// Child class
class Komik extends Produk
{
    public $jmlhalaman;

    // Constract Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlhalaman);

        $this->jmlhalaman = $jmlhalaman;
    }

    // Property
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktumain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktumain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktumain = $waktumain;
    }
    // Property
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktumain} Jam.";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 50);

echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();
echo "<hr>";
