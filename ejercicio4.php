<?php
// --------------- PROGRAMA PRINCIPAL -------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los números enviados desde el formulario
    $numeros = [
        $_POST['numero1'],
        $_POST['numero2'],
        $_POST['numero3'],
        $_POST['numero4'],
        $_POST['numero5']
    ];

    // Calcular la suma y la resta de los números
    $suma = array_sum($numeros);
    $resta = array_shift($numeros); // Inicializa la resta con el primer número
    foreach ($numeros as $num) {
        $resta -= $num;
    }

    // Verificar qué operación se seleccionó
    if (isset($_POST['operacion'])) {
        $operaciones = $_POST['operacion'];

        // Si se selecciona solo suma, se visualiza la resta
        if (in_array('suma', $operaciones) && !in_array('resta', $operaciones)) {
            echo "<p>Se seleccionó Suma, pero se visualiza la Resta: $resta</p>";
        }

        // Si se selecciona solo resta, se visualiza la resta
        if (in_array('resta', $operaciones) && !in_array('suma', $operaciones)) {
            echo "<p>Se seleccionó Resta, se visualiza la Resta: $resta</p>";
        }

        // Si se seleccionan ambas operaciones, se visualizan ambas
        if (in_array('suma', $operaciones) && in_array('resta', $operaciones)) {
            echo "<p>Se seleccionaron ambas, se visualiza la Suma: $suma y la Resta: $resta</p>";
        }
    } else {
        echo "<p>No se seleccionó ninguna operación.</p>";
    }
}
?>
