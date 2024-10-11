<?php
class User {
    public $usuario;
    public $contrasenia;
    public $correo;

    public function __construct($usuario = "Sin nombre", $contrasenia = "Sin contraseña", $correo = "ejemplo@ejemplo.com"){
        $this->usuario = $usuario;
        $this->contrasenia = $contrasenia;
        $this->correo = $correo;
    }
    public function __toString()
    {
        return "User (Usuario: {$this->usuario}, Contrasenia: {$this->contrasenia}, Correo: {$this->correo})";
    }
}