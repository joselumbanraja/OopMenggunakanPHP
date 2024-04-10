<?php

// Bagian Method dan Propery

class Produk
{
    // Property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbiit",
        $harga = 0;

    // Method
    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000;

// Pemanggilan method & Property Product
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
