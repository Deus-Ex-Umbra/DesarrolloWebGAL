<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        header("Location: suma.php?numero=" . $numero);
        exit;
    }
?>
