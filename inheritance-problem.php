<?php
// Constructor methode ini adalah methode khusus yang akan dijalankan otomatis setiap kita membuat instand dari setiap class
// Bagian Method dan Propery

class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlhalaman,
        $waktumain,
        $tipe;

    // Method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        // Yang ingin dicetak: Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 hal.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} {Rp. {$this->harga}}";
        if ($this->tipe == "Komik") {
            $str .= "-{$this->jmlhalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " - {$this->waktumain} Jam.";
        }

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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<hr>";
echo $produk2->getInfoLengkap();
echo "<hr>";
