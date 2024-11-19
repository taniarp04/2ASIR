
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Persona</title>
</head>
<body>
    <h1>Información de la Persona</h1>

    <?php
    // Declaración de la clase Persona
    class Persona {
        private $nombre;
        private $lugar;
        private $coloresFavoritos;
        // Constructor
        public function __construct($nombre, $lugar, $coloresFavoritos) {
            $this->nombre = $nombre;
            $this->lugar = $lugar;
            $this->coloresFavoritos = $coloresFavoritos;
        }

        // Métodos para obtener los datos
        public function getNombre() {
            return $this->nombre;
        }

        public function getLugar() {
            return $this->lugar;
        }

        public function getColoresFavoritos() {
            return $this->coloresFavoritos;
        }
    }

    // Función para mostrar los datos de una persona
    function mostrarDatos($persona) {
        echo "<p><strong>Nombre:</strong> " . $persona->getNombre() . "</p>";
        echo "<p><strong>Lugar Favorito:</strong> " . $persona->getLugar() . "</p>";
        echo "<p><strong>Colores Favoritos:</strong> " . implode(", ", $persona->getColoresFavoritos()) . "</p>";
    }

    // Crear un objeto de la clase Persona
    $persona = new Persona("Tania", "Chiclana", ["Azul", "Blanco", "Negro"]);

    // Llamar a la función para mostrar los datos
    mostrarDatos($persona);
    ?>

</body>
</html>
