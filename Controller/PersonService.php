<?php
require_once("../Models/Person.php");

class PersonService{
    public static function listar(){
        return person::leer();
    }
    public static function Insertar($name,$correo){
        return person::insertar($name,$correo);
    }

    public static function Editar($id,$name,$correo){
        return person::Editar($id,$name,$correo);
    }
    public static function buscar($id){
        return person::Buscar($id);
    }
    public static function eliminar($id){
        return person::eliminar($id);
    }
}

?>