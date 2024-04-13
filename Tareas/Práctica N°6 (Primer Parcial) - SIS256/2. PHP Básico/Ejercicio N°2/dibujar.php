<?php
    class Examen {
        private $cadena1 = "";
        private $cadena2 = "";
        public function __construct($cadena1, $cadena2) {
            $this->cadena1 = $cadena1;
            $this->cadena2 = $cadena2;
        }
        public function cruzar() {
            $filas = strlen($this->cadena2);
            $columnas = strlen($this->cadena1);
            $comun = array();
            $comun = $this->coincidencias();
            if ($comun[1]) {
                $columnacoincidencia = 0;
                $filacoincidencia = 0;
                $contador = 1;
                foreach (str_split($this->cadena1) as $c1) {
                    if ($c1 == $comun[0]) {
                        $columnacoincidencia = $contador;
                        break;
                    }
                    $contador++;
                }
                $contador = 1;
                foreach (str_Split($this->cadena2) as $c2) {
                    if ($c2 == $comun[0]) {
                        $filacoincidencia = $contador;
                        break;
                    }
                    $contador++;
                }
                $contadorc1 = 0;
                $contadorc2 = 0;
                echo "<table style='border: 1px solid black;'>";
                for ($f = 0; $f < $filas; $f++) {
                    echo "<tr>";
                    for ($c = 0; $c < $columnas; $c++) {
                        if ($f == $filacoincidencia - 1) {
                            echo "<td style='background-color: skyblue; padding: 4px; border: 1px solid black;'>{$this->cadena1[$contadorc1]}</td>";
                            $contadorc1++;
                        } else if ($c == $columnacoincidencia - 1) {
                            echo "<td style='background-color: skyblue; padding: 4px; border: 1px solid black;'>{$this->cadena2[$contadorc2]}</td>";
                            $contadorc2++;
                        }
                        else echo "<td style='padding: 4px; border: 1px solid black;'></td>";
                    }
                }
                echo "</table>";
            } else echo "No hay coincidencias";
        }
        private function coincidencias() {
            $coincidencia = ['', false];
            foreach(str_split($this->cadena1) as $c1) {
                foreach(str_split($this->cadena2) as $c2) {
                    if($c1 == $c2) {
                        $coincidencia[0] = $c1;
                        $coincidencia[1] = true;
                        return $coincidencia;
                    }
                }
            }
            return $coincidencia;
        }
    }

    $examen = new Examen($_POST['cadena1'], $_POST['cadena2']);
    $examen->cruzar();
?>