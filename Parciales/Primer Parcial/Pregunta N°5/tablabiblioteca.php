<?php
    include("conexion.php");
    session_start();
    if (!isset($_SESSION['c'])) {
        $_SESSION['c'] = 0; 
    }
    if (isset($_GET['ordenar'])) {
        $ordenar = $_GET['ordenar'];
        if ($_SESSION['c'] % 2 == 0) $sql = "SELECT imagen, titulo, autor, ideditorial, anio FROM libros ORDER BY $ordenar ASC;";
        else $sql = "SELECT imagen, titulo, autor, ideditorial, anio FROM libros ORDER BY $ordenar DESC;";
        $_SESSION['c']++;
    } else  $sql = "SELECT imagen, titulo, autor, ideditorial, anio FROM libros;";
?>
<table>
    <tr>
        <th><a href="form.php?ordenar=imagen">Imagen</a></th>
        <th><a href="form.php?ordenar=titulo">Título</a></th>
        <th><a href="form.php?ordenar=autor">Autor</a></th>
        <th><a href="form.php?ordenar=ideditorial">Editorial</a></th>
        <th><a href="form.php?ordenar=anio">Año</a></th>
    </tr>
    <?php
        $resultado = $conexion->query($sql);
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["autor"]; ?></td>
                <td><?php echo $row["ideditorial"]; ?></td>
                <td><?php echo $row["anio"]; ?></td>
            </tr>
        <?php } ?>
</table>