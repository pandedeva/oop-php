<?php 

class Produk {
  public $judul, 
        $penulis,
        $penerbit;

  // protected, agar diskon bisa disimpan di kelas child nya
  protected $diskon = 0;

  // kalau private tidak bisa disimpan di kelas child nya
  private $harga;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
    $this -> judul = $judul;
    $this -> penulis = $penulis;
    $this -> penerbit = $penerbit;
    $this -> harga = $harga;  
  }

  public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100); // hitung diskon
  }

  // method adalah function yang ada di dalam class
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk() {
    $str = "{$this->judul} | {$this -> getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk {
  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this -> jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk() {
    $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman";
    return $str;
  }
}

class Game extends Produk {
  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this -> waktuMain = $waktuMain;
  }

  // hanya game yang boleh ada diskon nya
  public function setDiskon($diskon) {
    $this -> diskon = $diskon;
  }

  public function getInfoProduk() {
    $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";
    return $str;
  }
}

class CetakInfoProduk {
  public function cetak(Produk $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Komik("Naruto", "Deva", "Shasimi", 10000, 150);
$produk2 = new Game("Dragon Ball", "Adi", "Sonny", 50000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2 -> setDiskon(50);
echo $produk2-> getHarga();


?>