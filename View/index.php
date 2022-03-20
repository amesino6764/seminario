<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Seminario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>Seminario de actualizacion</h2>
            <br>
            <?php
                include_once("../Controller/PersonService.php");
                $personas=PersonService::listar();
            ?>
            <a href="insertar.php">Insertar</a>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($personas as $reg){ ?>
                <tr>
                    <td><?php echo $reg["id"]; ?></td>
                    <td><?php echo $reg["nombre"]; ?></td>
                    <td><?php echo $reg["correo"]; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $reg["id"] ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $reg["id"] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </body>
</html>