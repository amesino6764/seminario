<?php
require_once("../Bd/conexion.php");

class person{

    public string $name;
    public string $last = "Mesino";
    public function getname(){
        return $this->name." ".$this->last;
    }

    public static function leer(){
        $sql = "select * from datos";
        $registros=[];
        $res=mysqli_query(conexion::con(), $sql);
        while($reg=mysqli_fetch_assoc($res)){
            $registros[]=$reg;
        }
        return $registros;
    }

    public static function insertar($name,$correo){
        $sql = "insert into datos(nombre,correo) values ('".$name."','".$correo."')";
        $res=mysqli_query(conexion::con(), $sql);
        return $res;
    }

    public static function Editar($id,$name,$correo){
        $sql = "update datos set nombre='".$name."',correo='".$correo."' where id='".$id."'";
        $res=mysqli_query(conexion::con(), $sql);
        return $res;
    }
    public static function Buscar($id){
        $sql = "select * from datos where id='".$id."'";
        $registro=[];
        $res=mysqli_query(conexion::con(), $sql);
        return $res;
    }
    public static function eliminar($id){
        $sql = "delete from datos where id='".$id."'";
        $res=mysqli_query(conexion::con(), $sql);
        return $res;
    }
}

?>