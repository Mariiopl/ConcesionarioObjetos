<?php
class Marca {
    public $nombre;

    public function __construct($nombre = "Marca") {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return "Marca(Nombre: {$this->nombre})";
    }
}
?>