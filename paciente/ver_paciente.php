<?php
include('../conexion/conexion.php');
$mysqli = conectar();
if (mysqli_connect_errno()) {
    return 'No conectado';
}

$ci=$_GET['ci'];

$sql = "SELECT * FROM paciente WHERE CI='".$ci."'";
//   echo $sql;
    $result = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        }else{
            echo "El paciente ya no existe...";
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>

<body>
    <div class="container p-2">
        <h2>Datos del paciente</h2>
        <br>
        <div class="form-check form-switch form-check">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse" value="Enable">
            <label class="form-check-label" for="flexSwitchCheckReverse">Habilitar campos para edicion</label>
        </div>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-12" >
            <div class="row pb-2">
                <div class="col-md-auto">
                    <div class="form-group">
                        <label for="CI">Carnet de Identidad: <Strong><?php echo $ci; ?></Strong></label>
                    </div>
                </div>
                <div class="col offset-md-4">
                    <button type="button" class="btn btn-danger" id="btnDelete" data-bs-toggle="modal" data-bs-target="#myModal" disabled>Eliminar!</button>
                </div>
            </div>
                <form action="update_paciente.php" method="post" id="control">
                    <input type="hidden" class="form-control" id="ci" value="<?php echo $row['CI'];?>" name="ci" disabled>
                    <div class="form-group pb-2">
                        <label for="Nombre">Nombre del Paciente:</label>
                        <input type="text" class="form-control" id="nombre" value="<?php echo $row['nombre'];?>" name="nombre" disabled>
                    </div>
                    <div class="row pb-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="Apellido1">Apellido del Paciente1:</label>
                                <input type="text" class="form-control" id="Apellido1" value="<?php echo $row['apellido_pat'];?>" name="lastName1" disabled>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="Apellid2">Apellido del Paciente2:</label>
                                <input type="text" class="form-control" id="Apellido2" value="<?php echo $row['apellido_mat'];?>" name="lastName2" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group pb-2">
                        <label for="Direccion">Direccion del paciente:</label>
                        <input type="text" class="form-control" id="address" value="<?php echo $row['direccion'];?>" name="address" disabled>
                    </div>
                    <div class="row pb-2">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Data">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control" id="birthday" value="<?php echo $row['fecha_nacimiento'];?>" name="birthday"disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Cellphone">Telefono:</label>
                                <input type="number" class="form-control" id="telefono" value="<?php echo $row['telefono'];?>" name="telefono" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="Cellphone">Celular:</label>
                                <input type="number" class="form-control" id="celular" value="<?php echo $row['celular'];?>" name="celular" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="Direccion">Ciudad:</label>
                                <select class="form-select" aria-label="Default" name="ciudad" id="ciudad" disabled>
                                    <option value="<?php echo $row['ciudad'];?>" selected><?php echo $row['ciudad'];?></option>
                                    <option value="La Paz">La Paz</option>
                                    <option value="Oruro">Oruro</option>
                                    <option value="Potosi">Potosi</option>
                                    <option value="Cochabamba">Cochabamba</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Tarija">Tarija</option>
                                    <option value="Beni">Beni</option>
                                    <option value="Pando">Pando</option>
                                    <option value="Santa Cruz">Santa Cruz</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="Sexo">Genero:</label>
                                <select class="form-select" aria-label="Default select example" name="sex" id="sex" disabled>
                                    <option value="<?php echo $row['sexo'];?>" selected><?php echo ($row['sexo']==='M') ? 'Masculino' : 'Femenino';?></option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" disabled>Registrar</button>
                </form>
            </div>
        </div>
<br>
        <div class="row">
            <form action="lista_paciente.php" method="post">
                <button type="submit" class="btn btn-secondary">Atras...</button>
            </form>
        </div>
        
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalLabel">Eliminar Registro?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Esta a punto de eliminar al Paciente <strong><?php echo $ci; ?></strong>: 
        <br>
        <?php echo $row['nombre'].' '.$row['apellido_pat'].' '.$row['apellido_mat']; ?>
        <br>
        Esta seguro de esta accion?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="delete_paciente.php" method="post">
            <input type="hidden" id="cod_ci" value="<?php echo $ci;?>" name="cod_ci">
            <button type="submit" class="btn btn-danger">Eliminar!</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script>
    // Accedemos al botón
    var btnEliminar = document.getElementById('btnDelete');
    var formulario = document.forms['control'].elements;
    var estado = document.getElementById('flexSwitchCheckReverse').value;
    var x = false;

    document.getElementById('flexSwitchCheckReverse').addEventListener('click', function(e) {

    if (x){
        x= false;
        btnDelete.disabled = true;
        for(var i=0;i<formulario.length;i++){
            //console.log(formulario[i]);
            formulario[i].disabled = true;
            //console.log(i);
        }
    }else{
        x= true;
        btnDelete.disabled = false;
        for(var i=0;i<formulario.length;i++){
            //console.log(formulario[i]);
            formulario[i].disabled = false;
            //console.log(i);
        }
    }
    });
</script>
<script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('btnDelete')

    myModal.addEventListener('shown.bs.modal', () => {
    myInput.focus()
    })
</script>
</html>
