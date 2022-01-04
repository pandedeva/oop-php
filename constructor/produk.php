<?php 

class Produk
{
  public $judul, 
        $penulis,
        $penerbit,
        $harga;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // method adalah function yang ada di dalam class
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk("Naruto", "Deva", "Shasimi", 10000);
$produk2 = new Produk("DeadPool", "Adi", "Sonny", 50000);
$produk3 = new Produk("GTA V");

echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

?>