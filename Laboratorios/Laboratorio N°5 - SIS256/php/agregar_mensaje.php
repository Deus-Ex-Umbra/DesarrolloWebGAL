<?php
    include("conexion.php");
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $sql_recuperar = "SELECT correo FROM correos WHERE tipo='E'";
    $resultado = $conexion->query($sql_recuperar);
    if ($resultado->num_rows > 0) while($filas = $resultado->fetch_assoc()) $correo = $filas["correo"];
    else $correo = "correo_default@gmail.com";
    $sql_insertar = "INSERT INTO correos (tipo, correo, asunto, mensaje, estado) VALUES ('E', '$correo', '$asunto', '$mensaje', 'E')";
    $resultado = $conexion->query($sql_insertar);
    echo "<div style='width: 100%; height: 90%;'>Enviado Correctamente</div>";
?>
<button id="redactar">
    <a href="javascript:cargarRedactarMensaje()">Redactar</a>
</button>