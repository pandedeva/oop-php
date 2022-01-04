<?php 

require_once 'App/init.php';


// instansiasi class Komik dan Game
$produk1 = new Komik("Naruto", "Deva", "Shasimi", 10000, 150);
$produk2 = new Game("Dragon Ball", "Adi", "Sonny", 50000, 50);
$produk3 = new Game("Digimon", "Lanang", "XboX", 200000, 120);

// menampilkan daftar produk
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();

?>