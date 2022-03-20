<?php
include_once("../Controller/PersonService.php");
$id=$_GET['id'];
$res=PersonService::eliminar($id);
if($res==1){
    header("location:./");
}else{
    echo "No se pudo eliminar";
}
?>
