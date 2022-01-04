<?php 

class Produk
{
  public $judul = "judul", 
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

  // method adalah function yang ada di dalam class
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "GTA V";
// $produk2->tambahProperty = "Letsgoo";
// var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Deva";
$produk3 -> penerbit = "Shasimi";
$produk3 -> harga = 100000;

$produk4 = new Produk();
$produk4  -> judul ="DeadPool";
$produk4  -> penulis ="Adi";
$produk4  -> penerbit ="Sony";
$produk4  -> harga = 10000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk3->getLabel();
echo "<hr>";

?>