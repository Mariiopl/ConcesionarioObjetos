<?php

// Interfaz RepoCrud, define los métodos para operaciones CRUD
Class RepoCrud {
    // Método para obtener un objeto por su ID
    public function getbyId($id);

    // Método para obtener todos los objetos
    public function getAll();

    // Método para reemplazar un objeto en base a su ID
    public function remplace($id, $newObject);

    // Método para actualizar un objeto en base a su ID
    public function update($id, $updatedObject);

    // Método para eliminar un objeto en base a su ID
    public function delete($id);
}
