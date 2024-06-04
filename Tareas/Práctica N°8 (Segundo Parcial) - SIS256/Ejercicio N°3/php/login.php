<?php
$captcha = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 4);
session_start();
$_SESSION['captcha'] = $captcha;
?>

<form action="autenticar.php" method="post">
    Usuario: <input type="text" name="usuario"><br>
    Password: <input type="password" name="password"><br>
    Captcha: <input type="text" name="captcha"> <?php echo $captcha; ?><br>
    <button type="submit">Loguearse</button>
</form>
