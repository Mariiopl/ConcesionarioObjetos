<?php
class Conexion {
    public $host;
    public $user;
    public $pass;
    public $bdName;
    public $Con;

    public function __construct() {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "root";
        $this->bdName = "Concesionario";
        $this->Con = new mysqli($this->host,$this->user,$this->pass,$this->bdName);
        if ($this->Con->connect_errno){
            echo "Fallo la conexion";
        }else{
            echo "Conexion exitosa!";
        }
    }
}
 