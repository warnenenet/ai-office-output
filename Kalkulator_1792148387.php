<?php
class Kalkulator {
    public function tambah($a, $b) {
        return $a + $b;
    }

    public function kurang($a, $b) {
        return $a - $b;
    }

    public function kali($a, $b) {
        return $a * $b;
    }

    public function bagi($a, $b) {
        if ($b == 0) {
            throw new Exception("Pembagian dengan nol tidak diizinkan.");
        }
        return $a / $b;
    }
}
?>