<?php
include_once __DIR__ . '/../modelo/Marca.php';

class RepoMarca {
    private $listamarca;

    public function __construct() {
        $this->listamarca = [new Marca("Renault"), new Marca("Audi"), new Marca("Mercedes")];
    }

    public function getAll() {
        return $this->listamarca;
    }
}
?>
