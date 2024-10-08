<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de 7 Números</title>
</head>
<body>

    <h1>Encuentra el número mayor</h1>
    <form action="" method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" required><br>

        <label for="num4">Número 4:</label>
        <input type="number" name="num4" required><br>

        <label for="num5">Número 5:</label>
        <input type="number" name="num5" required><br>

        <label for="num6">Número 6:</label>
        <input type="number" name="num6" required><br>

        <label for="num7">Número 7:</label>
        <input type="number" name="num7" required><br><br>

        <input type="submit" value="Encontrar mayor">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números ingresados
        $numeros = [
            $_POST['num1'],
            $_POST['num2'],
            $_POST['num3'],
            $_POST['num4'],
            $_POST['num5'],
            $_POST['num6'],
            $_POST['num7']
        ];

        // Encontrar el mayor número
        $mayor = max($numeros);

        // Mostrar el número mayor
        echo "<h2>El número mayor es: $mayor</h2>";
    }
    ?>

</body>
</html>
