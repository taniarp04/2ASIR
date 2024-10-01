<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el número enviado desde el formulario
    $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

    // Verificar si el número es par o impar
    if ($numero % 2 == 0) {
        echo "<h3>El número $numero es Par.</h3>";
    } else {
        echo "<h3>El número $numero es Impar.</h3>";
    }
} else {
    echo "Método no permitido.";
}
?>
