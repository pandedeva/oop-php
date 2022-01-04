<?php 

// define('NAMA', 'Pande Deva');
// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;



// class Coba  
// {
//   // define tidak bisa disimpan didalam class, sedangkan kalau const bisa
//   // define('NAMA', 'Pande Deva');
//   const NAMA = 'Pande Deva';
// }

// echo Coba::NAMA;


// function coba()
// {
//   return __FUNCTION__;
// }
// echo coba();

class Coba  
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


?>