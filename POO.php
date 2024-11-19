<?php
class Persona {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }
}

class Profesor extends Persona {
    private $modulo;

    public function __construct($nombre, $modulo) {
        parent::__construct($nombre); 
        $this->modulo = $modulo;
    }

    public function imprimirProfesor() {
        echo "El profesor {$this->nombre} imparte el módulo de {$this->modulo}.<br>";
    }
}

class Alumno extends Persona {
    private $nota1;
    private $nota2;
    private $nota3;

    public function __construct($nombre, $nota1, $nota2, $nota3) {
        parent::__construct($nombre); 
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function imprimirAlumno() {
        echo "La media de {$this->nombre} es: " . $this->calcularMedia() . "<br>";
    }
}

$profesor = new Profesor("Prieto", "Seguridad y alta disponibilidad");
$profesor->imprimirProfesor();

$alumno1 = new Alumno("Carlos", 8, 7, 9);
$alumno1->imprimirAlumno();

$alumno2 = new Alumno("Lucía", 6, 5, 7);
$alumno2->imprimirAlumno();
?>
