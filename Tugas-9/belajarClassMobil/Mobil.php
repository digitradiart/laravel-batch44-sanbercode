<?php
class Mobil {
    public $merk;
    public $roda = 4;
    public $bahanBakar = "bensin";
    public $spion = 2;

    public function  __construct($nama) {
        $this->merk = $nama;
    }
}
?>