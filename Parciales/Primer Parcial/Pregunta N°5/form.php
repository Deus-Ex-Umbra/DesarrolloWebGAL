<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar</title>
</head>
<body>
    <form action="tablabiblioteca.php" method="get">
        <input type="hidden" name="ordenar" value="<?php echo $_GET['ordenar'] ?>">
        <input type="submit" value="Ordenar">
    </form>
</body>
</html>
<?php 
?>