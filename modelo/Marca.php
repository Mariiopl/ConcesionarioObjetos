<?php
class Marca {
    public $id;
    public $nombre;

    public function __construct($id = null, $nombre = "Marca") {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function __toString() {
        return "Marca(ID: {$this->id}, Nombre: {$this->nombre})";
    }
}