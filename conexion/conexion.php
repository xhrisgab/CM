<?php
function conectar() {
    $user='root';
    $pass='';
    $server='localhost';
    $db = 'CM2';

   //Comprueba la conexión 

   $mysqli = mysqli_connect($server, $user, $pass, $db);
   if (mysqli_connect_errno()) {
       return 'No conectado';
   }else{
    //return 'No conectado';
        return $mysqli;
   }
}
?>