<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";  // Usuario por defecto en XAMPP
$password = "";      // La contraseña está vacía por defecto en XAMPP
$dbname = "buyers_db";  // La base de datos que creaste

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoger los datos del formulario (vienen a través de POST)
$nombre = $_POST['nombre'];  
$apellido = $_POST['apellido'];  
$presupuesto = $_POST['presupuesto'];  
$que_busca = $_POST['que_busca'];  
$telefono = $_POST['telefono'];  
$correo = $_POST['correo'];  
$financiacion = $_POST['financiacion'];  

// Insertar los datos en la base de datos
$sql = "INSERT INTO buyers (nombre, apellido, presupuesto, que_busca, telefono, correo, financiacion) 
        VALUES ('$nombre', '$apellido', '$presupuesto', '$que_busca', '$telefono', '$correo', '$financiacion')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
