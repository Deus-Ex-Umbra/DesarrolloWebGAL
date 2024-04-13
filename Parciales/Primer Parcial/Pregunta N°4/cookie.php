
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enlaces</title>
</head>
<body>
    <?php
        setcookie('n1', $_GET['n1'], 0);
        setcookie('n2', $_GET['n2'], 0);
    ?>
    <a href="sum.php">Suma</a>
    <a href="res.php">Resta</a>
    <a href="mult.php">Multiplicación</a>
</body>
</html>