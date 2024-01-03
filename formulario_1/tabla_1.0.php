<?php
//base de datos 
$servername = "localhost";
$username = "oziel";
$password = "123456";
$dbname = "tutorial";

//recuperacion de variables del html
$variableA = $_POST['nombre'];
$variableB = $_POST['correo_electronico'];
$variableC = $_POST['contraseña'];

//conexion a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname);

//ingresando valores ala base de database
$sql = "INSERT INTO tabla_1 (nombre,correo_electronico,contraseña) values ('$variableA','$variableB','$variableC')";

if (mysqli_query($conexion, $sql)) {
    // Cerrar la conexión
    mysqli_close($conexion);

    // Redirigir a otra página
    header("Location: tabla_1.1.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conexion);
}
 ?>
