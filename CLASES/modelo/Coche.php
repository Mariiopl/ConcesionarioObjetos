<?php
class Coche {
    public $marca;
    public $modelo;

    public function __construct($marca = "Desconocida", $modelo = "Desconocido") {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function __toString() {
        return "Coche(Marca: {$this->marca}, Modelo: {$this->modelo})";
    }
}