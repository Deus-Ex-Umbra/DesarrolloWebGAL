<?php
class Cola {
    private $datos;
    public function __construct() {
        $this->datos = array();
    }
    public function agregar($dato) {
        array_push($this->datos, $dato);
    }
    public function eliminar() {
        return (count($this->datos) != 0) ? array_shift($this->datos) : "Cola Vacía";
    }
    public function mostrar() {
        return implode(', ', $this->datos);
    }
}
session_start();
if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = new Cola();
}
$cola = $_SESSION['cola'];
switch ($_POST['accion']) {
    case 'Guardar':
        $cola->agregar($_POST['dato']);
        echo "Agregando...";
        break;
    case 'Eliminar':
        if ($cola->eliminar() == "Cola Vacía") echo "Cola Vacía";
        else echo "Eliminando...";
        break;
    case 'Mostrar':
        echo "Elementos en la cola: " . $cola->mostrar();
        break;
}
?>
<meta http-equiv="refresh" content="3;URL=inicio.html">