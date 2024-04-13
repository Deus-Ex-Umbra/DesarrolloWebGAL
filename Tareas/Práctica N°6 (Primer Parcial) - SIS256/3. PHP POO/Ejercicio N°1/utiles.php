<?php
    class Utiles {
        private $cadena;
        public function __construct($cadena) {
            $this->cadena = $cadena;
        }
        public function aumentarGuiones($_n) {
            $cadenam = "";
            for($c = 0; $c < strlen($this->cadena); $c++) {
                $cadenam .= $this->cadena[$c];
                if ($c < strlen($this->cadena) - 1) for($i = 0; $i < $_n; $i++) $cadenam .= "-";
            }
            echo $cadenam;
        }
    }
?>