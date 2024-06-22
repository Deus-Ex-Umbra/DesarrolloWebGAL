<?php
    class Alumno {
        public $cu;
        public $nombres;
        public $apellidos;
        public function __construct($_cu, $_nombres, $_apellidos) {
            $this->cu = $_cu;
            $this->nombres = $_nombres;
            $this->apellidos = $_apellidos;
        }
    }
    class ListaAlumnos {
        public $arreglo_de_alumnos = array();
        private $limite = 0;
        public function insertarAlumno($_alumno) {
            $this->arreglo_de_alumnos = $_alumno;
            $this->limite++;
        }
        public function eliminarAlumno($_id) {
            if ($this->limite > 0) {
                unset($this->arreglo_de_alumnos[$_id]);
                $this->limite --;
            }
        }
        public function mostrarAlumnos() {
            echo "<table>";
            echo "<th>CU</th>";
            echo "<th>Nombres</th>";
            echo "<th>Apellidos</th>";
            echo "<th>Funciones</th>";
            for ($alumno = 0; $alumno <= $this->limite; $alumno++) {
                echo "<tr>";
                echo "<td>" . $this->arreglo_de_alumnos[$alumno]->cu . "</td>";
                echo "<td>" . $this->arreglo_de_alumnos[$alumno]->nombres . "</td>";
                echo "<td>" . $this->arreglo_de_alumnos[$alumno]->apellidos . "</td>";
                echo "<td><a href='javascript:eliminarAlumno($alumno)'>Eliminar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<div><a href='javascript:insertarAlumno()'>Insertar</a></div>";
        }
    }
?>