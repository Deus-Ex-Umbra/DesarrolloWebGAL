<?php
class OperacionesCadena {
    private $cadena;
    public function __construct($cadena) {
        $this->cadena = $cadena;
    }
    public function invertir() {
        return strrev($this->cadena);
    }
    public function mayuscula() {
        return strtoupper($this->cadena);
    }
    public function minuscula() {
        return strtolower($this->cadena);
    }
}
if (isset($_POST['cadena'])) {
    $cadena = $_POST['cadena'];
    $operacionesCadena = new OperacionesCadena($cadena);
    $cadenaInvertida = $operacionesCadena->invertir();
    $cadenaMayuscula = $operacionesCadena->mayuscula();
    $cadenaMinuscula = $operacionesCadena->minuscula();
    echo "<h2>Resultados:</h2>";
    echo "<p>Cadena invertida: $cadenaInvertida</p>";
    echo "<p>Cadena en mayúsculas: $cadenaMayuscula</p>";
    echo "<p>Cadena en minúsculas: $cadenaMinuscula</p>";
} else {
    echo "Error: No se ha proporcionado una cadena.";
}
?>