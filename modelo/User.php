<?php
class User {
    public $id;
    public $usuario;
    public $contrasenia;
    public $correo;

    public function __construct($id = null, $usuario = "Sin nombre", $contrasenia = "Sin contraseña", $correo = "ejemplo@ejemplo.com"){
        $this->id = $id;
        $this->usuario = $usuario;
        $this->contrasenia = $contrasenia;
        $this->correo = $correo;
    }
    public function __toString()
    {
        return "User (ID: {$this->id}, Usuario: {$this->usuario}, Contrasenia: {$this->contrasenia}, Correo: {$this->correo})";
    }
}