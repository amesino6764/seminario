<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8" />
      <title>Editar</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">

    <?php
    include_once("../Controller/PersonService.php");
    $id=$_GET['id'];
    $reg=PersonService::buscar($id);
    while($personas=mysqli_fetch_assoc($reg)){
    ?>
  
      <form>
        <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $personas["id"] ?>">
            <label class="form-label">Nombre</label>
            <input type="input" class="form-control" name="txtname" value="<?php echo $personas["nombre"] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="input" class="form-control" name="txtcorreo" value="<?php echo $personas["correo"] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
      <?php } ?>
    </div>
  </body>
</html>
<?php

  $name=$_GET["txtname"];
  $correo=$_GET["txtcorreo"];
  if($name!=null || $correo!=null){
    $resul=PersonService::Editar($id,$name,$correo);
    if($resul==1){
      header("location:./");
    }else{
      Echo "No se pudo editar";
    }
  }else{
    echo "Nombre y correo son requeridos";
  }
?>