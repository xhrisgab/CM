<?PHP
include('../conexion/conexion.php');
$mysqli = conectar();

$codigo = $_POST['cod_ci'];

if (mysqli_connect_errno()) {
    return 'No conectado';
}
/*else{
    echo 'Conectado';}
*/
$sql = "DELETE FROM paciente WHERE CI= '".$codigo."'";
    //echo $sql;
        if (mysqli_query($mysqli, $sql) === TRUE) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="Registro">Paciente <?php echo $codigo; ?> fue eliminado...</label>
                <form action="lista_paciente.php" method="post">

                    <button type="submit" class="btn btn-secondary">Atras...</button>
                </form>
            </div>   
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>

<?php
} else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
        mysqli_close($mysqli);
?>