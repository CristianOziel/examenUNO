<?php
$servername = "localhost";
$username = "oziel";
$password = "123456";
$dbname = "tutorial";

// Crear conexión
$conexion = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta SQL para obtener todos los registros de la tabla 'datos'
$sql = "SELECT nombre,correo_electronico,contraseña  FROM tabla_1";
$resultado = mysqli_query($conexion, $sql);

// Mostrar los registros en una tabla
echo "<table border='1'>
        <tr>
            <th>nombre</th>
            <th>valor_ingresado</th>
            
        </tr>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td>nombre</td>
            <td>" . $fila['nombre'] . "</td>
         </tr>
         <tr>
         <td>correo_electronico</td>
         <td>" . $fila['correo_electronico'] . "</td>
         </tr>
         <tr>
         <td>contraseña</td>
         <td>" . $fila['contraseña'] . "</td>
         </tr>";
}

echo "</table>";

// Cerrar la conexión
mysqli_close($conexion);
?>