<?php
class conexion{
    public static function con(){
        $conn = new mysqli("localhost", "root", "", "empleados");
        return $conn;
    }
}
?>