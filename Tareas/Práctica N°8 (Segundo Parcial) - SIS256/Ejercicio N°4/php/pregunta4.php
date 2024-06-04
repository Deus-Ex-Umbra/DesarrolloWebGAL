<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    echo "Usuario no autenticado";
    exit();
}

$conn = new mysqli("localhost", "username", "password", "bd_censo");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM libros";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td><img src="' . $row['imagen'] . '" width="50" height="75"></td>';
        echo '<td>' . $row['titulo'] . '</td>';
        if ($_SESSION['nivel'] == 1) {
            echo '<td><button>Editar</button><button>Eliminar</button></td>';
        }
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

$conn->close();
?>
