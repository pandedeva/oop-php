<?php 

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

?>