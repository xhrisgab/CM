<?PHP
include('./conexion/conexion.php');
$mysqli = conectar();
if (mysqli_connect_errno()) {
    return 'No conectado';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente Registrado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container p-2">
        <div class="row">
            <div class="col-12 col-md-2 col-sm-12">
                <form action="pag_principal.php" method="post">
                    <input type="hidden" value="admin" name="nombre" id="nombre">
                    <input type="hidden" value="admin" name="pass" id="pass">
                    <button type="submit" class="btn btn-secondary">Atras...</button>
                </form>
            </div>
            <div class="col-auto">
                <form action="registro_paciente.php">
                    <button class="btn btn-primary" >Registrar Paciente</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container p-2">
        <div class="table-responsive-md">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">carnetde Identidad</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT CI, nombre, apellido_pat, fecha_nacimiento, sexo FROM paciente";
                        $result = mysqli_query($mysqli, $sql);
    
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            $i=0;
                            while($row = mysqli_fetch_assoc($result)) {
                                $i++;
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $row["CI"];?></th>
                                    <td><?php echo $row["nombre"];?></td>
                                    <td><?php echo $row["apellido_pat"];?></td>
                                    <td><?php echo $row["fecha_nacimiento"];?></td>
                                    <td><?php echo $row["sexo"];?></td>
                                    <td><a href="ver_paciente.php?ci=<?php echo $row["CI"]?>">Ver mas...</a></td>
                                </tr>
                        <?php    }
                          } else { ?>
                            <th scope="row"><?php echo "0 resultados encontrados...";?></th>
                        <?php  }
                    ?>
                </tbody>
    
            </table>
        </div>

        <br>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>