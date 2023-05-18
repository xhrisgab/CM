<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Paciente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>

<body>
    <div class="container">
        <h2>Datos del paciente</h2>
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-12">

                <form action="datos_paciente.php" method="post">
                    <div class="form-group">
                        <label for="CI">Carnet de Identidad:</label>
                        <input type="text" class="form-control" id="ci" placeholder="Ingresa el codigo del paciente" name="ci">
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre del Paciente:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa el nombre del paciente" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="Apellido1">Apellido del Paciente1:</label>
                        <input type="text" class="form-control" id="Apellido1" placeholder="Apellido Paterno" name="lastName1">
                    </div>
                    <div class="form-group">
                        <label for="Apellid2">Apellido del Paciente2:</label>
                        <input type="text" class="form-control" id="Apellido2" placeholder="Apellido Materno" name="lastName2">
                    </div>
                    <div class="form-group">
                        <label for="Data">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="birthday" placeholder="Fecha de nacimiento" name="birthday">
                    </div>
                    <div class="form-group">
                        <label for="Direccion">Direccion del paciente:</label>
                        <input type="text" class="form-control" id="address" placeholder="Direccion del paciente" name="address">
                    </div>
                    <div class="form-group">
                        <label for="Direccion">Ciudad:</label>
                        <select class="form-select" aria-label="Default" name="ciudad" id="ciudad">
                            <option selected>Seleccione una opcion...</option>
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
                    <div class="form-group">
                        <label for="Cellphone">Telefono:</label>
                        <input type="number" class="form-control" id="telefono" placeholder="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="Cellphone">Celular:</label>
                        <input type="number" class="form-control" id="celular" placeholder="celular" name="celular">
                    </div>
                    <div class="form-group">
                        <label for="Sexo">Genero:</label>
                        <select class="form-select" aria-label="Default select example" name="sex" id="sex">
                            <option selected>Seleccione una opcion...</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Registrar</button>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
