<?php 

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

?>