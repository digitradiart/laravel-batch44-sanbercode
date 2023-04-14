<?php
require_once('Mobil.php');

class Bus extends Mobil {
    public $roda = 8;

    public function jalan($jarak) {
        return "Mobil sedang berjalan sejauh " . $jarak . " kilometer.<br><br>";
    }
}

?>