<?php
session_start();

class Pila {
    private $tope;
    private $pila;

    public function __construct($tope) {
        $this->tope = $tope;
        $this->pila = array();
    }

    public function insertar($dato) {
        if (count($this->pila) < $this->tope) {
            array_push($this->pila, $dato);
        } else {
            echo "La pila está llena. No se puede insertar más elementos.";
        }
    }

    public function eliminar() {
        if (!empty($this->pila)) {
            return array_pop($this->pila);
        } else {
            return "La pila está vacía. No se puede eliminar.";
        }
    }

    public function mostrar() {
        return implode(', ', $this->pila);
    }
}
if (!isset($_SESSION['pila']) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $tope = $_POST['tope'];
    $_SESSION['pila'] = new Pila($tope);
    header("Location: operaciones.html");
    exit;
}
$pila = $_SESSION['pila'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($_POST['accion']) {
        case 'Insertar':
            $pila->insertar($_POST['dato']);
            break;
        case 'Eliminar':
            $pila->eliminar();
            break;
        case 'Mostrar':
            echo "Elementos en la pila: " . $pila->mostrar();
            break;
    }
}
?>
<meta http-equiv="refresh" content="3;URL=operaciones.html"> 
