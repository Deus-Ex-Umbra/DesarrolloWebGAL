<?php
echo "<form id='login'>";
echo "<label for='usuario'>Usuario:</label>";
echo "<input type='text' id='usuario'> <br>";
echo "<label for='contrasena'>Contraseña:</label>";
echo "<input type='password' id='contrasena'> <br>";
echo "<img src='javascript:cargarEn('imagencaptcha', '../../Ejercicio N°3/php/login.php')' id='imagencaptcha'>";
echo "<label for='captcha'>Captcha:</label>";
echo "<input type='text' id='captcha'> <br>";
echo "<button onclick='validarLogin()'>Ingresar</button>";
echo "</form>";
?>