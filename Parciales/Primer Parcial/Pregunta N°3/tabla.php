<?php
    class Tabla {
        private $palabra;
        private $color;
        private $color_fondo;
        public function __construc($_palabra) {
            $this->palabra = str_split($_palabra);
        }
        public function cuadrado() {
            $this->color = 'white';
            $this->color_fondo = 'red';
            $p = $this->palabra;
            $pi = $this->invertir($this->palabra);
            $colfil = strlen($this->palabra);
            $contadoriv = $colfil - 1;
            $contadorih = $contadoriv;
            echo "<table>";
            for ($f = 0; $f <= $colfil; $f++) {
                echo "<tr>";
                for ($c = 0; $c <= $colfil; $c++) {
                    $cad = $p[$c];
                    if ($f == 0) echo "<th style='color: $this->color; color-brackround: $this->color_fondo;'>$cad</th>";
                    else if ($c == 0) echo "<th style='color: $this->color; color-brackround: $this->color_fondo;'>$cad</th>";
                    else if ($c == $colfil && $f > 0) echo "<th style='color: $this->color; color-brackround: $this->color_fondo;'>{$pi[($f - 1)]}</th>";
                    else if ($f == $colfil && $c > 0) echo "<th style='color: $this->color; color-brackround: $this->color_fondo;'>{$pi[($c - 1)]}</th>";
                    else echo "<td></td>";
                }
            }
            echo "</table>";
        }
        public function diagonal() {
            $this->color = 'blue';
            $this->color_fondo = 'yellow';
            $colfil = strlen($this->palabra);
            $p = $this->palabra;
            echo "<table>";
            for ($f = 0; $f < $colfil; $f++) {
                echo "<tr>";
                for ($c = 0; $c <= $colfil; $c++) {
                    if ($f == $c) echo "<td style='color: $color; color-backround: $color_fondo;'>{$p[$c]}</td>";
                    else echo "<td></td>";
                }
            }
            echo "</table>";
        }
        private function invertir($_palabra) {
            $tamanio = strlen($this->palabra);
            $palabra = str_split($_palabra);
            $palabrai = "";
            for ($i = $tamanio - 1; $i >= 0; $i--) {
                $palabrai .= $palabra[$i];
            }
            return $palabrai;
        }
    }
    $tabla = new Tabla($_POST['palabra']);
    try {
        if ($_POST['tipo'] == 1) $tabla->diagonal();
        else $tabla->cuadrado();
    } catch(e) {
        echo "Error".e;
    }
?>