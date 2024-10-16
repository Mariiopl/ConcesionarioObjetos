<?php
$base =$_SERVER['DOCUMENT_ROOT'];
require_once "modelo/Coche.php";
Class RepoCoche{
    private $con;
    
    public function __construct($con){
        $this->con = $con;
    }

    public function findbyId($id){
        $stm = $this->con->prepare("select * from coche where id = :id");
        $stm -> execute(['id' => $id]);
        $coche = null;
        $registro = $stm->fetch();// otra forma de hacerlo, es hacer el fetch asociativo $coche = new Coche(fetch);
        if ($registro){
             $coche = new Coche();
             $coche->id=$registro['id'];
             $coche->modelo=$registro['modelo'];
             $coche->marca=$registro['marca'];  
        }
        return $coche;
    }
}
    // // Método para obtener todos los objetos
    // public function getAll();

    // // Método para reemplazar un objeto en base a su ID
    // public function remplace($id, $newObject);

    // // Método para actualizar un objeto en base a su ID
    // public function update($id, $updatedObject);

    // // Método para eliminar un objeto en base a su ID
    // public function delete($id);


