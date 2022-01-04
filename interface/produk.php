<?php 

interface InfoProduk{
  public function getInfoProduk();
}

// class produk tidak akan di instansiansi karena dia abstract
abstract class Produk {
  protected $judul, 
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;
  // protected agar diskon bisa disimpan di kelas child nya, sedangkan private tidak bisa

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this -> judul = $judul;
    $this -> penulis = $penulis;
    $this -> penerbit = $penerbit;
    $this -> harga = $harga;  
  }

  public function setJudul($judul) {
    if (!is_string($judul)) { // cek harus string
      throw new Exception("Judul Harus String");
    }
    $this->judul = $judul;
  }
  
  public function getJudul() {
    return $this->judul;
  }

  public function setPenulis($penulis) {
    $this->penulis = $penulis;
  }

  public function getPenulis() {
    return $this->penulis;
  }
  
  public function setPenerbit($penerbit) {
    $this->penerbit = $penerbit;
  }

  public function getPenerbit() {
    return $this->penerbit;
  }

  public function setHarga($harga) {
    $this->harga = $harga;
  }

  public function getHarga() {
    return $this->harga - ( $this->harga * $this->diskon / 100); // hitung diskon
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  abstract public function getInfo();
}

// class Komik adalah turunan dari Produk, dan juga implementasi InfoProduk
class Komik extends Produk implements InfoProduk {
  public $jmlHalaman;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this -> jmlHalaman = $jmlHalaman;
  }

  public function getInfo() {
    $str = "{$this->judul} | {$this -> getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman";
    return $str;
  }
}

// class Game adalah turunan dari Produk, dan juga implementasi InfoProduk
class Game extends Produk implements InfoProduk {
  public $waktuMain;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this -> waktuMain = $waktuMain;
  }

  // hanya game yang boleh ada diskon nya
  public function setDiskon($diskon) {
    $this -> diskon = $diskon;
  }

  public function getInfo() {
    $str = "{$this->judul} | {$this -> getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam";
    return $str;
  }
}

// untuk mencetak info lengkap dari sebuah produk
class CetakInfoProduk {
  public $daftarProduk = [];
  
  public function tambahProduk(Produk $produk) {
    $this->daftarProduk[] = $produk; // untuk menambahkan elemen baru pada array
  }

  public function cetak() {
    $str = "DAFTAR PRODUK : <br>";

    // looping array
    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }


    return $str;
  }
}

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



?>