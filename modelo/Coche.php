<?php
class Coche {
    public $id;
    public $marca;
    public $modelo;
    public $color;

    public function __construct($id = null, $marca = "Desconocida", $modelo = "Desconocido", $color = "Sin color", $year = 0) {
        $this->id = $id ?? rand(1, 1000); // Si no se proporciona un ID, se genera uno aleatorio
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function __toString() {
        return "Coche(ID: {$this->id}, Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color})";
    }
}