<?php
class User {
    public $id;
    public $usuario;
    public $contrasenia;
    public $correo;

    public function __construct($id = null, $usuario = "Sin nombre", $contrasenia = "Sin contraseña", $correo = "ejemplo@ejemplo.com"){
        
    }
}