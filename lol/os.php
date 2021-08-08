<?php
$servername = "localhost";
$database = "proyecto";
$username = "localhost";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//sentencia sql
$sql="INSERT INTO usuarios VALUES('$nombre','$apellido_paterno','$apellido_materno','$edad','$correo','$usuario','$contrasena')";
//ejecutamos la sentencia de sql
$ejecutar = mysqli_query($conn, $sql);
//verificar la ejecucion
if(!$ejecutar){
    echo"hubo algun error";
}else{
    echo"Datos guardados y protegidos por maxima seguridad <br><a href='nuevo.html'>Volver</a>";
 }
//ejecutamos la sentencia de sql

?>