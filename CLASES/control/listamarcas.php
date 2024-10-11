<?php
// esta logeado, tiene autorización, datos validos?

////Si algo de esto no me gusta hago un header para enviarlo a otro lado

// Obtencion de datos o realizar operacion
//Actualizo vista Pintor.pintamarcas($marcas)
//                Pintor.pinta($arra,listado.html)

// Incluir los archivos necesarios
include_once __DIR__ . '/../repositorio/RepoMarca.php';   // Ajusta la ruta para acceder correctamente al repositorio
include_once __DIR__ . '/../vista/Pintor.php';
$repoMarca = new RepoMarca();
$marcas = $repoMarca->getAll();

// Verificar si hay marcas
if (count($marcas) > 0) {
    // Llamar al método estático para listar marcas
    Pintor::listamarcas($marcas);
} else {
    echo "No hay marcas disponibles.";
}

?>
