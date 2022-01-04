<?php 
// class ContohStatic 
// {
//   public static $angka = 1;

//   public static function halo()
//   { // self:: untuk mengambil variable angka
//     return "Halo " . self::$angka++ . " kali.";
//   }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();

class ContohStatic 
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}
// nilai static akan selalu tetap meskipun object di panggil berulang kali
$obj = new ContohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new ContohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>