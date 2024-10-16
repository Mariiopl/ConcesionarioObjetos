<?php
 require_once "Repositorio/Conexion.php";
 require_once "modelo/Coche.php";
 require_once "Repositorio/RepoCoche.php";

$rc = new RepoCoche(Conexion::getConection());
$micoche = $rc->findbyId(3);
var_dump($micoche);
