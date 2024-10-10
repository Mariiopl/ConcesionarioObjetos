<?php
class Coche {
    public $id;
    public $marca;
    public $modelo;

    public function __construct($id = null, $marca = "Desconocida", $modelo = "Desconocido") {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function __toString() {
        return "Coche(ID: {$this->id}, Marca: {$this->marca}, Modelo: {$this->modelo})";
    }
}