<?php

class Sekolah{

    var $nama;
    var $alamat;
    private $guru;

    function jumlah() {
        if ($this->guru > 10 ) {
            $status = "banyak";
        }else {
            $status = "sedikit";
        }
        return $status;

    }

    function setGuru($x){
        $this->guru = $x;
    }

    function bacaGuru(){
        return $this->guru;
    }

   public function __construct( $nama, $alamat){
    $this->nama = $nama;
    $this->alamat = $alamat;

   }

   public function getLabel(){
    return "$this->nama, $this->alamat";
   }

};

class Kelas extends Sekolah{

    public $siswa;

    function setSiswa($y){
        $this->siswa = $y;
    }

    function bacaSiswa(){
        return $this->siswa;
    }
}

?>