<?php

include 'classSekolah.php';
 
$sekolah1 = new Sekolah("SMKN 5 Bandung", "Bojong Koneng" );
// $sekolah1->nama = "SMKN 5 Bandung";
// $sekolah1->alamat = "Bojong Koneng";  
// $sekolah1->setGuru(10);

$sekolah2 = new Sekolah("SMAN 10 Bandung", "Cicadas");

// $sekolah2 = new Sekolah();
// $sekolah2->nama = "SMAN 10 Bandung";
// $sekolah2->alamat = "Cicadas";
// $sekolah2->setGuru(50);

$sekolah3 = new Sekolah("SMK Merdeka", "Pahlawan");

// $sekolah3 = new Sekolah();
// $sekolah3->nama = "SMK Merdeka";
// $sekolah3->alamat = "Pahlawan";
// $sekolah3->setGuru(19);

// $kelas1 = new Kelas();
// $kelas1->nama = "RC 2.5";
// $kelas1->setSiswa(36);
// $kelas1->setGuru(1);



echo $sekolah1->getLabel();

// echo "Nama Sekolah = " .  $sekolah1->nama. "<br>" ." Alamat = " . $sekolah1->alamat ;
// echo "<br>";
// echo "Jumlah Guru = ". $sekolah1->bacaGuru();

echo "<br> <br>";

echo $sekolah2->getLabel();

// echo "Nama Sekolah = " . $sekolah2->nama. "<br>" . " Alamat = " . $sekolah2->alamat ;
// echo "<br>";
// echo "Jumlah Guru = ". $sekolah2->bacaGuru();

echo "<br> <br>";

echo $sekolah3->getLabel();

// echo "Nama Sekolah = " . $sekolah3->nama. "<br>" . " Alamat = " . $sekolah3->alamat ;
// echo "<br>";
// echo "Jumlah Guru = ". $sekolah3->bacaGuru();

// echo "<br> <br>";
// echo "Letak = " . $kelas1->nama ."<br>" . "Jumlah Guru = " . $kelas1->bacaGuru() . "<br>";
// echo "Jumlah Siswa = ". $kelas1->bacaSiswa();




?>