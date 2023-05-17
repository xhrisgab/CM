<?php

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

if($nombre!= 'admin' && $pass!='admin')
{
    echo '<script type="text/javascript">
    alert("Credenciales Invalidas");
    window.location.href="index.php";
    </script>';
    exit(0);
}
/*echo $nombre;
echo $pass;*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Pagina principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Seleccione la opcion</h2>
        <form action="lista_paciente.php" method="get">
        <button type="submit" class="btn btn-primary">Registro paciente</button>
        </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>