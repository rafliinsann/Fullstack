<?php

class Kendaraan{
    public function tambah( $harga1, $harga2 ){
        return $harga1 + $harga2;
    }
    public function kurang( $harga1, $harga2 ){
        return $harga1 - $harga2;
    }
    public function kali( $harga1, $harga2 ){
        return $harga1 * $harga2;
    }
    public function bagi( $harga1, $harga2 ){
        return $harga1 / $harga2;
    }

}

$kendaraan = new Kendaraan();
$harga1 = 3000;
$harga2 = 2000;

echo "Pertambahan ".$kendaraan->tambah( $harga1, $harga2) . "<br>";
echo "Pengurangan ".$kendaraan->kurang( $harga1, $harga2). "<br>";
echo "Perkalian ".$kendaraan->kali( $harga1, $harga2). "<br>";
echo "Pembagian ".$kendaraan->bagi( $harga1, $harga2). "<br>";

?>