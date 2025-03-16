<?php
class Lingkaran {
    public $jari;
    public const PHI = 3.14;

    public function __construct($r) {
        $this->jari = $r;
    }
    public function getluas() {
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

    public function getkeliling() {
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }

    public function cetak(){
        echo "Lingkaran dengan jari2 ".$this->jari;
        echo "<br>Luas = ".$this->getLuas();
        echo "<br>Keliling = ".$this->getkeliling();
    }
}

?>