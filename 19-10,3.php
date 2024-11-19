<?php
// Inicializamos variables
$nombre = "";
$dni = "";
$estado = "formulario"; // Controla en qué etapa del proceso estamos

// Procesamos la primera solicitud desde el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nombre']) && isset($_POST['dni'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $dni = htmlspecialchars($_POST['dni']);
    $estado = "mostrar_datos"; // Cambiamos al estado de mostrar datos
}

// Procesamos la confirmación
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['confirmar'])) {
    $estado = $_POST['confirmar'] === "si" ? "confirmado" : "formulario";
}

// Función para confirmar los datos
function confirmarDatos($nombre, $dni) {
    echo "<h2>Confirmación de Datos</h2>";
    echo "<p>¿Es correcta esta información?</p>";
    echo "<p>Nombre: <strong>$nombre</strong></p>";
    echo "<p>DNI: <strong>$dni</strong></p>";
    echo '<form method="post">';
    echo '<input type="hidden" name="nombre" value="' . htmlspecialchars($nombre) . '">';
    echo '<input type="hidden" name="dni" value="' . htmlspecialchars($dni) . '">';
    echo '<button type="submit" name="confirmar" value="si">Sí, es correcto</button>';
    echo '<button type="submit" name="confirmar" value="no">No, quiero corregir</button>';
    echo '</form>';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Nombre y DNI</title>
</head>
<body>
    <?php if ($estado === "formulario"): ?>
        <h1>Introduce tu Nombre y DNI</h1>
        <form method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    <?php elseif ($estado === "mostrar_datos"): ?>
        <h1>Información Recibida</h1>
        <p>Tu nombre es: <strong><?php echo $nombre; ?></strong></p>
        <p>Tu DNI es: <strong><?php echo $dni; ?></strong></p>
        <?php confirmarDatos($nombre, $dni); ?>
    <?php elseif ($estado === "confirmado"): ?>
        <h1>¡Gracias por confirmar!</h1>
        <p>Los datos se han guardado correctamente.</p>
    <?php endif; ?>
</body>
</html>
