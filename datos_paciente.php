<?PHP
include('./conexion/conexion.php');
$mysqli = conectar();

$nombre = $_POST['firstName'];
$lastName1 = $_POST['lastName1'];
$lastName2 = $_POST['lastName2'];
$birthdat = $_POST['birthday'];
$address = $_POST['address'];
$celular = $_POST['celular'];
$sex = $_POST['sex'];

if (mysqli_connect_errno()) {
    return 'No conectado';
}else{
    echo 'Conectado';}

$sql = "INSERT INTO PACIENTE VALUES ('".$nombre."','".$lastName1."','".$lastName2."','".$birthdat."','".$address."','".$celular."','".$sex."')";
echo $sql;
//    echo $sql;
        if (mysqli_query($mysqli, $sql) === TRUE) {
            printf("Se creó con éxtio la tabla myCity.\n");
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
?>