<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8" />
      <title>Insertar</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form>
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="input" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label class="form-label">Correo</label>
          <input type="input" class="form-control" name="correo">
        </div>
        <button type="submit" class="btn btn-primary">Insertar</button>
      </form>
    </div>
  </body>
</html>


<?php

  if($_GET['name']!=null || $_GET['correo']!=null){
    include_once("../Controller/PersonService.php");
    $resul=PersonService::Insertar($_GET['name'],$_GET['correo']);
    if($resul==1){
      header("location:./");
    }else{
      Echo "No se pudo ingresar";
    }
  }else{
    echo "Nombre y correo son requeridos";
  }
?>